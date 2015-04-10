<?php
/**
 * Plugin Name: FeedWordPress Remove Trains
 * Plugin URI: https://github.com/haruair/feedwordpress-remove-trains
 * Description: Remove train effect from FeedWordPress
 * Version: 0.1
 * Author: Edward Kim <onward.edkim@gmail.com>
 * Author URI: http://haruair.com
 * License: GPL v2
 * PHP version 5.4
 *
 * @category Wordpress
 * @package  Weirdmeetup
 * @author   Edward Kim <onward.edkim@gmail.com>
 * @license  GPL v2
 * @link     https://github.com/weirdmeetup/feedwordpress-remove-trains
 */

add_action(
    'feedwordpress_check_feed',
    'Weirdmeetup_Feedwordpress_Remove_Train_effect',
    100
);

/**
 * Set WP_IMPORTING flag for preventing a train effect
 * @param array $settings information about feed
 * @return null
 */
function Weirdmeetup_Feedwordpress_Remove_Train_effect($settings)
{
    if (isset($settings['update/last'])) {
        define('WP_IMPORTING', false);
    } else {
        define('WP_IMPORTING', true);
    }
}
?>