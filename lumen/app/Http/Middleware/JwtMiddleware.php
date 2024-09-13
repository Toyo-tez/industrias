<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\ExpiredException;
use App\User;

class JwtMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        $token = $request->header('Authorization');

        if (!$token) {
            return response()->json(['error' => 'Token no proporcionado.'], 401);
        }

        try {
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        } catch (ExpiredException $e) {
            return response()->json(['error' => 'El token ha expirado.'], 401);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al decodificar el token.'], 401);
        }

        $user = User::find($credentials->sub);

        $request->auth = $user;

        return $next($request);
    }
}
