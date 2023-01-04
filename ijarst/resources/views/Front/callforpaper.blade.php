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



<!-- <div class="jumbotron text-center">

  <h1>Company</h1> 

  <p>We specialize in blablabla</p> 

  <form class="form-inline">

    <input type="email" class="form-control" size="50" placeholder="Email Address" required>

    <button type="button" class="btn btn-danger">Subscribe</button>

  </form>

</div> -->



<!-- Container (About Section) -->





<!-- Container (Contact Section) -->

<div id="contact" class="container-fluid bg-grey">

  <div class="row">

  <div class="col-sm-8">

      <h2>Online Paper/Manuscript Submission</h2>

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

<form method="post" action="{{URL::to('paper-submit')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="col-sm-10 form-group">

          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>

        </div>

        <div class="col-sm-10 form-group">

          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required onKeyUp="testEmailChars(this);">
          <span id="a" style="color: red;"></span>

        </div>

        <div class="col-sm-10 form-group">

          <input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text" maxlength="10" required onKeyUp="testMobile(this);">
          <span id="b" style="color: red;"></span>

        </div>

        <div class="col-sm-10 form-group">

          <input class="form-control" id="city" name="city" placeholder="City" type="text" required>

        </div>

        <div class="col-sm-10 form-group">

          <input class="form-control" id="state" name="state" placeholder="State" type="text" required>

        </div>

        <div class="col-sm-10 form-group">

          <input class="form-control" id="post" name="zip" placeholder="Postal Code" type="text" required>

        </div>

        <div class="col-sm-10 form-group">

          <input class="form-control" id="country" name="country" placeholder="Country" type="text" required>

        </div>

        <div class="col-sm-11 form-group">

      <textarea class="form-control" id="title" name="title" placeholder="Paper Title" rows="5" required></textarea>

      </div>

      <div class="col-sm-10 form-group">

          <label>Upload Paper </label><input class="form-control" id="paper" name="paper" placeholder="Paper Upload" type="file"  accept="application/pdf,application/doc,application/docx" required>

        </div>

      <div class="row">

        <div class="col-sm-10 form-group" id="btn">

          <input class="btn btn-success pull-right " type="submit" value="Submit" name="submit" >

        </div>

      </div>

      </form>

    </div>

    <div class="col-sm-4 bg-grey">
  <style type="text/css">
      .blink_me {
      animation: blinker 1s linear infinite;
      }

      @keyframes blinker {  
      50% { opacity: 0; }
      }
    </style>
 <h2 style="color:#933;font-size:23px;">ISSN :<span style="color:#207456;"> 2456-5083</span></h2><hr/>
 <h2 class="blink_me" style="color:#933;font-size:23px;">Impact Factor :<span style="color:#207456;"> 5.812</span></h2>
           <h3 style="background:#2F2D43;padding:10px;color:#fff;">News Updates</h3><hr/>
           @foreach ($news as $item)
           <h2>{{$item->title}}</h2>
           <p><span id="news">{{$item->desc}}</span></p>
            @endforeach
    </div>

    

  </div>

</div>



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

})

function testEmailChars(el){
    var email = $(el).val();

       var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    

    if (regex.test(email)==true ){
        $("#a").html("");
        $("#btn").html('<input class="btn btn-success pull-right" type="submit" name="submit" value="Submit">')
    } else {
        $("#a").html("* Please Enter A Valid Email");
        $("#btn").html('<input class="btn btn-success pull-right" type="submit" name="submit" value="Submit" disabled>');

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
        $("#btn").html('<input class="btn btn-success pull-right" type="submit" name="submit" value="Submit">');
      }
      else
      {
        $("#b").html("* Please Enter A Valid Mobile Number");
        $("#btn").html('<input class="btn btn-success pull-right" type="submit" name="submit" value="Submit" disabled>');
      }
    } else {
      // var mobile = $(el).val('');
    }
}

</script>



</body>

</html>

