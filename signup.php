<?php include "adduser.php"; ?>
<?php include "head.php"; ?>
<?php include "header.php"; ?>

<div class="mt-5 pt-5">
    <div class="form">

        <div class="note">
            <p>Say goodbye to boring forms!</p>
        </div>

        <form class="form-content" method="POST">

            <div class="form-group py-2">
                <input type="text" class="form-control" placeholder="Your Name *" name="name" value="<?php echo $name; ?>" />
            </div>

            <div class="form-group py-2">
                <input type="text" class="form-control" placeholder="Your Surname *" name="surname" value="<?php echo $surname; ?>" />
            </div>

            <div class="form-group py-2">
                <input type="text" class="form-control" placeholder="Your Email *" name="email" value="<?php echo $email; ?>" />
            </div>

            <div class="form-group py-2">
                <input type="text" class="form-control" placeholder="Your Password *" name="password" value="<?php echo $password; ?>" />
            </div>

            <button type="submit" class="btnSubmit">Submit</button>
        </form>
    </div>
</div>


<?php include "footer.php"; ?>