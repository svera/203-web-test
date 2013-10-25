<?php

class ScraperFactory
{
    static function make($type)
    {
        $scraper = null;

        switch ($type) {
            case 'ElAderezo':
                $scraper = new ScraperElAderezo;
            break;      
            case 'GastronomiaYCia':
                $scraper = new ScraperGastronomiaYCia;
            break;
            case 'UtensiliosDeCocina':
                $scraper = new ScraperUtensiliosDeCocina;
            break;
        }     
        return $scraper;
    }    
}