<?php

namespace App\Http\Controllers;

use App\Jeune;
use App\Priant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use function MongoDB\BSON\toJSON;

class PriantsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('priants.index');
    }
    public function add()
    {

        return view('priants.add');
    }

    protected function create(Request $request){
        // Validate the request...

        $priant = new Priant();
        $user = Auth::user();

        $priant->prenom = $request->prenom;
        $priant->nom = strtoupper($request->nom);
        $priant->user_id = $user->id;

        $priant->save();


        //Get a jeune
        //echo ($priant->id);
        Jeune::givePriantToJeune($priant->id);

        return view('home');
    }

    protected function delete (Request $request){
        //Get the priant
        $priant = Priant::find($request->id);

        //Remove the Priant for Jeune
        Jeune::removePriantToJeune($priant->id);

        //Remove priant
        Priant::find($priant->id)->delete();

        return view('home');
    }
}
