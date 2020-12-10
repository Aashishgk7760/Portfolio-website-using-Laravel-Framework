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
    <title>About Me</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/aboutme.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
</head>
<body>
      
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
                <div class="header">
                        <h5>ABOUT ME</h5>
                </div>
                <img  style="width: 20%; height : 10%;margin-right: 10%; margin-left: 23%;" src="{{URL('/img/MyPhoto (1).jpg')}}">
                <div id="wrapper">
                <div class="container">
        <div class="row">
        <div class="column">
        <i class=" fa-fw fa-2x fa-border fa fa-user" aria-hidden="true"></i>
        <p>Name<br>
            Aashish
        </p>
        <br>
        <i class="fa-fw fa-2x fa-border fa fa-volume-control-phone" aria-hidden="true"></i>
        <p>Phone<br>

            7760557263
        </p>
        <br>
        <i class="fa-fw fa-2x fa-border fa fa-map-marker" aria-hidden="true"></i>
        <p>Address<br>
        Arlington Texas</p>
        <h6>Social Profiles</h6>
        <div id="links">
                <a href="https:www.facebook.com/AashishGk"><i class=" fa-fw fa-1.5x fa-border fa fa-facebook" aria-hidden="true" style="color:gray "></i></a>
                <a href="https:www.twitter.com"><i class=" fa-fw fa-border fa-1.5x fa fa-twitter" aria-hidden="true" style="color: gray" ></i></a>
                <a href="https:www.linkedin.com"><i class=" fa-fw fa-border fa-1.5x fa fa-linkedin" aria-hidden="true" style="color: gray"></i></a>
                <a href="https:www.pinterest.com"><i class="fa-fw fa-border fa-1.5x fa fa-pinterest-p" aria-hidden="true" style="color: gray"></i></a>
                <a href="https:www.gmail.com"><i class="fa-fw fa-border fa-1.5x fa fa-google-plus" aria-hidden="true" style="color: gray"></i></a>
                <a href="https:www.snapchat.com"><i class="fa-fw fa-border fa-1.5x fa fa-snapchat"    aria-hidden="true" style="color: gray"></i></a>
             
    </div>
    </div>
    <div id="column">
            
            <i class="fa-fw fa-border fa-2x fa fa-envelope-o" aria-hidden="true"></i>
            <span>Email <br>aashish.geesphathykrish@mavs.uta.edu
                </span>
            <br>
            <br>
            <br>
            <br>
            <i class=" fa-fw fa-border fa-2x fa fa-calendar" aria-hidden="true"></i>
            <p>Date of Birth<br>
            31 March 1996</p>
            <br>
            <br>
            <br>
            <p id="one">Nationality<br>
            Indian</p>
            <i class=" fa-fw fa-border fa-2x  fa fa-flag-o" aria-hidden="true"></i>
            
       </div>
   
</div>      
    
    <div id="para">
    <p>I have more than 2 years of experience in the field of Graphic design,Web Devolopment and Mobile Application.<br>
        
    Specialized in Adobe web & graphic design tools.Professional in Corporate branding, Graphic designing,web<br>
Designing,visualization,3D Design,graphics & animations for e-learning, illustrations, web icons, flash web banner<br>
flash intro animations,logos,brochures,posters etc.<br>
<br>
<br>
Also in system programming in web environment managing languages such as HTML,CSS,Javascript and Framework like<br>
Bootstrap,Codeignitor and Laravel.
<br>
<br>
<b>My Objectives</b> are increasing my knowledge in computer science fields and new technologies especially,web development<br>
and web design field.Always looking forward to learn new technologies and be a part of huge change in d world.</p>
<br>
<br>
<span>Yours sincerely,</span>

</div>
<img id="sig" src="{{URL('/img/signature.jpg')}}">
        
    
    
   
    
    
    </div> 
    </div>

</body>
</html>