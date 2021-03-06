<!-- BEGIN LOGIN FORM -->
<form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
	{{ csrf_field() }}
	<h3 class="form-title">Login to your account</h3>
	<div class="alert alert-danger {{ ($errors->has('email') OR $errors->has('password')) ? ' ' : 'display-hide' }}">
		<button class="close" data-close="alert"></button>
		<span>
		Enter any email and password. </span>
	</div>
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
		<label class="control-label visible-ie8 visible-ie9">Email Address</label>
		<div class="input-icon">
			<i class="fa fa-envelope"></i>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" id="email" value="{{ old('email') }}" placeholder="Email Address" name="email"/>
			@if($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            @endif
		</div>
	</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label class="control-label visible-ie8 visible-ie9">Password</label>
		<div class="input-icon">
			<i class="fa fa-lock"></i>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" id="password" name="password"/>
			@if($errors->has('password'))
                <span class="help-block">
                    {{ $errors->first('password') }}
                </span>
            @endif
		</div>
	</div>
	<div class="form-actions">
		<label class="checkbox">
		<input type="checkbox" name="remember" {{ old('remembe ') ? 'checked' : '' }} /> Remember me </label>
		<button type="submit" class="btn blue pull-right">
		Login <i class="m-icon-swapright m-icon-white"></i>
		</button>
	</div>
	<!-- <div class="login-options">
		<h4>Or login with</h4>
		<ul class="social-icons">
			<li>
				<a class="facebook" data-original-title="facebook" href="javascript:;">
				</a>
			</li>
			<li>
				<a class="twitter" data-original-title="Twitter" href="javascript:;">
				</a>
			</li>
			<li>
				<a class="googleplus" data-original-title="Goole Plus" href="javascript:;">
				</a>
			</li>
			<li>
				<a class="linkedin" data-original-title="Linkedin" href="javascript:;">
				</a>
			</li>
		</ul>
	</div> -->
	<div class="forget-password">
		<h4>Forgot your password ?</h4>
		<p>
			 no worries, click <a href="{{ url('/password/reset') }}" id="forget-password">
			here </a>
			to reset your password.
		</p>
	</div>
	<div class="create-account">
		<p>
			 Don't have an account yet ?&nbsp; <a href="{{ url('/register') }}" id="register-btn">
			Create an account </a>
		</p>
	</div>
</form>