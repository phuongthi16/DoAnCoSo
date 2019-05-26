<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đồ án</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <div class="w3-top w3-hide-small">
        <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button">Home</a>
            <a href="#menu" class="w3-bar-item w3-button">Menu</a>
            <a href="#about" class="w3-bar-item w3-button">About</a>
            <a href="#footer" class="w3-bar-item w3-button">Contact</a>
        </div>
    </div>


    er>

</head>

<body>

<div id="app">
    <detail-product v-bind:product="{{json_encode($product)}}"></detail-product>
</div>

<div>
    <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px" id="footer">
        <a href="https://www.facebook.com/profile.php?id=100024118566236" target="_blank" class="fa fa-facebook-official w3-hover-opacity"></a>
        <a href="https://www.instagram.com/thi.libraaa/" target="_blank" class="fa fa-instagram w3-hover-opacity"></a>
        <p class="w3-medium">Since 2019</p>
        <p class="w3-medium">By Phương Thi</p>
    </footer>
</div>

<script src="/js/app.js"></script>
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Karma", sans-serif
    }

    .w3-bar-block .w3-bar-item {
        padding: 20px
    }

</style>
</body>
</html>
