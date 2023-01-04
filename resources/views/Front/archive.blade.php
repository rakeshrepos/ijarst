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

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">

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



<!-- <div class="jumbotron text-center">

  <h1>Company</h1> 

  <p>We specialize in blablabla</p> 

  <form class="form-inline">

    <input type="email" class="form-control" size="50" placeholder="Email Address" required>

    <button type="button" class="btn btn-danger">Subscribe</button>

  </form>

</div> -->



<!-- Container (About Section) -->

<div class="container-fluid">
    <div class="row">
      
                @foreach ($volume as $item)
                <div class="col-md-3 text-center" style="margin-bottom:10px;">
                <a class="bg-danger" style="display:block; padding: 30px;" href="{{url('downloads/'.$item->name)}}">{{$item->name}}</a>
	            </div> 
                @endforeach

            	
    </div>
    <hr>
    
    <h3 class="text-center">Collaborations and top research areas from the last five years</h3>
    <img src="{{asset('frontend/images/map.png')}}" width="100%">
    <br><br>
    
    <div class="row">
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Internet Of Things</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">COMPUTER &amp; H/W</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Management Science</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">IT &amp; MANAGEMENT</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Engg Fundamentals</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">CIVIL</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Power Electronics</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">ELECTRONICS</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Nanotechnology</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">PHYSICS &amp; CIVIL</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">HD Spectroscopy</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">BIOLOGY</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Security</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">IT &amp; SERVICES</p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 static_cont">
            <div class="row">
                <div class="col-sm-3">
                    <img class="img-responsive" src="{{asset('frontend/images/round.png')}}">
                </div>
                <div class="col-sm-9">
                    <h4 style="font-size: 15px">Corrosion</h4>
                    <p style="font-size: 12px; font-family: sans-serif; font-style: italic;">MECHANICAL</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->


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
z
  });

})

</script>

<script type="text/javascript">

  $(document).ready(function() {

    $('#datatable').DataTable();

} );

</script>

</body>

</html>

