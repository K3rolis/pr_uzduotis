<?php
        if (isset($_POST['submit'])) {
            $errors = $validation->validateForm();
            if ($errors == null) {
                $comment = $comments->storeComment();
                echo "<div class='container alert alert-success' style='text-align:center' role='alert'> Thank you, for your reply</div>";
            }
        }
?>