<?php declare(strict_types = 1);

namespace App\Api\Job;

use Contributte\FrameX\Http\EntityResponse;

class DeleteJobResponse extends EntityResponse
{

	public static function of(): EntityResponse
	{
		return self::create();
	}

}
