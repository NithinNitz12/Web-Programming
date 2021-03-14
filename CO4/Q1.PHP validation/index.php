<?php

if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];
    $gender=$_POST['gender'];
    $check=$_POST['check'];
    echo var_dump($gender);

    if(empty($fname)){
        $msg="Please enter first name";
    }
    
    else if(empty($lname)){
        $msg="Please enter last name";
    }
    else if(empty($email)){
        $msg="Please enter Email";
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $msg="Please enter valid email address";
    }
    
    else if(empty($pass)){
        $msg="Please enter password";
    }
    else if(strlen($pass)<=6){
        $msg="password must contain more than 6 characters ";
    }
   
    else if(empty($cpass)){
        $msg="Please confirm password";
    }
    else if($pass!=$cpass){
        $msg="password missmatch";
    }
    else if(empty($gender)){
        $msg="Please select gender";
    }
    else if(empty($check)){
        $msg="please accept the tearms and conditions";
    }  
 }

?>


<html>
    <head>
        <title>form</title>
      
    </head>
    <body>
       <form action="#" method="POST" >
           <h1 style="text-align:center;">REGISTRATION FORM</h1>
           <center>
           <table  cellpadding="5" cellspacing="10">
               <tr>
                   <th>FIRST NAME</th>
                   <td> <input type="text" name="fname"> </td>
               </tr>
               <tr>
                   <th>LAST NAME</th>
                   <td> <input type="text" name="lname"> </td>
               </tr>
               <tr>
                   <th>EMAIL</th>
                   <td> <input type="text" name="email" > </td>
               </tr>
               <tr>
                   <th>PASSWORD</th>
                   <td> <input type="password" name="pass"> </td>
               </tr>
               <tr>
                   <th>CONFIRM PASSWORD</th>
                   <td> <input type="password" name="cpass"> </td>
               </tr>
               <tr>
                   <th>GENDER</th>
                   <td> <input type="radio" name="gender" value="male"> MALE
                        <input type="radio" name="gender" value="female">FEMALE 
                        <input type="radio" name="gender" value="others">OTHERS
                   </td>    
               </tr>
               
               <tr> 
                    <td>
                    </td>
                    <td> <input type="checkbox" name="check" value="checked">I Accept The Terms And Conditions</td>
               </tr>
               <tr>
                    <td></td>
                    <td> <input type="submit" name="submit">
                         <input type="reset" name="reset">
                    
                    </td>
               </tr>
               <tr>
                   <td></td>
                   <td style="color:red; font-size:larger; ">
                       <?php
                           if(isset($msg)) 
                           {
                              echo $msg;
                           }


                       ?>
                   </td>
               </tr>

           </table>
           </center>
       </form> 

    </body>
</html>