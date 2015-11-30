<?php

namespace G4\Factory;

abstract class FromStringAbstract
{

    /**
     * @var string
     */
    private $data;

    /**
     * @param string $data
     */
    public function __construct($data = null)
    {
        $this->set($data);
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->has() ? $this->data : null;
    }

    /**
     * @return bool
     */
    public function has()
    {
        return $this->data !== null;
    }

    /**
     * @param string $data
     */
    public function set($data = null)
    {
        $this->data = null;
        if ($data !== null) {
            $this->data = $data;
        }
        return $this;
    }
}