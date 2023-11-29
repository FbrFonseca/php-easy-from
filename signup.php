<?php include "adduser.php"; ?>
<?php include "head.php"; ?>
<?php include "header.php"; ?>

<div class="my-5 py-5">
    <div class="d-flex flex-column justify-content-around align-items-center">

        <div class="">
            <h3 class="text-white">Goodbye Boring Forms👋!</h3>
        </div>

        <form class="w-50" method="POST">

            <div class=" py-2">
                <input type="text" class="form-control" placeholder="Your Name *" name="name" value="<?php echo $name; ?>" />
            </div>

            <div class=" py-2">
                <input type="text" class="form-control" placeholder="Your Surname *" name="surname" value="<?php echo $surname; ?>" />
            </div>

            <div class=" py-2">
                <input type="email" class="form-control" placeholder="Your Email *" name="email" value="<?php echo $email; ?>" />
            </div>

            <div class=" py-2">
                <input type="password" class="form-control" placeholder="Your Password *" name="password" value="<?php echo $password; ?>" />
            </div>

            <button type="submit" class="btnSubmit">Submit</button>
        </form>
    </div>
</div>


<?php include "footer.php"; ?>