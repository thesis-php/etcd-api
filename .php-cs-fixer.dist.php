<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;
use PHPyh\CodingStandard\PhpCsFixerCodingStandard;

$config = new Config()
    ->setFinder(
        Finder::create()
            ->in(__DIR__ . '/src')
            ->append([
                __FILE__,
            ]),
    )
    ->setParallelConfig(ParallelConfigFactory::detect())
    ->setCacheFile(__DIR__ . '/var/' . basename(__FILE__) . '.cache');

new PhpCsFixerCodingStandard()->applyTo($config, [
    'fully_qualified_strict_types' => false,
    'phpdoc_annotation_without_dot' => false,
    'phpdoc_summary' => false,
    'phpdoc_trim_consecutive_blank_line_separation' => false,
    'global_namespace_import' => false,
]);

return $config;
