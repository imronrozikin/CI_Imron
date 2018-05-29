<?php echo form_open('User/login'); ?>
<main role="main" class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?php echo $page_title; ?></h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
            <center>
            <p>Don't have account? <a href="<?php echo base_url("index.php/User/register") ?>" class="">Register</a></p>
            </center>
        </div>
    </div>
</main>
<?php echo form_close(); ?>