<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXQnKiSu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXQnKiSu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXQnKiSu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXQnKiSu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXQnKiSu\App_KernelDevDebugContainer([
    'container.build_hash' => 'XQnKiSu',
    'container.build_id' => '09457132',
    'container.build_time' => 1725029544,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXQnKiSu');
