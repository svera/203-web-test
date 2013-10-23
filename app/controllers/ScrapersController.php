<?php

class ScrapersController extends BaseController {

    public function index()
    {
        $scraper = new ScraperUtensiliosDeCocina();
        $scraper->getContent();
        $scraper->parse();
        foreach ($scraper->matches as $current) {
            $product       = new Product();
            $product->name = $current;
            $product->save();
        }
        //return View::make('home/index');
    }

}