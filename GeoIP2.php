<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\GeoIP2;

use Piwik\Plugin;

class GeoIP2 extends Plugin
{
    public function isTrackerPlugin()
    {
        return true;
    }
}
