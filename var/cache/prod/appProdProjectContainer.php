<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG8n99sj\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG8n99sj/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerG8n99sj.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerG8n99sj\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerG8n99sj\appProdProjectContainer([
    'container.build_hash' => 'G8n99sj',
    'container.build_id' => 'e0832626',
    'container.build_time' => 1633707119,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG8n99sj');
