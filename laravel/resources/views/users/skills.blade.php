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
    <title>Skills</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/skills.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
<body>


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
        <div class="wrapper">
        <div class="header">
            <h4>SKILLS</h4>
        </div>
    <div class="row">
        <div class="column">
            <h4>Marketable Skills</h4>
            <div class="w3-container">
                <div class="w3-light-grey">
                <div class="w3-indigo"
            style="height:23px; width:75%"><i class="fa fa-desktop" aria-hidden="true"></i> Web Technology</div></div><br>
            <div class="w3-light-grey">
            <div class="w3-green"
            style="height:23px; width:75%"><i class="fa-fw fa-1.5x fa fa-mobile" aria-hidden="true"></i>Mobile Application</div></div><br>
            <div class="w3-light-grey">
            <div class="w3-aqua" style="height:23px; width:80%;"><i class="fa fa-camera" aria-hidden="true"></i>Photography</div></div><br>
            <div class="w3-light-grey">
            <div class="w3-deep-orange" style="height: 23px; width:97%"><i class="fa fa-server" aria-hidden="true"></i> Server Administration</div></div><br>
</div>

        </div>
        <div class="column">
            <h4>Transferrable Skills</h4>
                <div class="w3-container">
                    <div class="w3-light-grey">
                    <div class="w3-indigo"
                style="height:23px; width:75%"><i class="fa fa-comments" aria-hidden="true"></i> Communication</div></div><br>
                <div class="w3-light-grey">
                <div class="w3-green"
                style="height:23px; width:75%"><i class="fa fa-users" aria-hidden="true"></i> Team Work</div></div><br>
                <div class="w3-light-grey">
                <div class="w3-aqua" style="height:23px; width:80%;"><i class="fa fa-users" aria-hidden="true"></i>Leadership</div></div><br>
                <div class="w3-light-grey">
                <div class="w3-deep-orange" style="height: 23px; width:97%"><i class="fa fa-clock-o" aria-hidden="true"></i> Time Management</div></div><br>

        </div>
    </div>
    
    
</div>

<div class="container">
       <div id="header"><h4>LANGUAGE SKILLS AND KNOWLEDGE</h4></div>
<div class="card">
        <div class="box">
            <div class="percent">
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70"></circle>

                </svg>
                <div class="number">
                    <h2>65<span>%</span></h2>
                </div>
            </div>
            <h2 class="text">Spanish</h2>
        </div>
        </div>
    <div class="card">
            <div class="box">
                <div class="percent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
    
                    </svg>
                    <div class="number">
                        <h2>95<span>%</span></h2>
                    </div>
                </div>
                <h2 class="text">English</h2>
            </div>
        </div>
        <div class="card">
                <div class="box">
                    <div class="percent">
                        <svg>
                            <circle cx="70" cy="70" r="70"></circle>
                            <circle cx="70" cy="70" r="70"></circle>
        
                        </svg>
                        <div class="number">
                            <h2>99<span>%</span></h2>
                        </div>
                    </div>
                    <h2 class="text">Kannada</h2>
                </div>
            </div>
        
 </div>

</body>
</html>