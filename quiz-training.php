<?php

/*
Plugin Name: Quiz training
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Ginev
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

include_once 'includes/init.php';

/*
 * Generate tables
 */
register_activation_hook( __FILE__, 'quizTrainingGenerateQuestionTable');
register_activation_hook( __FILE__, 'quizTrainingGenerateAnswerTable');
register_activation_hook( __FILE__, 'quizTrainingGenerateResultsTable');

/*
 * Generate questions table method
 */
function quizTrainingGenerateQuestionTable() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'quiz_training_questions';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            description text NOT NULL,
            PRIMARY KEY  (id)
            )
            COLLATE $charset_collate";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
}

/*
 * Generate answers table method
 */
function quizTrainingGenerateAnswerTable() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'quiz_training_answers';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            description text NOT NULL,
            question_id mediumint(9) NOT NULL,
            PRIMARY KEY  (id)
            )
            COLLATE $charset_collate";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
}

/*
 * Generate results table method
 */
function quizTrainingGenerateResultsTable() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'quiz_training_results';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            description text NOT NULL,
            result_combination text NOT NULL,
            PRIMARY KEY  (id)
            )
            COLLATE $charset_collate";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta( $sql );
}