<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1AXYutd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1AXYutd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1AXYutd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1AXYutd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1AXYutd\App_KernelDevDebugContainer([
    'container.build_hash' => '1AXYutd',
    'container.build_id' => 'a91f7b05',
    'container.build_time' => 1688553554,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1AXYutd');
