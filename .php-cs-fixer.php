<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('Faker/Factory')
    ->in(__DIR__.'/src');

$config = new PhpCsFixer\Config();
return $config
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PSR12' => true,
        '@PHP80Migration' => true,
        '@PHP80Migration:risky' => true,
        'phpdoc_to_comment' => false,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder);
