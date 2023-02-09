<?php
class crud{
    private $db;
    function __construct($conn)
    {
        $this->db=$conn;
    }
    public function insertAttendees($fname, $lname, $dob, $email, $contact, $specialty)
    {
        try{
            $sql="INSERT INTO atendee (first_name,last_name,dob,email,contact_no,specialty) VALUES(:fname,:lname,:dob,:email,:contact,:specialty)";
            $stmt= $this->db->prepare($sql);
            //$stmt->bindparam(':attendee',$attendee);
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':specialty',$specialty);

            $stmt->execute();
            return true;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendees()
    {
        $sql = "SELECT * FROM `atendee` a inner join specialty s on a.specialty=s.specialty_id" ;
        $result=$this->db->query($sql);
        return $result;
    }

    public function getSpecialty()
    {
        $sql = "SELECT * FROM `specialty`;";
        $result=$this->db->query($sql);
        return $result;
    }
}

?>