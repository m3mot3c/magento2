<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

$base = basename($_SERVER['SCRIPT_FILENAME']);

return [
    'navUpdater' => [
        [
            'id'          => 'root',
            'step'        => 0,
            'views'       => ['root' => []],
        ],
        [
            'id'          => 'root.home',
            'url'         => 'home',
            'templateUrl' => "$base/home",
            'header'      => 'Home',
            'nav'         => false,
            'default'     => true,
            'noMenu'      => true,
            'order'       => -1,
        ],
        [
            'id'          => 'root.update',
            'url'         => 'component-grid',
            'templateUrl' => "$base/component-grid",
            'title'       => "Component Manager",
            'controller'  => 'componentGridController',
            'nav'         => false,
            'noMenu'      => true,
            'order'       => 1,
            'type'        => 'update'
        ],
        [
            'id'          => 'root.upgrade',
            'url'         => 'select-version',
            'templateUrl' => "$base/select-version",
            'title'       => 'Select Version',
            'controller'  => 'selectVersionController',
            'header'      => 'Step 1: Select Version',
            'order'       => 1,
            'nav'         => true,
            'type'        => 'upgrade'
        ],
    ],
];
