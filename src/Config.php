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
    protected $defaultRules = [
        // Base rule sets...
        '@PSR1' => true,
        '@PSR2' => true,
        '@Symfony' => true,

        // Additional rules
        'psr4' => true,
        'yoda_style' => false,

        // Arrays...
        'array_syntax' => ['syntax' => 'short'],

        // Spacing...
        'single_line_throw' => false,
        'binary_operator_spaces' => true,
        'blank_line_before_return' => true,
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
    ];

    /**
     * Added or overloaded rules.
     *
     * @var array
     */
    protected $overrides = [];

    /**
     * Create a new Config instance.
     *
     * @param array $rules
     */
    public function __construct(array $rules = [])
    {
        parent::__construct('Distorted Fusion - Shared Coding Standard');

        $this->overrides = $rules;
    }

    /**
     * {@inheritdoc}
     */
    public function getRules()
    {
        return array_merge($this->defaultRules, $this->overrides);
    }
}
