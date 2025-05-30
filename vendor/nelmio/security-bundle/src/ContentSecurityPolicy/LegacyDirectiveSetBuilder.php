<?php

declare(strict_types=1);

/*
 * This file is part of the Nelmio SecurityBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\SecurityBundle\ContentSecurityPolicy;

/**
 * @internal
 */
class LegacyDirectiveSetBuilder implements DirectiveSetBuilderInterface
{
    private DirectiveSet $directiveSet;

    public function __construct(DirectiveSet $directiveSet)
    {
        $this->directiveSet = $directiveSet;
    }

    public function buildDirectiveSet(): DirectiveSet
    {
        return clone $this->directiveSet;
    }
}
