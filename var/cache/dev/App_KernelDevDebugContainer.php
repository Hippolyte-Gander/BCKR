<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB1x3UMi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB1x3UMi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB1x3UMi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB1x3UMi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB1x3UMi\App_KernelDevDebugContainer([
    'container.build_hash' => 'B1x3UMi',
    'container.build_id' => '10af35f0',
    'container.build_time' => 1730316286,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB1x3UMi');
