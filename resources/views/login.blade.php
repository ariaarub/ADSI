<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .boxone {
            width: 100%;
            height: 250px;
            background-color: grey;
        }

        .login {
            padding-top: 30px;
            padding-left: 30px;
        }

        .form-group {
            padding: 0px 20px 0px 20px;
        }

        .tombol {
            background-color: gray;
            width: 100%;
            height: 50px;
            text-align: center;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border: 0;
            margin-top: 50px;
        }

        #text1 {
            padding-left: 20px;
        }

        .tengah {
            background-color: white;
            height: 968px;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body style="background-color:silver;">
    <div class="container-sm">
        <div class="row">
            <div class="col"></div>
            <div class="col-3 tengah">
                <div class="row">
                    <div class="boxone"></div>
                    <h1 class="login">Login</h1></div>
                    <p style="padding-left: 17px; padding-top:2px;">Masuk ke dalam akunmu</p>
                    <br><br>
                    <form method="POST" action="dashboard.blade.php">
                        <div class="form-group">
                            <label for="uname">EMAIL/USERNAME</label>
                            <input type="text" class="form-control" id="uname">
                        </div>
                        <div class="form-group">
                            <label for="pword">PASSWORD</label>
                            <input type="text" class="form-control" id="pword">
                        </div>
                        <br><a href="register.html" id="text1">Belum punya akun? Buat akun disini</a><br><br>
                        <button type="submit" class="tombol">Login</button>
                    </form>
                    
                </div>
            <div class="col"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>