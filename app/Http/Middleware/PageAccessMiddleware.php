<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageAccessMiddleware
{
    // $request — contains everything about the incoming request
    // $next — a function that says "ok, let them through"
    // : Response — means this method must return a response (a page, a redirect, etc.)
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
        if (!in_array($request->route()->getName(), $allowedPages)) {
            abort(403);
        }
        if (!session('linkedin_clicked') || now()->gt(session('linkedin_clicked_expires'))) {
            session()->forget(['linkedin_clicked', 'linkedin_clicked_expires']);
            return redirect('/')->with('show_linkedin_prompt', true);
        }
        
        return $next($request);
    }
}
