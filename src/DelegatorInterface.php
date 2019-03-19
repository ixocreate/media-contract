<?php
/**
 * @see https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Media;

use Ixocreate\Contract\ServiceManager\NamedServiceInterface;

interface DelegatorInterface extends NamedServiceInterface
{
    /**
     * @param Media $media
     * @return bool
     */
    public function isResponsible(Media $media): bool;

    /**
     * @return array
     */
    public function directories(): array;

    /**
     * @param Media $media
     */
    public function process(Media $media): void;
}
