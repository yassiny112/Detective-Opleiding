<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" type="image/jpg" href="./img/favicon.ico"/>

    <title>MBO Detective</title>
  </head>
  <body>
    
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><img id="" src="./img/logombo.png" alt="">MBO Detective </h1>

        <div class="img1">
          <h1>
              <img id=""src="" alt=""> 
          </h1>
      </div>
     
  
      <nav class="navbar justify-content-center navbar-light col-12 shadow p-3 mb-5 bg-grey rounded" style="background-color: #dadadb;">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="container-fluid text-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link px-5" href="./index.html">Home</a>
                <a class="nav-link px-5" href="./contact.php">Inschrijven</a>
                <a class="nav-link px-5" href="./info.html">Informatie</a>
                <a class="nav-link px-5" href="./faq.html">FAQ</a>
              </div>
            </div>
          </div>
        </nav>
      </nav>

</div>

     <div class="row">
     <form action="./create.php" method="post">
  <div class="form-group">
    <label for="Voornaam">Voornaam</label>
    <input type="text" class="form-control" id="Voornaam"
    aria-describedby="VoornaamHelp" placeholder="..." name="Voornaam">
    <label for="Tussenvoegsel">Tussenvoegsel</label>
    <input type="text" class="form-control" id="Tussenvoegsel"
    aria-describedby="TussenvoegselHelp" placeholder="..." name="Tussenvoegsel">
    <label for="Achternaam">Achternaam</label>
    <input type="text" class="form-control" id="Achternaam"
    aria-describedby="AchternaamHelp" placeholder="..." name="Achternaam">
    <label for="Geboorte datum">Geboortedatum</label>
    <input type="text" class="form-control" id="Geboorte datum"
    aria-describedby="Geboorte datumHelp" placeholder="..." name="Geboorte datum">
    <label for="Email">Email</label>  
    <input type="text" class="form-control" id="Email"
    aria-describedby="EmailHelp" placeholder="..." name="Email">
    <label for="Telefoonnummer">Telefoonnummer</label>
    <input type="text" class="form-control" id="Telefoonnummername"
    aria-describedby="TelefoonnummerHelp" placeholder="..." name="Telefoonnummer">
  </div>
  <button type="submit" class="btn btn-primary">Inschrijven</button>
</form>

     </div>
     <div class="row">
      <div class="col-12">
      <p>
      Geinteresseerd? Schrijf je dan nu in!      </div>
     </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
     integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
     crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script src="./js/app.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>