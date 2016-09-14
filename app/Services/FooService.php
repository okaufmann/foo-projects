<?php
/**
 * FooService.php, foo-projects
 *
 * This File belongs to to Project foo-projects
 *
 * @author Oliver Kaufmann <okaufmann91@gmail.com>
 * @version 1.0
 * @package YOUREOACKAGE
 */

namespace App\Services;

use GuzzleHttp\Client as HttpClient;

class FooService
{
    private $httpClient;

    /**
     * FooService constructor.
     *
     * @param HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {

        $this->httpClient = $httpClient;
    }

    public function makeRequest($relativeUrl)
    {
        return $this->httpClient->get($relativeUrl)->getBody();
    }
    

}