<?php

abstract class BaseScraper {

    /**
     * @var string
     */
    protected $curl;

    /**
     * @var string
     */
    protected $content;

    /**
     * Inits a curl connection with the passed url and sets it up to return
     * data instead of showing it directly
     * 
     * @param string $url
     */
    public function __construct($url)
    {
        $this->curl = curl_init($url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
    }

    /**
     * Gets data from the scraped url and closes the connection when done
     */
    public function getContent()
    {
        $this->content = curl_exec($this->curl);
         if (curl_errno($this->curl)) {
            throw new Exception('Scraper error '.curl_error($this->curl), 1);
        }
        curl_close($this->curl);
    }

    /**
     * This method must parse the given data and return it as an array
     */
    abstract function parse();

}