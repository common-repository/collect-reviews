<?php

declare(strict_types=1);

namespace CollectReviews\Vendor\League\Container\Exception;

use CollectReviews\Vendor\Psr\Container\NotFoundExceptionInterface;
use InvalidArgumentException;

class NotFoundException extends InvalidArgumentException implements NotFoundExceptionInterface
{
}
