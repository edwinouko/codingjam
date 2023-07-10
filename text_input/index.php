<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plushy Input</title>
</head>
<body>
    <div id="mood">
        <h1>How are you feeling today?</h1>
        <form id="form" method="post" action="text_input.php">
            <label>
                Describe how you feel: 
            </label>
            <input type="text" name="mood" id="mood" placeholder="I feel...">
                
            </input>
            <button type="submit">Submit Form</button>
        </form>
    </div>
</body>
</html>