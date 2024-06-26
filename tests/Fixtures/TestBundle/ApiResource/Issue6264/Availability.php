<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Tests\Fixtures\TestBundle\ApiResource\Issue6264;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;

#[ApiResource(normalizationContext: ['groups' => ['get']])]
#[GetCollection(provider: Availability::class.'::getCases')]
#[Get(provider: Availability::class.'::getCase')]
enum Availability: int
{
    use BackedEnumTrait;

    case Available = 0;
    case Cancelled = 10;
    case Postponed = 200;
}
