<?php
require($root . '/mod/routerBase.php');

switch ($routerUrl->path[0]) {
    case '':
        include($root . '/views/homepage.php');
        break;
    case 'watch':
        include($root . '/views/watch.php');
        break;
    case 'shorts': // redirect to watch
        ob_end_clean();
        ob_start();
        header('Location: /watch?v=' . $path[1]);
        ob_end_flush();
        exit();
    case 'debug':
        include($root . '/debug.php');
        break;
    default:
        $template = '404';
    break;
}