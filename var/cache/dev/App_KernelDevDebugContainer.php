<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXLhCSX2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXLhCSX2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXLhCSX2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXLhCSX2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXLhCSX2\App_KernelDevDebugContainer([
    'container.build_hash' => 'XLhCSX2',
    'container.build_id' => '7d3ac1b6',
    'container.build_time' => 1736871865,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXLhCSX2');
