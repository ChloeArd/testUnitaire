<?php

use PHPUnit\Framework\TestCase;

require dirname(__FILE__). "/../Calculate.php";

class CalculateTest extends TestCase {

    private Calculate $objet;

    public function __construct(?string $name = null, array $data = [], $dataName = "") {
        parent::__construct($name, $data, $dataName);
        $this->objet = new Calculate();
    }

    /**
     * Testing addition.
     */
    public function testAddition() {
        $result = $this->objet->addition(10, 11);
        $this->assertEquals(21, $result);
    }

    /**
     * Testing addition.
     */
    public function testSoustraction() {
        $result = $this->objet->soustraction(10, 11);
        $this->assertEquals(-1, $result);
    }
}