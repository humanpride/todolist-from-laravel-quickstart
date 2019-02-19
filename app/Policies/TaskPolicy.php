<?php

namespace App\Policies;

use App\User;
use App\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /*
     * Create a new policy instance.
     *
     * @return void
     
    public function __construct()
    {
        //
    }*/

    /**
     * Определяет, может ли данный пользователь удалить заданную задачу.
     *
     * @param User $user
     * @param Task $task
     * @return bool
     */
    public function destroy(User $user, Task $task)
    {
        var_dump($user);
        echo "<br><br>";
        var_dump($task);
        return $user->id === $task->user_id;
    }
}
