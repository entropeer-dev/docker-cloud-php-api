<?php


namespace DockerCloud\Model;


class RepositoryV2 extends AbstractRepoModel
{
	/**
	 * User
	 *
	 * @var string
	 */
	protected $user;

	/**
	 * Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * Namespace
	 *
	 * @var string
	 */
	protected $namespace;

	/**
	 * Repo Type
	 *
	 * @var string
	 */
	protected $repository_type;

	/**
	 * Status
	 *
     * @var bool
	 */
	protected $status;
	
	/**
	 * Repo Type
	 *
	 * @var string
	 */
	protected $description;
	
	/**
	 * Is Private
	 *
	 * @var bool
	 */
	protected $is_private;
	
	/**
	 * Is Automated
	 *
	 * @var bool
	 */
	protected $is_automated;
	
	/**
	 * Can Edit
	 *
	 * @var bool
	 */
	protected $can_edit;

	/**
	 * Star Count
	 *
	 * @var int
	 */
	protected $star_count;
	
	/**
	 * Pull Count
	 *
	 * @var int
	 */
	protected $pull_count;
	
	/**
	 * The date and time of the last update
	 *
	 * @var string|null
	 */
	protected $last_updated;
	
	/**
	 * Build On Cloud
	 *
	 * @var bool
	 */
	protected $build_on_cloud;
	
	/**
	 * Has Starred
	 *
	 * @var bool
	 */
	protected $has_starred;
	
    /**
     * Full Description
     *
     * @var string
     */
	protected $full_description;
	
	/**
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}
	
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return string
     */
    public function getNamespace()
    {
    	return $this->namespace;
    }
    
    /**
     * @return string
     */
    public function getRepositoryType()
    {
    	return $this->repository_type;
    }
    
    /**
     * @return boolean
     */
    public function getStatus()
    {
    	return $this->status;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
    	return $this->description;
    }
    
    /**
     * @return boolean
     */
    public function getIsPrivate()
    {
    	return $this->is_private;
    }
    
    /**
     * @return boolean
     */
    public function getIsAutomated()
    {
    	return $this->is_automated;
    }
    
    /**
     * @return boolean
     */
    public function getCanEdit()
    {
    	return $this->can_edit;
    }
    
    /**
     * @return int
     */
    public function getStarCount()
    {
    	return $this->star_count;
    }
    
    /**
     * @return int
     */
    public function getPullCount()
    {
    	return $this->pull_count;
    }
    
    /**
     * @return string|null
     */
    public function getLastUpdated()
    {
    	return $this->last_updated;
    }
    
    /**
     * @return boolean
     */
    public function getBuildOnCloud()
    {
    	return $this->build_on_cloud;
    }
    
    /**
     * @return boolean
     */
    public function getHasStarred()
    {
    	return $this->has_starred;
    }
    
    /**
     * @return string
     */
    public function getFullDescription()
    {
    	return $this->full_description;
    }
    
    /**
     * @param string $user
     *
     * @return $this
     */
    public function setUser($user)
    {
    	$this->user = $user;
    	
    	return $this;
    }
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    /**
     * @param string $namespace
     *
     * @return $this
     */
    public function setNamespace($namespace)
    {
    	$this->namespace = $namespace;
    	
    	return $this;
    }
    
    /**
     * @param string $repository_type
     *
     * @return $this
     */
    public function setRepositoryType($repository_type)
    {
    	$this->repository_type = $repository_type;
    	
    	return $this;
    }
    
    /**
     * @param boolean $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
    	$this->status = $status;
    	
    	return $this;
    }
    
    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
    	$this->description = $description;
    	
    	return $this;
    }
    
    /**
     * @param boolean $is_private
     *
     * @return $this
     */
    public function setIsPrivate($is_private)
    {
    	$this->is_private = $is_private;
    	
    	return $this;
    }
    
    /**
     * @param boolean $is_automated
     *
     * @return $this
     */
    public function setIsAutomated($is_automated)
    {
    	$this->is_automated = $is_automated;
    	
    	return $this;
    }
    
    /**
     * @param boolean $can_edit
     *
     * @return $this
     */
    public function setCanEdit($can_edit)
    {
    	$this->can_edit = $can_edit;
    	
    	return $this;
    }
    
    /**
     * @param int $star_count
     *
     * @return $this
     */
    public function setStarrCount($star_count)
    {
    	$this->star_count = $star_count;
    	
    	return $this;
    }
    
    /**
     * @param int $pull_count
     *
     * @return $this
     */
    public function setPullCount($pull_count)
    {
    	$this->pull_count = $pull_count;
    	
    	return $this;
    }
    
    /**
     * @param null|string $last_updated
     *
     * @return $this
     */
    public function setLastUpdate($last_updated)
    {
    	$this->last_updated= $last_updated;
    	
    	return $this;
    }
    
    /**
     * @param boolean $build_on_cloud
     *
     * @return $this
     */
    public function setBuildOnCloud($build_on_cloud)
    {
    	$this->build_on_cloud = $build_on_cloud;
    	
    	return $this;
    }
    
    /**
     * @param boolean $has_starred
     *
     * @return $this
     */
    public function setHasStarred($has_starred)
    {
    	$this->has_starred = $has_starred;
    	
    	return $this;
    }
    
    /**
     * @param string $full_description
     *
     * @return $this
     */
    public function setFullDescription($full_description)
    {
    	$this->full_description = $full_description;
    	
    	return $this;
    }
}