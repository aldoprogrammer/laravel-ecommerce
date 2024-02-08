@extends('frontend.main_master')
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <br>
                    <img class="card-img-top mt-3 mb-3"
                    src="{{ (!empty($user->profile_photo_path))
                      ? url('upload/user_images/'.$user->profile_photo_path)
                      : url('upload/no_image.jpg')}}"
                    alt="User Avatar"
                    style="border-radius: 50%;" height="100%" width="100%"
                    >
                    <li class="list-group list-group-flush">
                        <a href="{{ route('dashboard')}}" class="btn btn-primary btn-sm
                        btn-block">
                            Home
                        </a>
                        <a href="{{ route('user.profile.edit')}}" class="btn btn-primary btn-sm
                        btn-block">
                            Profile Update
                        </a>
                        <a href="" class="btn btn-primary btn-sm
                        btn-block">
                            Change Password
                        </a>
                        <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm
                        btn-block">
                            Logout
                        </a>
                    </li>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center">
                            <span class="text-danger">Hi....</span>
                            <strong>{{ Auth::user()->name }}</strong>
                            Edit Profile
                        </h3>
                        <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="name">Name</label>
                                <input type="text"
                                class="form-control
                                unicase-form-control text-input"
                                value="{{ $user->name }}"
                                id="name" name="name" >
                                @error('name')
                                    <span class="invalid-feedback"
                                    role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title"
                                for="email">Email</label>
                                <input type="email"
                                class="form-control
                                unicase-form-control text-input"
                                value="{{ $user->email }}"
                                id="email" name="email" >
                                @error('email')
                                    <span class="invalid-feedback"
                                    role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title"
                                for="phone">Phone</label>
                                <input type="text"
                                class="form-control
                                unicase-form-control text-input"
                                value="{{ $user->phone }}"
                                id="phone" name="phone" >
                                @error('phone')
                                    <span class="invalid-feedback"
                                    role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title"
                                for="profile_photo_path">Profile Photo</label>
                                <input type="file"
                                class="form-control
                                unicase-form-control text-input"
                                id="profile_photo_path" name="profile_photo_path" >
                                @error('profile_photo_path')
                                    <span class="invalid-feedback"
                                    role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                class="btn btn-danger">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
