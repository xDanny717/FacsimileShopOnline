<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Assets/css/sign-in.css" rel="stylesheet">
    <link href="Assets/css/prod_page.css" rel="stylesheet">
  </head>
  <body>
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
        session_start(); //Serve per attivare la sessione con i dati validati
        include "connect.php";//Connessione al database  
        //print_r($_SESSION);
        $url = $_SERVER['REQUEST_URI'];//prende l'url
        $url_components = parse_url($url,$component = -1);//Crea l'arry associativo con i parametri dell url
        parse_str($url_components['query'], $params);//Fa un parse solo dei parametri e li mette in $params
        $query_products = "SELECT * FROM products WHERE Pro_Id = $params[prod_id] ";
        $result = $mysqli->query($query_products,MYSQLI_STORE_RESULT);
        $result->data_seek(0);
        $array_prod = $result->fetch_assoc();//Crea l'array con i prodotto
        //print_r($array_prod);
        $prod_id = $array_prod['Pro_Id'];
        $prod_name = $array_prod['Pro_Name'];
        $prod_price = $array_prod['Pro_Price'];
        $prod_remaining = $array_prod['Pro_Remaining'];
        $prod_image = $array_prod['Pro_Image'];
        $prod_description = $array_prod['Pro_Description'];
    ?>
    <div class="prod_image_container">
        <?php
        echo "<img class=\"prod_image\" src=\"Assets/images/$prod_image\">"
        ?>
    </div>
    <div class="prod_content">
        <?php
            echo <<< EOL
                <h1>$prod_name</h1>
                <h2>$ $prod_price</h2>
                <h3>Remaining : $prod_remaining </h3>
                $prod_description

                </br></br>
                <a href="prod.php?prod_id=$prod_id" class="btn btn-dark text-white">Buy</a>
            EOL;
        ?>
    </div>
</div>
</body>
</html>