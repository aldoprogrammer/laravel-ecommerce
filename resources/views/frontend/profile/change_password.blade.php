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
                            <span class="text-danger">Change Password</span>
                        </h3>
                        <form
                            action="{{ route('user.profile.update') }}"
                            method="post">
                            @csrf
                            <div class="form-group">
                                <label class="info-title" for="name">
                                    Current Password
                                </label>
                                <input type="password"
                                class="form-control
                                unicase-form-control text-input"

                                id="current_password" name="current_password" >
                                @error('current_password')
                                    <span class="invalid-feedback"
                                    role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="name">
                                    New Password
                                </label>
                                <input type="password"
                                class="form-control
                                unicase-form-control text-input"

                                id="password" name="password" >
                                @error('password')
                                    <span class="invalid-feedback"
                                    role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="info-title" for="name">
                                   Confirm New Password
                                </label>
                                <input type="password"
                                class="form-control
                                unicase-form-control text-input"

                                id="password_confirmation" name="password_confirmation" >
                                @error('password_confirmation')
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
