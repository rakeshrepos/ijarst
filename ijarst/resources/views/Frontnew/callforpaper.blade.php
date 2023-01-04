@include('Frontnew.header');

     <!-- Page Title -->
      <div class="section section-breadcrumbs" style="margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>PAPER SUBMISSION</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
            <img class="img-responsive" src="{{asset('frontend/img/about-us.jpg')}}" alt="About Us">
            </div>
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
                        Dr. SUBRAMANYAM MUNUSWAMY , 2nd Floor, Power Tech House, , Sector 4, 
Velachery, Chennai, Tamil Nadu,<br/>
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

    <script>
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
    <!-- Scrolling Nav JavaScript -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/js/scrolling-nav.js')}}"></script>		
		

</body>
</html>