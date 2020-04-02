<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$gallery = new FieldsBuilder('gallery', ['label' => 'galeria']);

$gallery
    ->addRepeater('gallery', ['label' => 'Galeria'])
        ->addTexT('title')
        ->addGallery('images');

return $gallery;