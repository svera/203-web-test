<?php

class ScrapersController extends BaseController {

    public function index()
    {
        $scraper = new ScraperGastronomiaYCia();
        $scraper->getContent();
        $matches = $scraper->parse();
        foreach ($matches as $current) {
            $product       = new Product();
            $product->name = $current;
            $product->save();
        }
    }

}