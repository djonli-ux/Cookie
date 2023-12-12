<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['backgroundColor']) && isset($_POST['generateLink'])
        && isset($_POST['email']) && isset($_POST['pass'])) {
        $expiration = time() + (3600 * 24) * 7;
        $val = $_POST['backgroundColor'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        setcookie('backgroundColor', $val, $expiration);
        setcookie('email', $email, $expiration);
        setcookie('pass', $pass, $expiration);

        header('Location: view.php');
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CookieForm</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 class="mb-3">Form</h3>
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="ColorInput" class="form-label">Choose theme color</label>
                <input type="color" name="backgroundColor" class="form-control form-control-color" id="ColorInput" value="#563d7c" title="Choose your color">
            </div>
            <div class="mb-3 mx-auto p-2">
                <button type="submit" name="generateLink" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>