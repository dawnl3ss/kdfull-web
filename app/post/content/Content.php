<?php

class Content {

    /** @var string $type */
    private $type;

    /** @var string $text */
    private $text;

    public function __construct(string $type, string $text){
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function get_type() : string { return $this->type; }

    /**
     * @return string
     */
    public function get() : string { return $this->text; }
}