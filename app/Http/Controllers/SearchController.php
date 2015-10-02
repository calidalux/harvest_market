<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Typeahead;
use Response;

use Illuminate\Http\Request;

class SearchController extends Controller {

	    public function index()
    {
        return View::make('index');
    }

    public function query()
    {
        $query = Input::get('filterTire');
        $query = str_replace(',', '.', $query);
        $res   = Typeahead::where('size', 'LIKE', "%$query%")->get();
        return Response::json($res);
    }

}
