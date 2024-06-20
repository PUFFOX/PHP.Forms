<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "Some text" method="post" action="task1.php">
        <input type="text" name="inputText">
        <button type="submit" name="nSend" value="vSend">Send</button>
    </form>

    <?php
        if(isset($_POST['inputText']))
        {
            $inputText = $_POST['inputText'];
        }
        echo "<p> Input text:  $inputText </p>";


    ?>
</body>
</html>