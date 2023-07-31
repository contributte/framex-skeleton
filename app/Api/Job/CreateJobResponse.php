<?php declare(strict_types = 1);

namespace App\Api\Job;

use App\Domain\Job\Job;
use Contributte\FrameX\Http\EntityResponse;

class CreateJobResponse extends EntityResponse
{

	public static function of(Job $job): EntityResponse
	{
		$self = self::create();
		$self->payload = $job->toArray();

		return $self;
	}

}
