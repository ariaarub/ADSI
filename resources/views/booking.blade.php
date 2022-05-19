<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
body{
    background-color:#eee;font-family: "Poppins", sans-serif;font-weight: 300
    }
.height{
    height: 100vh
    }
.card{
    border: none;padding:20px;position: relative
    }
.img-logo{
    position: absolute;left: 54%;transform: translateX(-50%);top: -48px
    }
.inputs span{
    font-size: 14px;font-weight: 500
}
.inputs input
    {
    font-size: 13px;height: 44px
    }
.inputs input:focus{
    border-color: #2c1e8e;box-shadow: none
}
.integration{font-size: 14px;height: 44px}
    </style>

    <title>Booking Service</title>
  </head>

<body>

    <div class="container mt-5 mb-5">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card px-5 py-4">
                    
                    <div class="mt-4 inputs"> <span>Nama</span> <input type="text" class="form-control" placeholder="Nama"> </div>
                    <div class="mt-2 inputs"> <span>Jenis Kendaraan</span> <input type="text" class="form-control" placeholder="Jenis kendaraan"> </div>
                    <div class="mt-2 inputs"> <span>Tanggal</span> <input type="text" class="form-control" placeholder="Tanggal"> </div>
                    <div class="mt-2 inputs"> <span>Tipe Servis</span> <input type="text" class="form-control" placeholder="Tipe Servis"> </div>
                    <div class="mt-2 inputs"> <span>Catatan</span> <input type="text" class="form-control" placeholder="Catatan"> </div>
                    <div class="text-center mt-4"> <a href="{{route('dealerships')}}" method="post" class="btn btn-danger integration">Pesan</a> </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
