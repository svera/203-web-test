<?php

class SearchController extends BaseController {

    /**
     * Given a search parameter, search for this string in the products table
     * 
     * @return Array a JSON array with the results,
     * or an empty one if no results were found.
     */
    public function index()
    {
        $result = '';
        $search = Input::get('search');
        if ($search) {
            $result = Product::where('name', 'like', "%$search%")->get();
        }
        return Response::json($result);
    }

}