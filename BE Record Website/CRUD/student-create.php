<?php
session_start();

?>


<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Create A reservation</title>
</head>
<body>

<div class="main1">

    <div class="main">
        <div class="navbar">
            <div class="icon">

     
              <h2 class="logo">BE Records</h2>
            </div>

            <div class="menu">
                <ul>

                    <li><a href="#">ACCOUNT</a></li>
                    <li><a href="file:///C:/Users/faree/PingPong/Website/book.html">BOOK</a></li>
                    <li><a href="C:\Users\faree\PingPong\Website\packages.html">PACKAGES</a></li>
                    <li><a href="file:///C:\xampp\htdocs\login\aboutus.php">ABOUT</a></li>
                    
                </ul>
            </div>

     
            <div>

<br>

<br>
<br><br>
<br>





<br>
<br>
<br>






</div>









  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>BOOk !
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>package</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </div>
</div>






















<style>

.logout a{
    text-decoration: none;
    color: rgb(231, 231, 231);
    font-weight: bold;
}

.logout{

  margin-top: 10px;
	font-family: sans-serif;
	font-size: 18px;
	line-height: 1.5;
  text-decoration: none;
  color: #1cc7d6;
  text-align: center;

  width: fit-content;

	background-color: #0b451c;
  box-shadow: inset 0 0 0 0 #f9e506;
  transition: ease-out 0.8s;
	padding:12px 40px;
	text-decoration: none;
	color:#fff;
	font-size: 25px;
	letter-spacing: 1.5px;
  font-family:'Times New Roman', Times, serif;

}

.logout:hover{

  cursor: pointer;
  background-color: #a52a2a;
  box-shadow: inset 300px 0 0 0 #00ffd9;
	color:#fff;
}






  .index{

    font-family:'Times New Roman', Times, serif;
    font-size: 50px;
    color: #1cc7d6;


  }

.main1{

padding: 0px;
margin: 0px;
height: 100vh;
margin-top: 0px;

background-image:url(https://i.pinimg.com/originals/86/9c/50/869c5097aebe098de3a8b08a13dd1b8e.jpg);
background-repeat: no-repeat;
background-size: cover;

}

*{
    margin: 0;
    padding: 0;
}








.main{


  
  
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}



.logo{
    color: #96161e;
    font-size: 40px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    padding-left: 5px;
    float: left;
    padding-top: 10px;
    margin-top: 5px;
    transition: font-size 0.8s;

    cursor: pointer;

}

  .logo:hover{



    color: #ff0000;

    font-size: 42px;


}

.menu{
    width: 400px;
    float: left;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
    text-decoration: none;
    color: #0d695b;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #1cc7d6;
    font-size: 16px;
}

.search{
    width: 330px;
    float: left;
    margin-left: 270px;
}

.srch{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    width: 200px;
    height: 40px;
    background: transparent;
    border: 1px solid #0d695b;
    margin-top: 13px;
    color: #ffffff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width: 100px;
    height: 40px;
    background: #0d695b;
    border: 2px solid #96161e;
    margin-top: 13px;
    color: #a8dadc;
    font-size: 15px;
    border-bottom-right-radius: 25px;
    border-bottom-right-radius: 25px;
    transition: 0.2s ease;
    cursor: pointer;
    transition: font-size 0.5s;
}
.btn:hover{
    color: #ffffff;
    font-size: 17px;
}



.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #ffffff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #96161e;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    border-radius: 10px;
    cursor: pointer;
    transition: font-size 0.5s;

    
}

.content .cn a{
    text-decoration: none;
    color: #ffffff;
    transition: .3s ease;
}

.cn:hover{
    background-color: #1a5376;
    font-size: 20px;
}

.content span{
    color: #457b9d;
    font-size: 65px
}

.form{
    width: 250px;
    height: 380px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    transition: font-size 0.5s;
}

.form h2{
    width: 220px;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    text-align: center;
    color: #fafafa;
    font-size: 22px;
    font-weight: 100;
    background-color: #0a7d5a;
    border-radius: 3px;
    margin: 2px;
    padding: 8px;
}

.form input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #d7d7d7;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #ffffff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #ffffff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #75121a;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #ffffff;
    transition: 0.4s ease;
    transition: font-size 0.5s;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 100;
    font-size: 22px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.btnn:hover{
    background: #134a6d;
    color: #457b9d;
    font-size: 20px;
    cursor: pointer;
}
.btnn a{
    text-decoration: none;
    color: rgb(231, 231, 231);
    font-weight: bold;
}
.form .link{
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  font-weight: 100;
    font-size: 22px;
    padding-top: 20px;
    text-align: center;
}
.form .link a{
    text-decoration: none;
    color: #8e1313;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}




</style>











</body>
</html>