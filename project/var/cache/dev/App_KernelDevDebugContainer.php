<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerT2lO8cm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerT2lO8cm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerT2lO8cm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerT2lO8cm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerT2lO8cm\App_KernelDevDebugContainer([
    'container.build_hash' => 'T2lO8cm',
    'container.build_id' => '2c249971',
    'container.build_time' => 1678103031,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerT2lO8cm');