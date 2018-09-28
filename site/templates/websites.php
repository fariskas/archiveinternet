<?php snippet('header') ?>

  <main class="main" role="main">

    <header class="wrap">
      <h1><?= $page->title()->html() ?></h1>
      <div class="intro text">
        <?= $page->text()->kirbytext() ?>
      </div>
      <hr />
    </header>

    <div class="filters">

      <?php
      // fetch all sitetypes
      $sitetypes = $page->children()->visible()->pluck('sitetype', ',', true);

      $sitestyles = $page->children()->visible()->pluck('sitestyle', ',', true);

      ?>
      <ul class="sitetypes">
        <?php foreach($sitetypes as $sitetype): ?>
        <li>
          <a href="<?= url('websites/' . url::paramsToString(['sitetype' => $sitetype])) ?>">
            <?= html($sitetype) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

      <ul class="sitetypes">
        <?php foreach($sitestyles as $sitestyle): ?>
        <li>
          <a href="<?= url('websites/' . url::paramsToString(['sitestyle' => $sitestyle])) ?>">
            <?= html($sitestyle) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>

    </div>
      
    <div class="wrap wide">    
      <?php snippet('showcase') ?>
    </div>

  </main>

<?php snippet('footer') ?>