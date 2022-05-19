<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
body{
	background: #EEEEEE;
	font-family: 'Roboto', sans-serif;
}
.card{
	width: 300px;
	border: none;
	border-radius: 15px;
}
.adiv{
	background: #2067d8;
	border-radius: 15px;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
	font-size: 12px;
	height: 46px;
}
.chat{
	border: none;
	background: #E2FFE8;
	font-size: 10px;
	border-radius: 20px;
}
.bg-white{
	border: 1px solid #E7E7E9;
	font-size: 10px;
	border-radius: 20px;
}
.myvideo img{
	border-radius: 20px
}
.dot{
	font-weight: bold;
}
.form-control{
	border-radius: 12px;
	border: 1px solid #F0F0F0;
	font-size: 8px;
}
.form-control:focus{
	box-shadow: none;
	}
.form-control::placeholder{
	font-size: 8px;
	color: #C4C4C4;
}
</style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5">
          <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
            <i class="fas fa-chevron-left"></i>
            <span class="pb-3">Live chat</span>
            <i class="fas fa-times"></i>
          </div>
            <div class="d-flex flex-row p-3">
              <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
              <div class="chat ml-2 p-3">Hello and thankyou for visiting MotoBuddies. Please click the video above for first helper</div>
            </div>
      
            <div class="d-flex flex-row p-3">
              <div class="bg-white mr-2 p-3"><span class="text-muted">Baik kak, terima kasih kak, saya tonton dulu yaa.</span></div>
              <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7.png" width="30" height="30">
            </div>
            
            <div class="d-flex flex-row p-3">
              <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
              <div class="myvideo ml-2"><img src="https://imgur.com/GOxU1jx.png" width="200"></div>
            </div>
            
            <div class="d-flex flex-row p-3">
              <img src="https://img.icons8.com/color/48/000000/circled-user-female-skin-type-7.png" width="30" height="30">
              <div class="chat ml-2 p-3"><span class="text-muted dot">. . .</span></div>
            </div>
            
            <div class="form-group px-3">
              <textarea class="form-control" rows="5" placeholder="Type your message"></textarea>
            </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>  