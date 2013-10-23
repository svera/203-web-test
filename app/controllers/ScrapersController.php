<?php

class ScrapersController extends BaseController {

    public function index()
    {
        $scraper = new ScraperUtensiliosDeCocina();
        $scraper->getContent();
        $matches = $scraper->parse();
        foreach ($matches as $current) {
            $product       = new Product();
            $product->name = $current;
            $product->save();
        }
        //return View::make('home/index');
    }

}