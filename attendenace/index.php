<?php 
$title='Index';
require_once 'includes/header.php';
require_once 'db/conn.php';

$data=$crud->getSpecialty();
?>

<h1 class="text-center" style="color:#233fde"> Registration for IT Conference </h1>  
 
<form method="post" action="success.php">
<div class="mb-3">
    <label for="firstname" class="form-label"><b>First Name</b></label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="firstname">
    
  </div>

  <div class="mb-3">
    <label for="Lname" class="form-label"><b>Last Name</b></label>
    <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name" name="lastname">
    
  </div>

  <div class="mb-3">
    <label for="dob" class="form-label"><b>Date of Birth</b></label>
    <input type="date" class="form-control" id="dob" placeholder="Enter Last Name" name="dob">
    
  </div>

  <div class="mb-3">
    <label for="specialty" class="form-label"><b>Area of expertise</b></label>
    <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
        <?php while($r=$data->fetch(PDO::FETCH_ASSOC)){ ?>
             <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name'] ?></option>
        
          <?php } ?>
</select>
    
  </div>
  <div class="mb-3">
    <label for="email" class="form-label"><b>Email address</b></label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" 
    placeholder="Enter Email" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  <div class="mb-3">
    <label for="phone" class="form-label"><b>Contact info</b></label>
    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" 
    placeholder="Enter contact number" name="phone">
    <div id="emailHelp" class="form-text">We'll never share your number with anyone else.</div>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php require_once 'includes/footer.php'; ?>