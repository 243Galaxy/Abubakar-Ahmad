    <?php
      include_once("dbconnection.php");
      ?>
      <?php
      if(isset($_POST['save'])){
      $RegNo=$_POST['RegNo'];
      $Fname=$_POST['Fname'];
      $oname=$_POST['oname'];
      $gender=$_POST['gender'];
      $mail=$_POST['mail'];
      $pw=$_POST['pw'];
      $level=$_POST['level'];
      $dept=$_POST['dept'];
	  $Course=$_POST['Course'];
      $Session=$_POST['Session'];
      $Hostel=$_POST['Hostel'];
          
      
    
   	 
	  
$query=mysqli_query($con, "INSERT INTO `Stu_info`(`RegNo`, `Fname`, `oname`, `gender`, `mail`, `pw`, `level`, `dept`, `Course`,`Session`,`Hostel`) VALUES ('$RegNo','$Fname','$oname','$gender','$mail','$pw','$level','$dept','$Course','$Session','$Hostel')"); 
    if ($query) {
		
   header("refresh:2; url=index.php");
   echo 'Registration Successful';
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  }
 
	  
    ?>