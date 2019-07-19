<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\Console\Output\ConsoleOutput;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $logger = new ConsoleOutput();
        $logger->writeln('당신은 '.$request->path().'에 성공적으로 액세스하였습니다.');
        return $next($request);
    }
}
