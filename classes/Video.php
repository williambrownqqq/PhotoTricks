<?php

class Video extends Photo{
    private $timing;

    public function __construct($date, $topic, $size, $timing)
    {
        parent::__construct($date, $topic, $size);
        $this->timing = $timing;
    }

    /**
     * @return mixed
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param mixed $actor
     */
    public function setTiming($timing)
    {
        $this->timing = $timing;
    }
}