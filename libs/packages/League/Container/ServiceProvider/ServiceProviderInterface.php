<?php

declare(strict_types=1);

namespace CollectReviews\Vendor\League\Container\ServiceProvider;

use CollectReviews\Vendor\League\Container\ContainerAwareInterface;

interface ServiceProviderInterface extends ContainerAwareInterface
{
    public function getIdentifier(): string;
    public function provides(string $id): bool;
    public function register(): void;
    public function setIdentifier(string $id): ServiceProviderInterface;
}
