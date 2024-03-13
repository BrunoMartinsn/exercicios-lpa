<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get( 'exercicio1', function (Request $request){  
$nome = $request->input('nome');  
return $nome;  

});     

Route::get( 'exercicio2', function (Request $request){  
    $nome = $request->input('nome');
    $idade = $request->input('idade');  
    return 'meu nome é' . $nome . ', tenho' . $idade . 'anos de idade'; 
    
    }); 
    Route::get( 'exercicio3', function (Request $request){  
        $nome = $request->input('nome');
        $ano = $request->input('ano');
        $cidade = $request->input('cidade');  
        return "Meu nome é " . $nome . ", nasci no ano de " . $ano . " na cidade de " . $cidade; 
        
        }); 
    
    Route::get('exercicio4', function (Request $request) {
        $primeiroNumero = $request->input('primeiroNumero');
        $segundoNumero = $request->input('segundoNumero');
        $resultado = $primeiroNumero + $segundoNumero;
        return $resultado;
            
    });
    
    Route::get('exercicio5', function (Request $request) {
        $primeiroNumero = $request->input('primeiroNumero');
        $segundoNumero = $request->input('segundoNumero');
        $terceiroNumero = $request->input('terceiroNumero');
        $resultado = $primeiroNumero - $segundoNumero - $terceiroNumero;
        return $resultado;
        
    });
    
    Route::get('exercicio6', function (Request $request) {
        $primeiroNumero = $request->input('primeiroNumero');
        $segundoNumero = $request->input('segundoNumero');
        $resultado = $primeiroNumero / $segundoNumero;
        return $resultado;
            
    });
    
    Route::get('exercicio7', function (Request $request) {
        $primeiroNumero = $request->input('primeiroNumero');
        $segundoNumero = $request->input('segundoNumero');
        $resultado = $primeiroNumero * $segundoNumero;
        return $resultado;
            
    });
    
    Route::get('exercicio8', function (Request $request) {
        $primeiroNota = $request->input('primeiraNota');
        $segundoNota = $request->input('segundoNota');
        $terceiroNota = $request->input('terceiroNota');
        $quartoNota = $request->input('quartaNota');
        $quintoNota = $request->input('quintaNota');
        $resultado = $primeiroNota + $segundoNota + $terceiroNota + $quartoNota + $quintoNota;
        return $resultado;
           
    });
    
    Route::get('exercicio9', function (Request $request) {
        $primeiroNumero = $request->input('primeiroNumero');
        $segundoNumero = $request->input('segundoNumero');
        $resultado = $segundoNumero / $primeiroNumero;
        return $resultado;
           
    });
    
    Route::get('exercicio10', function (Request $request){
        $primeiroNumero = $request->input('primeiroNumero');
        $resultado = $primeiroNumero * 2;
        return $resultado;
     });
    
    Route::get('exercicio11', function (Request $request) {
        $base = $request->input('base');
        $altura = $request->input('altura');
        $resultado = $base . $altura;
       return $resultado = $base * $altura;
    });
    
    Route::get('exercicio12', function (Request $request) {
        $compra = $request->input('compra');
        $desconto = $request->input('desconto');
        $porcentagem = $compra / 100;
        $resultado = $compra - ($desconto * $porcentagem);
        return $resultado;
    });
    
    Route::get('exercicio13', function (Request $request) {
        $salario = $request->input('salario');
        $aumento = $request->input('aumento');
        $porcentagem = $aumento / 100 * $salario;
        $resultado = $salario + $porcentagem;
        return $resultado;
           
    });
    
    Route::get('exercicio14', function (Request $request) {
        $valor = $request->input('valor');
        $resultado = $valor / 10;
        return $resultado;
    });
    
    Route::get('exercicio15', function (Request $request){
        $valorvendas = $request->input('valor');
        $comissao = $request->input('comissao');
        $resultado = $valorvendas / $comissao;
        return $resultado;
    });
    
    Route::get('exercicio16', function (Request $request){
    $dias = $request->input('dias');
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    $resultado = ' Serao ' . $horas . ' horas, ' . $minutos . ' minutos e ' . $segundos . ' segundos ';
    return $resultado;
    });
    
    Route::get('exercicio17', function (Request $request){
    $preço = $request->input('preço');
    $quanto = $request->input('quanto');
    $resultado = $preço * $quanto;
    return $resultado;
     });