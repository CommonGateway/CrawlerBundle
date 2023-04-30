<?php
/**
 * An example service for adding business logic to your class.
 *
 * @author  Conduction.nl <info@conduction.nl>
 * @license EUPL-1.2 https://joinup.ec.europa.eu/collection/eupl/eupl-text-eupl-12
 */

namespace CommonGateway\CrawlerBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DomCrawler\Crawler;

class CrawlerService
{

    /**
     * @var array
     */
    private array $configuration;

    /**
     * @var array
     */
    private array $data;

    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    /**
     * The plugin logger.
     *
     * @var LoggerInterface
     */
    private LoggerInterface $logger;


    /**
     * @param EntityManagerInterface $entityManager The Entity Manager.
     * @param LoggerInterface        $pluginLogger  The plugin version of the logger interface.
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        LoggerInterface $pluginLogger
    ) {
        $this->entityManager = $entityManager;
        $this->logger        = $pluginLogger;
        $this->configuration = [];
        $this->data          = [];

    }//end __construct()


    /**
     * An example handler that is triggered by an action.
     *
     * @param array $data          The data array
     * @param array $configuration The configuration array
     *
     * @return array A handler must ALWAYS return an array
     */
    public function crawlerHandler(array $data, array $configuration): array
    {
        $this->data          = $data;
        $this->configuration = $configuration;

        $this->logger->debug("CrawlerService -> petStoreHandler()");

        return ['response' => 'Hello. Your PetStoreBundle works'];

    }//end petStoreHandler()

    public function crawlEndpoint(Source $source, string $endpoint):ObjectEntity{

        // This function is now based on guzzle (becouse that makes a nice integration with the current source setup) but.... it might be fairy bad a reading java renderd html (react, vue etc) so we might need to look into a brwoser based sollution on https://www.zenrows.com/blog/php-web-scraping-library#7-didom

        // Turn the endpoint into an endpoint object
        $crawledEndpoint = $this->entityManager->get...
        if($crawledEndpoint === null){

        }
        $crawledEndpoint->setValue('endpoint',$endpoint);
        $crawledEndpoint->setValue('source',$source);

        // Create a request to the FreeCodeCamp URL
        $response = $client->request("GET", $url);

        // Bind the Body DOM elements to the html variable using the Guzzle method
        $html = $response->getBody();

        // Create a Crawler instance using the html binding
        $crawler = new Crawler($html->getContents());

        $title = $crawler->filter('title')->first()->text();
        $text = $crawler->filter('body')->first()->text();

        $titles = [];

        // Get al the links
        $links = $crawler->filter('a')->link()->getUri();
        foreach ($links as $link){
            // Get base domain and compare it the  source
            $parse = parse_url($link);
            if($parse['host'] === $source->getDomain() && !in_array($parse['path'],$sitemap)){

            }
        }

        // Get al the meta tags
        $metatags = $crawler->filter('meta');
        $meta = [];
        foreach ($metatags as $tag){
            $meta[] =
        }

        // Get al the meta tags
        $resourceLinks = $crawler->filter('link');
        $resources = [];
        foreach ($resourceLinks as $link){
            $resources[] =
        }


        $sitemap = [];


        // Then set

        );


    }//end crawlEndpoint()


}//end class
