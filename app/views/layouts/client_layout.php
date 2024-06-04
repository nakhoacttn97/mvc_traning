<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website MVC hoangan Unicode</title>
    <link rel="stylesheet" href="<?=_WEB_ROOT?>/public/assets/clients/css/style.css">
</head>

<body>
    <div class="header-test">Test css for header</div>
    <?php
    $this->render('blocks/header');
    ?>
    <?php $this->render($content, $sub_content); ?>
    <?php
    $this->render('blocks/footer');
    ?>

    <script type="text/javascritp" src="<?=_WEB_ROOT?>/public/assets/js/script.js"></script>
</body>

</html>