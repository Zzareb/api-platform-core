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

namespace ApiPlatform\Exception;

/**
 * An exception which has a serializable application-specific error code.
 *
 * @deprecated in favor of ApiPlatform\Metadata\Exception\ErrorCodeSerializableInterface
 */
interface ErrorCodeSerializableInterface
{
    /**
     * Gets the application-specific error code.
     */
    public static function getErrorCode(): string;
}
