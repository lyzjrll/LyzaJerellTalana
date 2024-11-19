<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Activity 6</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        
        html, body {
            overflow-x: hidden; 
            width: 100%; 
        }

        header {
            background-color: #003366; 
            color: #ffffff;
            padding: 3rem 1rem; 
            text-align: center;
            margin-top: 50px;
        }

        section {
            width:100vw;
            height:100vh;
            padding-top: 50px;
        }

        h1 {
            padding: 0;
            margin: 0;
        }

    </style>

</head>

<body data-spy="scroll" data-target=".navbar">

    <header>
        <h1 class="display-4"><strong>Activity 6 - Bootstrap Website</strong></h1>
    </header>

    <nav class="navbar navbar-default navbar-fixed-top">
        <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#product">Products</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#product">Products</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>

    <section id="home" style="background:green;">
        <h1>Home</h1>
    </section>
    <section id="about" style="background:blue;">
        <h1>About Us</h1>
    </section>
    <section id="product" style="background:red;">
        <h1>Products</h1>
    </section>
    <section id="contact" style="background:gray;">
        <h1>Contact Us</h1>
    </section>

</body>
</html>