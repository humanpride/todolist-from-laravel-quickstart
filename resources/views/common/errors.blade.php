@if (count($errors) > 0)
	<!-- Вывод списка ошибок -->
	<div class="alert alert-danger">
		<strong>Упс! Что-то пошло не так!</strong>

		<br><br>

		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif