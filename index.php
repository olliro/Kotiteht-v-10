<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f59342;
            font-family: 'Lato', sans-serif;
            text-align: center;
        }
        .container {
            width: 500px;
            margin: 0 auto;
        }
        img {
	        max-width: 100%;
	        display: block;
	        height: auto;
            margin-top: 50px;
            margin-bottom: 100px;
        }
    </style>
    <meta charset="UTF-8">
    <title> Kotitehtävä 10 </title>
</head>
<body>
    <div class="main">
        <header class="header">
            <?php include 'header.php'; ?>
        </header>
        <div class="container">
            <div class="kuva">
            <img class="image" src="kuva.jpg" alt="mies ja koira" />  
            </div>
        </div>
        <footer class="footer">
            <?php include 'footer.php'; ?>
        </footer>
    </div>
</body>
</html>