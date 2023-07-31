<?php declare(strict_types = 1);

namespace App\Api;

use Contributte\FrameX\Http\IResponse;
use Nette\Schema\Processor;
use Nette\Schema\Schema;
use Nette\Schema\ValidationException;
use Psr\Http\Message\ServerRequestInterface;

abstract class AbstractController
{

	/**
	 * @param mixed[] $params
	 * @throws ValidationException
	 */
	protected function validate(Schema $schema, array $params): mixed
	{
		return (new Processor())->process($schema, $params);
	}

	abstract public function __invoke(ServerRequestInterface $request): IResponse;

}
