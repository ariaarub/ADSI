<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
    background: #eee;
}
.card{
    width: 280px;
    background: #2c3b5a;
    color:  #f9f9f9;
    justify-content: center;

}
.insert{
    background: #5E35B1;
    width: 130px;
    border-radius: 1rem;
}
img{
    margin-right: 10px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 35px;
  margin-top: 5px;
}
span{
    text-align: center;
    font-weight: bold;
    font-size: 13px;
    margin-top: 2px;
}
p{
    text-align: center;
    font-size: 8px;
}
.home{
    text-align: left;
}
.opaque{
    color: #5E35B1;
}

.insert{

    transition: all 1.3s ;
}

.insert:hover{

    transform: scale(1.1);
}
</style>
</head>

<body>
<div class="container d-flex justify-content-center mt-5">
	<div class="card">
		<h5 class="d-flex justify-content-between mt-5 px-3">Mr. Rudy </h5><p class="pl-3 home" style="font-size: 10px";> MotoBuddies <i class="fa fa-caret-down"></i></p>
		<div class="row">
		     <div class="col-md-6 d-flex justify-content-center">
		     	<a href="{{route('content')}}"><div class="card insert ml-3 mb-3 container">
		     		<img src="https://img.icons8.com/bubbles/344/car.png" class="center" />
		     		<span>Content</span>
		     		<p>Articles</p>
		     			     		
		     	</div></a>
			
		     </div>
		     <div class="col-md-6 d-flex justify-content-center">
		     	<div class="card insert mr-3 mb-3 container">
		     		<img src="https://img.icons8.com/external-flaticons-flat-flat-icons/344/external-booking-rage-room-flaticons-flat-flat-icons.png" class="center"/>
		     		<span>Booking</span>
		     		<p>Book your service date</p>
		     		
		     	</div>
			
		     </div>
		
	    </div>
	    <div class="row">
		     <div class="col-md-6 d-flex justify-content-center">
		     	<a href="{{route('dealerships')}}" method="post"><div class="card insert ml-3 mb-3 container">
		     		<img src="https://img.icons8.com/bubbles/128/000000/user-location.png" class="center"/>
		     		<span>Location</span>
		     		<p>Search MotoBuddies Dealer.</p>
		     		<p class="opaque">o</p>
		     	</div></a>

			
		     </div>
		     <div class="col-md-6 d-flex justify-content-center">
		     	<a href="{{route('chat')}}" method="post"><div class="card insert mr-3 mb-3 container">
		     		<img src="https://img.icons8.com/fluent/128/000000/alarm.png" class="center"/>
		     		<span>Help</span>
		     		<p>Chat with Customer Service</p>
		     		<p class="opaque">o</p>
		     	</div>
				 </a>
			
		     </div>
		
	    </div>
	    <div class="row">
		     <div class="col-md-6 d-flex justify-content-center">
		     	<a href="{{route('tips')}}" method="post"><div class="card insert ml-3 mb-3 container">
		     		<img src="https://img.icons8.com/doodle/2x/alarm-clock.png" class="center"/>
		     		<span>Tips and Tricks</span>
		     		<p>For your maintenance lifehacks</p>
		     	
		     	</div></a>
			
		     </div>
		     <div class="col-md-6 d-flex justify-content-center">
		     	<a href="{{route('log')}}" method="post"><div class="card insert mr-3 mb-3 container">
		     		<img src="https://img.icons8.com/fluent/128/000000/settings.png" class="center" />
		     		<span>Settings</span>
		     		<p>Edit Profile, About, Etc</p>
		     		
		     	</div></a>
			
		     </div>
		
	    </div>
	</div>
   </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
        </html>