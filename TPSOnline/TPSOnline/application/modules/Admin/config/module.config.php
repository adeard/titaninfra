<?php
/**
 * @license     http://framework.zend.com/license/new-bsd New BSD License
 * @author      Darto <dartodinus@gmail.com>
 * @contact		+62812-9884-0677
 * @package     AdminModule
 */

return array(
	
    'controllers' => array(
        'invokables' => array(
            'Admin\Controller\User'  		=> 'Admin\Controller\UserController',
            'Admin\Controller\Group' 		=> 'Admin\Controller\GroupController',
			'Admin\Media\Controller\Image' 	=> 'Admin\Media\Controller\ImageController',
			'Admin\Controller\Profile' 		=> 'Admin\Controller\ProfileController',
			'Admin\Controller\Activity' 	=> 'Admin\Controller\ActivityController',
			'Admin\Controller\Perusahaan' 	=> 'Admin\Controller\PerusahaanController',
        ),
    ),

    'router' => array(
        'routes' => array(
            /** USER */
            'admin/user' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/admin/user[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\User',
                        'action'     => 'list',
                    ),
                ),
            ),
            
            /** GROUP */
            'admin/group' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/admin/group[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Group',
                        'action'     => 'list',
                    ),
                ),
            ),
			
			/** IMAGE */
            'admin/image' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/admin/image[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Media\Controller\Image',
                        'action'     => 'list',
                    ),
                ),
            ),
			
			/** PROFILE */
            'admin/profile' => array(
                'type'    => 'segment',
                'options' => array(
					'route'    => '[/:lang]/admin/profile[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Profile',
                        'action'     => 'list',
                    ),
                ),
            ),
			
			
			/** USER ACTIVITY */
            'admin/activity' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/admin/activity[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Activity',
                        'action'     => 'list',
                    ),
                ),
            ),
			
			/** BEGIN PERUSAHAAN */
            'admin/perusahaan' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '[/:lang]/admin/perusahaan[/[:action]][/][:id]',
                    'constraints' => array(
                        'lang'   => '[a-z]{2}(-[A-Z]{2}){0,1}',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Perusahaan',
                        'action'     => 'list',
                    ),
                ),
            ),
			
        ),
    ),
	 

    'view_manager' => array(
		'template_map' => array(

            /** USER */
		    'admin/user/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/User/List'.TPLEXT,
			'admin/user/add'	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/User/Add'.TPLEXT,
			'admin/user/edit' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/User/Edit'.TPLEXT,
			'admin/user/pegawai'=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/User/Pegawai'.TPLEXT,
            
            /** GROUP */
            'admin/group/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Group/List'.TPLEXT,
			'admin/group/add'   => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Group/Add'.TPLEXT,
			'admin/group/edit' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Group/Edit'.TPLEXT,
			
			/** IMAGE */
            'admin/image/list'	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Media/Image/List'.TPLEXT,
			'admin/image/add'   => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Media/Image/Add'.TPLEXT,
			'admin/image/edit' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Media/Image/Edit'.TPLEXT,
			
			/** PROFILE */
			'admin/profile/list' => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Profile/List'.TPLEXT,

			/** USER ACTIVITY */
		    'admin/activity/list' 	=> __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Activity/List'.TPLEXT,
			
			/** PERUSAHAAN */
			'admin/perusahaan/list' => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Perusahaan/List'.TPLEXT,
			'admin/perusahaan/add'  => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Perusahaan/Add'.TPLEXT,
			'admin/perusahaan/edit' => __DIR__ . '/../../../view/'.VIEW_THEMES.'/Admin/Admin/Perusahaan/Edit'.TPLEXT,
			
		),
        'template_path_stack' => array(
            'admin' => __DIR__ . '/../../../view/'.VIEW_THEMES,
        ),
    ),
);