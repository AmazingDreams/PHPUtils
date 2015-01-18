<?php

namespace AD\PHPUtils;

/**
 * Helper class for managing the environment type
 */
class Environment {

	/**
	 * Constants which are used to specify the environment
	 */
	const PRODUCTION  = 'PRODUCTION';
	const STAGING     = 'STAGING';
	const DEVELOPMENT = 'DEVELOPMENT';

	/**
	 * Holds the active environment
	 */
	protected $_current;

	/**
	 * Initializes a new environment
	 */
	public function __construct($value = self::PRODUCTION)
	{
		$this->setEnv($value);
	}

	/**
	 * Get the currently active environment
	 *
	 * @return  Currently active environment
	 */
	public function getEnv()
	{
		if($this->_current === NULL)
			$this->determine();

		return $this->_current;
	}

	/**
	 * Check whether we are in a production environment
	 *
	 * @return  boolean
	 */
	public function isProduction()
	{
		return ($this->_current === self::PRODUCTION);
	}

	/**
	 * Check whether we are in a staging environment
	 *
	 * @return  boolean
	 */
	public function isStaging()
	{
		return ($this->_current === self::STAGING);
	}

	/**
	 * Check whether we are in a development environment
	 *
	 * @return  boolean
	 */
	public function isDevelopment()
	{
		return ($this->_current === self::DEVELOPMENT);
	}

	/**
	 * Set the active environment
	 *
	 * @param  $value
	 */
	public function setEnv($value)
	{
		$value = strtoupper($value);

		if( ! in_array($value, array(self::PRODUCTION, self::DEVELOPMENT, self::STAGING)))
			throw new \RuntimeException(sprintf('Environment must be one of %s', explode(',', array(self::PRODUCTION, self::DEVELOPMENT, self::STAGING))));

		$this->_current = $value;
	}

}
