<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" type="text/css" href="{{asset('/css/index.css')}}">
 <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script defer src="login.js"></script>
 <title>Homepage</title>
 <script type="text/javascript">
 function validate()
{
    var username= document.getElementById("u");
    var pass= document.getElementById("p");
    if(username.value.trim() =="")
    {
        alert("no blank allowed");
        username.style.border ="solid 3px red";
        return false;
    }
    else if(pass.value.trim()==""){
        alert("Blank password");
        return false;
    }
    else{
        return true;
    }
}
</script>
</head>
<body>
        <div id="navbar">
                <ul>
                    <img src ="{{URL('/img/logo.png')}}">
                    <h2>AASHISH</h2>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SKILLS</a></li>
                    <li><a href="#">RESUMES</a></li>
                    <li><a href="#">PORTFOLIO</a>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">REFERENCE</a></li>
                    <li><a class="#">HIRE ME</a></li>
                    <li><a href="#modal" class="modal-open" onclick="document.getElementById('modal').style.display='block'">LOGIN</a>
                    </li>
                    <li><a href="{{URL::route('users.signup')}}">SIGN UP</a></li>
                     <li><a href="{{URL::route('users.logout')}}">LOGOUT</a></li>
                    <h5><i>©DiazApps ALL RIGHTS RESERVED BY </i><span style="color: blue">Aashish</span></h5>
        
        
                </ul>
                
                </div>
                <div id="wrapper">            
                        <div id="jumbo">
                                <div class="jumbotron">
                                    <span><h1>HELLO I'M<br></span>
                                    AASHISH</h1>
                                    <h3>MOBILE DEVELOPER|</h3>
                                <button type="submit">Download My CV<i class="fa-fw fa-1.5x  fa fa-download" aria-hidden="true"></i></button>
                                </div>
                          </div>
                           </div> 
 <div class="modal" id="modal">
    <div class="modal__content">
      <a href="#" class="modal_close" onclick="document.getElementById('modal').style.display='none'">&times;</a>
      <h2 class="modal__heading">LOGIN</h2>
        <form onsubmit="return validate()" method="POST" action="{{ action('FormController@logs') }}">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <div class= "container">
                    <label for="uname"><b>Username</b></label>
                    <input id="u" type="text" placeholder="Enter Username" name="uname" required>
                    <label for="psw"><b>Password</b></label>
                    <input id="p" type="password" placeholder="Enter Password" name="psw" required>
                    <button style="margin: 5px" name="login-submit" type="submit" class="loginbtn">Get in</button>
                    <button style="margin: 5px"type="button" class="cancelbtn" onclick="document.getElementById('modal').style.display='none'">Close</button>
                    </form>
                    </div>
    </div>

</body>