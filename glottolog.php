<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User-submitted data</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cantarell|Permanent+Marker|Monda" rel="stylesheet">
    <link rel="stylesheet" href="styles/pageStyle.css">
</head>
<body>
<div class="head">
        <h1>CARTOLINGO</h1>
        <h2>Browse the Glottolog database</h2>
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
                                    <a class="dropdown-item" href="cartolingo_view.html">Submitted Polygons</a>
                                    <a class="dropdown-item" href="retrieveData.php">Submitted Form data</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Languages of the World</a>
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
            <h4>Glottolog is a comprehensive reference information for the world's languages. See more about Glottolog <a href="https://glottolog.org/">here</a>.</h4>
            <h4>This is a sample of the data in the database. <br> If you are reading this message, I still plan on converting this data onto a leaflet map within a few hours. </h4>
            <br>
            
            <?php 
                require_once("db.php");

                $query = 'SELECT * FROM glottolog LIMIT 200';
                $result = pg_query($query) or die("Query failed: " . pg_last_error());

                echo "<table>\n<tr><th>Name</th><th>Glottolog ID</th><th>Latitude</th><th>Longitude</th><th>Number of Child Dialects</th><th>Status</th></tr>";
                while($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "\t<tr>\n";
                    foreach ($line as $col_value) {
                        echo "\t\t<td>$col_value</td>\n";
                    }
                    echo "\t</tr>\n";
                }
                echo "</table>\n";

                // Closing connection
                pg_close($db_conn);



            ?>

        
    </div>
    <br>
    <footer>
            © 2019 Kevin Cheriyan | CartoLingo
    </footer>

    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

