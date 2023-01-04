@include('Frontnew.header');

<div class="section section-breadcrumbs" style="margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{Request::segment(2)}} Publications</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
    <div class="col-sm-2">
    @if($vol!='')
    <ul class="list">
        @foreach ($issue as $item)
        <li><a href="{{url('downloads/'.$vol.'/'.$item->issue)}}">{{$item->issue}}</a></li>
        @endforeach
    </ul>
    @endif

    </div>

        <div class="col-sm-10">
<table class="table table-bordered">

      <thead>

        <tr><td>Title</td><td>Page No</td><td>Download</td><td>Author</td></tr>

      </thead>              

      <tbody>
        {{-- @foreach ($papers as $item)
        <tr>
        <td>{{$item->title}}<br/>
          <span style="color:#336699;">Authors</span>: <span style="color:#d71a21;font-size:12px;">{{$item->author}}</span></td>
          <td>{{$item->page_no}}</td>
        <td><a target="_blank" href="{{url('public/uploads/paper/'.$item->paper)}}">Download</a></td>
      </tr>                 
        @endforeach --}}
        @foreach ($papers as $item)

        <tr>

        <td><a href="/approved-paper/{{$item->id}}">{{$item->title}}</a><br/>

        <span style="color:#336699;">Authors</span>: <span style="color:#d71a21;font-size:12px;">{{$item->author}}</span></td>

        <td style="width:60px">{{$item->page_no}}</td>

        <td align="center"><a target="_blank" href="{{url('public/uploads/paper/'.$item->paper)}}"><img src="{{asset('frontend/img/download.png')}}" width="30" height="30"></a></td>
        <td><img src="admin-panel/author/'.$aimg.'" width="61" height="75" class="img img-thumbnail"></td>
        </tr>
        @endforeach
        

        

      </tbody>

    </table>

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

<!-- Javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>		

</body>
</html>