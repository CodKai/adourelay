<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vendeur;

class VendeurController extends Controller
{
    //

    public function postVendeur(Request $request){
        $nomcomplet=$request->inputnom;
        $adresse=$request->inputadresse;
        $telephone=$request->inputtelephone;
        
        // dd($telephone);
        

        $v=new Vendeur;
        $v->nom_prenom=$nomcomplet;
        $v->adresse=$adresse;
        $v->telephone=$telephone;
        
        $v->save();

        return view('index');
    }
}
