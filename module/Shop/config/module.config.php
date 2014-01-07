<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Shop\Controller\Shop' => 'Shop\Controller\ShopController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/shop[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-z][a-z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Shop\Controller\Shop',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'shop' => __DIR__ . '/../view',
        ),
    ),
);