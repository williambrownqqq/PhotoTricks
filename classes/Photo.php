<?php 

class Photo{
    private $date;
    private $topic;
    private $size;

    public function __construct($date, $topic, $size) {
        $this->date = $date;
        $this->topic = $topic;
        $this->size = $size;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function __toString()
    {
        try
        {
            return $this->getDate() . " ".$this->getSize() . " ".$this->getTopic() ;
        }
        catch (Exception $exception)
        {
            return '';
        }
    }
}