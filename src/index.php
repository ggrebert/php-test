<?php

declare(strict_types=1);

function __autoload($class_name) {
    require_once $class_name . '.php';
}

if ( isset($_GET['email']) ) {
    try {
        $email = Email::fromString($_GET['email']);
        echo '<p>Hi <a href="mailto:' . htmlentities($email) . '">' . htmlentities($email) . '</a></p>';
    }
    catch(InvalidArgumentException $e) {
        echo '<h1>ERROR</h1><p>' . htmlentities($e->getMessage()) . '</p>';
    }
    catch(Exception $e) {
        echo '<h1>Unknow error</h1>';
    }
}
else {
    echo '<h1>Home page !</h1>';
}

