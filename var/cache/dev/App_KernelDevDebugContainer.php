<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7tJKgjJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7tJKgjJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7tJKgjJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7tJKgjJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7tJKgjJ\App_KernelDevDebugContainer([
    'container.build_hash' => '7tJKgjJ',
    'container.build_id' => '441a18e4',
    'container.build_time' => 1727423733,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container7tJKgjJ');
