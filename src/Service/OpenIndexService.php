<?php

namespace CommonGateway\OpenIndex\Service;

use App\Entity\Entity;
use App\Entity\ObjectEntity;
use App\Service\EavService;
use App\Exception\GatewayException;
use App\Service\SynchronizationService;
use CommonGateway\CoreBundle\Service\CallService;
use CommonGateway\CoreBundle\Service\GatewayResourceService;
use CommonGateway\CoreBundle\Service\MappingService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Cache\CacheException;
use Psr\Cache\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * This service handles validation for the OpenIndex subscribers.
 *
 * @Author Wilco Louwerse <wilco@conduction.nl>, Robert Zondervan <robert@conduction.nl>
 *
 * @license EUPL <https://github.com/ConductionNL/contactcatalogus/blob/master/LICENSE.md>
 *
 * @category Service
 */
class OpenIndexService
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
    ) {}//end __construct()

    public function validatePublication(ObjectEntity $object, string $method)
    {
        // if this subscriber only applies to certain entity types,
        if ($object->getEntity() !== null && $object->getEntity()->getReference() === $this::PUBLICATION_REFERENCE
            && $object->getValue('schema') !== null && $object->getValue('data') !== null
        ) {
            $objectArray = $object->toArray();
            
            $schemaEntity = $this->entityManager->getRepository(Entity::class)->findOneBy(['reference' => $objectArray['schema']]);
            if ($schemaEntity instanceof Entity === false) {
                return new Response(json_encode(['message' => 'Could not find schema '.$objectArray['schema']]), 403);
            }
            
            $validationErrors = $this->validationService->validateData($objectArray['data'], $schemaEntity, $method);
            
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
    }
}
