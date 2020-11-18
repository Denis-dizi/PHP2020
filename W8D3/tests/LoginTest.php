<?php
// (0:42:)
// name of class must be same as file name:

use DB\DB;
use PHP2020_RCS\W8D3\controllers\loginController;
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    //(0:53:)
    public function testExample()
    {
        $this->assertEquals(3, 3);
        // $this->assertEquals(3, 1); // (1:11:)
    }

    // (1:13:)
    public function testLoginController()
    {
        // (1:16:)
        $loginController = new loginController();
        $error = $loginController->validateLogin();
        $this->assertEquals('Email not specified', $error);

        // (1:31:)
        $email = "test@email.com";
        $password = "test_password";

        // (1:25:)
        $_POST["email"] = $email;
        $error = $loginController->validateLogin();
        $this->assertEquals("User with email: '$email' does not exist", $error);

        // (1:31:)
        $hasedPassword = password_hash($password, PASSWORD_DEFAULT);
        DB::run("INSERT INTO users VALUES('$email', '$hasedPassword')");

        // (1:39:)
        try {
            $error = $loginController->validateLogin();
            $this->assertEquals("Password not set", $error);

            $_POST["password"] = "password";
            $error = $loginController->validateLogin();

            $this->assertEquals("Invalid password", $error);

            $_POST["password"] = $password;
            $error = $loginController->validateLogin();
            $this->assertEquals(null, $error);

        } finally {
            DB::run("DELETE FROM users WHERE email='$email'");
        }
    }
}
// (0:54:)
// ./vendor/phpunit/phpunit/phpunit ./PHP2020_RCS/W8D3/tests
//https://github.com/epuce/web-bootcamp/blob/2414219ba64b53ac6fdb74d9d601db924999db10/local-env-setup/src/mvc/tests/LoginTest.php

//https://github.com/epuce/web-bootcamp/commit/2414219ba64b53ac6fdb74d9d601db924999db10#diff-14ac1c9bec3447d0baed0d3f4967fc6466db7982fca78effee00546a951157f5
