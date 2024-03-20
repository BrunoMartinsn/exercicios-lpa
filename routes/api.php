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

     Route::get('receber/nome/idade', function (Request $request){
        $nome = $request->input('nome');
        $idade = $request->input('idade');
        return 'meu nome é' . $nome . ', tenho ' . $idade . 'anos';
     });

     Route::get('receber/nome/idade', function (Request $request){
        $idade = $request->input('idade');
        $retorno = "";
        if($idade >= 18){
            $retorno = "maior de idade";
        }
        else{
            $retorno  = "menor de idade";
        }
        return $retorno;

     });

     Route::get('receber/nome/idade', function(Request $request){
        $idade = $request->input('idade');
        
        if($idade >= 18){
           return "maior de idade";
        } else {
            return "menor de idade";
        }

     });

     Route::get('verificar/par', function(Request $request){
       $numero  = $request->input('numero');
       if($numero % 2 == 0){
           return 'par';
       } else {
        return 'inpar';
       }

     });

     Route::get('usuario', function(Request $request){
        $numero = $request->input('numero');
        
        if($numero > 10){
           return "maior que 10";
        } else {
            return "menor que 10";
        }

     });

     Route::get('temperatura', function(Request $request){
        $TemperaturaAtual = $request->input('TemperaturaAtual');
        
        if($TemperaturaAtual > 30){
           return "esta quente";
        } else {
            return "esta frio";
        }

     });

     Route::get('verificar', function(Request $request){
        $numero  = $request->input('numero');
        if($numero > 0){
            return 'positivo';
                } else if($numero < 0){
                    return 'este numero é negativo';
                } else {
                    return 'este numero é zero';
                }
            });

            Route::get('usuario', function(Request $request){
                $numero1 = $request->input('numero1');
                $numero2 = $request->input('numero2');
                if($numero1 > $numero2){
                    return 'maior exibir o numero um';
                } else {
                    return 'menor exibir o numero dois';
                }
                });

                Route::get('usuario', function(Request $request){
                   $numero = $request->input('numero');
                   $resto = ($numero % 3)

                   if($resto == 0){
                    return "é divisivel por tres";
                   } else {
                    return "nao é divisivel por tres";
                   }
                    });
    



     

     

     


    


