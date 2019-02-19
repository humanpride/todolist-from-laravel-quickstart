@extends('layouts.app')

@section('content')

	<div class="container main">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<!-- Отображение ошибок валидации -->
					@include('common.errors')

					<h5 class="card-header">New Task</h5>

					<!-- Форма добавления задачи -->
					<div class="card-body">
						<form action="/task" method="POST">
							{{ csrf_field() }}

							<!-- Имя задачи -->
							<div class="row form-group">
								<label for="task-name" class="col-sm-3">Task</label>

								<div class="col-sm-6">
									<input type="text" name="name" id="task-name" class="form-control">
								</div>
							</div>

							<!-- Кнопка добавления задачи -->
							<div class="row form-group">
								<div class="offset-sm-3 col-sm-6">
									<button type="submit" class="btn btn-light">
										<i class="fa fa-btn fa-plus"></i> Add Task
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<!-- Текущие задачи -->
				@if (count($tasks) > 0)
					<br>
					<div class="card">
						<h5 class="card-header">Current Tasks</h5>

						<div class="card-body">
							<table class="table table-striped table-borderless">

								<!-- Заголовок таблицы -->
								<thead>
									<th>Task</th>
									<th>&nbsp;</th>
								</thead>

								<!-- Тело таблицы -->
								<tbody>
									@foreach ($tasks as $task)
										<tr>
											<!-- Имя задачи -->
											<td class="table-text">
												<div>{{ $task->name }}</div>
											</td>

											<!-- Кнопка удаления -->
											<td>
												<form action="{{url('task/' . $task->id)}}" method="POST">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}

													<button type="submit" class="btn btn-danger">
														<i class="far fa-btn fa-trash-alt"></i>Delete Task
													</button>
												</form>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection