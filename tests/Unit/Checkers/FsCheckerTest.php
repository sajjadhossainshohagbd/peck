<?php

use Peck\Checkers\FileSystemChecker;
use Peck\Services\Spellcheckers\InMemorySpellchecker;

it('does not detect issues in the given directory', function (): void {
    $checker = new FileSystemChecker(
        InMemorySpellchecker::default(),
    );

    $issues = $checker->check([
        'directory' => __DIR__.'/../../../src',
    ]);

    expect($issues)->toBeEmpty();
});

it('detects issues in the given directory', function (): void {
    $checker = new FileSystemChecker(
        InMemorySpellchecker::default(),
    );

    $issues = $checker->check([
        'directory' => __DIR__.'/../../Fixtures',
    ]);

    expect($issues)->toHaveCount(2)
        ->and($issues[0]->file)->toEndWith('tests/Fixtures/FolderWithTypoos')
        ->and($issues[0]->line)->toBe(0)
        ->and($issues[0]->misspelling->word)->toBe('typoos')
        ->and($issues[0]->misspelling->suggestions)->toBe([
            'typos',
            'typo\'s',
            'types',
            'type\'s',
        ])->and($issues[1]->file)->toEndWith('tests/Fixtures/FolderWithTypoos/FileWithTppyo.php')
        ->and($issues[1]->line)->toBe(0)
        ->and($issues[1]->misspelling->word)->toBe('tppyo')
        ->and($issues[1]->misspelling->suggestions)->toBe([
            'typo',
            'Tokyo',
            'typos',
            'topi',
        ]);
});
