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
        <div class="container">
            <div class="jumbotron" style="height: 420px; width:500px;justify-content: center;margin: 20px auto;">
                <div class="slideshow-container">
                  <div class="mySlides fade">
                    <img src="img/d1.jpg" style="height:300px;width:380px;">
                    <div class="text">Donate for a noble cause</div>
                  </div>
                  <div class="mySlides fade">
                    <img src="img/d2.jpg" style="height:300px;width:380px;">
                    <div class="text">Experience the joy of giving</div>
                  </div>
                  <div class="mySlides fade">
                    <img src="img/d3.jpg" style="height:300px;width:380px;">
                    <div class="text">Donation can be in any form</div>
                  </div>
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="p">
            <h2> DISCOVER </h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                printer took a galley of type and scrambled it to make a type specimen book. It has survived 
                not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard 
                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of 
                the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through 
                the cites of the word in classical literature, discovered the undoubtable source. 
                Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
                (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on 
                the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
                "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those 
                interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero 
                are also reproduced in their exact original form, accompanied by English versions from 
                the 1914 translation by H. Rackham.
            </p>
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
            showSlides(slideIndex += n);
          }
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1;}    
            if (n < 1) {slideIndex = slides.length;}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
        </script>
        <footer class="container-fluid bg-4 text-center" style="height: 40px; padding:10px;bottom: 0; ">
            <p>Donate here : <a href="payment.php"> click here</a></p>
        </footer>
    </body>
</html>