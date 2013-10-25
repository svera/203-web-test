<?php

class ScraperElAderezo extends BaseScraper {

    public function __construct()
    {
        parent::__construct('http://eladerezo.hola.com/tag/utensilios');
    }

    public function parse()
    {
        $matches = [];
        $regex   = '/<h2 class="entry_title"><a (.*?) title="(.*?)">/s';

        if (preg_match_all($regex, $this->content, $list)) {
            foreach ($list[2] as $current) {
                $matches[] = str_replace('Enlace permanente a ', '', $current);
            }
        }
        return $matches;
    }

}