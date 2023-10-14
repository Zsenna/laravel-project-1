<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Products</title>
</head>

<body>
    <!-- Body 1 -->
    <div id="outcon" class="container-fluid">
        <div class="box" onclick="goToCart('Wire')">
            <img src="img/g1.png" onclick="showImage('img/g1.png')" alt="logo1">
            <p>Wire</p>
        </div>
        <script src="script.js"></script>
    </div>
    <!-- Body 2 -->
    <div id="outcon1" class="container-fluid">
        <h1>Our Products</h1>
        <div class="container">
            <div class="box" onclick="goToCart('Robot')">
                <img src="img/op1.png" onclick="showImage('img/op1.png')" alt="logo1">
                <p class="p">Robot</p>
            </div>
            <div class="box" onclick="goToCart('AGV')">
                <img src="img/op2.png" onclick="showImage('img/op2.png')" alt="logo1">
                <p>AGV</p>
            </div>
            <div class="box" onclick="goToCart('PLC Trainer')">
                <img src="img/op3.png" onclick="showImage('img/op3.png')" alt="logo1">
                <p>PLC Trainer</p>
            </div>
            <div class="box" onclick="goToCart('Mec Lab Non PLC')">
                <img src="img/op4.png" onclick="showImage('img/op4.png')" alt="logo1">
                <p>Mec Lab Non PLC</p>
            </div>
        </div>
        <script src="public/script.js"></script>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>