<?php
        include 'db_connect.php';
		session_start();
if (isset($_POST['uemail']) & isset($_POST['txtpass']))
{
  
    $email1=$_POST['uemail'];
$password=$_POST['txtpass'];
 
  $sql="select * from login where username='$email1' and password='$password'" ;
  $result=mysqli_query($conn,$sql);
  $sql1="SELECT * FROM `registration` WHERE `email`='$email1' and `password`='$password'" ;
  $result1=mysqli_query($conn,$sql1);
 
    if(mysqli_num_rows($result))
    {
        
       $row=mysqli_fetch_array($result);
       
         $_SESSION['Lid'] = $row['Lid'];  
        $_SESSION['username']=$row['username'];
         
     header("location:admin/index.php");    
        }

   elseif(mysqli_num_rows($result1))
   {
           
       $row=mysqli_fetch_array($result1);
	   
       $_SESSION['id']=$row['id'];
       $_SESSION['email']=$row['email']; 
        $_SESSION['name']=$row['name']; 
       header("location:User/Home.php");
       }
       
      else
      {
       header('location:admin/index.php');
                           } 
       echo '<script type="text/javascript">
   
                    alert("Incorrect Email OR Password..");
                     window.location="login.php";
                     </script>;';
    
}

    mysqli_close($conn);


        ?>
  