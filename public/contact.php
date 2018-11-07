<?php require_once('../private/initialize.php') ?>
<?php $currentpage="contact" ?>
<?php  include(SHARED_PATH . '/header.php') ?>
<?php $confirm = isset($_GET['sent']) ? $_GET['sent']: 'false'; ?>
  <!--Header-->

<div class="ttp-features-banner">
<div id="ttp-page-over">
<div class="row " >
    <div class="col-md-12" style="text-align:center;">
<h1>Contact</h1>
<br>
<p id="ttp-features-text">Thank you for your interest in Tilt the Pole.
  Please choose the group that best fits your needs,
  and we will be more then happy to get some soul into your pole!</p>
 </div>
</div>
</div>
</div>

<?php if ($confirm=='true'){ ?>
<h5 class="alert alert-primary">Submission successful</h5>
<?php } ?>
<?php if ($confirm=='error'){ ?>
<h5 class="alert alert-warning">Submission Failed, Try Again</h5>

<?php } ?>


<br>
<div class="row">
<div class="col-md-1 " >
</div>
      <div class="col-md-5 " >


        <h3>Residential Customers</h3>
        <h6>For single purchase or other questions, please click below.</h6>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Residential</button>

<br>
<br>

        <h3>Commercial Customer or Trade Professional</h3>
        <h6>For commerical installation requests or any other inquires, please click below.</h6>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Commercial</button>
      </div>

      <div class="col-md-1 " >

      </div>

      <div class="col-md-5 " >


        <div  >
        <ul id="ttp-contact" class= "list-group">
        <b><li>Contact Info</li></b><br>

        <b><li>Address:</li></b>
        <li>902 S. Randall Road, #177</li>
        <li>St. Charles, IL 60174</li>
        <br>

        <b><li>Phone Number:</li></b>
        <li>630-965-4310</li>
        <br>
        <b><li>Email Address:</li></b>
        <li>sales@tiltthepole.com</li>
        </ul>

        </div>

      </div>


</div>
</div>
<br>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo WWW_ROOT . '/send_message.php?id=res';?>" method="post">
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="message" class="col-form-label">Message:</label>
            <textarea class="form-control"  name="message"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary"  type="Submit" name="" value="Send Message">
      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo WWW_ROOT . '/send_message.php';?>" method="post">
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="message" class="col-form-label">Message:</label>
            <textarea class="form-control"  name="message"></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary"  type="Submit" name="" value="Send Message">
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->

<?php  include(SHARED_PATH . '/footer.php') ?>
