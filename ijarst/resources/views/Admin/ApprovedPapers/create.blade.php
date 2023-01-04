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
                <h4 class="text-themecolor">Add New Paper</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Approved Paper List</a>
                        </li>
                        <li class="breadcrumb-item active">Add New Paper</li>
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
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Add New Paper</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{URL::to('admin/approved-paper')}}" enctype="Multipart/Form-data" method="post" class="form-material form-horizontal">
                            <div class="form-body">
                                <!-- <h3 class="box-title">Person Info</h3> -->
                                <hr class=" m-t-0 m-b-40">

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


                                
                                {{csrf_field()}}




                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Select Volume</label>
                                            <div class="col-md-10">
                                            <select class="select2 form-control custom-select" name="volume" required>
                                                <option disabled selected>Select</option>
                                                @foreach ($volume as $item)
                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Select ISSUE</label>
                                            <div class="col-md-10">
                                            <select class="select2 form-control custom-select" name="issue" required>
                                                <option disabled selected>Select</option>
                                                @foreach ($issue as $item)
                                                <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Page Number</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="page_number" placeholder="Enter Page Number" required>
                                            </div>  
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Author Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="author_name" placeholder="Enter Author Name" required>
                                            </div>  
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Email</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                                            </div>  
                                        </div>

                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Mobile</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" required>
                                            </div>  
                                        </div>
                                        
                                    <!--/span-->
                                 
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Paper Title</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" name="paper_title" rows="3" placeholder="Enter Paper Title" required></textarea>
                                            </div>
                                        </div>

                                    <!--/span-->
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Select File</label>
                                            <div class="col-md-6">
                                                <input type="file" class="form-control" name="file" required>
                                            </div>
                                        </div>                                 

                            </div>
                            <hr>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                                <button type="reset" class="btn waves-effect waves-light btn-rounded btn-light">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
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

<script src="{{asset('assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/node_modules/bootstrap-select/bootstrap-select.min.js')}}" type="text/javascript"></script>

<!-- jQuery file upload -->
<script src="{{asset('assets/node_modules/dropify/dist/js/dropify.min.js')}}"></script>
<script src="{{asset('assets/node_modules/select2/dist/js/select2.full.min.js')}}" type="text/javascript"></script>
<script>
$(function () {
    $(".select2").select2();
});
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
</script>

</body>


</html>