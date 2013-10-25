<?php

class ScraperGastronomiaYCia extends BaseScraper {

    public function __construct()
    {
        parent::__construct('http://www.gastronomiaycia.com/category/utensilios-de-cocina/');
    }

    public function parse()
    {
        $matches = [];
        $regex   = '/<h1 class="entry-title" itemprop="name"><a (.*?)>(.*?)<\/a><\/h1>/s';

        if (preg_match_all($regex, $this->content, $list)) {
            foreach ($list[2] as $current) {
                $matches[] = $current;
            }
        }
        return $matches;
    }

}