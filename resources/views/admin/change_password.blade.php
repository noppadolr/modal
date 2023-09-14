@extends('admin.body.main')
@section('title','Change Password')
@section('main')
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item active">Change Password</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Change Password</h4>
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




                            <form class="form-control" method="POST" action="{{ route('update.password') }}">
                                @csrf
                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Change Admin Password</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="old_password" class="form-label">Old Password</label>
                                            <input type="password" class="form-control  @error('old_password') is-invalid @enderror"
                                                   id=old_password"  name="old_password">
                                            @error('old_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div><!-- end col -->

                                </div> <!-- end row -->


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-2">
                                            <label for="new_password" class="form-label">New Password</label>
                                            <input type="password" class="form-control  @error('new_password') is-invalid @enderror" id="new_password" name="new_password" >
                                            @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                         </div>

                                    </div> <!-- end col -->

                                </div> <!-- end row -->

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" >
                                            @error('new_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div> <!-- end col -->
                                </div> <!-- end row -->








                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Update Password</button>
                                </div>
                            </form>



                        </div>
                    </div> <!-- end card-->

                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div> <!-- container -->
    </div>

@endsection
