<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBecJxPp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBecJxPp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBecJxPp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBecJxPp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBecJxPp\App_KernelDevDebugContainer([
    'container.build_hash' => 'BecJxPp',
    'container.build_id' => '65bc3bb5',
    'container.build_time' => 1731052069,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBecJxPp');
