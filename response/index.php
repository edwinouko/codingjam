<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>
<body>
    <h1></h1>
    <div id="response-message">
        <?php
        $myfile = fopen("../response.txt", "r") or die("Unable to open file!");
        echo fgets($myfile);
        fclose($myfile);
        ?>
    </div>
</body>
</html>