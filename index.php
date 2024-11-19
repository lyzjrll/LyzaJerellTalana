<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talaña's Bootstrap Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        html, body {
            overflow-x: hidden; 
            width: 100%; 
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #78c1e3;
            margin: 0;
            height: 100vh; 
            display: flex;
            flex-direction: column;
        }
        header {
            background-color: #003366; 
            color: #ffffff;
            padding: 5rem 1rem; 
            text-align: center;
            position: relative;
        }
        header h1 {
            font-size: 5rem !important; 
            margin: 0; 
        }
        header p.lead {
            font-size: 1.25rem; 
            margin: 0; 
        }
        header .name {
            font-size: 1rem; 
            margin: 0;
            position: absolute; 
            bottom: 10px; 
            width: 100%; 
            text-align: center;
        }
        .btn-primary {
            border-radius: 15px !important; 
        }
        .btn-primary:hover {
            background-color: #357abd;
            border-color: #357abd; 
        }
        footer {
            background-color: #003366; 
            color:#ffffff;
            text-align: center;
            padding: 1rem 0;
            margin-top: auto; 
        }
        .card {
            border: none;
            border-radius: 15px !important; 
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
            overflow: hidden; 
        }
        .card-body {
            border-radius: inherit !important;
            background-color: #b3d6f5; 
            align-items: center; 
            text-align: center; 
        }
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card-list {
            width: 100%; 
            max-width: 400px; 
        }
        .card {
            margin-bottom: 1rem; 
        }
    </style>
</head>
<body>
    <header>
        <h1 class="display-4">Bootstrap Portfolio</h1>
        <p class="lead">Go-to place for managing Asynchronous activities.</p></br>
        <p class="name"><strong>BY: Talaña, Lyza Jerell S. | 3BSIT-2 </strong></p>
    </header>
    
    <main class="container">
        <div class="card-list">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">Activity 1</h4>
                    <p class="card-text">Bootstrap container | Grid system | Text styles | Tables</p>
                    <a href="activity1.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">Activity 2</h4>
                    <p class="card-text">Bootstrap Image | Button | Button Group | Dropdown | Glyphicon | Alert | Badges</p>
                    <a href="activity2.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">Activity 3</h4>
                    <p class="card-text">Bootstrap Panel | Collapse | Collapse Panel | List-Group-Collapse | Accordion | Tab and Pill Dynamic | Pager and Pagination</p>
                    <a href="activity3.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">Activity 4</h4>
                    <p class="card-text">Bootstrap Navbar | Form | Form Style Validation</p>
                    <a href="activity4.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">Activity 5</h4>
                    <p class="card-text">Bootstrap Modal | Carousel | Tool Tip | Pop Over</p>
                    <a href="activity5.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">Activity 6</h4>
                    <p class="card-text">Bootstrap Scroll Spy</p>
                    <a href="activity6.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h4 class="card-title">PORTFOLIO</h4>
                    <p class="card-text">Bootstrap Project</p>
                    <a href="Portfolio/portfolio_talana.php" class="btn btn-primary">View Activity</a>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <p class="mb-0">© 2024 Applications Development and Emerging Technologies</p>
    </footer>

</body>
</html>
