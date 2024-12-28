<?php

declare(strict_types=1);

namespace OCA\NextRAG\AppInfo;

use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;
use OCP\INavigationManager;

class Application extends App implements IBootstrap {
    public const APP_ID = 'nextrag';

    public function __construct() {
        parent::__construct(self::APP_ID);
    }

    public function register(IRegistrationContext $context): void {
        // Registration logic
    }

    public function boot(IBootContext $context): void {
        $container = $context->getAppContainer();
        $navigationManager = $container->query(INavigationManager::class);
        $urlGenerator = $container->getServer()->getURLGenerator();

        // Register main navigation entry
        $navigationManager->add([
            'id' => 'nextrag',
            'order' => 10,
            'href' => $urlGenerator->linkToRoute('nextrag.admin_settings'),
            'icon' => $urlGenerator->imagePath('nextrag', 'app-dark.svg'),
            'name' => 'NextRAG',
        ]);

        // Register additional navigation entry
        $navigationManager->add([
            'id' => 'nextrag_useful',
            'order' => 11,
            'href' => $urlGenerator->linkToRoute('nextrag.useful_page'),
            'icon' => $urlGenerator->imagePath('nextrag', 'app-dark.svg'),
            'name' => 'Useful Page',
        ]);
    }
}