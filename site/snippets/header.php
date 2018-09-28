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
          <li class="active" data-menu="0">Type</li>
          <li data-menu="1">Style</li>
          <li data-menu="2">Language</li>
          <li data-menu="3">Behaviour</li>
          <li data-menu="4">Effect</li>
          <li data-menu="5">Typography</li>
          <li data-menu="6">Color</li>
          <li data-menu="7">Framework</li>
        </ul>


        <?php
        // fetch all sitetypes
        $sitetypes = $page->children()->visible()->pluck('sitetype', ',', true);
        sort($sitetypes);
        //
        $sitestyles = $page->children()->visible()->pluck('sitestyle', ',', true);
        sort($sitestyles);
        ?>

        <div class="filters_lv filters_lv2">
          <ul class="filter_sitetypes">
            <?php foreach($sitetypes as $sitetype): ?>
            <li>
              <a href="<?= url('websites/' . url::paramsToString(['sitetype' => $sitetype])) ?>">
                <?= html($sitetype) ?>
              </a>
            </li>
            <?php endforeach ?>
          </ul>
          <ul class="filter_sitetypes">
            <?php foreach($sitestyles as $sitestyle): ?>
            <li>
              <a href="<?= url('websites/' . url::paramsToString(['sitestyle' => $sitestyle])) ?>">
                <?= html($sitestyle) ?>
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
