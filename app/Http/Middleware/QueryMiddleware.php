<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\View\Factory as ViewFactory;

class QueryMiddleware
{
    protected $view;

    public function __construct(
        ViewFactory $view
    ) {
        $this->view = $view;
    }
    
    public function handle($request, Closure $next)
    {
        if (!empty($request->getQueryString())) {
            $queryString = '?' . $request->getQueryString();
        }
        $this->view->share('queryString', $queryString ?? '');
        $this->view->share('queryParams', $request->query());
        return $next($request);
    }
}
