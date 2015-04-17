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

$aModule = array(
    'id'          => 'smartyext',
    'title'       => '<strong style="color:#c700bb;border: 1px solid #c700bb;padding: 0 2px;background:white;">VT</strong> Smarty Extension Demo',
    'description' => 'shows you how to extend smarty with custom plugins and keep them inside module folder.<hr/>put this text in a random cms page and check the result:<input type="text" size="50" value="[{test}]hello this is a test[{/test}]"/>',
    'thumbnail'   => 'oxid-vt.jpg',
    'version'     => '1.0',
    'author'      => 'Marat Bedoev',
    'email'       => 'oxid@marat-bedoev.net',
    'url'         => 'https://github.com/vanilla-thunder/',
    'extend'      => array(
        'oxutilsview' => 'smartyext/oxutilsview_vtse'
    ),
    'files'       => array(
        'vtse_events' => 'smartyext/vtse_events.php',
    ),
    'events'      => array(
        'onActivate'   => 'vtse_events::onActivate',
        'onDeactivate' => 'vtse_events::onDeactivate'
    )
);
