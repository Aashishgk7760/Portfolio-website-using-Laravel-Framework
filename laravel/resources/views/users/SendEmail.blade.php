
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
Hello there</p>
<p>
<h4>You have Mail from</h4> {{$data['Yourname']}}
<br>
<h4>Email Adddress</h4> 
{{$data['Email']}}
<br>
<h4>You can talk to him on call:</h4> 
<br>
{{$data['Phone']}}
<br>
<br>
    {{ $data['Yourmessage']}}


</body>
</html>