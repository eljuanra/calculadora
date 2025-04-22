<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase {
    public function testSuma(){
        $calc = new Calculadora();
        $this->assertEquals(5,$calc->suma(3,2));
    }
    public function testResta(){
        $calc = new Calculadora();
        $this->assertEquals(1,$calc->resta(3,2));
    }
    public function testMultiplicacion(){
        $calc = new Calculadora();
        $this->assertEquals(6,$calc->multiplicacion(3,2));
    }
    public function testDivision(){
        $calc = new Calculadora();
        $this->assertEquals(2,$calc->division(4,2));
    }
    public function testRaiz(){
        $calc = new Calculadora();
        $this->assertEquals(5,$calc->raiz(25));
    }
}