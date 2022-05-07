<?php

function fetchComments()
{
    include 'database.php';
    $sql = "select * from comments ORDER BY id DESC";
    $run = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $num = mysqli_num_rows($run);

    if ($num > 0) {
        echo "
        <span class='text-dark fs-2 mb-3'>$num Comments</span>
        <hr>";
        while ($data = mysqli_fetch_assoc($run)) {
            echo "
            <div class='background row mb-3' style='background-color:#eec7a1'>
            <div class='col-md-12'>
            <span class='fw-bold fst-italic'>" . $data['name'] . " </span>
            <span class='fst-italic'>" . $data['created_at'] . "</span>";
            if ($data['parent_id'] == 0) {
                echo "<a style='color:black; font-weight:bold' href='/includes/reply.php?=" . $data["id"] . "'><span style='float:right; cursor:pointer;' id='reply_button'> <i class='bi bi-reply-fill'></i></i>Reply</span></a>";
            }
            echo "
            </div>
            <div class='md-3 my-1' style='overflow-wrap: break-word;'> " . $data['comment'] . "</div>
            </div>
            ";
        }
        function insert()
        {
            include '../includes/comment_form.php';
        }
?>
<?php
    } else if ($num == 0 || $num < 0) {
        echo "<h2> 0 Comments</h2>";
        echo "No comments at this moment";
    }
    else echo "Something went wrong";
}