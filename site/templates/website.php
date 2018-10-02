<?php snippet('header') ?>




  <main class="main padding_global" role="main">

    <div class="meta_wrap">

      <h1><?= $page->title()->html() ?></h1>
      <div class="meta_text meta_urlfull">
        <span><?= $page->urlfull()->html() ?></span>
      </div>

      <div class="meta_text meta_madeby">
        <label>Made By</label>
        <span><?= $page->madeby()->html() ?></span>
      </div>

      <div class="meta_text meta_year">
        <label>Year</label>
        <span><?= $page->year()->html() ?></span>
      </div>

      <div class="meta_text meta_country">
        <label>Country</label>
        <span><?= $page->country()->html() ?></span>
      </div>

      <div class="meta_text meta_sitetype">
        <label>Type</label>
        <span>
          <?php $sitetypes = str::split($page->sitetype(),','); ?>
          <ul>
            <?php foreach($sitetypes as $sitetype): ?>
              <li>
                <a href="<?= url() ?>/sitetype:<?= $sitetype ?>" rel="home"><?= $sitetype ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </span>
      </div>

      <div class="meta_text meta_sitestyle">
        <label>Style</label>
        <span>
          <?php $sitestyles = str::split($page->sitestyle(),','); ?>
          <ul>
            <?php foreach($sitestyles as $sitestyle): ?>
              <li>
                <a href="<?= url() ?>/sitestyle:<?= $sitestyle ?>" rel="home"><?= $sitestyle ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </span>
      </div>


    </div>
    <!--/.meta-wrap-->
    
    <div class="image_wrap">
      
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      
    </div>
    
    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>