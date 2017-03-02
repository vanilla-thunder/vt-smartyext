<?php
/**
 * vt Smarty Extension Demo
 * Copyright (C) 2013  Marat Bedoev
 *
 * This program is free software;
 * you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
 * either version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
 */
class vtse_events extends oxSuperCfg
{
    /**
     * clearing cache
     */
    protected static function _clearCache()
    {
        foreach (glob(oxRegistry::getConfig()->getConfigParam("sCompileDir").'*') as $item) {
            if (!is_dir($item)) {
                unlink($item);
            }
        }
    }

    /**
     * clear cache and reloading smarty object
     */
    public static function onActivate()
    {
        self::_clearCache();

        // reloading smarty object after activation
        oxRegistry::get("oxUtilsView")->getSmarty(true);
    }

    /**
     * clear cache
     */
    public static function onDeactivate()
    {
        // reloading smarty object after deactivationg
        // but blocks are still in tempaltes -> exception
        // needs some optimization / workaround here, cause custom plugins dir is still in smarty object
        //oxRegistry::get("oxUtilsView")->getSmarty(true);
        self::_clearCache();
    }
}
