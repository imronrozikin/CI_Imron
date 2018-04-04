<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('sub/header.php');
 ?>

<div class="container">

      <?php $this->load->view('sub/menu.php') ?>

      <div class="jumbotron p-3 p-md-5 text-black rounded succsess">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">IMRON'S CONTACT</h1>
          <p class="lead my-3"><?php echo $nohp ?></p>
          <p class="lead my-3"><?php echo $email ?></p>
        </div>
      </div>

<?php $this->load->view('sub/footer.php'); ?>