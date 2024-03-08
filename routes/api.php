<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( 'nome/usuario', function (Request $request){  
$nome = 'bruno martins';  
return $nome;  

});     
