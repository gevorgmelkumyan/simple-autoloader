<?php

spl_autoload_register(function($className) {

    $fqns = explode('\\', $className);
    $lastKey = count($fqns) - 1;
    $relativeClassName = $fqns[$lastKey];
    unset($fqns[$lastKey]);

    $file = __DIR__ . '\\';

    foreach ($fqns as $directoryName) {
        if (is_dir($file . lcfirst($directoryName))) {
            $file .= lcfirst($directoryName) . '\\';
        }
    }

    $file .= $relativeClassName . '.php';

    require_once $file;
});
