<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Activity 2</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>     
        header {
            background-color: #003366; 
            color: #ffffff;
            padding: 3rem 1rem; 
            text-align: center;
        }

        footer {
            background-color: #003366; 
            color:#ffffff;
            text-align: center;
            padding: 1rem 0;
            margin: 0;
            width: 100%; 

        }

    </style>
</head>
<body>

<header>
    <h1 class="display-4"><strong>Activity 2 - Bootstrap Website : Section 3</strong></h1>
</header>

<br/>
<hr/>

<div class="container-fluid">

<a href="#">Messages<span class="badge">10</span></a></br>
<a href="#">Notifications<span class="badge">30</span></a>
<button class="btn btn-primary">Click to see Notifications<span class="badge">500</span></button>

<br/>
<hr/>

<div class="page-header">
        <h3>Download <span class="label label-default">Version 10.1</span></h3>
</div>
<br/>


<div class="container-fluid">
    
    <div class="alert alert-danger fade in"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already Exists!!!</div>
    <div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already Exists!!!</div>
    <div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already Exists!!!</div>
    <div class="alert alert-info"><a href="#" class="close" data-dismiss="alert">&times;</a>Record already Exists!!!</div>
</div>

<br/>
<hr/>

<div class="container-fluid">
    <div class="jumbotron">
        <h2>Heading in jumbotron</h2>
    </div>
        <h1>Heading in jumbotron</h1>

    <div class="page-header">
        <h1>Welcome</h1>

    </div>

    <p class="well well-sm">This is the well</p>
    <p class="well">This is the well</p>
    <p class="well well-lg">This is the well</p>

</div>

<br/>
<hr/>

<div class="container-fluid">
    <span class="glyphicon glyphicon-trash"></span>:Trash Can <br/>
    <span class="glyphicon glyphicon-pencil"></span>: Pencil <br/>
    <button class="btn btn-success"><span class="glyphicon glyphicon-search"></span>Find</button>
</div>

<br/>
<br/>
<hr/>

<div class="container-fluid">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
            College
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">CCS</a></li>
            <li><a class="dropdown-item" href="#">CET</a></li>
            <li><a class="dropdown-item" href="#">CBA</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Exit</li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false">
            College
        </button>
        <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">CCS</a></li>
            <li><a class="dropdown-item" href="#">CET</a></li>
            <li><a class="dropdown-item" href="#">CBA</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Exit</li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="dropup">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false">
            College
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">CCS</a></li>
            <li><a class="dropdown-item" href="#">CET</a></li>
            <li><a class="dropdown-item" href="#">CBA</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Exit</li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</div>

<br/>
<br/>
<hr/>

<div class="container-fluid">
    <button class="btn btn-default">Click Me</button>
    <button class="btn btn-primary btn-xs">Click Me</button>
    <button class="btn btn-info btn-lg">Click Me</button>
    <button class="btn btn-success btn-md">Click Me</button>
    <button class="btn btn-warning">Click Me</button>
    <button class="btn btn-danger btn-sm">Click Me</button>
    <button class="btn btn-link">Click Me</button>
    <button class="btn btn-danger btn-block">Click Me</button>
    <button class="btn btn-danger disabled">Click Me</button>
    <button class="btn btn-danger active">Click Me</button>
</div>

<div class="btn-group">
    <button class="btn btn-info">Home</button>
    <button class="btn btn-info">About Us</button>
    <button class="btn btn-info">Contact Us</button>
    <button class="btn btn-info">Products</button>
</div>

<div class="btn-group-vertical">
    <button class="btn btn-info">Home</button>
    <button class="btn btn-info">About Us</button>
    <button class="btn btn-info">Contact Us</button>
    <button class="btn btn-info">Products</button>
</div>

<div class="btn-group w-100 mt-3">
    <button class="btn btn-success flex-fill">Home</button>
    <button class="btn btn-success flex-fill">About Us</button>
    <button class="btn btn-success flex-fill">Contact Us</button>
    <button class="btn btn-success flex-fill">Products</button>
</div> 

<div class="container">
    <div class="row mt-4">
        <div class="col-md-4">
            <img src="pix/snoopy.jpg" class="img-responsive" alt="Normal Image">
        </div>
        <div class="col-md-4">
            <img src="pix/snoopy.jpg" class="img-responsive img-rounded" alt="Rounded Borders">
        </div>
        <div class="col-md-4">
            <img src="pix/snoopy.jpg" class="img-responsive img-circle" alt="Circle Frame">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <img src="pix/snoopy.jpg" class="img-responsive img-thumbnail" alt="Thumbnail Image">
        </div>
    </div>
</div>

<footer>
    <p class="mb-0">© 2024 Applications Developement and Emerging Technologies | Talana, Lyza Jerell S. | 3BSIT-2</p>
</footer>

</body>    
</html>
