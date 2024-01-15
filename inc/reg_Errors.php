<?php
if(isset($_POST['submit'])){
    $password1 = $_POST['password1'];
    $password2 = $_POST['passwoed2'];
    if($password1 != $password2){
        header('location: register.php?passmatch');
    }
    if($password1 == $password2){
        header('location: login.php');
    }
}

header('location: login.php');
   if(isset($_POST['submit'])){
    $name =$_POST['RegNo'];
       if(empty($name)){
          header('location: register.php?regcheck');
       if(!empty($name)){
           header('location: login.php');
       }
   }
   }

   if(isset($_POST['submit'])){
    $name =$_POST['gender'];
       if(empty($name)){
          header('location: register.php?gendercheck');
       if(!empty($name)){
           header('location: login.php');
       }
   }
   }

   
   if(isset($_POST['submit'])){
    $name =$_POST['birth'];
       if(empty($name)){
          header('location: register.php?birthcheck');
       if(!empty($name)){
           header('location: login.php');
       }
   }
   }

   if(isset($_POST['submit'])){
    $name =$_POST['lname'];
       if(empty($name)){
          header('location: register.php?emailcheck');
       if(!empty($name)){
           header('location: login.php');
       }
   }
   }

  


   if(isset($_POST['submit'])){
    $name =$_POST['mname'];
       if(empty($name)){
          header('location: register.php?mnamecheck');
       if(!empty($name)){
           header('location: login.php');
       }
   }
   }
        
  if(isset($_POST['submit'])){
        $name =$_POST['fname'];
           if(empty($name)){
              header('location: register.php?fnamecheck');
           if(!empty($name)){
               header('location: login.php');
           }
       }
       }
       