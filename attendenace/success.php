<?php 
$title='Form Submission';
require_once 'includes/header.php'; 
require_once 'db/conn.php';

if(isset($_POST['submit']))
{
   
  $fname=$_POST['firstname'];
  $lname=$_POST['lastname'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $contact=$_POST['phone'];
  $specialty=$_POST['specialty'];
  $isSuccess= $crud->insertAttendees($fname,$lname,$dob,$email,$contact,$specialty);

  if($isSuccess)
  {
    echo '<h1 class="text-center text-success"> You have been registered</h1>';
  }
  else{
    echo '<h1 class="text-center text-danger">There was an error in processing</h1>';
  }
}

?>



<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['firstname'].' '.$_POST['lastname']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['specialty']; ?></h6>
    <p class="card-text"><?php echo "<b>Date of birth</b>:".' '.$_POST['dob']."<br>";
                            echo "<b>Email</b>:".' '.$_POST['email']."<br>";  
                            echo "<b>Contact number</b>:".' '.$_POST['phone']."<br>";                                   ?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

<br>
<br>
<?php


?>






<?php require_once 'includes/footer.php'; ?>