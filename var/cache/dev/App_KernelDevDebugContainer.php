<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container74IrC19\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container74IrC19/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container74IrC19.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container74IrC19\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container74IrC19\App_KernelDevDebugContainer([
    'container.build_hash' => '74IrC19',
    'container.build_id' => 'e3adee7b',
    'container.build_time' => 1725977427,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container74IrC19');
