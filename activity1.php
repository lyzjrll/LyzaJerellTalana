<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Assignment</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        header {
            background-color: #003366; 
            color: #ffffff;
            padding: 3rem 1rem; 
            text-align: center;
            position: relative;
        }

        .row-highlight-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
        }
        .row-highlight-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
        }
        .row-highlight-info {
            background-color: #d1ecf1;
            color: #0c5460;
            padding: 10px;
        }
        .row-highlight-primary {
            background-color: #cce5ff;
            color: #004085;
            padding: 10px;
        }
        .row-highlight-muted {
            background-color: #e2e3e5;
            color: #6c757d;
            padding: 10px;
        }
        .row-highlight-warning {
            background-color: #fff3cd;
            color: #856404;
            padding: 10px;
        }

        .box {
            border: 2px solid #ced4da;
            padding: 20px;
            margin-bottom: 20px;
        }

        .custom-container {
            width: fit-content; 
            padding: 20px; 
            height: auto;
        }

        footer {
            background-color: #003366; 
            color:#ffffff;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto; 
        }

    </style>

</head>
<body>

    <header>
        <h1 class="display-4"><strong>Activity 1 - Bootstrap Website : Section 2</strong></h1>
    </header>

        <div class="container">
            <h2 class="mt-5">Tables</h2>
            <table class="table table-condensed">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Alex</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Cris</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Jack</td>
                        <td>Failed</td>
                    </tr>

            <table class="table table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Remarks</th>
                    </tr>
                    <tr>
                        <td>001</td>
                        <td>Alex</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Cris</td>
                        <td>Passed</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Jack</td>
                        <td>Failed</td>
                    </tr>

            <table class="table table-striped table-hover">
                <thead class="bg-success">
                    <tr>
                        <th >ID</th>
                        <th>Name</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Alex</td>
                        <td class="bg-success">Passed</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Cris</td>
                        <td class="bg-success">Passed</td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Jack</td>
                        <td class="bg-danger">Failed</td>
                    </tr>
                </tbody>

            </table>


            <h2 class="mt-5">Text Styles</h2>
            <div class="row-highlight-success">Success</div>
            <div class="row-highlight-danger">Danger</div>
            <div class="row-highlight-info">Info</div>
            <div class="row-highlight-primary">Primary</div>
            <div class="row-highlight-muted">Muted</div>
            <div class="row-highlight-warning">Warning</div>

            <p class="text-start">Hi! I'm here on the left side.</p>
            <p class="text-center">Hello! I am centered.</p>
            <p class="text-end">Hi! I'm here on the right side.</p>
            <p class="text-uppercase">Application Development</p>
            <p class="text-lowercase">Application Development</p>

            <p><strong>This text is bold.</strong></p>
            <p><em>This text is italicized.</em></p>
            <p><u>This text is underlined.</u></p>


            <h2 class="mt-5">Grid System</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="bg-primary text-white text-center py-3">Primary</div>
                </div>
                <div class="col-md-6">
                    <div class="bg-info text-white text-center py-3">Info</div>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-md-4">
                    <div class="bg-success text-dark text-center py-3">Success</div>
                </div>
                <div class="col-md-4">
                    <div class="bg-muted text-dark text-center py-3">Muted</div>
                </div>
                <div class="col-md-4">
                    <div class="bg-warning text-dark text-center py-3">Warning</div>
                </div>
            </div>

            <div class="row my-1">
                <div class="col-md-12">
                    <div class="bg-danger text-white text-center py-3">Danger</div>
                </div>
            </div>
            

            <h2 class="mt-5">Containers</h2>
            <div class="container-fluid box bg-light">
                <h3>Container Fluid</h3>
            </div>

            <div class="container box bg-white text-center custom-container">
                <h3>Information Technology</h3>
            </div>


        </div>
    </div>

    <footer>
        <p class="mb-0">© 2024 Applications Developement and Emerging Technologies | Talana, Lyza Jerell S. | 3BSIT-2</p>
    </footer>


</body>
</html>