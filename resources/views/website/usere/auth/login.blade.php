@extends('website.master')

@section('title')
    Registration
@endsection

@section('body')
    <main>
        <div class="container" ></div>
            <div class="row justify-content-center">
                <div class="col-md-5 py-5">
                    <div class="card  shadow" style="height: 700px;">
                        <h3 class="card-header text-center py-5">Login User</h3>
                        <div class="card-body">
                            <form action="{{route('login.customer')}}" method="POST">
                            @csrf
                                <!-- Email input -->
                                <div class="form-outline mb-4 py-4">
                                    <input type="email" placeholder="email" id="email" class="form-control mx-auto" name="email"
                                           required autofocus style="height: 60px;width: 50%;">
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4 py-4">
                                    <input type="password" placeholder="password" id="password" class="form-control mx-auto" name="password"
                                           required autofocus style="height: 60px;width: 50%;">
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>

                                    <div class="col ">
                                        <!-- Simple link -->
                                        <a href="#!" >Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid mx-auto" style="width: 20%;">
                                    <button type="submit" class="btn btn-dark btn-block">Sign in</button>
                                </div>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Not a member? <a href="#!">Register</a></p>
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-facebook-f text-dark"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-google text-dark"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-twitter text-dark"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fa fa-github text-dark "></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
