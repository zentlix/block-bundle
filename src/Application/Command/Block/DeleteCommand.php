<?php

/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Zentlix to newer
 * versions in the future. If you wish to customize Zentlix for your
 * needs please refer to https://docs.zentlix.io for more information.
 */

declare(strict_types=1);

namespace Zentlix\BlockBundle\Application\Command\Block;

use Symfony\Component\Validator\Constraints;
use Zentlix\MainBundle\Infrastructure\Share\Bus\DeleteCommandInterface;
use Zentlix\MainBundle\Infrastructure\Share\Bus\CommandInterface;
use Zentlix\BlockBundle\Domain\Block\Entity\Block;

class DeleteCommand implements CommandInterface, DeleteCommandInterface
{
    /** @Constraints\NotBlank() */
    public Block $block;

    public function __construct(Block $block)
    {
        $this->block = $block;
    }
}