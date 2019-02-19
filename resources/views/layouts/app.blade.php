<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Список задач - Laravel Quickstart Intermediate</title>

		<!-- Шрифты -->
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    	<link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    	<!-- Bootstrap -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    	<!-- Кастомные стили -->
    	<style>
	        body {
	            font-family: 'Lato';
	        }

	        label {
	        	cursor: pointer;
	        }

	        .fa-btn {
	            margin-right: 6px;
	        }

	        .main {
	        	padding-top: 6rem;
	        }

	        .text-align-right {
	        	text-align: right;
	        }
    	</style>
	</head>

	<body id="app-layout">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
					
				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-label="Toggle Navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Брэндинг -->
				<a class="navbar-brand" href="{{ url('/') }}">
					Task List
				</a>

				<div class="collapse navbar-collapse justify-content-end" id="app-navbar-collapse">
                	<ul class="navbar-nav">
                		<!-- Ссылки аутентификации -->
                		@if (Auth::guest())
                			<li class="nav-item"><a class="nav-link" href="{{ url('/auth/login') }}">Войти</a></li>
                			<li class="nav-item"><a class="nav-link" href="{{ url('/auth/register') }}">Регистрация</a></li>
                		@else
                			<li class="nav-item dropdown">
                				<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                					{{ Auth::user()->name }} <span class="caret"></span>
                				</a>

                				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
                					<a class="dropdown-item" href="{{ url('/auth/logout') }}"><i class="fas fa-btn fa-sign-out-alt"></i>Выйти</a>
                				</div>
                			</li>
                		@endif
                	</ul>
				</div>
			</div>
		</nav>

	@yield('content')

	</body>
</html>