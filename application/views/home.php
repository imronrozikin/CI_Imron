<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>M. Imron Rozikin</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-primary text-dark mb-4">
      <a class="navbar-brand" href="#">Imron's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <?php if ($this->session->userdata('level') == '1'): ?>
          	<li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog/pagination") ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Category") ?>">Kategori</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog/datatable") ?>">Blog DataTable</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/User/view") ?>">User</a>
          </li>
          <?php endif ?>
        </ul>
         <?php if($this->session->userdata('loggedin')) : ?>
          <div class="btn-group" role="group" aria-label="Data baru">
        <?php echo anchor('User/login', 'Login', array('class' => 'btn btn-outline-light')); ?>
          </div>
      <?php else: ?>	
          <div class="btn-group" role="group" aria-label="Data baru">
        <?php echo anchor('User/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
          </div>
        <?php endif; ?>
      </div>
    </nav>

    <?php if($this->session->flashdata('user_registered')): ?>
    <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

      </div>
    </nav>

					<div class="container">
				  <div class="col-md-6">
				    <h1>Biodata Saya dari array</h1>
				    <table class="table">
				     
				      <tbody>
				        <?php foreach ($biodata_array as $key) { ?>
				        <tr>
				          <td><?php echo $key['nama'] ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key['nim'] ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key['alamat'] ?></td>
				        </tr>
				        <?php } ?>
				      </tbody>
				    </table>
				</div>
				<div class="col-md-6">
				    <h1>Biodata Saya dari object</h1>
				    <table class="table">
				     
				      <tbody>
				        <?php foreach ($biodata_object as $key) { ?>
				        <tr>
				          <td><?php echo $key->nama ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key->nim ?></td>
				        </tr>
				        <tr>
				          <td><?php echo $key->alamat ?></td>
				        </tr>
				        <?php } ?>
				      </tbody>
				    </table>
				</div>
			<div class="col-md-6">
			    <h1>Biodata Saya dari Builder array</h1>
			    <table class="table">
			     
			      <tbody>
			        <?php foreach ($biodata_builder_array as $key) { ?>
			        <tr>
			          <td><?php echo $key['nama'] ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key['nim'] ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key['alamat'] ?></td>
			        </tr>
			        <?php } ?>
			      </tbody>
			    </table>
			</div>
			<div class="col-md-6">
			    <h1>Biodata Saya dari Builder object</h1>
			    <table class="table">
			     
			      <tbody>
			        <?php foreach ($biodata_builder_object as $key) { ?>
			        <tr>
			          <td><?php echo $key->nama ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key->nim ?></td>
			        </tr>
			        <tr>
			          <td><?php echo $key->alamat ?></td>
			        </tr>
			        <?php } ?>
			      </tbody>
			    </table>
			</div>
			</div>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
			<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->			
		</body>
	</html>
