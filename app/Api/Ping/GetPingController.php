<?php declare(strict_types = 1);

namespace App\Api\Ping;

use Contributte\FrameX\Http\IResponse;
use Contributte\FrameX\Http\PureResponse;
use Psr\Http\Message\ServerRequestInterface;

final class GetPingController
{

	public function __invoke(ServerRequestInterface $request): IResponse
	{
		return PureResponse::create()->withPayload('pong');
	}

}
