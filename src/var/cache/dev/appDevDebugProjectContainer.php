<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAoros6w\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAoros6w/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerAoros6w.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerAoros6w\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerAoros6w\appDevDebugProjectContainer([
    'container.build_hash' => 'Aoros6w',
    'container.build_id' => '161e15aa',
    'container.build_time' => 1670426610,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAoros6w');
