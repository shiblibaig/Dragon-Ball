<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="animate.css">
    <link rel="shortcut icon" type="image/png" href="Dragon Ball.png"/>
    <meta charset="UTF-8">
    <title>ALERT!</title>
    <script LANGUAGE="javascript">
        function CONFIRM(){if (!confirm
                ("Either wrong Password or Wrong Username!"))
            history.go(-1);
            return HEY;
        }
        document.writeln(CONFIRM())
    </script>
</head>
<body>
<div align = "center" class = "af">
    <h2>Press the button below to re-enter correct details.</h2>
</div>
<div align = center>
    <form action = loginPage.html>
        <label for="io"></label>
        <input id = "io" type="submit" value = "Proceed"/>
    </form>
</div>
</body>
</html>