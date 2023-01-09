<?php

include_once "vendor/autoload.php";

use Laminas\I18n\Translator\Translator;

$tradutor = new Translator;

$arrTranslationConfig = [
    'translator' => [
        'locale' => 'pt_BR',
        'translation_file_patterns' => [
            [
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ],
        ],
    ],
];


echo $tradutor->translate('All rights reserved');
?>
