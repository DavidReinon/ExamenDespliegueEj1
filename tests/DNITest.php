<?php
use App\DNI;
use PHPUnit\Framework\TestCase;
class DNITest extends TestCase
{
    //David Reinon
    public function testGetDNIConLetra()
    {
        $dni = new DNI(12345678);
        $resultado = $dni->getDNIConLetra();

        // Verifica que el resultado es un string
        $this->assertEquals("12345678Z", $resultado);

    }
}