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
        <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/Blog/pagination") ?>">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/Category") ?>">Kategori</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("index.php/Blog/datatable") ?>">Blog DataTable</a>
      </li>
    </ul>
  </div>
</nav>


<main role="main" class="container">
  <?php echo form_open('user/update/'.$this->uri->segment(3))?>
 <div class="form-group">
   <label>Nama Lengkap</label>
   <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $user[0]->nama; ?>">
 </div>

 <div class="form-group">
   <label>Kodepos</label>
   <input type="text" class="form-control" name="kodepos" placeholder="Kodepos" value="<?php echo $user[0]->kodepos; ?>">
 </div>

 <div class="form-group">
   <label>Email</label>
   <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $user[0]->email ?>">
 </div>

 <div class="form-group">
   <label>Username</label>
   <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $user[0]->username ?>">
 </div>

 <div class="form-group">
   <label>Password</label>
   <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $user[0]->password ?>">
 </div>
 <button type="submit" class="btn btn-primary btn-block">Daftar</button>
</main>

<script>
  $(document).ready(function() {
    $('#dt-basic').DataTable();
  } );
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
</body>
</html>