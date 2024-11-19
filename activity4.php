<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Activity 4</title>
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
        <h1 class="display-4"><strong>Activity 4 - Bootstrap Website</strong></h1>
    </header>


<div class="container">
    <div class="page-header">
        <h1>Form Validation Styles</h1>
    </div>
    <form class="form-inline">
        <div class="form-group">
            <label>Name</label>
            <input type="text" disabled class="form-control">
        </div>

        <div class="form-group has-feedback has-warning">
            <label>Name</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback has-success">
            <label>Name</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback has-error">
            <label>Name</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
        </div>

    </form>

    <div class="page-header">
        <h1>Form Validation Styles</h1>
    </div>
    <form>
        <div class="form-group">
            <label>Name</label>
            <input type="text" disabled class="form-control">
        </div>

        <div class="form-group has-feedback has-warning">
            <label>Name</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback has-success">
            <label>Name</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-ok form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback has-error">
            <label>Name</label>
            <input type="text" class="form-control"><span class="glyphicon glyphicon-remove form-control-feedback"></span>
        </div>

    </form>

</div>





<br/>
<br/>
<br/>
<hr/>

<div class="container">
    <div class="page-header">
        <h1> My Form Horizontal 2<h1>
    </div>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter Your Name</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter Your E-mail</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter Your Password</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="comment" class="control-label col-md-2">Comment</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="10"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Skills</label>
            <div class="col-md-10">
               <div class="checkbox">
                    <Label><input type="checkbox">PHP</label>
                </div>
                <div class="checkbox">
                    <Label><input type="checkbox">BOOTSTRAP</label>
                </div>
                <div class="checkbox">
                    <Label><input type="checkbox">JAVA</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Skills</label>
            <div class="col-md-10">
               <div class="checkbox">
                    <label class="checkbox-inline"><input type="checkbox">PHP</label>
                    <label class="checkbox-inline"><input type="checkbox">BOOTSTRAP</label>
                    <label class="checkbox-inline"><input type="checkbox">JAVA</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Gender</label>
            <div class="col-md-10">
               <div class="radio">
                    <label><input type="radio" name="gender">Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gender">Female</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2">Gender</label>
            <div class="col-md-10">
               <div class="radio">
                    <label class="radio-inline"><input type="radio" name="gender">Male</label>
                    <label class="radio-inline"><input type="radio" name="gender">Female</label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label">Course</label>
            <div class="col-md-10">
                <select class="form-control">
                    <option>BSCS</option>
                    <option>BSIT</option>
                    <option>BSIS</option>
                    <option>BSEMS</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button class="btn btn-success btn-block">Click to Submit</button>

            </div>
        </div>
        
    </form>



<div class="container">
    <div class="page-header">
        <h1> My Form Horizontal <h1>
    </div>

    <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter Your Name</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter Your E-mail</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Enter Your Password</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-2">Confirm your Password</label>
            <div class="col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        
    </form>

    
<div class="container">
    <div class="page-header">
        <h1> My Form Inline <h1>
    </div>

    <form class="form-inline">
        <div class="form-group">
            <label for="name">Enter Your Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter Your E-mail</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter Your Password</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Confirm Your Password</label>
            <input type="text" class="form-control">
        </div>
    </form>


<div class="container">
    <div class="page-header">
        <h1> My Form Design<h1>
    </div>

    <form>
        <div class="form-group">
            <label for="name">Enter Your Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter Your E-mail</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter Your Password</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Confirm Your Password</label>
            <input type="text" class="form-control">
        </div>
    </form>

<br/>
<br/>
<br/>
<hr/>

<?php
    /*
        <nav class="navbar navbar-default">
        <nav class="navbar navbar-inverse">
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <nav class="navbar navbar-inverse navbar-fixed-top">
    */

?>

    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">College</a>
            </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">CCS</a></li>
                <li><a href="#">CET</a></li>
                <li><a href="#">CBA</a></li>
                <li><a href="#">CAS</a></li>
            </ul>
        </div>   
    </div>
</nav>


</body>
</html>