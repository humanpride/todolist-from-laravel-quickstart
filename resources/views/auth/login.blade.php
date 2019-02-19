@extends('layouts.app')

@section('content')
	<div class="container main">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<h5 class="card-header">Войти</h5>
					<div class="card-body">
						<form action="/auth/login" method="POST" role="form">
							{!! csrf_field() !!}

							<div class="row form-group">
								<label class="col-md-4 col-form-label text-align-right" for="email">Email</label>
								
								<div class="col-md-6">
									<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email">

									@if ($errors->has('email'))
										<div class="invalid-feedback">
											<strong>{{ $errors->first('email') }}</strong>
										</div>
									@endif
								</div>
							</div>

							<div class="row form-group">
								<label class="col-md-4 col-form-label text-align-right" for="pass">Пароль</label>
								
								<div class="col-md-6">
									<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pass">

									@if ($errors->has('password'))
										<div class="invalid-feedback">
											<strong>{{ $errors->first('password') }}</strong>
										</div>
									@endif
								</div>
							</div>

							<div class="row form-group">
	                            <div class="col-md-6 offset-md-4">
	                            	<div class="form-check">
										<input class="form-check-input" type="checkbox" name="remember" id="remember">
										<label class="form-check-label" for="remember">Запомнить меня</label>
									</div>
	                            </div>
	                        </div>

							<div class="row form-group">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-btn fa-sign-in-alt"></i>Войти
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection