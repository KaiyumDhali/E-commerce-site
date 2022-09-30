@extends('website.master')

@section('title')
    Registration
@endsection

@section('body')
<main>
    <div class="container" ></div>
        <div class="row justify-content-center">
            <div class="col-md-6 py-5">
                <div class="card  shadow" style="height: 850px;">
                    <h3 class="card-header text-center py-5">Register User</h3>
                    <div class="card-body">
                        <form action="{{route('register.customer')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 py-4 ">
                                <input type="text" placeholder="Name" id="name" class="form-control mx-auto" name="name"
                                       required autofocus style="height: 60px;width: 70%;">
                                @if ($errors->has('name'))
                                    <span class="text-danger ">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3 py-4">
                                <input type="text" placeholder="Email" id="email_address" class="form-control mx-auto"
                                       name="email" required autofocus style="height: 60px;width: 70%;">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3 py-4">
                                <input type="password" placeholder="Password" id="password" class="form-control mx-auto"
                                       name="password" required style="height: 60px;width: 70%;">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3 py-4">
                                <input type="number" placeholder="mobile" id="mobile" class="form-control mx-auto"
                                       name="mobile" required style="height: 60px;width: 70%;">
                                @if ($errors->has('mobile'))
                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="file" placeholder="Image" id="image" class="form-control mx-auto"
                                       name="image" required style="height: 60px;width: 70%;">
                                @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>


                            <div class="form-group mb-3 " style="margin-left: 135px;">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                                <div class="reg">
                                    <a class="navbar-brand mr-auto " href="{{ url('/login') }}">Already a member</a>
                                </div>
                            </div>
                            <div class="d-grid mx-auto" style="width: 20%;">
                                <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection

