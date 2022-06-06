<?php

class EditedPhoto extends Photo{
    private $effect;

    public function __construct($date, $topic, $size, $effect)
    {
        parent::__construct($date, $topic, $size);
        $this->effect = $effect;
    }

    public function getEffect()
    {
        return $this->effect;
    }

    public function setEffect($effect)
    {
        $this->effect = $effect;
    }
}