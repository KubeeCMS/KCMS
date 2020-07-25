<?php
/**
 * Plugin Name:  KCMS Autoloader
 * Plugin URI:   https://github.com/kubeecms/kcms-autoloader
 * Description:  An autoloader that enables standard plugins to be required just like must-use plugins. The autoloaded plugins are included during mu-plugin loading. An asterisk (*) next to the name of the plugin designates the plugins that have been autoloaded.
 * Version:      1.0.3
 * Author:       KubeeCMS
 * Author URI:   https://github.com/kubeecms/
 * License:      GPU License
 */

namespace Kubeecms\Kcms;

if (is_blog_installed() && class_exists(Autoloader::class)) {
    new Autoloader();
}
