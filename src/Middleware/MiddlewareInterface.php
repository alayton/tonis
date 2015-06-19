<?php
namespace Tonis\Web;

use Tonis\Web\Http\Request;
use Tonis\Web\Http\Response;

interface MiddlewareInterface
{
    /**
     * @param Request $request
     * @param Response $response
     * @param $next
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke(Request $request, Response $response, $next);

    /**
     * @param App $app
     * @return \Tonis\Router\Router|null
     */
    public function configure(App $app);
}