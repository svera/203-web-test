<?php

class ProductsSeeder extends DatabaseSeeder
{
    protected $scrapers = [
        'ElAderezo',
        'GastronomiaYCia',
        'UtensiliosDeCocina'
    ];

    public function run()
    {
        foreach ($this->scrapers as $currentScraper) {
            $scraper = ScraperFactory::make($currentScraper);
            $scraper->getContent();
            $matches = $scraper->parse();
            foreach ($matches as $current) {
                $product       = new Product();
                $product->name = $current;
                $product->save();
            }
        }
    }
}