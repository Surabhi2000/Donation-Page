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
        <?php
           include 'connection.php';
           include 'link.php';
        ?>
    </head>
    <body style="background-image: url(img/download.png);">
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
                        <li class="nav-item"> <a href="#" class="nav-link"> Register here </a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron" style="height: 600px; width: 650px;justify-content: center; margin: 20px auto; 
            background-color:#e0e0e0;border-radius:  40px; opacity: 1;">
            <div class="panel">
                <div class="panel-heading">
                    <h2>REGISTRATION</h2>
                </div>
                <div class="panel-body">
                    <form name="f" form action="registration.php" method="post" >
                        <div class="container">
                            <div class="form-inline">
                                <label for="name">Name</label><br>
                                <input type="text" class="form-control" id="name" name="name" 
                                onfocus="this.value=''" value="Enter name" required><br><br>
                            </div>
                            <div class="form-inline">
                                <label for="city">City</label><br>
                                <input type="text" class="form-control" id="city" name="city" 
                                onfocus="this.value=''" value="Enter city" required><br><br>
                            </div>
                            <div class="form-inline">
                                <label for="mail">Email address</label><br>
                                <input type="email" class="form-control" id="mail" 
                                name="mail" onfocus="this.value=''" value="Enter email" required><br>
                                 <small id="emailHelp" class="form-text text-muted">
                                    We'll never share your email with anyone else.
                                 </small><br><br>
                            </div>
                            <div class="form-inline">
                                <label for="password">Password</label><br>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Password" name="password" required><br><br>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   
        <footer class="container-fluid bg-4 text-center" style="height: 40px; padding:10px; bottom: 0;">
            <p>Donate here : <a href="payment.php"> click here</a></p>
        </footer>
    </body>
</html>

