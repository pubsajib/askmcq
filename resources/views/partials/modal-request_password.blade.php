<!-- Login Modal -->
<div class="modal fade login-signup" id="request_password" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Welcome to <img src="images/logo/modal.png" alt=""></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h6>Ask any Multiple choice question</h6>
                <div class="message"></div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <p>
                        <input id="requestEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" required>
                        <span class="invalid-feedback" role="alert"></span>
                    </p>
                    <p>
                        <button type="submit" class="btn btn-theme md block radius">{{ __('Send Password Reset Link') }} &nbsp;&nbsp;&nbsp; <span class="fa fa-long-arrow-right"></span></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>