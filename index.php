<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $bad_word = $_GET['word'];
        $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque consequatur dolorum totam unde ex eaque delectus voluptatem labore, repellendus voluptatum hic quas deleniti sequi omnis ea aliquid aliquam illum numquam!";
    ?>
    <h1>Incensurata:</h1>
    <p>
        <?php 
            echo $text;
        ?>
    </p>
    <h1>Censurata:</h1>
    <p>
        <?php 
            echo str_ireplace($bad_word, "***", $text);
        ?>
    </p>
</body>
</html>