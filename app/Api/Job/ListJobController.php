<?php declare(strict_types = 1);

namespace App\Api\Job;

use App\Api\AbstractController;
use App\Domain\Job\Job;
use Contributte\FrameX\Http\IResponse;
use Psr\Http\Message\ServerRequestInterface;

class ListJobController extends AbstractController
{

	public function __invoke(ServerRequestInterface $request): IResponse
	{
		// do some magic in your domain
		$jobs = [
			new Job('12345'),
			new Job('abcdef'),
		];

		return ListJobResponse::of($jobs);
	}

}
