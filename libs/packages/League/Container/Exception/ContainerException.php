<?php

declare(strict_types=1);

namespace CollectReviews\Vendor\League\Container\Exception;

use CollectReviews\Vendor\Psr\Container\ContainerExceptionInterface;
use RuntimeException;

class ContainerException extends RuntimeException implements ContainerExceptionInterface
{
}
