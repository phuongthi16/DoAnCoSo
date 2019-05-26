<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <title>Đồ án</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


</head>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
        padding: 20px
    }

</style>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
        <a href="#home" class="w3-bar-item w3-button">Home</a>
        <a href="#menu" class="w3-bar-item w3-button">Menu</a>
        <a href="#about" class="w3-bar-item w3-button">About</a>
        <a href="#footer" class="w3-bar-item w3-button">Contact</a>
        <a href="#footer" class="w3-bar-item w3-button">Game</a>
    </div>
</div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
    <img class="w3-image" src="/images/bg.jpg" alt="Architecture" width="1500" height="800">
</header>

<!-- !PAGE CONTENT! -->

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
    <div id="app">
        <product-landing-page v-bind:products="{{json_encode($products)}}"></product-landing-page>
    </div>

    <!-- About Section -->
    <div class="w3-container w3-padding-32 w3-center">
        <h3>About</h3><br>
        <img src="/images/thi.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="400" height="265"
             id="about">
        <div class="w3-padding-32">
            <h4><b>Nếu bạn muốn biết về tui</b></h4>
            <h6><i>Béo và ngăm</i></h6>
            <p>Xin chào</p>
        </div>
    </div>

    <!-- !FOOTER! -->
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px"
            id="footer">
        <a href="https://www.facebook.com/profile.php?id=100024118566236" target="_blank"
           class="fa fa-facebook-official w3-hover-opacity"></a>
        <a href="https://www.instagram.com/thi.libraaa/" target="_blank" class="fa fa-instagram w3-hover-opacity"></a>
        <p class="w3-medium">Since 2019</p>
        <p class="w3-medium">By Phương Thi</p>
    </footer>

    <script src="js/app.js"></script>
</div>
</body>
</html>
