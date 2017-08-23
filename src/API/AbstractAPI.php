<?php


namespace DockerCloud\API;


use DockerCloud\Client;
use DockerCloud\Exception;
use DockerCloud\Model\Response\AbstractGetResponse;

abstract class AbstractAPI
{
    /**
     * @var Client
     */
	protected $client;

    protected $api_prifix = '/';

    protected $api_namespace = '/';

    protected $allowedGetListFilters = [];

    /**
     * AbstractAPI constructor.
     */
    public function __construct()
    {
        $this->client = Client::getInstance();
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return string
     */
    protected function getAPINameSpace()
    {
    	return $this->api_prifix . $this->client->getOrganizationNameSpace() . $this->api_namespace;
    }

    /**
     * @param array $filters
     *
     * @return AbstractGetResponse
     */
    abstract function getList($filters = []);

    /**
     * @param array $filters
     * @param array|null $allowedFilters
     * @throws Exception
     */
    public function validateFilter($filters = [], $allowedFilters = null)
    {
        if (!$allowedFilters) {
            $allowedFilters = $this->allowedGetListFilters;
        }
        foreach ($filters as $key => $value) {
            if (!in_array($key, $allowedFilters)) {
                throw new Exception(sprintf('[%s] is not an allowed filter.', $key));
            }
        }
    }
}