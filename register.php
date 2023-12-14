<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Assets/css/sign-in.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="register_back" >
        <div class="login_div angry-animate">
            <h1>Shop Online</h1>
            <h3>Register</h3>
            <form action="home.php" method="post">
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter first Name" name="name">
                </div>
                <div class="mb-3 mt-3">
                  <label for="surname" class="form-label">Surname:</label>
                  <input type="text" class="form-control" id="surname" placeholder="Enter your Surname" name="surname">
                </div>
                <div class="mb-3 mt-3">
                  <label for="surname" class="form-label">Postcode:</label>
                  <input type="number" class="form-control" id="postcode" placeholder="Enter your Postcode" name="postcode">
                </div>
                <div class="mb-3 mt-3">
                  <label for="address" class="form-label">Address:</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter your Addresss" name="addreess">
                </div>
                <div class="mb-3 mt-3">
                  <label for="address" class="form-label">Card Number:</label>
                  <input type="text" class="form-control" id="cardnumber" placeholder="Cardnumber" name="cardnumber">
                </div>
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                  <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                </div>
                <div class="form-check mb-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</body>
</html>