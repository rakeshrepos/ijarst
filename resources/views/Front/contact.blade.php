<!DOCTYPE html>

<html lang="en">

<head>
<title>IJIEMR | INTERNATIONAL JOURNAL FOR INNOVATIVE ENGINEERING AND MANAGEMENT RESEARCH</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="row">


<a class="navbar-brand1" href="{{url('/')}}"><img src="{{asset('frontend/images/ijiemr-logo.png')}}"></a>



</div>
<div class="row">
<nav class="navbar navbar-default ">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>

      <!-- <a class="navbar-brand" href="#myPage">Logo</a> -->

    </div>

    @include('Front.header')

  </div>

</nav>
</div>



<div id="contact" class="container-fluid bg-grey">

  <h2 class="text-center">Send Your Details</h2>

  <div class="row">

    <div class="col-sm-5">
   
    <p>International Journal for Innovative Engineering and Management
Research (IJIEMR)</p>
<p>Rakesh Oruganti</p>
<p>Flat no 106 Thejasri Enclave</p>
<p>Gachibowli Road no 1</p>
<p>Hyderabad, Telangana 500032,
India</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@ijiemr.org</p>
      <p><span class="glyphicon glyphicon-envelope"></span> editor@ijiemr.org</p>

    </div>

    <div class="col-sm-7 ">
        @if(session()->has('success'))
        <div class="alert alert-success alert-rounded">{{ session()->get('success') }}
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>
     @endif

     @if(session()->has('error'))
         <div class="alert alert-danger alert-rounded">
             {{ session()->get('error') }}
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>
     @endif


         
         
<form  method="post" action="{{URL::to('contact-now')}}">
    {{csrf_field()}}
      <div class="row">
        <div class="col-sm-6 form-group">

          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>

        </div>

        <div class="col-sm-6 form-group">

          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required onKeyUp="testEmailChars(this);">
          <span id="a" style="color: red;"></span>

        </div>

      </div>

      <div class="row">

        <div class="col-sm-6 form-group">

          <input class="form-control" id="mobile" name="mobile" placeholder="Mobile" maxlength="10" type="text" required onKeyUp="testMobile(this);">
          <span id="b" style="color: red;"></span>
        </div>

        <div class="col-sm-6 form-group">

          <input class="form-control" id="topic" name="topic" placeholder="Topic" type="text" required>

        </div>

      </div>

      <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5" required></textarea><br>

      <div class="row">

        <div class="col-sm-12 form-group" id="btn">

          <input class="btn btn-default pull-right" type="submit" name="submit" value="Submit">


        </div>

      </div>
</form>
    </div>

  </div>

</div>



<!-- Add Google Maps -->



<script>
/*
var myCenter = new google.maps.LatLng(17.985847, 79.613616);



function initialize() {

var mapProp = {

  center:myCenter,

  zoom:15,

  scrollwheel:false,

  draggable:false,
  key:'AIzaSyDxyMQEqQDEQOkp0fXB1lw31PSweXkHkSc',

  mapTypeId:google.maps.MapTypeId.ROADMAP

  };



var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);



var marker = new google.maps.Marker({

  position:myCenter,

  });



marker.setMap(map);

}



google.maps.event.addDomListener(window, 'load', initialize);*/

</script>

<script>
//       var map;
//       function initMap() {
//         map = new google.maps.Map(document.getElementById('googleMap'), {
//           center: {lat: 17.985847, lng: 79.613616},
//           zoom: 15,
//             scrollwheel:false,

//   draggable:false
//         });
//       }
    </script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxyMQEqQDEQOkp0fXB1lw31PSweXkHkSc&callback=initMap" async defer></script>-->




@include('Front.footer')



<script>

$(document).ready(function(){

  // Add smooth scrolling to all links in navbar + footer link

  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior

    if (this.hash !== "") {

      // Prevent default anchor click behavior

      event.preventDefault();



      // Store hash

      var hash = this.hash;



      // Using jQuery's animate() method to add smooth page scroll

      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area

      $('html, body').animate({

        scrollTop: $(hash).offset().top

      }, 900, function(){

   

        // Add hash (#) to URL when done scrolling (default click behavior)

        window.location.hash = hash;

      });

    } // End if

  });

  

  $(window).scroll(function() {

    $(".slideanim").each(function(){

      var pos = $(this).offset().top;



      var winTop = $(window).scrollTop();

        if (pos < winTop + 600) {

          $(this).addClass("slide");

        }

    });

  });

});

function testEmailChars(el){
    var email = $(el).val();

       var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    

    if (regex.test(email)==true ){
        $("#a").html("");
        $("#btn").html('<input class="btn btn-default pull-right" type="submit" name="submit" value="Submit">')
    } else {
        $("#a").html("* Please Enter A Valid Email");
        $("#btn").html('<input class="btn btn-default pull-right" type="submit" name="submit" value="Submit" disabled>');

    }
}

$('input[name="mobile"]').keyup(function(e)
                                {
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }
});


function testMobile(el){
    var mobile = $(el).val();

       var regex = /^\d*(?:\.\d{1,2})?$/;
    




    if (regex.test(mobile)==true ){
      if(mobile.length==10){
        $("#b").html("");
        $("#btn").html('<input class="btn btn-default pull-right" type="submit" name="submit" value="Submit">');
      }
      else
      {
        $("#b").html("* Please Enter A Valid Mobile Number");
        $("#btn").html('<input class="btn btn-default pull-right" type="submit" name="submit" value="Submit" disabled>');
      }
    } else {
      // var mobile = $(el).val('');
    }
}


</script>



</body>

</html>

