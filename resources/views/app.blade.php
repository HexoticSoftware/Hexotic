<html lang="en">
<head>
    <title>Hexotic Software</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('styles/main.css') }}"/>

    <!-- Bootstrap JavaScript & jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</head>
<body>
<br/><br/><br/>

<h1>Hexotic Software</h1>
<h5>No bloatware. No malware. No spyware. Just software.</h5>

<br/>

<div class="container">
    @yield('content')
</div>


<br/><br/><br/><br/>
<div style="font-size:10px;font-family:arial;color:#ababab;">
    Copyright Hexotic Software 2016.  All Rights Reserved.
</div>
</body>
</html>