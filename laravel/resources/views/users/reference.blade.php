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
    <title>Reference</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/reference.css')}}">
</head>
<body>
    <div id="wrapper">
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
       <h3>REFERENCES</h3>
    </div>
    <div class="grid-container">
    <div class="grid-item">
        <img src="{{URL('/img/joe.jpg')}}">
        <h4>JOE RODRIGUEZ</h4>
        <p>DEVELOPER/MUSICIAN</p>
        <blockquote>As always,great creative thinking for the best solution.<br>
            Luis Miguel is by far the most professional and knowledgable<br>
            provider i worked with. I will hire him again:)".
        </blockquote>

    </div>
    <div class="grid-item">
        <img src="{{URL('/img/rosy.jpg')}}" >
        <h4>ROSY CORNADO</h4>
        <p>PSYCHOLOGIST</p>
        <blockquote>As always,great creative thinking for the best solution.<br>
            Luis Miguel is by far the most professional and knowledgable<br>
            provider i worked with. I will hire him again:)".
        </blockquote>
    </div>
    <div class="grid-item">
        <img src="{{URL('/img/yury.jpg')}}" >
        <h4>YURY JAJITZKY</h4>
        <p>CEO/DEVELOPER</p>
        <blockquote>As always,great creative thinking for the best solution.<br>
            Luis Miguel is by far the most professional and knowledgable<br>
            provider i worked with. I will hire him again:)".
        </blockquote>
    </div>
    <div class="grid-item">
            <img src="{{URL('/img/leo.jpg')}}" >
            <h4>MARK ZUKERBERG</h4>
            <P>MARKETING/DESIGNER/MUSICIAN</P>
            <blockquote>As always,great creative thinking for the best solution.<br>
                Luis Miguel is by far the most professional and knowledgable<br>
                provider i worked with. I will hire him again:)".
            </blockquote>
    </div>
    <div class="grid-item">
            <img src="{{URL('/img/carhil.jpg')}}" >
            <h4>CARHIL MATOS</h4>
            <p>CEO/DEVELOPER</p>
            <blockquote>As always,great creative thinking for the best solution.<br>
                Luis Miguel is by far the most professional and knowledgable<br>
                provider i worked with. I will hire him again:)".
            </blockquote>
    </div>
    <div class="grid-item">
        <img src="{{URL('/img/kyss.jpg')}}" >
        <h4>KYSS CHIRINOS</h4>
        <P>MARKETING/DESIGNER</P>
        <blockquote>As always,great creative thinking for the best solution.<br>
            Luis Miguel is by far the most professional and knowledgable<br>
            provider i worked with. I will hire him again:)".
        </blockquote>
    </div>


</div>
      
    </div>
    
</body>
</html>