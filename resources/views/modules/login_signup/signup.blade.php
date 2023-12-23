@extends('commonMaster')

@section('pageContent')
    <div>
        <div class="py-5 my-5">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-6 border-end">
                            <div class="p-5">
                                <div class="loginPageHeading pb-4">
                                    <h3 class="fw-bold">Login</h3>
                                    <p class="text-muted fs-13">Already have an account? Please, login!</p>
                                </div>
                                <div class="loginFormSec">
                                    <form method="POST" id="userLoginForm" action="{{ route('userLogin') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="login_email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><span
                                                        class="orange-text lnr lnr-envelope"></span></span>
                                                <input type="email" class="form-control" id="login_email"
                                                    placeholder="example@example.com" name="email_id">
                                            </div>
                                            <span class="text-danger small fs-10">
                                                @error('email_id')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="login_password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><span
                                                        class="orange-text lnr lnr-lock"></span></span>
                                                <input type="password" class="form-control" id="login_password"
                                                    name="user_password" placeholder="*********">
                                            </div>
                                            <span class="text-danger small fs-10">
                                                @error('user_password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <button type="submit" class="btn bttn_color rounded-pill mt-4 w-100">Login</button>
                                        @if (session('error'))
                                            <div class="alert alert-danger py-2 fs-13 mt-3">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="p-5">
                                <div class="loginPageHeading pb-4">
                                    <h3 class="fw-bold">Create Account</h3>
                                    <p class="text-muted fs-13">Don't have an account yet? Register here!</p>
                                </div>
                                <div class="loginFormSec">
                                    <form method="POST" id="userRegisterForm" action="{{ route('registerUser') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><span
                                                        class="orange-text lnr lnr-user"></span></span>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="John Son" value="{{ old('name') }}">
                                            </div>
                                            <span class="text-danger small fs-10">
                                                @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><span
                                                        class="orange-text lnr lnr-envelope"></span></span>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="example@example.com" value="{{ old('email') }}">
                                            </div>
                                            <span class="text-danger small fs-10">
                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text"><span
                                                        class="orange-text lnr lnr-lock"></span></span>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="*********">
                                            </div>
                                            <span class="text-danger small fs-10">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <button type="submit"
                                            class="btn bttn_color rounded-pill mt-4 w-100">Register</button>
                                        @if (session('success'))
                                            <div class="alert alert-success py-2 fs-13 mt-3">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
