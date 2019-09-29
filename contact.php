<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CartLingo | Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arapey|Cantarell|Permanent+Marker|Monda" rel="stylesheet">
    <link rel="stylesheet" href="styles/contactStyle.css">
</head>
<body>
    <div class="head">
        <h1>CARTOLINGO</h1>
        <h2>Contact Us</h2>
        <nav class="navbar navbar-expand-lg navbar-light">
                <div class = "container">
                        <a class="navbar-brand" href="home.html">CartoLingo</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="cartolingo.html">Submit Data</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    View Submitted Data
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Submitted Polygons</a>
                                    <a class="dropdown-item" href="retrieveData.php">Submitted Form data</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="glottolog.php">Languages of the World</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                                                
                            </ul>
                        </div>
                </div>
                    
            </nav>
    </div>
    <div class="container">
        <h2>Have questions, comments or concerns? <br> Send CartoLingo a message here.</h2>
        <form id = "contactForm" method = "post" action = "send.php">
            <h3>Name: </h3> <input type="text" name = "myname">
            <h3>Email: </h3> <input type="email" name = "email">
            <h3>Subject: </h3> <input type="text" name = "subject">
            <h3>Message: </h3> <span><textarea id = "message" name = "message" rows = "5" cols = "100 "></textarea></span>
            <br>
            <button>SEND</button>
        </form>

    <br>
        
    </div>
    <footer>
        © 2019 Kevin Cheriyan | CartoLingo
    </footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>