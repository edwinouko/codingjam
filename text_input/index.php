
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plushy Input</title>
    <style>
        body {
            background-color: #f2f2f2;
        }
        #mood {
            margin: 0 auto;
            width: 50%;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 24px;
            margin-bottom: 10px;
        }
        input[type=text] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            margin-bottom: 20px;
        }
        button[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="mood">
        <h1>How are you feeling today?</h1>
        <form id="form" method="post" action="text_input.php">
            <label>
                Describe how you feel:
                <input type="text" name="mood" id="mood" placeholder="I feel...">
                </input>
                <button type="submit">Submit Form</button>
            </label>
            
        </form>
    </div>
</body>
</html>
