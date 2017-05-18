<?php

namespace G4\Factory;

abstract class FromArrayAbstract
{

    /**
     * @var array
     */
    private $data;

    /**
     * @param array $data
     */
    public function __construct(array $data = null)
    {
        $this->set($data);
    }

    /**
     * @param string $key
     * @return string
     */
    public function get($key = null)
    {
        return $key === null
            ? $this->data
            : ($this->has($key) ? $this->data[$key] : null);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->data[$key]);
    }

    /**
     * @return bool
     */
    public function hasData()
    {
        return is_array($this->data) && count($this->data) > 0;
    }

    /**
     * @param array $data
     */
    public function set($data = null)
    {
        $this->data = [];
        if ($data !== null && is_array($data)) {
            $this->data = $data;
        }
        return $this;
    }
}