<?php

namespace DockerCloud\API;

use DockerCloud\Model\RepositoryV2 as Model;

class RepositoryV2 extends AbstractRepoAPIV2
{
    protected $api_namespace = '/repositories';

    /**
     * 
     * {@inheritDoc}
     * @see \DockerCloud\API\AbstractAPIV2::getList()
     */
    public function getList($filters = []) {
    
    }

    /**
     * @param $name
     *
     * @return Model
     * @throws \DockerCloud\Exception
     */
    public function get($name)
    {
    	$reqResponse = $this->getClient()->request('GET', $this->getAPINameSpace() . $name . '/' );
    	return new Model($reqResponse);
    }

    /**
     * 
     * @param Model $model
     * @return boolean|NULL|StdClass
     */
    public function getTags(Model $model) {
    	$reqResponse = $this->getClient()->request('GET', $this->getAPINameSpace() . $model->getName() . '/tags/?page_size=1000' );
    	return $reqResponse;
    }
    
}