<?php
// (0:42:)
// name of class must be same as file name:

use PHP2020_RCS\W8D3\controllers\loginController;
use PHPUnit\Framework\TestCase;
class LoginTest extends TestCase {
    //(0:53:)
    public function testExample() {
        $this->assertEquals(3, 3);
        // $this->assertEquals(3, 1); // (1:11:)
    }

    // (1:13:)
    public function testLoginController() {
        // (1:16:)
        new loginController()
    }
}
// (0:54:)
// ./vendor/phpunit/phpunit/phpunit ./PHP2020_RCS/W8D3/tests