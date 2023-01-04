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


</div>


<div class="row"  id="myPage">
<div id="about" class="container-fluid">
    <div class="editors">
    <div class="container">
<div class="col-sm-12">
    <div class="ed"style="margin-top: 30px;">
      <h2>BOARD OF EDITOR</h2> 
 <div class="row">
     <div class="container">
    <div class="col-sm-8" style="background-color:white;border-bottom: 1px solid #eee;    margin: 10px 0px 12px 0px;">
        <div class="col-sm-3">
       <img src="{{asset('frontend/images/01.jpg')}}"style="width: 100%;
    border: 1px solid #dddddd;padding: 4px;margin: 20px 0px 10px 0px;">
</div>
<div class="col-sm-5">
<h3 style="    color: black;"> Dr Robelyn Garcia</h3>
<p>Multidisciplinary Professor
& Researcher, Writers
Law, MA, MS, PhD, PDF</p>
<p>Post Doc Fellowship from Arizona State University USA</p>
<p>Post Doc Fellow from Harvard University (Harvard Extension School, Cambridge)</p>
<p>President Emeritus of the Jr-NBA-WNBA</p>
<p>Vice President of American Community Team Sports</p>
<p>Former Professional Basketball Champions
USA </p>  
</div>
        </div>
    <div class="col-sm-4">
        </div>
        
        </div>
  </div>
   <div class="row">
     <div class="container">
    <div class="col-sm-8" style="background-color:white;border-bottom: 1px solid #eee;    margin: 10px 0px 12px 0px;">
        <div class="col-sm-3">
       <img src="{{asset('frontend/images/oruganti.png')}}"style="width: 100%;
    border: 1px solid #dddddd;padding: 4px;margin: 10px 0px 20px 0px;">
</div>
<div class="col-sm-5">
<h3 style="    color: black;"> Rakesh Oruganti </h3>
<h4>Associate cheif Editor </h4>
 
</div>
        </div>
    <div class="col-sm-4">
        </div>
        
        </div>
  </div>
   <div class="row">
     <div class="container">
    <div class="col-sm-8" style="background-color:white;border-bottom: 1px solid #eee;    margin: 10px 0px 12px 0px;">
        <div class="col-sm-3">
       <img src="{{asset('frontend/images/kranthi.png')}}"style="width: 100%;
    border: 1px solid #dddddd;padding: 4px;margin: 10px 0px 20px 0px;">
</div>
<div class="col-sm-5">
<h3 style="color: black;"> T.Kranthi Kumar</h3>
<h4>Executive Editor</h4>
 </p>  
</div>
        </div>
    <div class="col-sm-4">
        </div>
        
        </div>
  </div>
   <div class="row">
     <div class="container">
    <div class="col-sm-8" style="background-color:white;border-bottom: 1px solid #eee;    margin: 10px 0px 12px 0px;">
        <div class="col-sm-3">
       <img src="{{asset('frontend/images/Rubee_Singh.jpeg')}}"style="width: 100%;
    border: 1px solid #dddddd;padding: 4px;margin: 20px 0px 10px 0px;">
</div>
<div class="col-sm-5">
<h3 style="color: black;">Dr Rubee Singh</h3>
<h4>Managing Editor</h4>
<p>
 </p>  
</div>
        </div>
    <div class="col-sm-4">
        </div>
        
        </div>
  </div>

    </div>
    </div>
</div>    
</div>

  <div class="row">

    <div class="col-sm-8 eboard_div" style="margin-top: 30px;"> 

      <h2>INTERNATIONAL EDITORIAL ADVISORY BOARD</h2>
        @foreach ($eboard as $item)
            
          <div class="row">

          <div class="col-sm-offset-1 col-sm-3">

          <img src="{{asset('uploads/eboard/'.$item->image)}}" class="img img-thumbnail img-responsive" width="120">

          </div>

          <div class="col-sm-6">

          <p>{{$item->name}}</p>

      <p>{{$item->line1}}</p>

      <p>{{$item->line2}}</p>

      <p>{{$item->line3}}</p>

          </div>

          </div>
         <hr/>
@endforeach

         

    </div>

    
    <div class="col-sm-4">
    <style type="text/css">
      .blink_me {
      animation: blinker 1s linear infinite;
      }

      @keyframes blinker {  
      50% { opacity: 0; }
      }
	  .gsc-control-cse .gsc-table-result {
	font-family : inherit;
}

.gsc-control-cse .gsc-input-box {
	height : inherit;
}

input.gsc-input,
.gsc-input-box,
.gsc-input-box-hover,
.gsc-input-box-focus,
.gsc-search-button, input.gsc-search-button-v2 {
	box-sizing  : content-box;
	line-height : normal;
	margin-top  : 0px;
}
    </style>
	<script>
  (function() {
    var cx = '010178045324261866676:oo2ac9ogzsk';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>



</div>
</div>

    </div>

  </div>

</div>


	</div>




<!-- Container (Services Section) -->

<!-- <div id="services" class="container-fluid text-center">

  <h2>SERVICES</h2>

  <h4>What we offer</h4>

  <br>

  <div class="row slideanim">

    <div class="col-sm-4">

      <span class="glyphicon glyphicon-off logo-small"></span>

      <h4>POWER</h4>

      <p>Lorem ipsum dolor sit amet..</p>

    </div>

    <div class="col-sm-4">

      <span class="glyphicon glyphicon-heart logo-small"></span>

      <h4>LOVE</h4>

      <p>Lorem ipsum dolor sit amet..</p>

    </div>

    <div class="col-sm-4">

      <span class="glyphicon glyphicon-lock logo-small"></span>

      <h4>JOB DONE</h4>

      <p>Lorem ipsum dolor sit amet..</p>

    </div>

  </div>

  <br><br>

  <div class="row slideanim">

    <div class="col-sm-4">

      <span class="glyphicon glyphicon-leaf logo-small"></span>

      <h4>GREEN</h4>

      <p>Lorem ipsum dolor sit amet..</p>

    </div>

    <div class="col-sm-4">

      <span class="glyphicon glyphicon-certificate logo-small"></span>

      <h4>CERTIFIED</h4>

      <p>Lorem ipsum dolor sit amet..</p>

    </div>

    <div class="col-sm-4">

      <span class="glyphicon glyphicon-wrench logo-small"></span>

      <h4 style="color:#303030;">HARD WORK</h4>

      <p>Lorem ipsum dolor sit amet..</p>

    </div>

  </div>

</div> -->













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

