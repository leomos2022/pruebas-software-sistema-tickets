<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase {
    public function testValidLogin() {
        $_POST['user_name'] = 'admin';
        $_POST['password'] = 'password123';

        ob_start();
        include 'ruta/a/login.php'; 
        $output = ob_get_clean();

        $this->assertStringNotContainsString("error", $output, "El login no debería contener errores");
    }

    public function testInvalidLogin() {
        $_POST['user_name'] = 'admin';
        $_POST['password'] = 'wrongpassword';

        ob_start();
        include 'ruta/a/login.php'; 
        $output = ob_get_clean();

        $this->assertStringContainsString("error", $output, "El login debería mostrar un mensaje de error");
    }
}
