<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo $this->Html->css('Cv.style') ?>
        <link href="https://fonts.googleapis.com/css?family=Dosis:300&#124;Source+Code+Pro:200,700" rel="stylesheet">
        <title><?php echo $this->fetch('title') ?></title>
    </head>
    <body>
      <?php echo $this->fetch('content') ?>
    </body>
</html>