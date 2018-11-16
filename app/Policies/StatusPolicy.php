<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Status;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /** 授权策略  当前ID必须与作者ID相同 */
    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
