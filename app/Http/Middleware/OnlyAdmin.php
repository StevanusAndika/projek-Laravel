<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class OnlyAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next) : Response
    {
        if (Auth::check()) {
            if (Auth::user()->role_id == 1) {
                // Pengguna adalah admin, izinkan akses
                return $next($request);
            } else {
                // Pengguna bukan admin, tampilkan pesan kesalahan
                if ($request->expectsJson()) {
                    // Jika request adalah AJAX (misalnya, melalui JavaScript), kirim response JSON
                    return response()->json(['error' => 'Anda bukan admin'], 403);
                } else {
                    // Tampilkan pesan kesalahan dan redirect jika tidak menggunakan AJAX
                    $notification = [
                        'type' => 'error',
                        'message' => 'Anda bukan admin.'
                    ];
                    $notificationJson = json_encode($notification);

                    // Tambahkan script JavaScript ke response header
                    $response = $next($request);
                    $response->header('X-Notification', $notificationJson);

                    return $response;
                }
            }
        } else {
            // Pengguna belum login, tampilkan pesan kesalahan
            if ($request->expectsJson()) {
                // Jika request adalah AJAX, kirim response JSON
                return response()->json(['error' => 'Anda harus login terlebih dahulu.'], 401);
            } else {
                // Tampilkan pesan kesalahan dan redirect jika tidak menggunakan AJAX
                $notification = [
                    'type' => 'error',
                    'message' => 'Anda harus login terlebih dahulu.'
                ];
                $notificationJson = json_encode($notification);
                return redirect('/')->with('notification', $notificationJson);
            }
        }
    }
}
