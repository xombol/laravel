<?php

namespace App\Http\Middleware;


use Auth;
use Closure;
use Illuminate\Http\Request;


class AuthUserGroup
{
    public function handle(Request $request, Closure $next, string $group)
    {
        $user = $request->user();

        if ($user->role !== $group) {
            abort(403);
        }

        return $next($request);
    }
}
