<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXP9ClRK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXP9ClRK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXP9ClRK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXP9ClRK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXP9ClRK\App_KernelDevDebugContainer([
    'container.build_hash' => 'XP9ClRK',
    'container.build_id' => '9c87a424',
    'container.build_time' => 1729146541,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXP9ClRK');
