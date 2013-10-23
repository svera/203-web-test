<?php

abstract class Scraper {

    protected $curl;
    protected $content;
    public    $matches = [];

    public function __construct($url)
    {
        $this->curl = curl_init($url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
    }

    public function getContent()
    {
        $this->content = curl_exec($this->curl);
         if (curl_errno($this->curl)) {
            throw new Exception('Scraper error '.curl_error($this->curl), 1);
        }
        curl_close($this->curl);
    }

    abstract function parse();

}