<?php

class Post {

    /** @var Content[] $content */
    private $content;

    /**
     * @param Content $content
     */
    public function add(Content $content){
        array_push($this->content, $content);
    }

    public function remove(){}
}