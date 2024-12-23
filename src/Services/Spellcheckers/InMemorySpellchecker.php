<?php

declare(strict_types=1);

namespace Peck\Services\Spellcheckers;

use Peck\Contracts\Services\Spellchecker;
use Peck\ValueObjects\Issue;
use PhpSpellcheck\MisspellingInterface;
use PhpSpellcheck\Spellchecker\Aspell;

final readonly class InMemorySpellchecker implements Spellchecker
{
    /**
     * Creates a new instance of Spellchecker.
     */
    public function __construct(
        private Aspell $aspell,
    ) {
        //
    }

    /**
     * Creates the default instance of Spellchecker.
     */
    public static function default(): self
    {
        return new self(
            Aspell::create(),
        );
    }

    /**
     * Checks of issues in the given text.
     *
     * @return array<int, Issue>
     */
    public function check(string $text): array
    {
        $misspellings = $this->aspell->check($text);

        return array_map(fn (MisspellingInterface $misspelling): Issue => new Issue(
            $misspelling->getWord(),
            array_slice($misspelling->getSuggestions(), 0, 4),
        ), iterator_to_array($misspellings));
    }
}
