<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/portfolio.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
    <h3 align="center">PORTFOLIO</h3>
    <div id="mycontainer">
        <button class="btn active" onclick="filterSelection('all')">All</button>
        <button class="btn" onclick="filterSelection('Websites')">Websites</button>
        <button class="btn" onclick="filterSelection('Apps')">Design</button>
        <button class="btn" onclick="filterSelection('Photography')">Photography</button>
        </div>
        <div id="navbar">
                <ul>
                    <img src="{{URL('/img/logo.png')}}">
                    <h2>AASHISH</h2>
                    <li><a href="{{URL::route('users.homepage')}}">HOME</a></li>
                    <li><a href="{{URL::route('users.aboutme')}}">ABOUT</a></li>
                    <li><a href="{{URL::route('users.skills')}}">SKILLS</a></li>
                    <li><a href="{{URL::route('users.resume')}}">RESUMES</a></li>
                    <li><a href="{{URL::route('users.portfolio')}}">PORTFOLIO</a>
                    <li><a href="http://aashishgeeshpathykrishnamurthy.uta.cloud/Wordpress/">BLOG</a></li>
                    <li><a href="{{URL::route('users.reference')}}">REFERENCE</a></li>
                    <li><a href="{{URL::route('users.hireme')}}">HIRE ME</a></li>
                    <li><a href="#">LOG IN</a></li>
                    <li><a href="#">SIGN UP</a></li>
                     <li><a href="{{URL::route('users.logout')}}">LOGOUT</a>
                    <h5><i>©DiazApps ALL RIGHTS RESERVED BY</i><span style="color: blue"><i?Aashish</span></h5>
        
        
                </ul>
                
                </div>
   <div id="myimages">  
        <img src="{{URL('/img/asgardia.PNG')}}">
        <img src="{{URL('/img/dise11.jpg')}}">
        <img src="{{URL('/img/16.jpg')}} ">
        <img id="img11" src="{{URL('/img/1.jpg')}}">
        <img id="img22" src= "{{URL('/img/app9.PNG')}}">
         <img src="{{URL('/img/dise5.PNG')}}">
        <img src="{{URL('/img/app8.PNG')}}">
         <img id="img55" src="{{URL('/img/app5.PNG')}}">
         <img src="{{URL('/img/app7.PNG')}}">
        <img id="img9" src="{{URL('/img/9.jpg')}}">
        <img src="{{URL('/img/player.PNG')}}">
        <img src="{{URL('/img/dise4.PNG')}}">

</div>
</div>

        

    
    
</body>
</html>