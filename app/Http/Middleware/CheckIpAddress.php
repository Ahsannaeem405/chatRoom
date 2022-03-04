<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\ipaddress;
class CheckIpAddress
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $data2=\Http::get('https://api.ipify.org/?format=json');
        $data2=json_decode($data2->body());
        $data = utf8_decode($data2->ip);
        $ipDb=ipaddress::where('ip',($data))->first();
        // dd($ipDb->ip);

dd($ipDb,$data);
        if ($ipDb) {

            // return redirect('/');
            return $next($request);

        } else {


            return redirect('/');

        }
      //  return $next($request);
    }


}
