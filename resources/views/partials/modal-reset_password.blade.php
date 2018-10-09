<!-- Login Modal -->
<div class="modal fade login-signup" id="reset_password" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Welcome to <img src="images/logo/modal.png" alt=""></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Ask any Multiple choice question</h6>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="userLogin" value="true">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <p><input id="rp_email" type="email" class="form-control" name="email" placeholder="Email" required autofocus/></p>
                    <p><input type="password" class="form-control" name="password" placeholder="Password" required /></p>
                    <p><input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required /></p>
                    <p><button type="submit" class="btn btn-theme md block radius">Reset Password &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span></button></p>
                </form>
            </div>
        </div>
    </div>
</div>