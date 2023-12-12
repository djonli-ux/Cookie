<?php
require_once 'tools/dd.php';

echo '<h3 class="mb-3">View page</h3>';

if(isset($_COOKIE['backgroundColor'])) {
    $val = $_COOKIE['backgroundColor'];
    $email = $_COOKIE['email'];
    $pass = $_COOKIE['pass'];
    dump("\nBackground color: $val\nEmail: $email\nPassword:$pass\n");
}

