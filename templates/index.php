<?php

declare(strict_types=1);

use OCP\Util;

// Include the Nextcloud Vue styles and scripts
script('nextrag', 'nextrag-main');

// If you need to include Vue, you can add it like this:
script('core', 'vue');

// Add your styles if needed
style('nextrag', 'style');
?>

<div id="content"></div>