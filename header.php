<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">
    <header>
        <div class="jumbotron">
            <h1 class="display-4"><?php echo get_bloginfo( 'name' ); ?></h1>
            <p class="lead"><?php echo get_bloginfo( 'description' ); ?></p>
            <hr class="my-4">
            <p>该模型由五部分组成，由内往外依次是：核⼼素养、动机、教育设计（包括⾏为动词和教学活动）、App、技术功能。</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://designingoutcomes.com/assets/PadWheelV5/PW_CHI_V5.0_Apple_SCREEN.pdf" role="button">Learn more</a>
            </p>
        </div>
    </header>

  <!-- Content here -->
  <div class="row">
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
    <div class="col-sm">
      One of three columns
    </div>
  </div>
</div>
