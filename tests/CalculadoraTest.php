<?php   

use PHPUnit\Framework\TestCase;
use App\Calculadora;



class CalculadoraTest extends TestCase{
    public function testSuma() {
        $calc = new Calculadora();
        $resultado = $calc -> suma(3,2);
        $this->assertEquals(5, $calc->suma(3,2));
        $this->assertGreaterThan(4, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testResta() {
        $calc = new Calculadora();
        $resultado = $calc -> resta(3,2);
        $this->assertEquals(1, $calc->resta(3,2));
        $this->assertLessThan(3, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testMultiplicacion(){
        $calc = new Calculadora();
        $resultado = $calc -> multiplicacion(3,2);
        $this->assertEquals(6, $calc->multiplicacion(3,2));
        $this->assertGreaterThan(5, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testDivision(){
        $calc = new Calculadora();
        $resultado = $calc -> division(4,2);
        $this->assertEquals(2, $calc->division(4,2));
        $this->assertLessThan(3, $resultado);
        $this->assertNotNull($resultado);
    }

    public function testRaiz(){
        $calc = new Calculadora();
        $resultado = $calc -> raiz(9);
        $this->assertEquals(3, $calc->raiz(9));
        $this->assertLessThan(4, $resultado);
        $this->assertNotNull($resultado);
    }
}