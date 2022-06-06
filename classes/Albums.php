<?php

class Album
{
    private $album;

    public function __construct($store){

        foreach ($store as $mediaMaterial) {
            if (!$mediaMaterial instanceof Photo && !$mediaMaterial instanceof Video && !$mediaMaterial instanceof EditedPhoto){
                throw new InvalidArgumentException();
            }
        }
        $this->album=$store;
    }

    public function add($mediaMaterial) {

        if (!$mediaMaterial instanceof Photo && !$mediaMaterial instanceof Video && !$mediaMaterial instanceof EditedPhoto){
            throw new InvalidArgumentException();
        }
        $this->album[] = $mediaMaterial;
    }

    public function get_size() {

        $size = 0;

        if (!empty($this->album)){
            foreach ($this->album as $item){
                $size += $item->getSize();
            }
            return $size;
        }
        return $size;
    }

    public function __toString()
    {
        return implode('', $this->album);
    }
}