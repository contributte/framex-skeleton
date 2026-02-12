<?php declare(strict_types = 1);

namespace App\Api\Job;

use Contributte\FrameX\Http\EntityResponse;

/** @extends EntityResponse<null> */
class DeleteJobResponse extends EntityResponse
{

	public static function of(): self
	{
		$self = new self();
		$self->payload = null;

		return $self;
	}

}
