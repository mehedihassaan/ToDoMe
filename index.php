<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  </head>
  <body>

    <div class="contaner">
      <div class="row">
        <div class="col">
          <section class="vh-100">
                  <div class="container py-5 h-100">
                    <div class="row d-flex align-items-center justify-content-center h-100">
                      <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7ZVeWrEXOO0JMHlgVGw0bfzhhdrvERJRnVQ&usqp=CAU"
                          class="img-fluid" alt="Phone image">
                      </div>
                      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="dashbord.php">
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="text" name="uname" id="username" class="form-control form-control-lg" placeholder="Enter your Username" />
                            <label class="form-label" for="username">Enter Username</label>
                          </div>

                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <input type="password" name="upass" id="userpass" class="form-control form-control-lg" placeholder="Enter your password" />
                            <label class="form-label" for="userpass">Password</label>
                          </div>

                          <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                              <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            <a href="#!">Forgot password?</a>
                          </div>

                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                          <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                          </div>

                          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="registione.php"
                            role="button">
                            <i class="fas fa-user me-2"></i>Registration
                          </a>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </section>
        </div>
      </div>
    </div>

    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>