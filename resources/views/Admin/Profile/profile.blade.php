

        @include('Admin.Includes.header');
                    
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('Admin.Includes.sidebar');
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Profile</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Edit Profile</li>
                            </ol>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{asset ('uploads/admin_profile/'.$user->image)}}" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{ $user->name }}</h4>
                                    {{-- <h6 class="card-subtitle">Accoubts Manager Amix corp</h6> --}}
{{--                                     <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div> --}}
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{ $user->email }}</h6>
                                @if($user->mobile!='')
                                <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{ $user->mobile }}</h6> 
                                @endif
                                @if($user->city!='' && $user->state!='')
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6>{{ $user->city }} , {{ $user->state }}</h6>
                                @endif
                                {{-- <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br/>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button> --}}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab">Password</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <form action="{{URL::to('admin/profile/'.Auth::user()->id)}}" class="form-horizontal form-material" method="post" enctype="Multipart/Form-data">

                                    @if(session()->has('success'))
                                       <div class="alert alert-success alert-rounded">{{ session()->get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                    @endif

                                    @if(session()->has('Error'))
                                        <div class="alert alert-danger alert-rounded">
                                            {{ session()->get('Error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                            
                                       
                                    @endif


                                        
                                        {{csrf_field()}}

                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" value="{{ $user->name }}" placeholder="Full Name" name="name" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" value="{{ $user->email }}" placeholder="Email" name="email" class="form-control form-control-line" id="example-email" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Phone No" value="{{ $user->mobile }}" name="mobile" class="form-control form-control-line">
                                                </div>
                                            </div>



                                        {{--     <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div> --}}
                                            @if($user->image=='')
                                             <div class="form-group row">
                                                <label class="control-label text-right col-md-2">Photo</label>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <input type="file" id="input-file-now" name="image" class="dropify" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                             <div class="form-group row">
                                                <label class="control-label text-right col-md-2">Photo</label>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <input type="file" id="input-file-now" name="image" class="dropify" data-default-file="{{asset ('uploads/admin_profile/'.$user->image)}}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane" id="password" role="tabpanel">
                                    <div class="card-body">
                                    <form class="form-horizontal form-material" action="{{URL::to('admin/profile/password/'.Auth::user()->id)}}" method="post">

                                    @if(session()->has('success'))
                                       <div class="alert alert-success alert-rounded">{{ session()->get('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                    @endif

                                    @if(session()->has('Error'))
                                        <div class="alert alert-danger alert-rounded">
                                            {{ session()->get('Error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                        </div>
                                            
                                       
                                    @endif


                                        
                                        {{csrf_field()}}

                                            <div class="form-group">
                                                <label class="col-md-12">New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="password" id="password2"  class="form-control form-control-line" required><i class="ti-eye" id="show" style="position:absolute;right: 20px;"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Confirm New Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="con_password" id="con_password"  class="form-control form-control-line" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12">Old Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" name="old_password" id="old_password"  class="form-control form-control-line" required><i class="ti-eye" id="show2" style="position:absolute;right: 20px;"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" id="password_btn" class="btn btn-success">Update Password</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

     
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('Admin.Includes.footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
         <!-- ============================================================== -->
    <script src="{{asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('dist/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{asset('dist/js/pages/jasny-bootstrap.js')}}"></script>

        <!-- jQuery file upload -->
        <script src="{{asset('assets/node_modules/dropify/dist/js/dropify.min.js')}}"></script>


    <script>
    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });

        // Used events
        var drEvent = $('#input-file-events').dropify();

        drEvent.on('dropify.beforeClear', function(event, element) {
            return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
        });

        drEvent.on('dropify.afterClear', function(event, element) {
            alert('File deleted');
        });

        drEvent.on('dropify.errors', function(event, element) {
            console.log('Has Errors');
        });

        var drDestroy = $('#input-file-to-destroy').dropify();
        drDestroy = drDestroy.data('dropify')
        $('#toggleDropify').on('click', function(e) {
            e.preventDefault();
            if (drDestroy.isDropified()) {
                drDestroy.destroy();
            } else {
                drDestroy.init();
            }
        })
    });

        $('#show').click(function(){
            if('password' == $('#password2').attr('type')){
                 $('#password2').prop('type', 'text');
                 $("#show").css({"color": "#fb9678"});
            }else{
                 $('#password2').prop('type', 'password');
                 $("#show").css({"color": "#000"});
            }
        });


        $('#show2').click(function(){
            if('password' == $('#old_password').attr('type')){
                 $('#old_password').prop('type', 'text');
                 $("#show2").css({"color": "#fb9678"});
            }else{
                 $('#old_password').prop('type', 'password');
                 $("#show2").css({"color": "#000"});
            }
        });


        $('#password2').keyup(function () {
            var con_password = $("#con_password").val();
            var password = $("#password2").val();
            validate(con_password,password);
        })

        $('#con_password').keyup(function () {
            var password = $("#password2").val();
            var con_password = $("#con_password").val();
            validate(con_password,password);
        })


        function validate(password,con_password) {
            
            if (password!='' && con_password!='') 
            {
                if (password==con_password) 
                {
                    $('#password_btn').prop('disabled', false);
                    $('#password_btn').html('Update password');
                }
                else
                {
                    $('#password_btn').prop('disabled', true);
                    $('#password_btn').html('Please Confirm Password');
                }
            }
        }

    </script>


</body>


</html>