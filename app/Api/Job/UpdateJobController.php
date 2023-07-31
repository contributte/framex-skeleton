<?php declare(strict_types = 1);

namespace App\Api\Job;

use App\Api\AbstractController;
use App\Domain\Job\Job;
use Contributte\FrameX\Http\ErrorResponse;
use Contributte\FrameX\Http\IResponse;
use Nette\Schema\Expect;
use Nette\Schema\Schema;
use Nette\Schema\ValidationException;
use Nette\Utils\Json;
use Nette\Utils\JsonException;
use Psr\Http\Message\ServerRequestInterface;

class UpdateJobController extends AbstractController
{

	public static function schema(): Schema
	{
		return Expect::structure([
			'uuid' => Expect::string(),
		])->castTo(UpdateJobRequest::class);
	}

	public function __invoke(ServerRequestInterface $request): IResponse
	{
		$uuid = $request->getAttribute('uuid');

		if ($uuid === null || $uuid === '') {
			return ErrorResponse::create()
				->withErrorCode(400)
				->withMessage('Missing uuid body');
		}

		try {
			/** @var mixed[] $body */
			$body = Json::decode((string) $request->getBody(), forceArrays: true);

			/** @var CreateJobRequest $entity */
			$entity = $this->validate(self::schema(), $body);
		} catch (ValidationException $e) {
			return ErrorResponse::create()
				->withErrorCode(406)
				->withMessage($e->getMessage());
		} catch (JsonException $e) {
			return ErrorResponse::create()
				->withErrorCode(400)
				->withMessage('Invalid JSON body');
		}

		// do some magic in your domain
		$job = new Job($entity->uuid);

		return UpdateJobResponse::of($job);
	}

}
