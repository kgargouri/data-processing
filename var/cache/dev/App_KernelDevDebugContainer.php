<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOrw9xMc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOrw9xMc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOrw9xMc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOrw9xMc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOrw9xMc\App_KernelDevDebugContainer([
    'container.build_hash' => 'Orw9xMc',
    'container.build_id' => '0ace89ac',
    'container.build_time' => 1676974245,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOrw9xMc');