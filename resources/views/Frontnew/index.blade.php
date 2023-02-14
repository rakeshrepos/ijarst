
@include('Frontnew.header');
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">IJARST</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/review-process')}}">Review Process</a></li>
                <li><a href="{{url('/paper-submission')}}">Submission</a></li>
                <li><a href="{{url('/eboard')}}">E Board</a></li>
                <li><a href="{{url('/join-e-board')}}">Join E-Board</a></li>
                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Archives
                   <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                    @php
                    $volume =  DB::table('volumes')->Orderby('id','asc')->get();
                    @endphp
                    @foreach ( $volume as $item )
                   <li><a href="{{url('/downloads/'.$item->name)}}">{{$item->name}}</a></li>
                    @endforeach
                 </ul>
               </li>

            
                <li><a href="{{url('/contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

<section id="main-slider" class="no-margin" style="margin-top: 70px;">
    <div class="carousel slide">
     <!--    <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(frontend/img/slides/1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">IJARST </h2>
                                <p class="animation animated-item-2">International Journal For Advanced Researchs In Science &amp; Technology </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <!-- <div class="item" style="background-image: url(img/slides/2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1">Powerful and Responsive HTML Template</h2>
                                <p class="animation animated-item-2">Phasellus adipiscing felis a dictum dictum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ligula risus. </p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item--
            <div class="item" style="background-image: url(img/slides/3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1">Works Seamlessly Well on All Devices</h2>
                                <p class="animation animated-item-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae euismod lacus. Maecenas in tempor lectus. Nam mattis, odio ut dapibus ornare, libero. </p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <!-- <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="icon-angle-right"></i>
    </a> -->
</section><!--/#main-slider-->


    <!-- Call to Action Bar -->
    <div class="section section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="calltoaction-wrapper">
                        <h3><span style="color:#aec62c; text-transform:uppercase;font-size:24px;">IJARST</span> Downloads</h3> <a href="copyright.docx" class="btn btn-orange">Copyright</a>
                        <a href="registration-form.doc" class="btn btn-orange">Registration Form</a>
                        <a href="template.doc" class="btn btn-orange">Template</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action Bar -->

    <!-- Services -->
    <div class="section section-white">
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
                
                    <h2>About IJARST</h2>
                    <p>
                        International Journal For Advanced Researchs In Science & Technology is an open access online peer reviewed international journal that publishes research and review articles in the fields of Computer Science, Neural Networks, Electrical Engineering, Software Engineering, Information Technology, Mechanical Engineering, Chemical Engineering, Plastic Engineering, Food Technology, Textile Engineering, Nano Technology & science, Power Electronics, Electronics & Communication Engineering, Computational mathematics, Image processing, Civil Engineering, Structural Engineering, Environmental Engineering, VLSI Testing & Low Power VLSI Design etc.
                    </p>
                    <p>
                        International Journal For Advanced Researchs In Science & Technology aims to cover the latest outstanding developments in the field of all Engineering Technologies & science.  International Journal For Advanced Researchs In Science & Technologyis a team of researchers not publication services or private publications running the journals for monetary benefits, we are association of scientist and academia who focus only on supporting authors who want to publish their work. The articles published in our journal can be accessed online, all the articles will be archived for real time access.
Our journal system primarily aims to bring out the research talent and the works done by sciaentists, academia, engineers, practitioners, scholars, post graduate students of engineering and science. 

                    </p>						
                    <p>
                        This journal aims to cover the scientific research in a broader sense and not publishing a niche area of research facilitating researchers from various verticals to publish their papers. It is also aimed to provide a platform for the researchers to publish in a shorter of time, enabling them to continue further All articles published are freely available to scientific researchers in the Government agencies, educators and the general public. We are taking serious efforts to promote our journal across the globe in various ways, we are sure that our journal will act as a scientific platform for all researchers to publish their works online.
                    </p>
                                
                </div>
                <!-- <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <i class="icon-home"></i>
                        <h3>Aliquam in adipiscing</h3>
                        <p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <i class="icon-briefcase"></i>
                        <h3>Curabitur mollis</h3>
                        <p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-wrapper">
                        <i class="icon-calendar"></i>
                        <h3>Vivamus mattis</h3>
                        <p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
                        <a href="#" class="btn">Read more</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Services -->




    <!-- Our Portfolio -->	

    <div class="section section-white">
        <div class="container">
            <div class="row">

            
    
    
        <ul class="grid cs-style-3">
            <div class="col-md-9 col-sm-12">
            <div class="section-title">
            <h2>Why Choose Us</h2>
            </div>
                <figure>
                    <p><span style="color:#aec62c; text-transform:uppercase;font-size:16px;">IJARST</span> is an Open Access, peer-reviewed, scholarly journal. It publishes research articles in the Engineering, Science and Computing. (see these Subject Areas for a fuller list).</p>
                    <p><span style="color:#aec62c; text-transform:uppercase;font-size:16px;">IJARST</span> evaluates articles based only on an objective determination of scientific and methodological soundness, not on subjective determinations of 'impact,' 'novelty' or 'interest'.</p>
                    <p><span style="color:#aec62c; text-transform:uppercase;font-size:16px;">IJARST</span> applies the highest standards to everything it does - specifically, the publication places an emphasis on research integrity; high ethical standards; constructive peer-review; exemplary production quality; and leading edge online functionality.</p>
                    <p><span style="color:#aec62c; text-transform:uppercase;font-size:16px;">IJARST</span> accepts Research Articles such as Survey Papers OR Literature Review Articles also. It does not accept Hypothesis Papers, Commentaries, Opinion Pieces, Case Studies, Case Reports etc. ( which may instead be submitted to IJARST Special Issue Conferences ) .</p>
                </figure>
            </div>	
            <div class="col-md-3 col-sm-12">
                <div class="section-title">
            <h2>New Updates</h2>

            </div>
            </div>
            
        </ul>
            </div>
        </div>
    </div>
    <!-- Our Portfolio -->
        

<div class="section section-white">
        <div class="container">
            <div class="row">

            
    
    
        <ul class="grid cs-style-3">
            <div class="col-md-12 col-sm-12">
            <div class="section-title">
            <h2>Citation Factor</h2>
            </div>
            <br/>
            <a href="{{asset('frontend/img/cite/A.JPG')}}"><img src="{{asset('frontend/img/cite/A.JPG')}}" style="border:1px solid #ccc;" width=180 height=150></a>
            <a href="{{asset('frontend/img/cite/B.JPG')}}"><img src="{{asset('frontend/img/cite/B.JPG')}}" style="border:1px solid #ccc;" width=180 height=150></a>
            <a href="{{asset('frontend/img/cite/C.JPG')}}"><img src="{{asset('frontend/img/cite/C.JPG')}}" style="border:1px solid #ccc;" width=180 height=150></a>
            <a href="{{asset('frontend/img/cite/D.JPG')}}"><img src="{{asset('frontend/img/cite/D.JPG')}}" style="border:1px solid #ccc;" width=180 height=150></a>
            <a href="{{asset('frontend/img/cite/G1.JPG')}}"><img src="{{asset('frontend/img/cite/G1.JPG')}}" style="border:1px solid #ccc;" width=180 height=150></a>
            <a href="{{asset('frontend/img/cite/I.JPG')}}"><img src="{{asset('frontend/img/cite/I.JPG')}}" style="border:1px solid #ccc;" width=180 height=150></a>	
                
                
            </div>	
        
            
        </ul>
            </div>
        </div>
    </div>
    <!-- Our Clients -->
   <div class="section section-white">
        <div class="container">
            <div class="row">

            
    
    
        <ul class="grid cs-style-3">
            <div class="col-md-7 col-sm-12">
            <div class="section-title">
            <h2>IJARST Information and Indexing</h2>
            </div>
            <figure>
                    
            <p>	<b>Publisher:</b> Asian Science Research</p>
            <p>	<b>Format:</b>  Online</p>
            <p>	<b>ISSN Online:</b> 2457 - 0362</p>
            <p>	<b>Indexed:</b>  Google Scholar, DOAJ, Jgate, LOCKSS,(appendix 1 2017 – 2018)</p>
            <p>	<b> Journal Metrics in 2017:</b> CiteScore (0.27) SJR (0.12) SNIP (0.541) </p>
            <p>	<b>Acceptance Rate:</b> 24% in 2017</p>
            <p>	<b>Frequency:</b> monthly</p>
            <p>	<b>Impact Factor:</b> 6.428</p>
            <p>	<b>Type of Journal:</b> Academic/Scholarly Journals</p>
            <p>	<b>Open Access:</b> Yes</p>
            <p>	<b>Indexed & Abstracted:</b> Yes</p>
            <p>	<b>Policy:</b> Peer-reviewed</p>
            <p>	<b>Review Time:</b> 1-2 months</p>
            <p>	<b>Contact & Submission e-mail:</b> Info.ijarst@gmail.com</p>

                
                    
                    
                </figure>
            </div>	
        <div class="col-md-5 col-sm-12">
        <img src="{{asset('frontend/img/cite/K copy.jpg')}}" style="border:1px solid #ccc;" width=450>	
        </div>
            
        </ul>
            </div>
        </div>
    </div>
    <!-- End Our Clients -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
        
            <div class="row">
            
                <div class="col-footer col-md-12 col-xs-12">
                    <h3>Contact Us</h3>
                    <p class="contact-us-details">
                        <b>Address:</b> Dr. SUBRAMANYAM MUNUSWAMY , 2nd Floor, Power Tech House, , Sector 4, 
                                Velachery, Chennai, Tamil Nadu,<br/>
                        
                        <b>Email:</b> <a href="mailto:info.ijarst@gmail.com">info.ijarst@gmail.com</a>
                    </p>
                </div>				
                
    
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright">&copy; 2017 <a href="ijarst.in">IJARST</a> all rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('Frontnew.footer'); --}}

    <!-- Javascripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
    <!-- Scrolling Nav JavaScript -->
    <script src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/js/scrolling-nav.js')}}"></script>		

</body>
</html>