@include('Frontnew.header');

<style>
    .details-box{
        display: flex; 
        justify-content: space-between; 
        justify-items: center
    }

    .volume{
        width: 49rem;
    }

    @media only screen and (max-width: 600px) {
        .details-box {
            display: block;
        }

        .volume{
            width: 100vw;
        }
    }
</style>
<div class="section section-breadcrumbs" style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Download Paper</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
    <div class="col-sm-2">
    @if($issue!='')
    <ul class="list">
        @foreach ($issue as $item)
        <li><a href="{{url('downloads/'.$vol.'/'.$item->issue)}}">{{$item->issue}}</a></li>
        @endforeach
    </ul>
    @endif

    </div>
        @if($paper!=null)
        <div class="col-sm-10">
            <p style="color: black; font-size: 24px;">{{$paper->title}}</p>
            <div class="details-box">
                <div>
                    <div style="display: flex; gap:10px;">
                        <p style="font-size: 16px; color:#336699;">Authors:</p>
                        <p style="font-size: 14px; color:#d71a21;">{{$paper->author}}</p>
                    </div>
                    <p style="color:black">Page No: <span>{{$paper->page_no}}</span> </p>
                </div>
                <div>
                    <a href="{{url('public/uploads/paper/'.$paper->paper)}}" target="_blank" style="background-color: #aec62c; color:white; padding: 10px 10px; font-weight: bold;">
                        DOWNLOAD ARTICLE
                    </a>
                </div>
            </div>

            <div class="volume" style="margin-top: 60px; margin-bottom: 50px; border: 1px solid rgb(204, 204, 204);">
                <div class="volume" style="background: #aec62c; padding: 2px; display: flex; justify-items: center; color:white; font-size: 25px;">
                    <p>Volume & Issue</p>
                </div>
                <div style="padding: 4px;">
                    <p style="color: black;">{{$paper->volume}},{{$paper->issue}}</p>
                </div>
            </div>
        </div>
        @endif
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

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>		

</body>
</html>