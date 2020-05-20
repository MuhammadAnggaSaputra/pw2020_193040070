<?php

if ($_POST['username']=='admin' && $_POST['password']=='12345') {
    echo '<h1>Selamat Datang Admin!</h1>';
} else {
    echo '<h1>Username/ Password Salah</h1>';
}

?>