<?php
  
  $user='shypefx';
  $password='Javachteam';
  $basededonnees='shypefx_bdd';

  $conn = mysqli_connect('mysql-shypefx.alwaysdata.net', $user, $password, $basededonnees);
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  // Taking all 5 values from the form data(input)
  $last_name =  $_REQUEST['lname'];
  $first_name = $_REQUEST['fname'];
  $email =  $_REQUEST['email'];
  $password = $_REQUEST['psw'];
    
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO Users (nom,prenom,email,password) VALUES ('$last_name', 
      '$first_name','$email','$password')";
    
  if(mysqli_query($conn, $sql)){
    
    header("http://shypefx.alwaysdata.net/html/connexion.html");

  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>