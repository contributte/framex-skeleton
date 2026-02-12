<?php declare(strict_types = 1);

namespace App\Api\Job;

use App\Domain\Job\Job;
use Contributte\FrameX\Http\EntityResponse;

/** @extends EntityResponse<array<string, mixed>> */
class CreateJobResponse extends EntityResponse
{

	public static function of(Job $job): self
	{
		$self = new self();
		$self->payload = $job->toArray();

		return $self;
	}

}
