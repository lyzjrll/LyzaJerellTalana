<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Activity 3</title>
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

        #dtx img {
            width: 200px; 
            height: auto; 
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
    <h1 class="display-4"><strong>Activity 3 - Bootstrap Website : Section 4</strong></h1>
</header>

<div class="container-fluid">
            <ul class="pager">
                <li class="previous"><a href="">Previous</a></li>
                <li class="next"><a href="">Next</a></li>
            </ul>
            <ul class="pagination pagination-sm">
                <li class="active"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
            </ul>
            <ul class="pagination">
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li class="active"><a href="">4</a></li>
                <li><a href="">5</a></li>
            </ul>
            <ul class="pagination pagination-lg">
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
            </ul>
        </div>

    <br/>
    <br/>
    <hr/>
        <div class="container-fluid">
            <ul class="nav nav-pills">
                <li class="active"><a href="#p1" data-toggle="pill">HOME</a></li>
                <li><a href="#p2" data-toggle="pill">ABOUT US</a></li>
                <li><a href="#p3" data-toggle="pill">CONTACT US</a></li>
                <li><a href="#p4" data-toggle="pill">PRODUCT</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="p1">Welcome to Home</div>
                <div class="tab-pane fade" id="p2">Welcome to About Us</div>
                <div class="tab-pane fade" id="p3">Welcome to Contact Us</div>
                <div class="tab-pane fade" id="p4">Welcome to Product</div>
            </div>
            <br/>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#t1" data-toggle="tab">HOME</a></li>
                <li><a href="#t2" data-toggle="tab">ABOUT US</a></li>
                <li><a href="#t3" data-toggle="tab">CONTACT US</a></li>
                <li><a href="#t4" data-toggle="tab">PRODUCT</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="t1">Welcome to Home</div>
                <div class="tab-pane fade" id="t2">Welcome to About Us</div>
                <div class="tab-pane fade" id="t3">Welcome to Contact Us</div>
                <div class="tab-pane fade" id="t4">Welcome to Product</div>
            </div>
        </div>
    <br/>
    <br/>
    <hr/>
        <div class="container-fluid">

            <ul class="nav nav-pills">
                <li class="active"><a href="">HOME</a></li>
                <li><a href="">HTML</a></li>
                <li><a href="">PHP</a></li>
                <li><a href="">JAVASCRIPT</a></li>
            </ul>
            <ul class="nav nav-pills">
                <li class="active"><a href="">HOME</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown">PHP<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">PYTHON Function</a></li>
                        <li><a href="#">PYTHON Arrays</a></li>
                        <li><a href="#">PYTHON Loop</a></li>
                    </ul>
                <li><a href="">HTML</a></li>
                <li><a href="">JAVASCRIPT</a></li>
                
               
            </ul>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="">HOME</a></li>
                <li><a href="">HTML</a></li>
                <li class="active"><a href="">PHP</a></li>
                <li><a href="">JAVASCRIPT</a></li>
            </ul>
            <br/>
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a href="">HOME</a></li>
                <li><a href="">HTML</a></li>
                <li><a href="">PHP</a></li>
                <li class="active"><a href="">JAVASCRIPT</a></li>
            </ul>
        </div>

    <br/>
    <hr/>
        <div class="container-fluid">
            <ul class="list-inline">
                <li><a href="#">HOME</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">JAVASCRIPT</a></li>
            </ul>
            <br/>
            <ul class="nav nav-tabs">
                <li><a href="#">HOME</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">JAVASCRIPT</a></li>
            </ul>
            <br/>
            <ul class="nav nav-tabs">
                <li><a href="#">HOME</a></li>
                <li><a href="#">HTML</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown">PHP <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">PHP Function</a></li>
                        <li><a href="#">PHP MYSQL</a></li>
                        <li><a href="#">PHP Loop</a></li>
                    </ul>
                <li><a href="#">JAVASCRIPT</a></li>
        </div>


    <br/>
    <hr/>
        <div class="container-fluid">
            <div class="panel-group" id="accordion">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4>
                            <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">Collapsible Accordion 1</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse1">
                        <div class="panel-body"><img src="pix/snoopy.jpg" width="300" class="img-rounded"></div>
                    </div>
                </div>
        
                <div class="panel panel-danger"> 
                    <div class="panel-heading">
                        <h4>
                            <a href="#collapse2" data-toggle="collapse" data-parent="#accordion">Collapsible Accordion 2</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse2">
                        <div class="panel-body">Content 2</div>
                    </div>
                </div>
        
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4>
                            <a href="#collapse3" data-toggle="collapse" data-parent="#accordion">Collapsible Accordion 3</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse3">
                        <div class="panel-body">Contect 3</div>
                    </div>
                </div>
        
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4>
                            <a href="#collapse4" data-toggle="collapse" data-parent="#accordion">Collapsible Accordion 4</a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse4">
                        <div class="panel-body">Content 4</div>
                    </div>
                </div>
            </div>
        </div>
        

    <br/>
    <hr/>
        <div class="container-fluid">
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#qwerty" data-toggle="collapse">List of College</a>
                        </h4>
                    </div>
                    <div class="collapse collapse-panel" id="qwerty">
                        <ul class="list-group">
                            <li class="list-group-item">CBA</li>
                            <li class="list-group-item">CCS</li>
                            <li class="list-group-item">CEA</li>
                            <li class="list-group-item">CET</li>
                            <li class="list-group-item">CAS</li>
                        </ul>
                        <div class="panel-footer">This is Panel Footer</div>
                    </div>
                </div>
            </div>
        </div>

    <br/>
    <hr/>
        <div class="container-fluid">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </a>
                <a href="#" class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </a>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading">This is the Heading</h4>
                    <div class="list-group-item-text">This is the paragraph</div>    
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">List Item</li>
                <li class="list-group-item">List Item</li>
                <li class="list-group-item">List Item</li>
                <li class="list-group-item">List Item</li>
            </ul>
            <div class="list-group">
                <a href="" class="list-group-item">Div List Element</a>
                <a href="" class="list-group-item list-group-item-info">Div List Element</a>
                <a href="" class="list-group-item">Div List Element</a>
                <a href="" class="list-group-item">Div List Element</a>
            </div>
        </div>

<br/>
<hr/>
        <div class="container">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4><a href="#abc" data-toggle="collapse">This is a panel heading</a></h4>
                </div>
                <div id="abc" class="collapse panel-collapse">
                    <div class="panel-body">
                        <p>This is a panel body</p>
                    </div>
                    <div class="panel-footer">
                        <p>This is a panel footer</p>
                    </div>
                </div>
            </div>
        </div>
<br/>
<br/>
<hr/>


<div class="container">
        <button class="btn btn-primary" data-target="#dtx" data-toggle="collapse">Click to Collapse</button>
        <button class="btn btn-info" data-target="#dty" data-toggle="collapse">Click to Collapse</button>
        <div id="dty" class="collapse">The data to be collapsed is in here...</div>
        <div id="dtx" class="collapse"><img src="pix/snoopy.jpg"></div>
</div>

<br/>
<hr/>


<div class="container">
<div class="panel panel-danger">
        <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <h4>This is a panel body</h4>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>

<div class="panel panel-warning">
        <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <h4>This is a panel body</h4>
        </div>
        <div class="panel-footer">This is a panel footere</div>
    </div>

<div class="panel panel-primary">
        <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <h4>This is a panel body</h4>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <h4>This is a panel body</h4>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>
    
    <div class="panel panel-success">
        <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <h4>This is a panel body</h4>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>This is a panel heading</h4>
        </div>
        <div class="panel-body">
            <h4>This is a panel body</h4>
        </div>
        <div class="panel-footer">This is a panel footer</div>
    </div>


</div>

    <footer>
        <p class="mb-0">© 2024 Applications Developement and Emerging Technologies | Talana, Lyza Jerell S. | 3BSIT-2</p>
    </footer>

</body>
</html>
