<?php declare(strict_types = 1);

namespace App\Api\Job;

use App\Api\AbstractController;
use Contributte\FrameX\Http\ErrorResponse;
use Contributte\FrameX\Http\IResponse;
use Psr\Http\Message\ServerRequestInterface;

class DeleteJobController extends AbstractController
{

	public function __invoke(ServerRequestInterface $request): IResponse
	{
		$uuid = $request->getAttribute('uuid');

		if ($uuid === null || $uuid === '') {
			return ErrorResponse::create()
				->withErrorCode(400)
				->withMessage('Missing uuid body');
		}

		// do some magic in your domain

		return DeleteJobResponse::of();
	}

}
