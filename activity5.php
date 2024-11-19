<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Activity 5</title>
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
    
    </style>

<body>
    <header>
        <h1 class="display-4"><strong>Activity 5 - Bootstrap Website</strong></h1>
    </header>

    
<hr/>
<br/>

<div class="container">
    <ul class="list-inline">
        <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="This is the Top Popover">Top</a></li>
        <li><a href="#" data-toggle="popover" data-placement="bottom" title="Top popover" data-trigger="focus" data-content="This is the Bottom Popover">Bottom</a></li>
        <li><a href="#" data-toggle="popover" data-placement="left" title="Top popover" data-trigger="hover" data-content="This is the Left Popover">Left</a></li>
        <li><a href="#" data-toggle="popover" data-placement="right" title="Top popover">Right</a></li>
    </ul>

    <ul class="list-inline">
        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Top Tool Tip">Bottom</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="left" title="Top Tool Tip">Left</a></li>
        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Top Tool Tip">Right</a></li>
    </ul>
</div>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });
</script>



<hr/>
<br/>
<br/>

<div class="container">
    <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px;">
        <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="pic/snoopy1.jpg" width="1000px">
                  <div class="carousel-caption">
                    <h3>Lovely Snoopy</h3>
                    <p>Snoopy's 1st Pic</p>
                  </div>
            </div>
            <div class="item">
                <img src="pic/snoopy2.jpg" width="1000px">
                  <div class="carousel-caption">
                    <h3>Snowy Snoopy</h3>
                    <p>Snoopy's 2nd Pic</p>
                  </div>
            </div>
            <div class="item">
                <img src="pic/snoopy3.jpg" width="1000px">
                  <div class="carousel-caption">
                    <h3>Funny Snoopy</h3>
                    <p>Snoopy's 3rd Pic</p>
                  </div>
            </div>

            <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#mycarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        
        </div>
    </div>
</div>

<hr/>
<br/>
<br/>

<div class="container">
    <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                <h4>This is my modal header</h4>
            </div>
            <div class="modal-body">
                <p>This is my modal content</p>
            </div>
            <div class="modal-footer">
            <button class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
</div>


    </body>
</html>