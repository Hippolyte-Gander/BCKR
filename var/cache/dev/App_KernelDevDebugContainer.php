<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWCIHMsm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWCIHMsm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWCIHMsm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWCIHMsm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWCIHMsm\App_KernelDevDebugContainer([
    'container.build_hash' => 'WCIHMsm',
    'container.build_id' => 'c3a55e54',
    'container.build_time' => 1724603512,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWCIHMsm');
