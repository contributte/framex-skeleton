<?php declare(strict_types = 1);

namespace App\Domain\Job;

class Job
{

	public function __construct(
		private readonly string $uuid
	)
	{
	}

	/**
	 * @return mixed[]
	 */
	public function toArray(): array
	{
		return [
			'uuid' => $this->uuid,
		];
	}

}
