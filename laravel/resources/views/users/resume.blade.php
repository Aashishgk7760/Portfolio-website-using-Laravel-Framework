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
    <link rel="stylesheet" type="text/css" href="{{asset('/css/Resume.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Resume</title>
</head>
<body>
    <div id="wrapper">
            <div class="header">
                    <h2>RESUMES</h2>
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
            <div class="row">
            <div class="column">
            
                    <svg width="500" height="70">
                            <rect width="500" height="60" style="fill:rgb(0,0,255);stroke-width: 3;stroke: rgb(0,0,0)"></rect>
                            <text x="20" y="30" fill="white">DiazApps</text>
                    </svg>
                            <svg width="500" height="70">
                                    <rect width="500" height="60" style="fill:white;stroke-width: 3;stroke: rgb(0,0,0)"/>
                                    <text x="20" y="30" fill="gray">Intern(July 2016-Present)</text>
                                    </svg>
                    <br>
                    <br>
                    <br>
                    <br>
                    <svg width="500" height="70">
                            <rect width="500" height="60" style="fill:rgb(0,0,255);stroke-width: 3;stroke: rgb(0,0,0)"/>
                            <text x="20" y="30" fill="white">Polar Food C.A</text>
                            </svg>
                            <svg width="500" height="70">
                                    <rect width="500" height="60" style="fill:white;stroke-width: 3;stroke: rgb(0,0,0)"/>
                                    <text x="20" y="30" fill="gray">Manager Web Development(Jan 2013-Dec 2013)</text>
                                    </svg>
                                    <br>
                                    <br>
                                    <br>
                                    <br>   
                                    <svg width="500" height="70">
                                            <rect width="500" height="60" style="fill:rgb(0,0,255);stroke-width: 3;stroke: rgb(0,0,0)"/>
                                            <text x="20" y="30" fill="white">Government of the state of Lara</text>
                                            </svg>
                                            <svg width="500" height="70">
                                                    <rect width="500" height="60" style="fill:white;stroke-width: 3;stroke: rgb(0,0,0)"/> 
                                                    <text x="20" y="30" fill="gray">Intern(July 2006-Dec 2010)</text>  
                                                    </svg>         
            </div>
            
            <div class="column">
                    <svg width="500" height="70">
                            <rect width="500" height="60" style="fill:rgb(0,0,255);stroke-width: 3;stroke: rgb(0,0,0)"/>
                            <text x="20" y="30" fill="white">Nestle</text>
                            </svg>
                            <svg width="500" height="70">
                                    <rect width="500" height="60" style="fill:white;stroke-width: 3;stroke: rgb(0,0,0)"/>
                                    <text x="20" y="30" fill="gray">Front End Developer( Jan 2014 - Dec 2015)</text>   
                                    </svg>  
                                    <br>
                                    <br>
                                    <br>
                                    <br>  
                                    <svg width="500" height="70">
                                            <rect width="500" height="60" style="fill:rgb(0,0,255);stroke-width: 3;stroke: rgb(0,0,0)"/>
                                            <text x="20" y="30" fill="white">Sahara Travels</text>
                                            </svg>
                                            <svg width="500" height="70">
                                                    <rect width="500" height="60" style="fill:white;stroke-width: 3;stroke: rgb(0,0,0)"/> 
                                                    <text x="20" y="30" fill="gray">Full Stack Devoloper(Mar 2016-Dec 2017)</text>  
                                                    </svg> 
                                    <br>
                                    <br>
                                    <br>
                                    <br>  
                                    

                    
            </div>
            </div>
            
 </div>
    
</body>
</html>