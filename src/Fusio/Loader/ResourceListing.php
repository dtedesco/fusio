<?php
/*
 * Fusio
 * A web-application to create dynamically RESTful APIs
 * 
 * Copyright (C) 2015 Christoph Kappestein <k42b3.x@gmail.com>
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Fusio\Loader;

use PSX\Api\Resource\Listing\ControllerDocumentation;
use PSX\Api\Resource;
use PSX\Api\DocumentedInterface;
use PSX\Api\DocumentationInterface;
use PSX\Dispatch\ControllerFactoryInterface;
use PSX\Loader\Context;
use PSX\Loader\RoutingParserInterface;
use PSX\Loader\PathMatcher;
use PSX\Http\RequestInterface;
use PSX\Http\ResponseInterface;

/**
 * ResourceListing
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-3.0
 * @link    http://fusio-project.org
 */
class ResourceListing extends ControllerDocumentation
{
	protected function newContext(array $route)
	{
		$context = parent::newContext($route);
		$context->set('fusio.config', $route[3]);

		return $context;
	}
}