<?php

declare(strict_types=1);

namespace Webburza\Sylius\WishlistBundle\Resolver;

use Symfony\Component\HttpFoundation\Request;

interface ProductVariantCartResolverInterface
{
    /**
     * @param Request $request
     */
    public function resolve(Request $request);
}
