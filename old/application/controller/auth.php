<?php

/**
 * Class Auth
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Auth extends Controller
{
    public function index()
    {
        // load views
        require APP . 'view/_templates/auth/header.php';
        require APP . 'view/auth/index.php';
        require APP . 'view/_templates/auth/footer.php';
    }

}
