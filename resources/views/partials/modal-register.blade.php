<!-- Signup -->
<div class="modal fade login-signup" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Welcome to <img src="{{ asset('images/logo/modal.png') }}" alt=""></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Ask any Multiple choice question</h6>
                <div class="text-center">
                    <div class="row">
                        <div class="col-6">
                            <a href="#"><img src="{{ asset('images/icon/google.png') }}" alt=""></a>
                        </div>
                        <div class="col-6">
                            <a href="#"><img src="{{ asset('images/icon/facebook.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <input type="hidden" name="userLogin" value="true">
                    <p><input type="text" class="form-control" name="name" placeholder="Full Name" /></p>
                    <p><input type="email" class="form-control" name="email" placeholder="Email" /></p>
                    <p><input type="password" class="form-control" name="password" placeholder="Password" /></p>
                    <p><input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" /></p>
                    <p><button type="submit" class="btn btn-theme md block radius">Create Account &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span></button></p>
                </form>

                <div class="others-option">
                    <div class="row">
                        <div class="col-9 col-sm-6">
                            <p><a href="javascript:;" @click="loadLoginModal">Already have an account ?</a></p>
                        </div>
                        <div class="col-3 col-sm-6">
                            <p class="text-right"><a href="javascript:;" @click="loadLoginModal"><strong>Login</strong></a></p>
                        </div>
                    </div><br>

                    <p class="text-center">By signing up,you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>