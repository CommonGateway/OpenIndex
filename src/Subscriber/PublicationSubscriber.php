<?php

namespace CommonGateway\OpenIndex\Subscriber;

use App\Entity\ObjectEntity;
use App\Entity\Entity;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use CommonGateway\CoreBundle\Service\ValidationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * Subscriber to validate Publication.
 *
 * @author Conduction <info@conduction.nl> Barry Brands <barry@conduction.nl>
 *
 * @license EUPL <https://github.com/ConductionNL/contactcatalogus/blob/master/LICENSE.md>
 *
 * @category Subscriber
 */
class PublicationSubscriber implements EventSubscriberInterface
{
    const PUBLICATION_REFERENCE = 'https://openwoo.app/schemas/publication.schema.json';


    /**
     * The constructor sets al needed variables.
     *
     * @param ValidationService $validationService
     * @param EntityManagerInterface $entityManager
     * @param LoggerInterface $pluginLogger
     */
    public function __construct(
        private readonly ValidationService $validationService,
        private readonly EntityManagerInterface $entityManager,
        private readonly LoggerInterface $pluginLogger
    ) {

    }//end __construct()


    /**
     * @return array This method can only return the event names;
     * You cannot define a custom method name to execute when each event triggers.
     */
    public function getSubscribedEvents(): array
    {
        return [
            Events::preUpdate,
            Events::prePersist,
        ];

    }//end getSubscribedEvents()


    public function preUpdate(LifecycleEventArgs $args): void
    {
        $this->prePersist($args);

    }//end preUpdate()


    /**
     * Validates the schema and data of a publication object.
     *
     * @param LifecycleEventArgs $args
     *
     * @return void
     */
    public function prePersist(LifecycleEventArgs $args): ?Response
    {
        $object = $args->getObject();
        // if this subscriber only applies to certain entity types,
        if ($object instanceof ObjectEntity && $object->getEntity() !== null && $object->getEntity()->getReference() === $this::PUBLICATION_REFERENCE
            && $object->getValue('schema') !== null && $object->getValue('data') !== null
        ) {
            $objectArray = $object->toArray();

            $schemaEntity = $this->entityManager->getRepository(Entity::class)->findOneBy(['reference' => $objectArray['schema']]);
            if ($schemaEntity instanceof Entity === false) {
                return new Response(json_encode(['message' => 'Could not find schema '.$objectArray['schema']]), 403);
            }

            $validationErrors = $this->validationService->validateData($objectArray['data'], $schemaEntity, 'POST');

            if ($validationErrors !== null) {
                $this->pluginLogger->error(message: 'This object could not be safed due to validation errors.', context: ['plugin' => 'common-gateway/woo-bundle', 'errors' => $validationErrors]);
                $response = new Response(
                    content: json_encode(
                        [
                            "message" => 'Validation errors',
                            'data'    => $validationErrors,
                        ]
                    ),
                    status: 400,
                    headers: ['content-type' => 'application/json']
                );
                $response->send();
                throw new BadRequestHttpException(message: 'Validation Errors');
            }
        }//end if

        return null;

    }//end prePersist()


}//end class
