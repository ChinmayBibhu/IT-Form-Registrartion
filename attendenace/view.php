<?php 
$title='Attendees record';
require_once 'includes/header.php';
require_once 'db/conn.php';
$data=$crud->getAttendees();
?>
<br>
<br>
<table class="table table-bordered border-primary">
   <tr> 
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Email Address</th>
        <th>Contact Number</th>
        <th>Specialty</th>    
    </tr>
    
          <?php while($r=$data->fetch(PDO::FETCH_ASSOC)){?>

           <tr>
            <td><?php echo $r['atendee_id']?></td>
            <td><?php echo $r['first_name']?></td>
            <td><?php echo $r['last_name']?></td>
            <td><?php echo $r['dob']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['contact_no']?></td>
            <td><?php echo $r['name']?></td>
          </tr>

          <?php } ?>  
    
</table>    


<br>
<br>
<?php require_once 'includes/footer.php'; ?>