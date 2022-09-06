<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

		mysqli_query($con, $query);

			header("Location: login.php");

			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>









<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
                    <li><a href="C:\Users\faree\OneDrive\Desktop\Website-original\book.html">BOOK</a></li>
                    <li><a href="C:\Users\faree\PingPong\Website\packages.html">PACKAGES</a></li>
                    <li><a href="file:///C:\Users\faree\PingPong\Website\About3.html">ABOUT</a></li>
                    
                </ul>
            </div>

            


            


     

</div> 

<div class="content">
    <h1> PACKAGES</h1>

    <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
         expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus 
        <br> a quae totam ipsa illum minus laudantium?</p>

        <button class="cn"><a href="login.php">JOIN US</a></button>

        
        <div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br> 

		</form>


    </div>
    
            </div>


</div> 

</div> 





	<style type="text/css">

.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.main{


  
  
width: 100%;
background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(1.jpg);
background-position: center;
background-size: cover;
height: 100vh;
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





































	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
    margin-left: 100vh;
    margin-top: 0;
    padding-top: 50px;
		width: 400px;
		padding: 30px;
	}



















	</style>





</body>
</html>