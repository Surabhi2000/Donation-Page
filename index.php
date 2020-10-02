<!DOCTYPE html>
<html>
    <head>
        <title>Donate</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"> 
                        <img src="img/Logo.png" width="30" height="30"> DONATE
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"> <a href="discover.php" class="nav-link"> About us </a> </li>
                        <li class="nav-item"> <a href="donator.php" class="nav-link"> Registered Donator </a> </li>
                        <li class="nav-item"> <a href="registration.php" class="nav-link"> Register here </a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="content">
            <img src="img/pinterest2.jpg" class="img">
            <div class="second">
                <div class="main">
                    Refuse to be ordinary
                </div>
                <div class="sub">
                    Your little donation can change someones life
                </div>
            </div>
            <div class="third">
                <button class="btn" type="submit" onclick="location.href='payment.php'">DONATE HERE</button>
            </div>
        </div>
    </body>
</html>
