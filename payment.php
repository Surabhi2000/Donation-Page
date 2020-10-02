<!DOCTYPE html>
<html>
    <head>
        <title>Donate| Bring smile on someones face</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://js.instamojo.com/v1/checkout.js"></script>
        <script>
                Instamojo.open("https://test.instamojo.com/@subhisrivastava20"); 
        </script>
        <?php
            $email = $_POST['email'];
            $api_key = 'test_e94bc8d87eced025f98ed7ed6cf';
            $api_secret = 'test_cac54e895bafce3e3ac50a4bcdd';
            $api_salt = 'a0e5f3ef4ce1431ba702d4dcf6cd4fdd';
            $webhook_url = 'https://YOUR_WEBSITE_URL/webhook.php';
            $redirect_url = 'https://YOUR_WEBSITE_URL/thanks.php';
            $mode = "test"; 
            if($mode == 'live'){
                    $mode = 'www';
            }else{
                    $mode = 'test';
            }
        ?>
    </head>
    <body style="background-image: url(img/download.png); overflow-x: hidden;">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"> 
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
        <div class="jumbotron text-center">
            <h1 class="display-3">Thank You!</h1>
            <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
            <hr>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="index.php" role="button">Continue to homepage</a>
            </p>
        </div>
    </body>
</html>