@include('Frontnew.header');



    <!-- Page Title -->
    <div class="section section-breadcrumbs" style="margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="container">
            <div class="row">
        
            <div class="col-sm-12">

 
<h2 class="text-center">Send Your Details</h2>

<div class="row">

<div class="col-sm-5">
Dr. SUBRAMANYAM MUNUSWAMY <br/>
<span class="glyphicon glyphicon-phone"></span>,<br/>
<span class="glyphicon glyphicon-envelope"></span> Info.ijarst@gmail.com<br/>
2nd  Floor, Power Tech House, Sector 4, <br/>Velachery, Chennai, Tamil Nadu,<br/> India - .

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
<form action="{{URL::to('contact-now')}}" method="post">
    {{csrf_field()}}

  <div class="row">
    <div class="col-sm-12 form-group">

      <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>

    </div>

    <div class="col-sm-12 form-group">

      <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>

    </div>

  </div>

  <div class="row">

    <div class="col-sm-12 form-group">

      <input class="form-control" id="mobile" name="mobile" placeholder="Mobile" type="text" required>

    </div>

    <div class="col-sm-12 form-group">

      <input class="form-control" id="topic" name="topic" placeholder="Topic" type="text" required>

    </div>

  </div>
<div class="row">

    <div class="col-sm-12 form-group">
  <textarea class="form-control" id="comments" name="comments" placeholder="Message" rows="5"></textarea><br>
</div>
</div>
  <div class="row">

    <div class="col-sm-12 form-group">

      <input class="btn btn-success btn-lg " type="submit" name="submit" value="Submit">

    </div>

  </div>
</form>
</div>

</div>

                </div>
            </div>
        </div>
    </div>


    

    <!-- Footer -->
   <div class="footer">
        <div class="container">
        
            <div class="row">
            
                <div class="col-footer col-md-12 col-xs-12">
                    <h3>Contact Us</h3>
                    <p class="contact-us-details">
                        <b>Address:</b> No. 4, Second Floor,  Power Tech House, Vijaya Nagar, Chennai,,<br/>
                        
                        <b>Email:</b> <a href="mailto:info.ijarst@gmail.com">info.ijarst@gmail.com</a>
                    </p>
                </div>				
                

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright">&copy; 2017 <a href="ijarst.in">INTERNATIONAL JOURNAL FOR ADVANCED RESEARCHS IN SCIENCE & TECHNOLOGY</a> all rights reserved.</div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
    <!-- Scrolling Nav JavaScript -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/js/scrolling-nav.js')}}"></script>		
		

</body>
</html>