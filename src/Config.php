<?php

namespace DistortedFusion\PhpCsFixerConfig;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * The base rules are always added.
     *
     * @var array
     */
    protected array $defaultRules = [
        // Base rule sets...
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,

        // Additional rules
        'psr_autoloading' => true,
        'yoda_style' => false,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => false,
            'import_functions' => false,
        ],
        'declare_strict_types' => true,

        // Arrays...
        'array_syntax' => ['syntax' => 'short'],

        // Spacing...
        'single_line_throw' => false,
        'binary_operator_spaces' => true,
        'blank_line_before_statement' => true,
        'ternary_operator_spaces' => true,
        'not_operator_with_successor_space' => true,

        // PHPDOC...
        'phpdoc_align' => true,
        'phpdoc_indent' => true,
        'phpdoc_order' => true,
        'phpdoc_scalar' => true,
        'phpdoc_summary' => true,
        'phpdoc_trim' => true,
        'phpdoc_separation' => true,

        'phpdoc_to_comment' => true,
        'phpdoc_no_access' => true,
        'phpdoc_no_alias_tag' => true,
        'phpdoc_no_package' => true,

        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'no_superfluous_phpdoc_tags' => false,
        'no_blank_lines_after_phpdoc' => true,

        // Breaks code: https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/6472
        'no_unneeded_control_parentheses' => false,
    ];

    /**
     * Added or overloaded rules.
     *
     * @var array
     */
    protected array $extraRules = [];

    /**
     * Create a new Config instance.
     *
     * @param array $extraRules
     */
    public function __construct(array $extraRules = [])
    {
        parent::__construct('Distorted Fusion - Shared Coding Standard');

        $this->extraRules = $extraRules;
    }

    /**
     * {@inheritdoc}
     */
    public function getRules(): array
    {
        return array_merge($this->defaultRules, $this->extraRules);
    }
}
