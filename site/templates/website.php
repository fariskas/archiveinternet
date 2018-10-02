<?php snippet('header') ?>




  <main class="main main_detailed padding_global" role="main">

    <div class="meta_wrap">

      <h1><?= $page->title()->html() ?></h1>
      <div class="meta_text meta_urlfull">
        <span>
          <a target="_blank" href="<?= $page->urlfull() ?>">
            <?= $page->urlfull()->html() ?> 
            <img src="<?php echo url('assets/images/icn_arrow_diag.svg') ?>" alt="">
          </a>
        </span>
      </div>

      <div class="meta_text_wrap">

        <?php if ($page->madeby()->isNotEmpty()): ?>
          <div class="meta_text meta_madeby">
            <label>Made By</label>
            <span><?= $page->madeby()->html() ?></span>
          </div>
        <?php endif; ?>


        <?php if ($page->year()->isNotEmpty()): ?>
          <div class="meta_text meta_year">
            <label>Year</label>
            <span><?= $page->year()->html() ?></span>
          </div>
        <?php endif; ?>

        <?php if ($page->country()->isNotEmpty()): ?>
          <div class="meta_text meta_country">
            <label>Country</label>
            <span><?= $page->country()->html() ?></span>
          </div>
        <?php endif; ?>

        <?php if ($page->sitetype()->isNotEmpty()): ?>
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
        <?php endif; ?>

        <?php if ($page->sitestyle()->isNotEmpty()): ?>
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
        <?php endif; ?>

        <?php if ($page->sitebehavior()->isNotEmpty()): ?>
          <div class="meta_text meta_sitebehavior">
            <label>Style</label>
            <span>
              <?php $sitebehaviors = str::split($page->sitebehavior(),','); ?>
              <ul>
                <?php foreach($sitebehaviors as $sitebehavior): ?>
                  <li>
                    <a href="<?= url() ?>/sitebehavior:<?= $sitebehavior ?>" rel="home"><?= $sitebehavior ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </span>
          </div>
        <?php endif; ?>

        <?php if ($page->siteframework()->isNotEmpty()): ?>
          <div class="meta_text meta_sitebehavior">
            <label>Frameworks / Libraries</label>
            <span>
              <?php $siteframeworks = str::split($page->siteframework(),','); ?>
              <ul>
                <?php foreach($siteframeworks as $siteframework): ?>
                  <li>
                    <a href="<?= url() ?>/siteframework:<?= $siteframework ?>" rel="home"><?= $siteframework ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </span>
          </div>
        <?php endif; ?>

        <?php if ($page->sitetypography()->isNotEmpty()): ?>
          <div class="meta_text meta_sitebehavior">
            <label>Typography</label>
            <span>
              <?php $sitetypographys = str::split($page->sitetypography(),','); ?>
              <ul>
                <?php foreach($sitetypographys as $sitetypography): ?>
                  <li>
                    <a href="<?= url() ?>/sitetypography:<?= $sitetypography ?>" rel="home"><?= $sitetypography ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </span>
          </div>
        <?php endif; ?>

        <?php if ($page->sitecolor()->isNotEmpty()): ?>
          <div class="meta_text meta_sitebehavior">
            <label>Colors</label>
            <span>
              <?php $sitecolors = str::split($page->sitecolor(),','); ?>
              <ul>
                <?php foreach($sitecolors as $sitecolor): ?>
                  <li>
                    <a href="<?= url() ?>/sitecolor:<?= $sitecolor ?>" rel="home"><?= $sitecolor ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </span>
          </div>
        <?php endif; ?>

        <?php if ($page->sitelanguage()->isNotEmpty()): ?>
          <div class="meta_text meta_sitebehavior">
            <label>Language</label>
            <span>
              <?php $sitelanguages = str::split($page->sitelanguage(),','); ?>
              <ul>
                <?php foreach($sitelanguages as $sitelanguage): ?>
                  <li>
                    <a href="<?= url() ?>/sitelanguage:<?= $sitelanguage ?>" rel="home"><?= $sitelanguage ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </span>
          </div>
        <?php endif; ?>


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
          <a target="_blank" href="<?= $page->urlfull() ?>">
            <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
          </a>
        </figure>
      <?php endforeach ?>
      
    </div>
    
    <?php snippet('prevnext') ?>

  </main>

<?php snippet('footer') ?>