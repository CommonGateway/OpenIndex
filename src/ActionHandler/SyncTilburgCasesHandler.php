<?php

namespace CommonGateway\OpenIndex\ActionHandler;

use CommonGateway\OpenIndex\Service\SyncTilburgCasesService;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use CommonGateway\CoreBundle\ActionHandler\ActionHandlerInterface;

/**
 * ActionHandler executing SyncTilburgCasesService->SyncTilburgCasesHandler.
 *
 * @package CommonGateway\OpenIndex
 * @license EUPL <https://github.com/ConductionNL/contactcatalogus/blob/master/LICENSE.md>
 *
 * @author   Yoeri Dekker <yoeri@acato.nl>, Wilco Louwerse <wilco@conduction.nl>
 * @category ActionHandler
 */
class SyncTilburgCasesHandler implements ActionHandlerInterface
{

    /**
     * @var SyncTilburgCasesService
     */
    private SyncTilburgCasesService $service;


    /**
     * SyncTilburgCasesHandler constructor.
     *
     * @param SyncTilburgCasesService $service
     */
    public function __construct(SyncTilburgCasesService $service)
    {
        $this->service = $service;

    }//end __construct()


    /**
     *  This function returns the required configuration as a [json-schema](https://json-schema.org/) array.
     *
     * @throws array a [json-schema](https://json-schema.org/) that this  action should comply to
     */
    public function getConfiguration(): array
    {
        return [
            '$id'         => 'https://commongateway.nl/ActionHandler/woo.SyncTilburgCasesHandler.actionHandler.json',
            '$schema'     => 'https://docs.commongateway.nl/schemas/ActionHandler.schema.json',
            'title'       => 'SyncTilburgCasesHandler',
            'description' => 'Handles the sync for TIP cases.',
            'required'    => [
                'oin',
                'portalUrl',
                'source',
                'schema',
                'mapping',
                'organisatie',
                'caseIndex',
                'caseDetail',
                'fileEndpoint',
            ],
            'properties'  => [
                'oin'            => [
                    'type'        => 'string',
                    'description' => 'The oin of the municipality.',
                    'example'     => '00000001001172773000',
                    'required'    => true,
                ],
                'portalUrl'      => [
                    'type'        => 'string',
                    'description' => 'The portal url of the publication.',
                    'example'     => 'https://conductionnl.github.io/woo-website-buren',
                    'required'    => true,
                ],
                'source'         => [
                    'type'        => 'string',
                    'description' => 'The source where the publication belongs to.',
                    'example'     => 'https://openwoo.app/source/openindex.tilburg.zaaksysteem.source.json',
                    'required'    => true,
                ],
                'schema'         => [
                    'type'        => 'string',
                    'description' => 'The publication schema.',
                    'example'     => 'https://openwoo.app/schemas/publication.schema.json',
                    'reference'   => 'https://openwoo.app/schemas/publication.schema.json',
                    'required'    => true,
                ],
                'mapping'        => [
                    'type'        => 'string',
                    'description' => 'The mapping for TIP case to publication.',
                    'example'     => 'https://openwoo.app/mapping/openindex.woo.tilburgCaseToWoo.mapping.json',
                    'reference'   => 'https://openwoo.app/mapping/openindex.woo.tilburgCaseToWoo.mapping.json',
                    'required'    => true,
                ],
                'organisatie'    => [
                    'type'        => 'string',
                    'description' => 'The organisation.',
                    'example'     => 'Gemeente Tilburg',
                    'required'    => true,
                ],
                'caseIndex'      => [
                    'type'        => 'string',
                    'description' => 'The endpoint for the case index.',
                    'example'     => '/v1/zaken',
                    'required'    => true,
                ],
                'caseDetail'     => [
                    'type'        => 'string',
                    'description' => 'The endpoint for the case details.',
                    'example'     => '/v1/zaken/:identificatie/informatieobjecten',
                    'required'    => true,
                ],
                'fileEndpoint'   => [
                    'type'        => 'string',
                    'description' => 'The endpoint reference for documents.',
                    'example'     => 'https://openwoo.app/openindex.woo.ViewFile.endpoint.json',
                    'required'    => true,
                ],
                'rateLimitStart' => [
                    'type'        => 'string',
                    'description' => 'Start date of the fixed date range that is used to fetch a maximum amount of objects to avoid rate limiting.',
                    'example'     => '2024-06-06',
                    'required'    => true,
                ],
                'rateLimitEnd'   => [
                    'type'        => 'string',
                    'description' => 'End date of the fixed date range that is used to fetch a maximum amount of objects to avoid rate limiting.',
                    'example'     => '2024-08-01',
                    'required'    => true,
                ],
            ],
        ];

    }//end getConfiguration()


    /**
     * This function runs the SyncTilburgCases service plugin.
     *
     * @param array $data          The data from the call
     * @param array $configuration The configuration of the action
     *
     * @return array
     * @throws TransportExceptionInterface|LoaderError|RuntimeError|SyntaxError
     */
    public function run(array $data, array $configuration): array
    {
        return $this->service->SyncTilburgCasesHandler($data, $configuration);

    }//end run()


}//end class
