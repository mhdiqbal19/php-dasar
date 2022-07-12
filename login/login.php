<?php 
//cek apakah tombol submit sudah dipencet apa belum
if( isset($_POST["submit"]))

    //cek username & password
    if($_POST["username"] == "admin" && $_POST["password"] == "123") {
    //jika benar, redirect ke halaman admin
    header("Location: admin.php");
    } else{
    //jika salah, tampilkan pesan kesalahan
        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1> Login Admin</h1>
<?php if(isset($error)) : ?>
    <p>Username dan Password SALAH!</p>
<?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>

            <button type="submit" name="submit">Login</button>

        </form>
    </ul>
</body>

</html>