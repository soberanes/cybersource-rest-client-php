<?php
/**
 * InstrumentIdentifiersApi
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Api;

use \CyberSource\ApiClient;
use \CyberSource\ApiException;
use \CyberSource\Configuration;
use \CyberSource\ObjectSerializer;

/**
 * InstrumentIdentifiersApi Class Doc Comment
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstrumentIdentifiersApi
{
    /**
     * API Client
     *
     * @var \CyberSource\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CyberSource\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CyberSource\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CyberSource\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CyberSource\ApiClient $apiClient set the API client
     *
     * @return InstrumentIdentifiersApi
     */
    public function setApiClient(\CyberSource\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation tmsV1InstrumentidentifiersPost
     *
     * Create an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \CyberSource\Model\Body $body Please specify either a Card or Bank Account. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return \CyberSource\Model\TmsV1InstrumentidentifiersPost200Response
     */
    public function tmsV1InstrumentidentifiersPost($profileId, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->tmsV1InstrumentidentifiersPostWithHttpInfo($profileId, $body);
        return [$response, $statusCode, $httpHeader];
    }

    /**
     * Operation tmsV1InstrumentidentifiersPostWithHttpInfo
     *
     * Create an Instrument Identifier
     *
     * @param string $profileId The id of a profile containing user specific TMS configuration. (required)
     * @param \CyberSource\Model\Body $body Please specify either a Card or Bank Account. (required)
     * @throws \CyberSource\ApiException on non-2xx response
     * @return array of \CyberSource\Model\TmsV1InstrumentidentifiersPost200Response, HTTP status code, HTTP response headers (array of strings)
     */
    public function tmsV1InstrumentidentifiersPostWithHttpInfo($profileId, $body)
    {
        // verify the required parameter 'profileId' is set
        /*if ($profileId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $profileId when calling tmsV1InstrumentidentifiersPost');
        }
        if (($profileId > 36)) {
            throw new \InvalidArgumentException('invalid value for "$profileId" when calling InstrumentIdentifiersApi.tmsV1InstrumentidentifiersPost, must be smaller than or equal to 36.');
        }
        if (($profileId < 36)) {
            throw new \InvalidArgumentException('invalid value for "$profileId" when calling InstrumentIdentifiersApi.tmsV1InstrumentidentifiersPost, must be bigger than or equal to 36.');
        }*/

        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling tmsV1InstrumentidentifiersPost');
        }
        // parse inputs
        $resourcePath = "/tms/v1/instrumentidentifiers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json;charset=utf-8']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json;charset=utf-8']);

        // header params
        if ($profileId !== null) {
            $headerParams['profile-id'] = $this->apiClient->getSerializer()->toHeaderValue($profileId);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response',
                '/tms/v1/instrumentidentifiers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\TmsV1InstrumentidentifiersPost200Response', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 424:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CyberSource\Model\InlineResponse400[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}