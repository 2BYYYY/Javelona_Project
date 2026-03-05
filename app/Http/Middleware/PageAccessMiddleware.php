<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedPages = [
            'profile',
            'skill',
            'project',
            'experience',
            'contact'
        ];
        if (!session('linkedin_clicked') || now()->gt(session('linkedin_clicked_expires'))) {
            session()->forget(['linkedin_clicked', 'linkedin_clicked_expires']);
            return redirect('/');
        }
        if (!in_array($request->route()->getName(), $allowedPages)) {
            abort(403);
        }
        
        return $next($request);
    }
}
