<?php

namespace CommonGateway\OpenIndex\Subscriber;

use App\Entity\ObjectEntity;
use App\Entity\Entity;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use CommonGateway\CoreBundle\Service\ValidationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

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
     * @var ParameterBagInterface
     */
    private ParameterBagInterface $parameterBag;

    /**
     * @var ValidationService
     */
    private ValidationService $validationService;

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;


    /**
     * The constructor sets al needed variables.
     *
     * @param ParameterBagInterface  $parameterBag
     * @param ValidationService      $validationService
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(
        ParameterBagInterface $parameterBag,
        ValidationService $validationService,
        EntityManagerInterface $entityManager
    ) {
        $this->parameterBag      = $parameterBag;
        $this->validationService = $validationService;
        $this->entityManager     = $entityManager;

    }//end __construct()


    /**
     * @return array This method can only return the event names;
     * You cannot define a custom method name to execute when each event triggers.
     */
    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist,
        ];

    }//end getSubscribedEvents()


    public function postUpdate(LifecycleEventArgs $args): void
    {
        $this->prePersist($args);

    }//end postUpdate()


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
                return new Response(
                    json_encode(
                        [
                            "message" => 'Validation errors',
                            'data'    => $validationErrors,
                        ]
                    ),
                    403
                );
            }
        }//end if

        return null;

    }//end prePersist()


}//end class
