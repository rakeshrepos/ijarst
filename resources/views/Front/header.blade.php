<div class="collapse navbar-collapse" id="myNavbar" style="margin-left: -21px;">
    <ul class="nav navbar-nav">
    <li><a href="{{url('/')}}">Home</a></li>
    <!-- 	<li><a href="about.php">About</a></li> -->
        <li><a href="{{url('/call-for-paper')}}">Call For Paper</a></li>
        <li><a href="{{url('/eboard')}}">E-Board</a></li>
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Archives
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                @foreach ($volume as $item)
                <li><a href="{{url('/downloads/'.$item->name)}}">{{$item->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li><a href="{{url('/fee')}}">Fee</a></li>
     <li><a href="{{url('/indexing')}}">Indexing</a></li>
     <li><a href="https://www.elsevier.com/solutions/ssrn">Connect To Elsevier Center</a></li>
        <!-- <li><a href="Copyright Agreement-IJIEMR.pdf">Copyright</a></li>
        <li><a href="submission.php">Submission</a></li> -->
        <li><a href="{{url('/contact')}}">Contact</a></li>
    </ul>
</div>