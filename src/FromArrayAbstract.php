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
     * @param array $data
     */
    public function set(array $data = null)
    {
        $this->data = [];
        if ($data !== null) {
            $this->data = $data;
        }
        return $this;
    }
}