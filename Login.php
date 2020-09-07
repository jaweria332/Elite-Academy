<?php 
$host="localhost";
$user="root";
$password="";
$db="elite_academy";

$conn=mysqli_connect($host, $user, $password,$db);
if($conn){
    echo "connection is open now";
}
else{
    echo "Sorry! connection failed";
    die("connection failed because".mysqli_connect_error());
}

if(isset($_POST['Email'])){
  $un=$_POST['Email'];
  $pas=$_POST['Password'];

  $sql = "SELECT * FROM USERINFO WHERE Email='".$un."' AND Password='".$pas."' limit 1";

  $result=mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1)
  {
    header("Location: ProfilePage.html");
  }
  else
  {
    echo "Wrong Email or Password";
    exit();
  }
}
?>

<!DOCTYPE html>
<head>
    <title>
        Login
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
        color:black;
    }
    body{
      text-align: center;
      background-image: url('writing with pen.jpg');
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
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
    h2{
      padding: 10px;
      margin: 20px;
      font-size: 48px;
      color: #d04f83;
    }
    input{
      padding: 5px;
      font-size: 18px;
    }
    label #btn, label #cancel {
                color: white;
                font-size: 30px;
                float: right;
                line-height: 80px;
                margin-right: 40px;
                cursor: pointer;
                display: none;
            }
            #chk{
                display: none;
            }
    /*For mobile display*/
    @media (max-width: 860px) {
                #navbar{
                    height: 100px;
                }
                label #btn{
                    display: block;
                }
                #navbar ul{
                    position: fixed;
                    width: 100%;
                    height: 100vh;
                    background: #222859;
                    top:80px;
                    left: -100%;
                    text-align: center;
                    transition: all .5s;
                }

                #navbar ul li{
                    display: block;
                    margin: 50px 0;
                    line-height: 30px;
                }
                #navbar ul li a{
                    font-size: 20px;
                    color: white;
                }
                #chk:checked ~ ul{
                    left:0;
                }
    }
     /*For tablet display*/
     @media (max-width: 974px){
        #navbar{
            height: 175px;
            width: 100%;
            text-align: center;
        }
        #navbar img{
            float:none;
            clear: right;
            padding-left: 20px;
            padding-right: 20px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #navbar ul{
            width: 100%;
            text-align: center;
        }
        #navbar ul li a{
            margin-top: 0px;
            margin-bottom:20px;
        }
        }
        .container{
          width: 500px;
          height: 400px;
          text-align: center;
          margin: 0 auto;
          background-color: rgba(44,62,80,0.4);
        }

    .rgstrbtn{
      padding-top:10px;
      padding-bottom: 10px;
      padding-left:20px;
      padding-right:20px;
      margin:10px;
      font-size: 14px;
      color: #d04f83;
      border: 2px solid #d04f83;
      background: transparent;
    }
    #footer{
      width:100%;
      background-color: #222859;
      color: white;
      }
      #footer ul li{
        height:60px;
        display: inline-block;
        list-style-type: none;
        padding:10px;
        margin-top:20px;
        margin-left: 10px;
        margin-right:10px;
        color: white;
      }
  </style>
  </head>
    <body>
      <div id="header">
        <nav id="navbar">
        <input type="checkbox" id="chk">
                <label for="chk">
                    <i class="fa fa-bars" aria-hidden="true" id="btn"></i>
                    <i class="fa fa-times" aria-hidden="true" id="cancel"></i>
                </label>
            <img src="Elite Logo.png">
            <ul class="headerList">
                <li><a href="#services">Our services</a></li>
                <li><a href="#trainer">Trainers</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#userReview">User reviews</a></li>
                <li><a href="Login.html">Login</a></li>
            </ul>
        </nav>
    </div>
    <!--<img src="download.jpg" class="pic" width=1334 height=570>-->

    <div class="container">
      <form method="POST" action="#">
      <h2>LOGIN FORM</h2>
      <br><br>
          <input type="text" name="Email" size="40" maxlength="30" required="required" placeholder="Enter Email">
          <br><br>
          <input type="password" name="Password" size="40" maxlength="30" required="required" placeholder="Enter Password">
          <br><br>
          <a href="PassUpdate.php">forgot password?</a>
          <input type="submit" name="submit" class="rgstrbtn" value="Login" href="ProfilePage.html"><br><br>
          Not Registered??<a href="Registration.php">Registration Link</a>
      </form>
    </div>
<br><br>
        <div id="footer">
          <ul>
              <li>Copy Right &copy;</li>
              <li><i class="fa fa-book" aria-hidden="true"></i><a="#">Privacy policy</a></li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a="#">Contact us</a></li>
          </ul>
      </div>
    </body>
    </html>
