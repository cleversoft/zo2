<?php
/**
 * Zo2 - A powerful Joomla template framework
 * @link        http://www.zootemplate.com/zo2
 * @author      ZooTemplate (http://www.zootemplate.com)
 * @copyright   CleverSoft (http://cleversoft.co/)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted access');

define('ZO2', 'zo2');
define('ZO2_VERSION', '1.5.2');

define('JURL_ROOT', rtrim(JUri::root(), '/'));
/**
 * Paths
 */
define('ZO2PATH_ROOT', JPATH_ROOT . '/plugins/system/' . ZO2 . '/framework');
define('ZO2PATH_ASSETS', ZO2PATH_ROOT . '/assets');
define('ZO2PATH_CACHE', JPATH_ROOT . '/cache/zo2');

/**
 * Urls
 */
define('ZO2URL_ROOT', JURL_ROOT . '/plugins/system/' . ZO2 . '/framework');
define('ZO2URL_ASSETS', ZO2URL_ROOT . '/assets');

/**
 * Core and Template
 */
define('CORE', 'core');
define('TEMPLATE', 'template');
