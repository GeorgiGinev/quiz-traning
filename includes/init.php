<?php
$quizTrainingPluginName = "Quiz Training Plugin";
$quizTrainingPluginType = "Quiz Plugin";
$quizTrainingPluginSlug = "quiz-training-plugin";

add_action('admin_menu', function () use ($quizTrainingPluginName, $quizTrainingPluginType, $quizTrainingPluginSlug) {
    quizTrainingPluginSetupMenu($quizTrainingPluginName, $quizTrainingPluginType, $quizTrainingPluginSlug);
});

function quizTrainingPluginSetupMenu($name, $type, $slug){
    add_menu_page( $name, $type, 'manage_options', $slug, 'quizTrainingPluginInit' );
}

function quizTrainingPluginInit(){
    if(is_admin()) {
        require_once("admin/index.php");
    }
}
