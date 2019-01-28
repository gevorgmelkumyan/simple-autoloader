<?php

require_once 'autoloader.php';

$metaCharset = new \View\Head\Meta\MetaElement(['charset' => 'utf-8']);
$title = new \View\Head\Title\TitleElement(['value' => 'Simple Autoloader']);
$metaViewport = new \View\Head\Meta\MetaElement([
    'name' => 'viewport',
    'content' => 'width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no',
]);

$head = $metaCharset->view() .
        $title->view() .
        $metaViewport->view();

$a = new \View\Body\AElement([
    'href' => 'https://github.com/gevorgmelkumyan',
    'value' => 'ME.',
    'target' => '_blank',
]);

$h1 = new \View\Body\HElement([
    'number' => '1',
    'styles' => 'color: #FFFFFF;',
    'value' => "This is a simple autoloader written by {$a->view()}",
]);

$h2 = new \View\Body\HElement([
    'number' => '2',
    'styles' => 'color: #FFFFFF;',
    'value' => 'Cool, isn\'t it?',
]);

$img = new \View\Body\ImageElement([
    'src' => 'logo.svg',
    'width' => '215',
]);

$body = $h1->view() .
        $h2->view() .
        $img->view();

$page = new \View\BaseHTMLPage($head, $body);

echo $page->view();