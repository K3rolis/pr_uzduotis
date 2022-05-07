<link rel="stylesheet" href="/includes/style.css">
<div class="container" style="width:52%">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="comment_form" id="comment_form" method="post">
        <div class="form-group row my-3">
            <label for="email" class="col-form-label col-xl-2 fw-bold text-right" id="align"> Email*</label>
            <div class="col-xl-4">
                <input type="text" name="email" id="email" class="form-control">
                <div class="error">
                    <?php echo $errors['email'] ?? '' ?>
                </div>
            </div>
            <label for="name" class="col-form-label col-xl-1 fw-bold" id="align"> Name*</label>
            <div class="col-xl-4">
                <input type="text" name="name" id="name" class="form-control">
                <div class="error">
                    <?php echo $errors['name'] ?? '' ?>
                </div>
            </div>
        </div>
        <div class="row">
            <label for="email" class="col-form-label col-xl-2 fw-bold" id="align"> Comment*</label>
            <div class="col-xl-9">
                <textarea type="text" name="comment" id="comment" class="form-control"> </textarea>
                <div class="error">
                    <?php echo $errors['comment'] ?? '' ?>
                </div>
                <button class="button my-3" name="submit" id="submit">Submit</button>
            </div>
        </div>
    </form>
</div>