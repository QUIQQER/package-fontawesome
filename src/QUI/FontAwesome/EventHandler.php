<?php

/**
 * This file contains QUI\FontAwesome\EventHandler
 */
namespace QUI\FontAwesome;

use QUI;

/**
 * Class EventHandler
 * @package QUI\FontAwesome
 */
class EventHandler
{
    /**
     * Event : on smarty init
     * @param \Smarty $Smarty - \Smarty
     */
    public static function onSmartyInit($Smarty)
    {
        // {fontawesome}
        if (!isset($Smarty->registered_plugins['function']) ||
            !isset($Smarty->registered_plugins['function']['fontawesome'])
        ) {
            $Smarty->registerPlugin("function", "fontawesome", "\QUI\FontAwesome\EventHandler::fontawesome");
        }
    }

    /**
     * Smarty brickarea function {fontawesome}
     *
     * @param array $params - function parameter
     * @param \Smarty $smarty - \Smarty
     * @return array|String
     */
    public static function fontawesome($params, $smarty)
    {
        if (file_exists(OPT_DIR . 'bin/fontawesome/css/font-awesome.css')) {
            return '<link href="' . URL_OPT_DIR . 'bin/fontawesome/css/font-awesome.css"
              rel="stylesheet"
              type="text/css"
                   />';
        }

        return '<link href="' . URL_OPT_DIR . 'bin/font-awesome/css/font-awesome.css"
          rel="stylesheet"
          type="text/css"
               />';
    }
}
