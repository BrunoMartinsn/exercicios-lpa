<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( 'nome/usuario', function (Request $request){  
$nome = 'bruno martins';  
return $nome;  

});     

Route::get( 'nome/usuario', function (Request $request){  
    $nome = 'bruno';
    $idade = '16';  
    return 'meu nome é' . $nome . ", tenho" . $idade . "anos de idade"; 
    
    });  