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
        $res   = Typeahead::where('width', 'LIKE', "%$query%")->get();
        return Response::json($res);
    }

}
