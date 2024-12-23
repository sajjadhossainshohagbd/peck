<?php

declare(strict_types=1);

namespace Peck\ValueObjects;

/**
 * @internal
 */
final readonly class Issue
{
    /**
     * Creates a new instance of FsIssue
     */
    public function __construct(
        public Misspelling $misspelling,
        public string $file,
        public int $line,
    ) {}
}
