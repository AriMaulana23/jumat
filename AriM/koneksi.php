<?php

$conn = mysqli_connect('localhost', 'root', '', 'masbrobakery');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function createAccount($data)
{
    global $conn;

    $username  = strtolower(stripcslashes($data['username']));
    $password  = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['con-password']);

    // cek konfirmasi password / password2
    if ($password !== $password2) {
        echo "<script>
                alert('Password tidak sama!');
            </script>";

        return false;
    }

    //enskripsi password

    $password = password_hash($password, PASSWORD_DEFAULT);

    // insert data createAccount ke database

    mysqli_query($conn, "INSERT INTO user_register VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
?>