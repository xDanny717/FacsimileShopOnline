<?php
  session_start(); 
  $_SESSION["server"] = "localhost";
  $_SESSION["database"] = "ShopOnlinedb";
  $_SESSION["username"] = $_POST["email"];
  $_SESSION["pswd"] = $_POST["pswd"];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Assets/css/home.css" rel="stylesheet">
  </head>
  <body class="home_background">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ordini
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Categoria 2</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Categoria 3</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <?php
        include "connect.php";
        $query = "SELECT * FROM categorys"; //Query del database 
        $result  =  $mysqli->query($query,MYSQLI_STORE_RESULT);
        /*echo $result->field_count;  //Mostra il numero dei campi e delle righe della query
        echo "<br/>";
        echo $result->num_rows;*/
        //Crea una tabella in base alla query
        /*$array = $result->fetch_assoc();
        $keys = array_keys($array);
        echo "<table>";
        foreach($keys as $value){
          echo "<th>";
          echo $value;
          echo "</th>";
        }
        for($i = 1  ; $i <= $result->num_rows ; $i++ ){
          echo "<tr>";
          foreach($array as $key => $value){
            echo "<td>";
            echo $value;
            echo "</td>";
          }
          echo "</tr>";
          $array  =  $result->fetch_assoc(); 
        }
        echo "</table>";*/
    ?>
    <div>
        <div class="container">
        <div class="row">
          <?php //Aggiungere gli oggetti con un foreach e facendo in modo di prendere oggetti dalla quary
            $i = 0 ; //Puntatore della riga della query
            $maxcat = 10 ; //Numero massimo di categorie per non creare un loop
            $array = null; //Array che conterra la riga della query
            $result->data_seek($i); //Azzera il puntatore dei campi per ricominciare
            //echo "Il numero delle righe della query è $result->field_count </br>";      
            while($i < $result->num_rows && $i < $maxcat ){
              $array = $result->fetch_assoc(); //Inposta l'array associativo con la prima riga della query
              $cat_id = $array['Cat_Id'];
              $cat_name = $array['Cat_Name'];
              $cat_image = $array['Cat_Image'];
              $cat_description = $array['Cat_Description'];
              echo <<< EOF
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img src="Assets/images/$cat_image" class="card-img-top" alt="$cat_image">
                        <div class="card-body">
                          <h5 class="card-title">$cat_name</h5>
                          <p class="card-text">$cat_description</p>
                          <a href="category.php?cat_id=$cat_id" class="btn btn-dark text-white">Open</a>
                        </div>
                    </div>  
                </div>
              EOF;
              $i = $i + 1 ;
            }
          ?>
        </div>
      </div>
    </div>
</body>
</html>