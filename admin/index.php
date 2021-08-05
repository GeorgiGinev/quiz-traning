<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url( __FILE__ ); ?>/css/app.css" />

<header>
    <h1>
        <?php
            if(!empty($quizTrainingPluginName)) {
                echo $quizTrainingPluginName;
            }
        ?>
    </h1>
</header>
<section>
    <button class="custom-qp-button">Add</button>
</section>