<?php


use FWAP\Core\Controller\Controller;
use FWAP\Core\Controller\iController;
use PHPUnit\Framework\TestCase as PHPUnit;


class ControllerTest extends PHPUnit {

    private $objController;

    public function setUp() {
        $this->objController = new \FWAP\Core\Controller\Controller();

    }

    public function testIfControllerIsInstanciOf(){


       $this->assertInstanceOf(iController::class, $this->objController);
    }

    public function testClassInstance()
    {

        $this->assertInstanceOf('\FWAP\Core\Model\Model', $this->objController);
    }
//    public function testClassController() {
////               $expect = array( 'dns'=>'mysql:host=localhost;port=8888;dbname=apweb', 'users'=> 'root', 'pass'=> 'root');
//        $obj = $this->objController->getModel();
//
//        $this->assertEquals($obj, $this->objController);
//

//    }

}