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
        <style>
            table {
                padding-left: 40px;
                margin-left: auto;
                margin-right: auto;
                width: 80%;
                color: #212121;
                font-family: monospace;
                font-size: 16px;
                justify-content: center;
                text-align: center;
            }

            th {
                background-color: #212121;
                color: white;
                text-align: center;
                font-size: 20px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
        </style>
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
                        <li class="nav-item"> <a href="registration.php" class="nav-link"> Register here </a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron" style="height: auto; width: 650px;justify-content: center; margin: 20px auto; 
        background-color:#e0e0e0;border-radius:  40px; opacity: 1;">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>City</th>
                </tr>
                <?php
                    include 'connection.php';
                    $sql = "SELECT Id,Name, City FROM user_information";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Id"]. "</td><td>" . $row["Name"] . "</td><td>"
                    . $row["City"]. "</td></tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $con->close();
                ?>
            </table>    
        </div>
        
        <footer class="container-fluid bg-4 text-center" style="height: 40px; padding:10px;bottom: 0;position: fixed;">
            <p>Donate here : <a href="payment.php"> click here</a></p>
        </footer>
    </body>
</html>