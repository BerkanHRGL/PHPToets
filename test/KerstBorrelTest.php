<?php 
namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
use PHPUnit\Framework\TestCase;
use TDD\KerstBorrel;



class KerstBorrelTest extends TestCase {

public $KerstBorrel; 

public function setUp() {
    $this->KerstBorrel = new KerstBorrel();
}

public function tearDown() {
    unset($this->KerstBorrel);
}
/**
 * @dataProvider provideKostenKerstpakket
 */
public function testKostenKerstpakket($aantalPersoneelsleden,$maxBudget,$expected) {
$output = $this->KerstBorrel->kostenKerstPakket($aantalPersoneelsleden,$maxBudget);
$message = "Ik verwacht dat er $expected euro nodig is";

$this->assertEquals(
    $expected,
    $output,
    $message
);
}
public function provideKostenKerstpakket(){
    return[
       [1,5000,4978.0],
       [10,6000,583.0],
       [5,-1000,-218.0],
       [12,2000,150.0],
       [18,3000,150.0],
       [-22,4000,-199.0],
       [40,5500,121.0],
       [32,7000,202.0],
       [24,8001,316.0]
    ];
}

}
?>