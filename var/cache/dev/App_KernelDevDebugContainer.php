<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW6SPZlY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW6SPZlY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW6SPZlY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW6SPZlY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW6SPZlY\App_KernelDevDebugContainer([
    'container.build_hash' => 'W6SPZlY',
    'container.build_id' => '496c2125',
    'container.build_time' => 1740395773,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW6SPZlY');
