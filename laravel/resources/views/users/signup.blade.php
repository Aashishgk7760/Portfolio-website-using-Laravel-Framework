<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/signup.css')}}">>
    <title>Sign up</title>
    <script type="text/javascript">
    function validateForm()
    {
    var name= document.getElementById("f");
    var lname= document.getElementById("l");
    var email= document.getElementById("e");
    var uname=document.getElementById("U");
    var pass=document.getElementById("pa");
    var cpass=document.getElementById("rp");
    if(name.value.trim() =="")
    {
        alert("Blank firstname");
        name.style.border ="solid 3px red";
        return false;
    }
    if(lname.value.trim()==""){
        alert("Blank password");
         lname.style.border ="solid 3px red";
        return false;
} 
     if(email.value.trim()==""){
        alert("Blank Email");
          email.style.border ="solid 3px red";
        return false;
    }
     if(uname.value.trim()==""){
        alert("Blank UserName");
          uname.style.border ="solid 3px red";
        return false;
    }
     if(pass.value.trim()==""){
        alert("Blank password");
          pass.style.border ="solid 3px red";
        return false;
    }
     if(cpass.value.trim==""){
        alert("Blank");
          cpass.style.border ="solid 3px red";
        return false;
    }
    else{
        return true;
    }
}
</script>
</head>
<body>
    <div id="wrapper">
        <div class="modal" id="id90">
            <span onclick="document.getElementById('id90').style.display='none'"
            class="close" title="modal close">&times;</span>

<form onsubmit="return validateForm()" class="modal-content animate" action="{{url('forms')}}" style="border: 1px solid #ccc" method="post">
    <div class="container">
    {{csrf_field()}}
        <h3>CHECK IN</h3>
        <hr style="max-width: 100%">
        <label for="Name"><b>Name</b></label>
        <input class="array" id="f" type="text" name="Name" required>

        <label for="Lname"><b>Last Name</b></label>
        <input class="array" id="l" type="text" name="Lname" required>

        <label for="email"><b>Email</b></label>
        <input  id="e" type="text" name="email" required>

        <label for="user"><b>User</b></label>
        <input class="array" id="U" type="text" name="user" required>

        <label for="psw"><b>Password</b></label>
        <input class="array" id="pa" type="password" name="psw" required>

        <label for="psw-rep"><b>Confirm Password</b></label>
        <input class="array" id="rp" type="password" name="pswrep" required>
        <hr>
        <div class="button1">
            <button type="button" onclick="document.getElementsById('i99').style.display='none'" class="cancelbtn">Close</button>
            <button type="submit" name="signup-submit" class="Signupbtn">Save</button>
        </div>
        </div>
    </form>
    </div>
</body>
</html>