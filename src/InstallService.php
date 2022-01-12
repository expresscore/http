<?php
/**
 * This file is part of the ExpressCore package.
 *
 * (c) Marcin Stodulski <marcin.stodulski@devsprint.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace expresscore\http;

class InstallService {

    public static function install()
    {
        if (!file_exists('public/')) {
            mkdir('public/', 0700, true);
        }

        if (!file_exists('public/.htaccess')) {
            copy(__DIR__ . '/../.htaccess', 'public/.htaccess');
        }
    }
}