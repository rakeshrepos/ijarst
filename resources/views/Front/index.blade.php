<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/custom.css')}}">

    <title>IJIEMR</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row border-bottom p-3 pb-0">
            <div class="col-sm-2 text-center">
            <img class="logo pl-0" src="{{asset('frontend/images/logo3.png')}}">
            </div>
            <div class="col-sm-6">
                <h3 class="heading">International Journal For Innovative Engineering and Management Research</h3>
            </div>
            <div class="col-sm-4">
                <img src="{{asset('frontend/images/new_header.png')}}">
            </div>
        </div>

        <div class="jumbotron text-center py-3 border" style="background: #f7f8fa;">
            <h2>Welcome to IJIEMR</h2>
            <b class="blink_me">Impact Factor :<span> 7.812</span></b>
            <div class="search_box" style="height: 40px;margin-top: 2%;">
                <div class="col-sm-7" style="left: 0; right: 0; margin: auto; position: absolute;height: 45px;">
                    <div class="col-sm-12">
                        <div class="dropdown" style="height: 40px;">
                            <form action="{{url('/search')}}" method="POST">
                                {{csrf_field()}}
                                <select class="home_pg_btn ng-untouched ng-pristine ng-valid" name="search_type">
                                    <option value="all">All Content</option>
                                    <option value="author"><i aria-hidden="true" class="fa fa-user home_icon"></i>Author</option>
                                    <option value="title"><i class="fas fa-book-open home_icon"></i>Title</option>
                                    {{-- <option value="ssrn"><i class="fa fa-sort-numeric-asc home_icon"></i>SSRN No</option> --}}
                                </select>
                                <input class="home_pg_input ng-untouched ng-pristine ng-valid" name="search_text" placeholder="Search by authors, title and ssrn no at ijiemr" type="text" required>
                                <button class="home_pg_search_btn" type="submit"><i aria-hidden="true" class="fa fa-search"></i></button> &nbsp;
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="row m-auto">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                <a href="{{url('/archive')}}"><i aria-hidden="true" class="fa fa-book home_icon"></i><span class="home_span_val">{{$paper}}</span><p style="color: #a2312e;">Archive</p></a>
                </div>
                <div class="col-sm-2">
                    <a href="{{url('/eboard')}}">-<i aria-hidden="true" class="fa fa-user home_icon"></i><span class="home_span_val">{{$eboard + 4}}</span><p style="color: #a2312e;">E-Board</p></a>
                </div>
                <div class="col-sm-2">
                    <a href="{{url('/indexing')}}"><i aria-hidden="true" class="fa fa-sort-numeric-asc home_icon"></i><span class="home_span_val">30</span><p style="color: #a2312e;">Indexing</p></a>
                </div>
            </div>
        </div>

        <div class="w-50 m-auto span_btn">
            <a class="call_btn w-25" href="{{url('/')}}" target="_blank">Home</a> <span class="mr-3">||</span>
            <a class="call_btn w-25" href="{{url('/call-for-paper')}}" target="_blank">Call for Paper</a> <span class="mr-3">||</span>
            <a class="call_btn w-25" href="{{url('/call-for-paper')}}" target="_blank">Connect to Elsevier Center</a> <span class="mr-3">||</span>
            <a class="call_btn w-25" href="{{url('/contact')}}" target="_blank">Contact Us</a>
        </div>

        <p class="text-center mt-4">Publication data is based on Elsevier SSRN, the largest abstract and citation database</p><br><hr>

        <h3 class="text-center mt-5">Collaborations and top research areas from the last five years</h3>
        <img src="{{asset('frontend/images/map.png')}}" class="w-100">
    </div>

    <br>
    <br>

    @include('Front.colla');

    <br>
    <br>

    <footer class="border-top border-danger">
        <div class="container mt-2">
            <p style="font-size: 13px;">Powered by Ijiemr™ © 2018</p>
            <p style="font-size: 13px;">Cookies are used by this site. To decline or learn more, visit our Cookies page</p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>