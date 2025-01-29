<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Configuration file. It contains variables used in the template and the main menu auto creation function
 *
 */

/* Template variables */
$template = array(
    'name'          => 'STOP',
    'version'       => '2.1',
    'author'        => 'pixelcave',
    'title'         => 'STOP ADDICTION',
    'description'   => 'FreshUI is a Premium Web App and Admin Template created by pixelcave and published on Themeforest.',
    // ''               empty to remove full width from the page (< 992px: 100%, > 992px: 95%, 1440px max width)
    // 'full-width'     for a full width page (100%, 1920px max width)
    'page'          => '',
    // 'navbar-default' for a light header
    // 'navbar-inverse' for a dark header
    'header_navbar' => 'navbar-default',
    // 'navbar-fixed-top'     for a top fixed header
    // 'navbar-fixed-bottom'  for a bottom fixed header
    'header'        => 'navbar-fixed-top',
    // ''                  left sidebar will open only from the top left toggle button (better website performance)
    // 'enable-hover'      will make a small portion of left sidebar visible, so that it can be opened with a mouse hover (> 1200px) (may affect website performance)
    'sidebar_left'  => 'enable-hover',
    // ''                  right sidebar will open only from the top right toggle button (better website performance)
    // 'enable-hover'      will make a small portion of right sidebar visible, so that it can be opened with a mouse hover (> 1200px) (may affect website performance)
    'sidebar_right'  => '',
    // ''                                            empty for default behavior
    // 'sidebar-left-pinned'                         for a left pinned sidebar (always visible > 1200px)
    // 'sidebar-right-pinned'                        for a right pinned sidebar (always visible > 1200px)
    // 'sidebar-left-pinned sidebar-right-pinned'    for both sidebars pinned (always visible > 1200px)
    'navigation'    => '',
    // All effects apply in resolutions larger than 1200px width
    // 'fx-none'           remove all effects from main content when one of the sidebars are open (better website performance)
    // 'fx-opacity'        opacity effect
    // 'fx-move'           move effect
    // 'fx-push'           push effect
    // 'fx-rotate'         rotate effect
    // 'fx-push-move'      push-move effect
    // 'fx-push-rotate'    push-rotate effect
    'content_fx'    => 'fx-opacity',
    //  Available themes: 'river', 'amethyst' , 'dragon', 'emerald', 'grass' or '' leave empty for the default fresh orange
    'theme'         => '',
    'active_page'   => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    
    array(
        'name'  => 'Special',
        'url'   => 'header',
    ),
	array(
        'name'  => 'HOME',
        'url'   => 'gallery.php',
        'icon'  => 'fa fa-home'
    ),
    array(
        'name'  => 'CHAT WITH US',
        'url'   => 'chatbox.php',
        'icon'  => 'fa fa-home'
    ),
    array(
        'name'  => 'CATEGORIES',
        'url'   => 'category.php',
        'icon'  => 'fa fa-hand_right'
    ),
    array(
        'name'  => 'TAKE A TEST',
        'url'   => 'category.php',
        'icon'  => 'fa fa-clock-o'
    ),
    array(
        'name'  => 'CHECK SCORE',
        'url'   => 'score.php',
        'icon'  => 'fa fa-pencil-square'
    ),
    array(
        'name'  => 'SOLUTIONS',
        'url'   => 'recovery_ways.php',
        'icon'  => 'fa fa-envelope-o'
    ),
	array(
        'name'  => 'COUNSELLORS',
        'url'   => 'counsellors1.php',
        'icon'  => 'fa fa-envelope-o'
    ),
    array(
        'name'  => 'Chat With Dr.',
        'url'   => 'echat/',
        'icon'  => 'fa fa-envelope-o'
    ),
    array(
        'name'  => 'Logout',
        'url'   => 'logout.php',
        'icon'  => 'fa fa-power-off'
    )
    
);