<?php

class ImageContent extends Content {

    public function __construct(string $text){
        parent::__construct("image", $text);
    }
}