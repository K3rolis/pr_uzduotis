<?php

class Comments
{

    function storeComment()
    {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $created_at = date("Y-m-d");

        include('database.php');

        $sql = "INSERT INTO comments (email, name, comment, created_at) VALUES ('$email','$name', '$comment', '$created_at')";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }
}

$comments = new Comments();
