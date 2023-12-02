<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\city;

class CidadeController extends Controller
{
    public function create(Request $request){

        $new_city = [
            'Cidade' => 'Nome da cidade',
            'População'=>'Quantidade de pessoas',
            'Estado' =>'Nome do estado'
        ];

        $city = new city($new_city);
        $city->save();
        return $city;
    }

    public function read(Resquest $request){

        $city = new city();
        $city = $city->find(2);
        return $city;
    }

    public function all(Request $request){

        $city = city::all();
        return $city;
    }

    public function update(Resquest $request){

        $city = city::where ('Cidade','>',0)->update([
            'Cidade' => 'Nova Cidade'
        ]);
        return $city;
    }

    public function delete(Request $request){

        $city = city::where ('Cidade','>',0)->delete();
        return $city;

    }
}
