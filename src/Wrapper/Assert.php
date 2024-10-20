<?php
declare(strict_types=1);

namespace App\Wrapper;

use Webmozart\Assert\Assert as WebmozartAssert;

final class Assert
{
    /**
     * @throws \InvalidArgumentException
     */
    public static function notNull($value, $message = ''): void
    {
        WebmozartAssert::notNull($value, $message);
    }
}
