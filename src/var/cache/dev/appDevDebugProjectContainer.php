<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3zpsse6\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3zpsse6/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container3zpsse6.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container3zpsse6\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container3zpsse6\appDevDebugProjectContainer([
    'container.build_hash' => '3zpsse6',
    'container.build_id' => '6bc1a59f',
    'container.build_time' => 1670441334,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3zpsse6');
