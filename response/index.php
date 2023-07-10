<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plushy</title>
    <style>
        body {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .outer_div {
            margin: 0 auto;
            width: 50%;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        #response-message {
            text-align: center;
            color: white;
            background-color: #4CAF50;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Plushy says...</h1>
    <div class="outer_div">
        <div id="response-message">
            <?php
            $myfile = fopen("../response.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("../response.txt"));
            fclose($myfile);
            ?>
        </div>
    </div>
</body>
</html>
