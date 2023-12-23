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
                                    <form>
                                        <div class="mb-4">
                                            <label for="basic-url" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">@</span>
                                                <input type="text" class="form-control" id="basic-url"
                                                    aria-describedby="basic-addon3 basic-addon4"
                                                    placeholder="example@example.com">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">@</span>
                                                <input type="text" class="form-control" id="basic-url"
                                                    aria-describedby="basic-addon3 basic-addon4" placeholder="*********">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn bttn_color rounded-pill mt-4 w-100">Login</button>
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
                                    <form method="POST" action="{{ route('registerUser') }}">
                                        @csrf
                                        
                                        <div class="mb-4">
                                            <label for="reg_name" class="form-label">Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">@</span>
                                                <input type="text" class="form-control" id="reg_name" name="reg_name"
                                                    placeholder="John Son" required>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <label for="reg_email" class="form-label">Email</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">@</span>
                                                <input type="email" class="form-control" id="reg_email" name="reg_email"
                                                    placeholder="example@example.com" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="reg_password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon3">@</span>
                                                <input type="password" class="form-control" id="reg_password" name="password"
                                                    placeholder="*********">
                                            </div>
                                        </div>

                                        <button type="submit"
                                            class="btn bttn_color rounded-pill mt-4 w-100">Register</button>
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
