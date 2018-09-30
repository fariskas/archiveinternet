<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?= css('assets/css/custom.css') ?>

</head>
<body class="">

  <div class="header padding_global">

    <ul class="brand">
      <li class="menu_brand"> <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a></li>
      <li class="menu_filter">Filters</li>
    </ul>

    <div class="filter_menu">
      

      <div class="filters_wrap padding_global">
     
        <ul class="filters_lv filters_lv1">
          <li class="lv1_type">Type</li>
          <li class="lv1_style">Style</li>
          <li class="lv1_language">Language</li>
          <li class="lv1_behavior">Behavior</li>
          <li class="lv1_typography">Typography</li>
          <li class="lv1_color">Color</li>
          <li class="lv1_framework">Framework</li>
        </ul>


        <?php
        // sitetypes
        $sitetypes = $page->children()->visible()->pluck('sitetype', ',', true);
        sort($sitetypes);
        // sitestyles
        $sitestyles = $page->children()->visible()->pluck('sitestyle', ',', true);
        sort($sitestyles);
        // sitebehaviors
        $sitebehaviors = $page->children()->visible()->pluck('sitebehavior', ',', true);
        sort($sitebehaviors);
        // siteframeworks
        $siteframeworks = $page->children()->visible()->pluck('siteframework', ',', true);
        sort($siteframeworks);
        // sitelanguages
        $sitelanguages = $page->children()->visible()->pluck('sitelanguage', ',', true);
        sort($sitelanguages);
        // sitetypographys
        $sitetypographys = $page->children()->visible()->pluck('sitetypography', ',', true);
        sort($sitetypographys);
        // sitecolors
        $sitecolors = $page->children()->visible()->pluck('sitecolor', ',', true);
        sort($sitecolors);
        ?>


        <div class="filters_lv filters_lv2">
          <ul class="filter_subfilters">

            <!--sitetypes-->
            <?php foreach($sitetypes as $sitetype): ?>
            <li class="li_sitetypes">
              <a href="<?= url('/' . url::paramsToString(['sitetype' => $sitetype])) ?>">
                <?= html($sitetype) ?>
              </a>
            </li>
            <?php endforeach ?>

            <!--sitestyles-->
            <?php foreach($sitestyles as $sitestyle): ?>
            <li class="li_sitestyles">
              <a href="<?= url('/' . url::paramsToString(['sitestyle' => $sitestyle])) ?>">
                <?= html($sitestyle) ?>
              </a>
            </li>
            <?php endforeach ?>

            <!--sitebehaviors-->
            <?php foreach($sitebehaviors as $sitebehavior): ?>
            <li class="li_sitebehaviors">
              <a href="<?= url('/' . url::paramsToString(['sitebehavior' => $sitebehavior])) ?>">
                <?= html($sitebehavior) ?>
              </a>
            </li>
            <?php endforeach ?>

            <!--siteframeworks-->
            <?php foreach($siteframeworks as $siteframework): ?>
            <li class="li_siteframeworks">
              <a href="<?= url('/' . url::paramsToString(['siteframework' => $siteframework])) ?>">
                <?= html($siteframework) ?>
              </a>
            </li>
            <?php endforeach ?>

            <!--sitelanguages-->
            <?php foreach($sitelanguages as $sitelanguage): ?>
            <li class="li_sitelanguages">
              <a href="<?= url('/' . url::paramsToString(['sitelanguage' => $sitelanguage])) ?>">
                <?= html($sitelanguage) ?>
              </a>
            </li>
            <?php endforeach ?>

            <!--sitetypographys-->
            <?php foreach($sitetypographys as $sitetypography): ?>
            <li class="li_sitetypographys">
              <a href="<?= url('/' . url::paramsToString(['sitetypography' => $sitetypography])) ?>">
                <?= html($sitetypography) ?>
              </a>
            </li>
            <?php endforeach ?>

            <!--sitecolors-->
            <?php foreach($sitecolors as $sitecolor): ?>
            <li class="li_sitecolors">
              <a href="<?= url('/' . url::paramsToString(['sitecolor' => $sitecolor])) ?>">
                <?= html($sitecolor) ?>
              </a>
            </li>
            <?php endforeach ?>



          </ul>
        </div>


      </div>
      <!--/.filters_wrap-->


    </div>
    <!--/.filter_menu-->



  </div>
  <!--/.header-->
