<?php

namespace CarbonFramework\Routing;

use CarbonFramework\Request;
use CarbonFramework\Routing\Middleware\HasMiddlewareInterface;

/**
 * Interface that routes must implement
 */
interface RouteInterface extends HasMiddlewareInterface {
	/**
	 * Return whether the route is satisfied
	 * 
	 * @param  Request $request
	 * @return boolean
	 */
	public function satisfied( Request $request );

	/**
	 * Return a response for the given request
	 * 
	 * @param  Request                             $request
	 * @return \Psr\Http\Message\ResponseInterface
	 */
	public function handle( Request $request );
}
