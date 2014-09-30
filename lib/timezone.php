<?php
/*
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see  http://github.com/adlawson/timezone/blob/master/LICENSE
 * @link http://github.com/adlawson/timezone
 */

if ('' === ini_get('date.timezone')) {
    date_default_timezone_set('Europe/London');
}
