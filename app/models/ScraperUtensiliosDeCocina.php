<?php

class ScraperUtensiliosDeCocina extends Scraper {

    public function __construct()
    {
        parent::__construct('http://www.losutensiliosdecocina.es/');
    }

    public function parse()
    {
        $regex = '/<span class="tit_product">(.*?)<\/span>/s';
        if (preg_match_all($regex, $this->content, $list)) {
            foreach ($list[1] as $current) {
                $this->matches[] = trim($current);
            }
            var_dump($this->matches);
        }
    }

}