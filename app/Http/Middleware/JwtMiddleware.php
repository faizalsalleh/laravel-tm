<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use PHPOpenSourceSaver\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            // Check for token in Bearer header first, then in cookie
            $token = $request->bearerToken();
            if (!$token) {
                $token = $request->cookie('jwt_token');
            }

            if (!$token) {
                throw new Exception("Authorization token not found.");
            }

            // Explicitly set the token to be used by the facade
            JWTAuth::setToken($token);

            // Authenticate the user from the token
            $user = JWTAuth::authenticate();

            if (!$user) {
                throw new Exception("User not found for the provided token.");
            }

        }
        catch (Exception $e) {
            $errorMsg = $e->getMessage();

            if ($e instanceof \PHPOpenSourceSaver\JWTAuth\Exceptions\TokenInvalidException) {
                $errorMsg = "Token is invalid.";
            }
            else if ($e instanceof \PHPOpenSourceSaver\JWTAuth\Exceptions\TokenExpiredException) {
                $errorMsg = "Token has expired.";
            }

            return redirect()->route('login')->withErrors(['email' => $errorMsg]);
        }

        return $next($request);
    }
}
