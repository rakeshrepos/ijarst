@include('Frontnew.header');


    <!-- Page Title -->
    <div class="section section-breadcrumbs" style="margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>INTERNATIONAL EDITORIAL ADVISORY BOARD</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="section">
        <div class="container">
            <div class="row">
        

            <div class="col-sm-12">
                @foreach ($eboard as $item)
<div class="row">
      <div class="col-md-2 col-sm-12">

      <img src="{{asset('uploads/eboard/'.$item->image)}}" class="img img-thumbnail img-responsive" width="120">
      
      </div>

      <div class="col-md-10 col-sm-12">

      <b style="text-align:left;text-indent:0px;">{{$item->name}} </b>

  <p style="text-align:left;text-indent:0px;">{{$item->line1}}</p>

  <p style="text-align:left;text-indent:0px;">{{$item->line2}} </p>

  <p style="text-align:left;text-indent:0px;">{{$item->line3}}</p>
</div>
      </div>
      <hr/>
@endforeach

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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
    <!-- Scrolling Nav JavaScript -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/js/scrolling-nav.js')}}"></script>		
		

</body>
</html>