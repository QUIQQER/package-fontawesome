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
    static function onSmartyInit($Smarty)
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
     * @param Array $params - function parameter
     * @param \Smarty $smarty - \Smarty
     * @return Array|String
     */
    static function fontawesome($params, $smarty)
    {
        return '<link href="'. URL_OPT_DIR .'bin/font-awesome/css/font-awesome.css"
          rel="stylesheet"
          type="text/css"
               />';
    }
}