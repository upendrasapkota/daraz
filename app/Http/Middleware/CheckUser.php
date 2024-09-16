<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, string $user): Response
    {
        $user = $request->user();
        dd($request->all('user'));

        if (!$user || $user->name !== $user) {
            // Redirect to home or an appropriate page if the user type doesn't match
            return redirect('/home');
        }
        return $next($request);
    }
}
