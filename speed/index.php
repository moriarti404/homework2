<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Vehicle speed </title>
</head>
<body>
    <div class="wrapper">
        <form action = "count.php" method = "post">
            <fieldset>
                <legend> Vehicle movement speed </legend>

                <p> Input parameters of movement </p>

                <label for = "distance"> Distance = </label>
                <input type = "text" id = "distance" name = "distance" />
                <label for = "distance"> km </label>
                <br />  <br />
                <label for = "time"> Time = </label>
                <input type = "text" id = "time" name = "time" />
                <label for = "time"> h </label>
                <br />  <br />
                <input type = "checkbox" id = "mps" name = "mps" />
                <label for = "mps"> meters per seconds </label>
                <br />  <br />
                <input type = "submit" value = "Count" />
				
            </fieldset>
        </form>
    </div>
</body>
</html>