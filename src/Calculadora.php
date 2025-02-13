<?php
    namespace App;

    class Calculadora {
        public function suma($a, $b){
            return $a + $b;
        }

        public function resta($a, $b){
            return $a - $b;
        }

        public function multiplicacion($a, $b){
            return $a * $b;
        }

        public function division($a, $b){
            return $a / $b;
        }

        public function raiz($a){
            return $a**0.5;
        }

    }
    
    echo "<p>Iniciando Calculadora</p>";
    
    $numero_1 = htmlspecialchars($_GET['numero1']);
    $numero_2 = htmlspecialchars($_GET['numero2']);
    $operacion = htmlspecialchars($_GET['operacion']);
    $resultado = 0;

    $calculadora = new Calculadora();
    switch($operacion){
        case "suma": $resultado = $calculadora->suma($numero_1, $numero_2);break;
        case "resta": $resultado = $calculadora->resta($numero_1, $numero_2);break;
        case "multiplicacion": $resultado = $calculadora->multiplicacion($numero_1, $numero_2);break;
        case "division": $resultado = $calculadora->division($numero_1,$numero_2);break;
        case "raiz": $resultado = $calculadora->raiz($numero_1);break;
        default:;
    };

    echo "<h2>El resultado de la $operacion de $numero_1 y $numero_2 es $resultado</h2>";

?>