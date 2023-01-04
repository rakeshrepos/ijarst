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

<style type="text/css">p{
  text-align: justify;
  color:#222;
}</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="row">



<a class="navbar-brand1" href="{{url('/')}}"><img src="{{asset('frontend/images/ijiemr-logo.png')}}"></a>



</div>
<div class="row">

<nav class="navbar navbar-default ">

  <div class="container text-center">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">

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





<div id="about" class="container-fluid" style="min-height:500px;">

  <div class="row">

    <div class="col-sm-8">
<img src="{{asset('frontend/images/Capture.jpg')}}">

<a href="https://papers.ssrn.com/sol3/JELJOUR_Results.cfm?form_name=journalbrowse&journal_id=3206923&dgcid=EngRN-PIP-IJIEMR_email_netann"><img src="{{asset('frontend/images/ssrn.jpg')}}"></a>


    
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
 <h2 class="blink_me" style="color:#933;font-size:23px;">Impact Factor :<span style="color:#207456;"> 7.812</span></h2>
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

</script>



</body>

</html>

