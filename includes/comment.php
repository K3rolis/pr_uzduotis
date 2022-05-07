<?php
require_once('user_validator.php');
require_once('insert.php');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/includes/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Comments</title>
</head>

<body>

    <div class="mt-4">
        <hr class="new mt-4">
        <div class="form_title">Comment form</div>
        <hr class="new">

        <?php
        if (isset($_POST['submit'])) {
            $errors = $validation->validateForm();
            if ($errors == null) {
                $comment = $comments->storeComment();
                echo "<div class='container alert alert-success' style='text-align:center' role='alert'> Thank you, for your reply</div>";
            }
        }
        ?>

        <?php include_once('includes/comment_form.php') ?>

        <div class="container">
            <?php include 'comments_data.php';
            fetchComments(); ?>
        </div>
    </div>
</body>

</html>