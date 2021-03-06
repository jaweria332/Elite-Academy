<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html> 
<head>
    <title>
        Registration Page
    </title>
    <link rel="stylesheet" href="D:\sidra\css\fontawesome-free-5.13.0-web\css\all.css"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    
    
    *{
        padding: 0;
        margin:0;
        box-sizing: border-box;
        font-family: Arial;
        font-size: 18px;
    }
    #navbar{
        height: 100px;
        width: 100%;
        background: #222859;
        color: white;
    }
    #navbar img{
        height: 50px;
        padding-left:20px;
        margin: 10px;
        float:left;
    }
    #navbar ul{
        float: right;
        margin-top:5px;
        margin-right: 20px;
    }
    #navbar ul li{
        list-style: none;
        display: inline-block;
        padding: 20px;
        margin: 10px;
        text-align: center;
    }
    #navbar ul li a{
        color:white;
        text-decoration: none;
    }
    #navbar ul li:hover{
        background: linear-gradient(#d04f83,#ce90a9);
    }
  h1{
    display: inline-block;
    padding: 20px;
    margin:20px;
    color:#C75187;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
  }
  form{
      height:650px;
      width:45%;
      top:10%;
      position: absolute;
      margin-top: 50px;
      margin-left:22%;
     border-style: outset;
      border-width: 5px;
     padding-left:10%;
     font-family: sans-serif;
     background-color: #dbdbda;
     
  }
  

  .before
  {
    width:100px;
    height:4px;
    background-color:rgb(18, 35, 56);
    left:43%;
    top:11%;
    position: absolute;
    display: inline-block;
  }
         
  h2{
    color:#C75187;
      font-family: sans-serif;
    padding-left: 16%;

  }
  input[type=text], input[type=Password]{
  width: 70%;
  padding: 15px;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.rgstrbtn{

    background-color: #C75187;
    color:whitesmoke;
    font-family: sans-serif;
    font-variant: small-caps;
    font-weight: lighter;
    font-size: 20px;
    width:330px;
    height: 40px;
    border-style: outset;
    border-color:#C75187 ;
    
}
.rgstrbtn:hover{
  background-color: #676f67;
  font-weight: bold;
  height: 43px;
  border-color:#676f67 ;
}

#footer{
background: #222859;
color: white;
text-align: center;
}
#footer ul li{
display: inline-block;
padding:10px;
margin: 10px;
}
label #btn ,
label #cancel{
  color:white;
  font-size:30px;
  float:right;
  line-height: 80px;
  margin-right: 40px;
  cursor:pointer;
  display:none;

}
#check{
  display:none;

}

    @media (max-width:860px){
         
label #btn
{
  display:block;
}
nav ul{
  position: fixed;
  width: 100%;
  height: 165px;
  background-color:#313a6d;
  top:80px;
  left:-100%;
  text-align: center;
  transition: all .5s;
}
nav ul li{
  display:block;
  margin:50px 0;

}
nav li a{
    font-size:17px;
    
}
#check:checked ~ ul{
  left:0;

}
#check:checked ~label #btn{
display:none;
  
}
#check:checked ~label #cancel{
display:block;
  
}
form{
  height:600px;
  width: 90%;
  top:35%;
  position: absolute;
  padding-left:50px;
  margin-left:5%;
}
.pic{
  width:483px;
  height:688px;
}
.rgstrbtn{
        
background-color: #C75187;
color:whitesmoke;
font-family: sans-serif;
font-variant: small-caps;
font-weight: lighter;
font-size: 20px;
width:290px;
height: 28px;
border-style: outset;
border-color:#C75187 ;
}
h2{

    padding-left: 25%;
    font-size: 20px;
    padding-top: 10px;

}
input[type=text], input[type=Password]{
        width: 80%;
        height:10px;
        padding: 20px;
        display: inline-block;
        border: none;
        background: #f1f1f1;
      }
#footer{
        background: #222859;
        color: white;
        text-align: center;
    }
    #footer ul li{
        display: inline-block;
        padding:10px;
        margin: 10px;
    }
    </style>
</head>
<body>
  <div id="header">
    <nav id="navbar">
      <input type="checkbox" id="check">
          <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times"  id="cancel"></i></label>
        <img src="Elite Logo.png">
        <ul class="headerList">
            <li><a href="#services">Our services</a></li>
            <li><a href="#trainer">Trainers</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#userReview">User reviews</a></li>
            <li><a href="Login.php">Login</a></li>
        </ul>
    </nav>
</div>
    <!--<img src="download.jpg" class="pic" width=1332 height=700>-->
    <h2>REGISTRATION FORM</h2><hr class="before">
    <form action="" method="GET">
        Name : <input type="text" name="Name" size="40" maxlength="30" required="required" placeholder="Enter Name">
          <br /><br />

        Email : <input type="text" name="Email" size="40" maxlength="30" required="required" placeholder="Enter  Email">
          <br /><br />

        Institue : <input type="text" name="Institute" size="40" maxlength="30" required="required" placeholder="Enter Institute">
          <br /><br />

        Interest : <input type="text" name="Interest" size="40" maxlength="30" required="required" placeholder="Enter your field of interest">
          <br /><br />

        Password : <input type="password" name="Password" size="40" maxlength="30" required="required" placeholder="Enter Password">
          <br /><br />

         <input type="submit" name="submit" class="rgstrbtn" value="Register">
         

    </form>
    <div id="footer">
        <ul>
            <li>Copy Right &copy;</li>
            <li><i class="fa fa-book" aria-hidden="true"></i><a="#">  Privacy policy</a></li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a="#">  Contact us</a></li>
        </ul>
    </div>

<?php 
if($_GET['submit'])
{
    $un=$_GET['Name'];
    $em=$_GET['Email'];
    $inst=$_GET['Institute'];
    $intr=$_GET['Interest'];
    $pass=$_GET['Password'];
   
    if($un!="" && $em!="" && $inst!="" && $intr!="" && $pass!=""){
        $query="INSERT INTO USERINFO VALUES('$un', '$em', '$inst', '$intr','$pass')";
        $data=mysqli_query($conn,$query); 

        if($data){
            echo "Data inserted successfully";
        }
    }
    else{
        echo "All fields are required";
    }
}
?>
</body>
</html>
