@extends('layouts.app')

@section('content')
	<div class="container main">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<h5 class="card-header">Регистрация</h5>
					<div class="card-body">
						<form role="form" method="POST" action="/auth/register">
							{{ csrf_field() }}

							<div class="row form-group">
								<label class="col-md-4 col-form-label text-align-right" for="username">Имя пользователя</label>

								<div class="col-md-6">
									<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" id="username">

									@if ($errors->has('name'))
										<div class="invalid-feedback">
											<strong>{{ $errors->first('name') }}</strong>
										</div>
									@endif
								</div>
							</div>

							<div class="row form-group">
								<label class="col-md-4 col-form-label text-align-right" for="email">Email</label>
								<div class="col-md-6">
									<input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="email">

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
								<label class="col-md-4 col-form-label text-align-right" for="conf_pass">Подтверждение пароля</label>
								<div class="col-md-6">
									<input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="conf_pass">

									@if ($errors->has('password_confirmation'))
										<div class="invalid-feedback">
											<strong>{{ $errors->first('password_confirmation') }}</strong>
										</div>
									@endif
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn btn-primary">
										<i class="fa fa-btn fa-user"></i>Регистрация
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