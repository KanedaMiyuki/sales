<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <div class="card w-50 mt-5 mx-auto">
       <div class="card-header bg-transparent border-0">
          <h1 class="text-center text-primary">LOGIN <i class="fa-solid fa-right-to-bracket"></i></h1>
        </div>

    <form action="../actions/login.php" method="post">
        <div class="row mb-3 mx-auto">
          <label for="login_username" class="col-sm-3 col-form-label text-end">Username</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="login_username" name="login_username">
          </div>
        </div>
        <div class="row mb-3">
          <label for="login_password" class="col-sm-3 col-form-label text-end">Password</label>
          <div class="col-sm-7">
            <input type="password" class="form-control" id="login_password" name="login_password">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary w-75">Login</button> 
        </div>
    </form>  
    
    <form action="../actions/register.php" method="post">
        <div class="text-center mt-3">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-danger mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Create an Account
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-danger text-center" style="font-size: 50px;"><i class="fa-solid fa-user-plus"></i> Registation</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- ... -->
                      <div class="row">
                          <div class="col">
                              <div class="row mb-3">
                                    <div class="col-md-6">
                                      <label for="first_name" class="form-label">First Name</label>
                                      <input type="text" class="form-control" name="first_name" id="first_name"  required autofocus>
                                    </div>

                                    <div class="col-md-6">
                                      <label for="last_name" class="form-label">Last Name</label>
                                      <input type="text" class="form-control" name="last_name" id="last_name"  required autofocus>
                                    </div>
                              </div>
                        </div>
                        <div>
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control mb-2 fw-bold" maxlength="20" required>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control mb-5" minlength="8" required>
                            <div class="form-text">
                              less than 8 characters
                            </div>
                        </div>
                      </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger w-100 mx-auto">Register</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>