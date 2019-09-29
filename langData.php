<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Language Data Submission</title>

</head>
<body>
    <div id = "content">

    <?php
        require_once("db.php"); // connect to database 

        // retrieve data from html form
        $language = $_POST['language'];
        $certainty = $_POST['certainty'];
        // $area = $_POST['area'];
        $comments = $_POST['comments'];
        $datetime = date("M d, Y h:i A");
        $geojson = $_POST['geojson'];

        //validate form and show data back to user
        if (!empty($language) && is_string($language)) {
            echo "<hr>"; 
            echo "<h4>Your information has been submitted! </h4>";
            echo "<p><strong>Language: </strong>{$language}</p>";
            echo "<p><strong>Degree of certainty: </strong>{$certainty}</p>";
            echo "<p><strong>Area of selected polygon: </strong></p>";
            echo "<p><strong>Date and time submitted: </strong>{$datetime}</p>";
            echo "<p><strong>Comments: </strong>{$comments} </p>";
            echo "<hr>"; 
        } else {
            echo "Please enter valid characters in the language field. ";
        }
        
        $insertQuery = "INSERT INTO languagedata(language, certainty, comments, submit_datetime, polygon_json) VALUES('$language','$certainty','$comments', '$datetime', '$geojson')";
        $executeQuery = pg_query($insertQuery);

        // Error message if data cannot be inserted into table
        if (!$executeQuery) {
            echo "<p>Error: failed to insert data! Please try again. </p>";
        }
        // Closing connection
        pg_close($db_conn);

    ?>
    </div>


</body>
</html>