<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Jika request mengharapkan JSON, maka kembalikan null
        if ($request->expectsJson()) {
            return null;
        }

        // Cek apakah request URI mengandung 'backend' atau 'frontend'
        if ($request->is('backend/*')) {
            return route('backend.login');
        } elseif ($request->is('frontend/*')) { 
            return route('frontend.login'); // Akan digunakan jika frontend telah tersedia
        }

        // Redirect default jika tidak ada yang cocok
        return route('backend.login'); // Ganti ke frontend jika telah tersedia
    }
}
