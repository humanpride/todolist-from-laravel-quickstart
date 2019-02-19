<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

	/**
	* Арибуты массового заполнения.
	*
	* @var array
	*/
	protected $fillable = ['name'];

	/**
	* Получить владельца задачи.
	*/
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
