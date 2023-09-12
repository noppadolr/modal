@extends('admin.body.main')
@section('title','Admin Profile')
@section('main')

    @push('plugin-styles')
        <!-- Sweet Alert-->
        <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

    @endpush
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img  src="{{ (!empty($adminData->photo))? url('upload/adminImages/'.$adminData->photo):url('upload/no_image.jpg') }}"  class="rounded-circle avatar-lg img-thumbnail"
                                 alt="profile-image">

                            <h4 class="mb-0">{{ $adminData->name }}</h4>
                            <p class="text-muted">Joined :
                            @if(empty($adminData->created_at))
                              -
                            @else
                          {{$adminData->created_at->thaidate()}}

                                @endif
                            </p>

                            <hr>

                            <div class="text-start mt-2">
                                <h4 class="font-13 text-uppercase">About Me :</h4>
                                <p class="text-muted font-13 mb-1">
                                </p>
                                <p class="text-muted mb-1 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>
                                <hr>
                                <p class="text-muted mb-1 font-13"><strong>Username :</strong> <span class="ms-2">{{ $adminData->username }}</span></p>
                                <hr>
                                <p class="text-muted mb-1 font-13"><strong>Mobile :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>
                                <hr>
                                <p class="text-muted mb-1 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>
                                <hr>
                                <p class="text-muted mb-1 font-13">
                                    <strong>Address :</strong>
                                    <span class="ms-2">{{ $adminData->address }}</span>
                                </p>
                                <hr>
                                <p class="text-muted mb-1 font-13">
                                    <strong>Updated at :</strong>
                                    <span class="ms-2">
                                        @if(empty($adminData->updated_at))
                                            -
                                        @else
                                            {{$adminData->updated_at->thaidate()}}

                                        @endif
                                    </span>
                                </p>



                            </div>


                        </div>
                    </div> <!-- end card -->



                </div> <!-- end col-->

                <div class="col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="card-body">




                                    <form class="form-control" method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <label for="firstname" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" id="firstname"  name="name" value="{{$adminData->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="lastname" class="form-label">User Name</label>
                                                    <input type="text" class="form-control" id="username" name="username" value="{{$adminData->username}}">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-2">
                                                    <label for="useremail" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="useremail" name="email" value="{{$adminData->email}}">
{{--                                                    <span class="form-text text-muted"><small>If you want to change email please <a href="javascript: void(0);">click</a> here.</small></span>--}}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-1">
                                                    <label for="phone" class="form-label">Phone</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $adminData->phone }}">
{{--                                                    <span class="form-text text-muted"><small>If you want to change password please <a href="javascript: void(0);">click</a> here.</small></span>--}}
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->

                                        <div class="row">

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address" value="{{ $adminData->address }}">
                                                     </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->


                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="mb-1 mb-xl-0">
                                                    <label for="image" class="form-label">Photo</label>
                                                    <input class="form-control" type="file" id="image" name="photo">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row mt-1">

                                        <div class="col-sm-2 text-center">

                                            <img id="showImage" src="{{ (!empty($adminData->photo))? url('upload/adminImages/'.$adminData->photo):url('upload/no_image.jpg') }}"  alt="image" class="img-fluid rounded" width="120">
{{--                                            <p class="mb-0">--}}
{{--                                                <code>.rounded</code>--}}
{{--                                            </p>--}}
                                        </div>
                                        </div>





                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                        </div>
                                    </form>



                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->
    </div>
    @push('scripts')
        <script src="{{asset('jquery-3.7.0.min.js')}}"></script>

        <!-- Sweet Alerts js -->
        <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

        <!-- Sweet alert init js-->
        <script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script>


        <script type="text/javascript">

            $(document).ready(function(){
                $('#image').change(function(e){
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#showImage').attr('src',e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                });
            });

{{--        </script>--}}

{{--        <script type="text/javascript">--}}
            @if(Session::has('Profileupdated'))
            $(document).ready( function () {
    // alert('test');

    Swal.fire({

        timerProgressBar: true,
        position: "top-end",
        icon: "success",
        title: "Your Profile has been Updated",
        showConfirmButton: !1,
        timer: 1500,

    });
});



            @endif
        </script>

    @endpush
@endsection
