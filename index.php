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
  <h1 style="font-size: 50px;" class="text-primary">Censor</h1>
    <form class="d-flex flex-column" action="censure.php" method="GET">
      <label class="fw-bold text-warning pb-2 fs-5" for="text">Inserisci Testo</label>
      <textarea class="rounded-3 bg-dark text-light ps-2" name="text" id="" cols="30" rows="10" placeholder="Inserisci testo"></textarea>
      <label class="fw-bold mt-2 text-danger pb-2 fs-5" for="nome">Parola da censurare</label>
      <input class="rounded-3 bg-dark text-light ps-2 " type="text" name="parola" placeholder="Inserisci parola da censurare" >
      <button class="mt-3 bg-primary border-0 rounded-3 text-light fw-bold" type="submit">Invia</button>
    </form> 

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>


<style>
    ::placeholder {
        color: white;
        opacity: .7;
    }

    input{
      outline: dashed 1px;
      border: none;
    }

    textarea{
      outline: dashed white 1px;
      border: none;
    }
</style>