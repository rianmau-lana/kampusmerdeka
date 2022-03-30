<?php

    function cekLogin($username, $password) {
        if ($username == 'admin' && $password == 'mimin') {
            header("Location: home.php");
            exit;
        } else {

            echo "<script onclick('history.go(-1)')>alert('Username atau Password salah')</script>";
        }
    }
    if (isset($_POST['login'])) cekLogin($_POST['username'], $_POST['password']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.png" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1>Login Page</h1>
                    <form method="POST">
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg" />
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid gap-2">

                            <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg" onclick="<?php cekLogin($username, $password) ?>">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>