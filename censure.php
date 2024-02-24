<?php
$text= $_GET ["text"];
$parola= $_GET ["parola"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
<div style="height: 100vh;" class="d-flex flex-column justify-content-center align-items-center">
    <h1 class="mb-5">Ciao grazie per aver utilizzato <span class=" text-primary">Censor</span> </h1>
    <div style="width: 35%;">
       <p class="fs-5">Lunghezza Testo:&nbsp;  <?php echo strlen($text)?> caratteri</p>
        <p class="test text-warning">Testo: <span class="text-light" ><?php echo $text?></span> </p>
    </div>
    <div style="width: 35%;">
        <p class="fs-5">Lunghezza Testo <span class=" text-danger">Censurato</span> :&nbsp; <?php echo strlen($text)?> caratteri</p>
        <p class="test text-warning">Testo: <span class="text-light" ><?php echo str_replace("$parola", "<span class='text-danger'>***</span>", $text)?></span></p>
    </div>
</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>


<style>
    .test{
        outline: dashed 1px white;
        padding: 10px;
        border-radius: 10px;
    }
</style>