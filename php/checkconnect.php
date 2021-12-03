<?php
  
  $user='shypefx';
  $password='Javachteam';
  $basededonnees='shypefx_bdd';

  session_start();

  $conn = mysqli_connect('mysql-shypefx.alwaysdata.net', $user, $password, $basededonnees);
    
  // Check connection

  
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  // Taking all 5 values from the form data(input)
  $email =  $_POST['email'];
  $password = $_POST['psw'];
    
  // Performing insert query execution
  // here our table name is college
  $query = "SELECT * FROM Users WHERE email = '$email' AND password ='$password' ";
    
    $result = mysqli_query($conn,$query);

    $row = mysql_fetch_row($result);

  

    echo $row[1];
    echo $row[2];
    

    if ($result){
        $_SESSION['email'] = $email;

        

        //header('Location: http://shypefx.alwaysdata.net/html/compte_connect.html'); //header to redirect, but doesnt work
        }else{
        //3.1.3 If the login credentials doesn't match, he will be shown with an error message.
        echo "Invalid Login Credentials.";
        }
        } 
    
  // Close connection
  mysqli_close($conn);
  ?>