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
    <title>Contact ME</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/contactme.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
      function validation() {
      var name = document.getElementById("yname").value;
      var email = document.getElementById("em").value;
      var phone = document.getElementById("ph").value;
      var text = document.getElementById("tx").value;
      if(name.length < 5){
    alert("Please Enter valid Name");
    return false;
  }
  if(email.length < 10){
    alert("Please Enter valid Name");
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    alert("Please Enter valid Phone Number");
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    alert("Please Enter valid email");
    return false;
  }
  if(tx.length <= 140){
   alert("Please Enter text equal to 140 charecters");
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}
    </script>
    <style>
    .invalid-feedback{
        display:block;
    }
    </style>
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
            <div class="row">
                <div class="column">
            <div class="container">
             <p>CONTACT ADDRESS</p>
             <i class="fa-fw  fa fa-map-marker fa-2x fa-border"  aria-hidden="true" style="background-color: blue; color: white"></i>
             <span>Address:1002 Greek Dr Arlington TX-76013</span>
             <br>
             <i class="fa-fw fa fa-phone fa-2x fa-border" aria-hidden="true" style="background-color: blue; color: white"></i>
             <span>Phone: +1 214 412 3412</span>
             <br>
             <i class="fa-fw fa fa-whatsapp fa-2x fa-border" style="background-color:blue; color: white;"aria-hidden="true"></i>
             <span>Whatsapp: +1 214 412 3412</span>
             <br>
             <i class="fa-fw fa fa-skype fa-2x fa-border" style="background-color:blue; color: white;" aria-hidden="true" ></i>
             <span>Skype: <a href="e.example">e.example</a></span>
             <br>
             <i class=" fa-fw fa-border fa-2x fa fa-envelope-o" style="background-color:blue; color: white;" aria-hidden="true"></i>
             <span>E-mail: <a href="luiz123@gmail.com"> aashishgk7@gmail.com</a></span>
             <br>
             <i class="fa-fw fa-2x fa-border fa fa-home" style="background-color:blue; color: white;" aria-hidden="true"></i>
             <Span>Website: <a href="www.luiz.com">www.Arocks.com</a></Span>
             <br>
             <div id="links">
             <a href="https:www.facebook.com/AashishGk"><i class=" fa-fw fa-1.5x fa-border fa fa-facebook" aria-hidden="true" style="color:gray "></i></a>
             <a href="https:www.twitter.com"><i class=" fa-fw fa-border fa-1.5x fa fa-twitter" aria-hidden="true" style="color: gray" ></i></a>
             <a href="https:www.linkedin.com"><i class=" fa-fw fa-border fa-1.5x fa fa-linkedin" aria-hidden="true" style="color: gray"></i></a>
             <a href="https:www.pinterest.com"><i class="fa-fw fa-border fa-1.5x fa fa-pinterest-p" aria-hidden="true" style="color: gray"></i></a>
             <a href="https:www.gmail.com"><i class="fa-fw fa-border fa-1.5x fa fa-google-plus" aria-hidden="true" style="color: gray"></i></a>
             <a href="https:www.snapchat.com"><i class="fa-fw fa-border fa-1.5x fa fa-snapchat"    aria-hidden="true" style="color: gray"></i></a>
             </div>
             </div>
            </div>
            <div class="column">
                <div class="container-1">
                        <p>LET'S HAVE FUN</p>
                                <form onsubmit="return validation()" method="POST" action="{{route('contact.sendemail')}}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <input id="yname" type="text" name="Yourname" placeholder="Your Name" required>
                                    @if($errors->has('Yourname'))
                                    <small class="form-text invalid feedback">{{$errors->first('Yourname')}}</small>
                                    @endif
                                    <hr>
                                    <input id="em" type="text" name="Email" placeholder="Email"required>
                                    @if($errors->has('Email'))
                                    <small class="form-text invalid-feedback">{{$errors->first('Email')}}</small>
                                    @endif
                                    <hr>
                                    <input id="ph" type="text" name="Phone" placeholder="Phone"required>
                                    @if($errors->has('Yourname'))
                                    <small class="form-text invalid-feedback">{{$errors->first('Phone')}}</small>
                                    @endif
                                    <hr>
                                    <div class="txt">
                                    <textarea id="tx"  name="Yourmessage" placeholder="Your Message" style="height: 100px; width:100%; box-sizing: border-box; resize: none" required></textarea>
                                    @if($errors->has('Yourmessage'))
                                    <small class="form-text invalid-feedback">{{$errors->first('Yourmessage')}}</small>
                                    @endif

                                    <hr>
                                    <button name="submit" type="submit">Send Now</button>
                                    </form>
                                
                                  
                </div>
            </div>
                   
                        
        </div>
    </body>
</html>