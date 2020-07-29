<?php
echo sprintf('Hello from <strong>%s</strong><br />', $_ENV['FPM_SERVER']);


echo 'And here\'s a demo image from the <strong>cdn</strong>:<br />';
echo sprintf('<img src=\'http://%s/demo-image.png\' />', $_ENV['CDN_SERVER']);
