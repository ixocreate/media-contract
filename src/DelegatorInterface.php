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
     * @param MediaInterface $media
     * @return bool
     */
    public function isResponsible(MediaInterface $media): bool;

    /**
     * @return array
     */
    public function directories(): array;

    /**
     * @param MediaInterface $media
     */
    public function process(MediaInterface $media): void;
}
