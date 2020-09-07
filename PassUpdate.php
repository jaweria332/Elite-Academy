<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<head>
    <title>
        Reset Password
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
          height: auto;
          text-align: center;
          margin: 0 auto;
          background-color: rgba(44,62,80,0.2);
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
      <form method="GET" action="">
      <h2>RESET PASSWORD</h2>
      <br><br>
        ENTER EMAIL : <input type="text" name="Email" size="40" maxlength="30" required="required" placeholder="Enter Email">
          <br><br>
        ENTER NEW PASSWORD : <input type="password" name="Password" size="40" maxlength="30" required="required" placeholder="Enter Password">
          <br><br>
          <input type="submit" name="submit" class="rgstrbtn" value="Reset Password" href="ProfilePage.html"><br><br>
      </form>
    </div>
<br><br>
        <div id="footer">
        <ul>
            <li>Copy Right &copy;</li>
            <li><i class="fa fa-book" aria-hidden="true"></i><a="#">  Privacy policy</a></li>
            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a="#">  Contact us</a></li>
        </ul>
    </div>
<?php
      if(($_GET['submit'] ) ){
          $pass=$_GET['Password'];
          $em=$_GET['Email'];
            $query="UPDATE USERINFO SET Password='$pass' WHERE Email='$em'";
            $data=mysqli_query($conn, $query);
            if($data){
                ?>
                <script type="text/javascript">
                    alert("Password Updated Successfully!");
                </script>
                <?php
            }
            else{
                echo "<font color='red'>Sorry Failed to update record!";
            }
        }
?>

    </body>
</html>
