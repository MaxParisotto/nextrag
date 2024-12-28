<?php

declare(strict_types=1);

use OCP\Util;

// Include your JavaScript file
Util::addScript(OCA\NextRAG\AppInfo\Application::APP_ID, 'main');

?>

<div id="nextrag">
    <header>
        <h1>NextRAG App</h1>
    </header>
    <main>
        <p>This is your app layout. Modify it as needed.</p>
        <div id="content"></div>
    </main>
    <footer>
        <p>Powered by Nextcloud</p>
    </footer>
</div>