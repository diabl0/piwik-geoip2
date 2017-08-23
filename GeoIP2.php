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

    /**
     * @see \Piwik\Plugin::registerEvents
     */
    public function registerEvents()
    {
        // required to get Plugin loaded during tracker code execution
        return array(
            'Tracker.setTrackerCacheGeneral' => 'setTrackerCacheGeneral',
        );
    }

    public function setTrackerCacheGeneral(&$cache)
    {
    }

}
