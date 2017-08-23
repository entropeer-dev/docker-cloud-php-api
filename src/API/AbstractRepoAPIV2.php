<?php


namespace DockerCloud\API;


abstract class AbstractRepoAPIV2 extends AbstractAPI
{
    protected $api_prifix = '/v2';
    
    /**
     * @return string
     */
    protected function getAPINameSpace()
    {
    	return $this->api_prifix . $this->api_namespace . $this->client->getOrganizationNameSpace() . '/';
    }
}