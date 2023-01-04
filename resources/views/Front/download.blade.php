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



<a class="navbar-brand1" href="{{url('/')}}"><img src="{{url('frontend/images/ijiemr-logo.png')}}"></a>



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

  <div class="col-sm-3 bg-grey">
    @if($vol!='')
    <ul>
        @foreach ($issue as $item)
        <li><a href="{{url('downloads/'.$vol.'/'.$item->issue)}}">{{$item->issue}}</a></li>
        @endforeach
    </ul>
    @endif
    </div>

    <div class="col-sm-9">

            <table id="datatable">

              <thead>

                <tr>
                <td width="70%">Title</td>
                <td>Page No</td>
                <td>Download</td>
                </tr>

              </thead>              

              <tbody>
                  @foreach ($papers as $item)
                  <tr>
                  <td>{{$item->title}}<br/>
                    <span style="color:#336699;">Authors</span>: <span style="color:#d71a21;font-size:12px;">{{$item->author}}</span></td>
                    <td>{{$item->page_no}}</td>
                  <td><a target="_blank" href="{{url('public/uploads/paper/'.$item->paper)}}">Download</a></td>
                </tr>                 
                  @endforeach
              </tbody>

            </table>

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

<script type="text/javascript">

  $(document).ready(function() {

    $('#datatable').DataTable({
        "order": [[ 3, "asc" ]]
    });

} );

</script>

</body>

</html>

