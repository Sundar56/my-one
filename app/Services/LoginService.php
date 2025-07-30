<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\ModelHasRoles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Traits\TransactionWrapper;

class LoginService
{
    use TransactionWrapper;
}
