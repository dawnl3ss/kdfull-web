<?php

class TextContent extends Content {

    public function __construct(string $text){
        parent::__construct("text", $text);
    }
}