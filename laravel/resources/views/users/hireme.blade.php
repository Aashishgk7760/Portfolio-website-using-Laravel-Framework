<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/Hireme.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Hire Me</title>
    
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
        <div id="wrapper">
  <div class="header">
    <h5 align="center">HIRE ME</h5>
  </div>
  <div class="container">
    <div class="flex-item item1"><img src="{{URL('/img/car1.png')}}">
      <h4>$450</h4>
      <p>Design for natural People<br></p>
      <br>
      <pre>                Logo<br></pre>
      <p>Advertising image to print<br></p>
      <br>
      <pre>         Photo editing<br></pre>
      <br>
      <form action="{{ action('MailController@contact') }}">
      <button id="btn">Contact us</button>
          </form>         
    
    
    
    </div>
   <div class="flex-item item2"><img src="{{URL('/img/car2.png')}}">
    <h4>$650</h4>
    <p>Informative website design<br></p>
      <br>
      <pre>                 Logo</pre>
      <br>
      <pre>             Photo editing<br></pre>
      <br>
      <pre>        Site Construction<br></pre>
      <p>Maintainance for 6 months</p>
      <br>
      <form action="{{ action('MailController@contact') }}">
      <button id="btn" type="submit">Contact us</button>
    </form>
  </div>
   <div class="flex-item item3"><img src="{{URL('/img/car3.png')}}">
    <h4>$1450</h4>
   <pre>        3D charecter design<br></pre>
      <br>
      <pre>         Charecter sketch<br></pre>
      <br>
      <pre> Digitization and development<br></pre>
      <br>
      <pre>                Animation<br></pre>
      <br>
      <pre>              Video Demo<br></pre>
      <br>
      <form action="{{ action('MailController@contact') }}">
      <button id="btn" type="submit">Contact us</button>
         </form>          
  </div>
  
  
  
  
  
    </div>
 

   
    </div>
  
  

    
</body>
</html>