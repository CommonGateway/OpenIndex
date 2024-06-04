<?php

namespace CommonGateway\OpenIndex\Subscriber;

use App\Entity\ObjectEntity;
use App\Entity\Entity;
use CommonGateway\OpenIndex\Service\OpenIndexService;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use CommonGateway\CoreBundle\Service\ValidationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Subscriber to validate Publication.
 *
 * @author Conduction <info@conduction.nl> Barry Brands <barry@conduction.nl>, Wilco Louwerse <wilco@conduction.nl>
 *
 * @license EUPL <https://github.com/ConductionNL/contactcatalogus/blob/master/LICENSE.md>
 *
 * @category Subscriber
 */
class PublicationSubscriber implements EventSubscriberInterface
{
    
    /**
     * The constructor sets al needed variables.
     *
     * @param OpenIndexService $openIndexService
     * @param RequestStack $requestStack
     */
    public function __construct(
        private readonly OpenIndexService $openIndexService,
        private readonly RequestStack $requestStack
    ) {}//end __construct()


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


    public function preUpdate(LifecycleEventArgs $args): ?Response
    {
        $object = $args->getObject();
        if ($object instanceof ObjectEntity && $this->requestStack->getMainRequest() !== null) {
            $method = $this->requestStack->getMainRequest()->getMethod();
            $this->openIndexService->validatePublication($object, $method);
        }
        
        return null;

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
        if ($object instanceof ObjectEntity) {
            $this->openIndexService->validatePublication($object, 'POST');
        }

        return null;

    }//end prePersist()


}//end class
