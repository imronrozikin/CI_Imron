<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?>
<main role="main" class="container">
<div class="row justify-content-md-center">
	<div class="col-md-8 col-md-offset-8">
		<h1 class="text-center"><?php echo $page_title; ?></h1>
	   	<div class="form-group">
	       <label>Nama Lengkap</label>
	       <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama') ?>">
	   	</div>

	   	<div class="form-group">
	       <label>Kodepos</label>
	       <input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?php echo set_value('kodepos') ?>">
	   	</div>

	   	<div class="form-group">
	       <label>Email</label>
	       <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
	   	</div>

	   	<div class="form-group">
	       <label>Username</label>
	       <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username') ?>">
	   	</div>

	   	<div class="form-group">
	       <label>Password</label>
	       <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password') ?>">
	   	</div>
	   	<div class="form-group">
	       <label>Konfirmasi Password</label>
	       <input type="text" class="form-control" name="password2" placeholder="Konfirmasi Password" value="<?php echo set_value('password') ?>">
	   	</div>
   		<button type="submit" class="btn btn-primary btn-block">Daftar</button>
   	</div>
</div>
</main>
<?php echo form_close(); ?>
