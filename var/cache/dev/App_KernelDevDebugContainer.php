<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7qbgEPF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7qbgEPF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7qbgEPF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7qbgEPF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7qbgEPF\App_KernelDevDebugContainer([
    'container.build_hash' => '7qbgEPF',
    'container.build_id' => '6a1e6bdb',
    'container.build_time' => 1657802489,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7qbgEPF');