<?php

namespace App\Policies;

use App\User;
use Eminiarts\NovaPermissions\Policies\Policy;

class UserPolicy extends Policy
{
    /**
     * The Permission key the Policy corresponds to.
     *
     * @var string
     */
    public static $key = 'users';
}
