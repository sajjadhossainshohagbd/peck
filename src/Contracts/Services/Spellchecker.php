<?php

declare(strict_types=1);

namespace Peck\Contracts\Services;

use Peck\ValueObjects\Issue;

/**
 * @internal
 */
interface Spellchecker
{
    /**
     * Checks of issues in the given text.
     *
     * @return array<int, Issue>
     */
    public function check(string $text): array;
}
