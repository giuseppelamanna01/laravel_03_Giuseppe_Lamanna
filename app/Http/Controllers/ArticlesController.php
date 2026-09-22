<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
        public $articoli = [
            ['id'=>'0', 'name'=>'Lionel', 'surname'=>'Messi', 'age'=>39, 'country'=>'Argentina'],
            ['id'=>'1', 'name'=>'Cristiano', 'surname'=>'Ronaldo', 'age'=>41, 'country'=>'Portogallo'],
            ['id'=>'2', 'name'=>'Neymar', 'surname'=>'Junior', 'age'=>34, 'country'=>'Brasile'],
            ['id'=>'3', 'name'=>'Luis', 'surname'=>'Suarez', 'age'=>39, 'country'=>'Uruguay'],
            ['id'=>'4', 'name'=>'Sergio', 'surname'=>'Ramos', 'age'=>40, 'country'=>'Spagna']
        ];
            
            
            public function articoli(){
                return view('articles', ['articoli'=>$this->articoli]);
    }

    public function dettaglio($id){
        $articolo = $this->articoli[$id];
        return view('dettaglio', ['articolo' =>$this->articoli[$id]]);
    }
}

