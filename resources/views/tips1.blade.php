<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Tips dan Trik Kendaraan</title>
  </head>

<body>
     <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
            <i class="fas fa-chevron-left"></i>
            <span class="pb-3">Tips & Trik Kendaraan</span>
            <i class="fas fa-times"></i>
     </div>

    <div class="container mt-5 mb-5">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card px-5 py-4">
                    <div class="text-left mb-2 inputs"> <span>Pilih Jenis Kendaraan :</span> 
                        <br>
                        <select name="jenis">
                          <option value="">--Jenis Kendaraan--</option>
                          <option value="1">Handle</option>
                          <option value="2">Kopling</option>
                          <option value="3">Matic</option>
                        </select>
                    <a href="{{route('viewtips')}}" method="post"><div class="text-right mt-4"> <button class="btn btn-danger integration">Lihat</button> </div></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>