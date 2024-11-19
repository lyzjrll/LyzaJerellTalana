<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        section {
            width: 98.78vw;
            height: 46.5vw;
            padding: 50px;
            margin-top: 0 !important; 
            margin-bottom: 0 !important; 
        }

        section#contact {
            margin-top: 0;
            margin-bottom: 0;
        }

        .cl_white {
            color: white;
        }

        .cl_black {
            color: black;
        }

        img {
            width: 250px;
            transition: opacity 0.5s ease-in-out;
        }

        img:hover {
            opacity: .10;
        }
        
        #certs img {
            width: 290px;
            transition: opacity 0.5s ease-in-out;
        }

        #skills img, #badges img {
            width: 225px; 
            transition: opacity 0.5s ease-in-out;
        }

        .col-text {
            -webkit-column-count: 3;
            text-align: justify;
        }

        footer {
            background-color: #003366;
            color: #ffffff;
            text-align: center;
            padding: 2rem;
            margin-top: 0;
        }

        #home {
            background: url(pic/background.jpg);
            background-size: 100% 100%;
            text-align: left;
            padding-top: 100px;
            padding-left: 30px; 
        }

        #home h1, #home p, #home button {
            margin-left: 30px; 
        }

        .btn-default {
            margin-top: 20px; 
        }

    </style>
</head>

<body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#skills">My Skills</a></li>
            <li><a href="#certs">My Certifications</a></li>
            <li><a href="#badges">My Badges</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>

    <section id="home" class="cl_white">
        <h1>My Portfolio</h1>
        <p>Welcome to my World, The life of a Programmer.</p>
        <a href="#contact">
            <button class="btn btn-default">Contact Me</button>
        </a>
    </section>

<section id="skills" class="container">
    <div class="page-header">
        <h1 class="text-center">My Skills</h1>
    </div>
    <div class="text-center">
        <img src="pic/bootstrap_logo.png" class="img-thumbnail"/>
        <img src="pic/javascript.png" class="img-thumbnail"/>
        <img src="pic/html.png" class="img-thumbnail"/>
        <img src="pic/css.png" class="img-thumbnail"/>
        <img src="pic/java.png" class="img-thumbnail"/>
        <img src="pic/mysql.png" class="img-thumbnail"/>
        <img src="pic/php.png" class="img-thumbnail"/>
    </div>
</section>

<section id="certs" class="container">
    <div class="page-header">
        <h1 class="text-center">My Certifications</h1>
    </div>
    <div class="text-center">
        <img src="pic/eCert_OCI_CFA.jpg" class="img-thumbnail"/>
        <img src="pic/eCert_OCDM.jpg" class="img-thumbnail"/>
        <img src="pic/eCert_OCI_AI.jpg" class="img-thumbnail"/>
        <img src="pic/Introduction_to_Cybersecurity_Certificate.jpg" class="img-thumbnail"/>
        <img src="pic/Ethical_Hacker_Certificate.jpg" class="img-thumbnail"/>
    </div>
</section>

<section id="badges" class="container">
    <div class="page-header">
        <h1 class="text-center">My Badges</h1>
    </div>
    <div class="text-center">
        <img src="pic/Introduction_to_Cybersecurity_Badge.png" class="img-thumbnail"/>
        <img src="pic/Ethical_Hacker_Badge.png" class="img-thumbnail"/>
        <img src="pic/OCI_CFA.jpg" class="img-thumbnail"/>
        <img src="pic/OCDMF.jpg" class="img-thumbnail"/>
        <img src="pic/OCI_AIFCA.jpg" class="img-thumbnail"/>
    </div>
</section>

<section id="about" class="container">
        <div class="page-header">
            <h1 class="text-center">About Me</h1>
        </div>
        <div class="col-text">Hi there! My name is Lyza Jerell S. Talaña. I am a New Era University third year student taking Bachelor of Science in Information Technology or BSIT. 
            I am 20 years of age, and interested in technology and development, hoping to turn my ideas into actual and real-life practices. Working towards my Application Development class, I developed this portfolio to present my expertise and past works. 
            This is a field I enjoy as I get to code my way though solutions and am always ready to learn best ways and enhance my skills. As such, my objective is to design application systems which are effective and easy to use. 
            I feel enthusiastic to continue utilizing my experience in IT, to examine most of the fields of technology and create something with relevance.</div><br/>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> PHP Programmer</h4>
                    </div>
                    <div class="panel-body">
                        <img src="pic/snoopy1.jpg" class="img-circle center-block">
                        <p class="lead text-center"> I do PHP Programming.</p>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
       
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4> Web Designer</h4>
                    </div>
                    <div class="panel-body">
                        <img src="pic/snoopy2.jpg" class="img-circle center-block">
                        <p class="lead text-center"> I do Css Bootstrap Designing.</p>
                    </div>
                    <div class="panel-footer"></div>
                </div>
            </div>
        </div>

</section>

<section id="contact" style="background: silver">
        <div class="page-header">
            <h1 class="text-center">Contact Me</h1>
        </div>
        <form class="col-md-5 col-md-offset-4">
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your Name" type="text"/>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your E-mail" type="text"/>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Subject" type="text"/>
            </div>
            <div class="form-group">
                <textarea class="form-control rows-10">Comments</textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-success btn-block" type="submit"/>
            </div>
        </form>
    </section>

    <footer>
        <p class="mb-0">Made by Talaña, Lyza Jerell S. | 3BSIT-2 | © 2024 Applications Development and Emerging Technologies</p>
    </footer>

</body>
</html>