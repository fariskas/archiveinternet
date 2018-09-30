<?php

$websites = page('websites')->children()->visible()->paginate(10);

// if($sitetype = param('sitetype')) {
//   $websites = $websites->filterBy('sitetype', $sitetype, ',');
// }

if(param('sitetype')){
    $sitetypes = explode(",", param('sitetype'));
    $websites = $websites->filter(function($website) use ($sitetypes) {
      $inTags = true;
      foreach ($sitetypes as $sitetype) {
        $pTags = explode(",", $website->sitetype()); //get tags field from page
        if(!in_array($sitetype,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}

if(param('sitestyle')){
    $sitestyles = explode(",", param('sitestyle'));
    $websites = $websites->filter(function($website) use ($sitestyles) {
      $inTags = true;
      foreach ($sitestyles as $sitestyle) {
        $pTags = explode(",", $website->sitestyle()); //get tags field from page
        if(!in_array($sitestyle,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}

if(param('sitelanguage')){
    $sitelanguages = explode(",", param('sitelanguage'));
    $websites = $websites->filter(function($website) use ($sitelanguages) {
      $inTags = true;
      foreach ($sitelanguages as $sitelanguage) {
        $pTags = explode(",", $website->sitelanguage()); //get tags field from page
        if(!in_array($sitelanguage,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}

if(param('sitebehavior')){
    $sitebehaviors = explode(",", param('sitebehavior'));
    $websites = $websites->filter(function($website) use ($sitebehaviors) {
      $inTags = true;
      foreach ($sitebehaviors as $sitebehavior) {
        $pTags = explode(",", $website->sitebehavior()); //get tags field from page
        if(!in_array($sitebehavior,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}

if(param('sitetypography')){
    $sitetypographys = explode(",", param('sitetypography'));
    $websites = $websites->filter(function($website) use ($sitetypographys) {
      $inTags = true;
      foreach ($sitetypographys as $sitetypography) {
        $pTags = explode(",", $website->sitetypography()); //get tags field from page
        if(!in_array($sitetypography,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}

if(param('sitecolor')){
    $sitecolors = explode(",", param('sitecolor'));
    $websites = $websites->filter(function($website) use ($sitecolors) {
      $inTags = true;
      foreach ($sitecolors as $sitecolor) {
        $pTags = explode(",", $website->sitecolor()); //get tags field from page
        if(!in_array($sitecolor,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}

if(param('siteframework')){
    $siteframeworks = explode(",", param('siteframework'));
    $websites = $websites->filter(function($website) use ($siteframeworks) {
      $inTags = true;
      foreach ($siteframeworks as $siteframework) {
        $pTags = explode(",", $website->siteframework()); //get tags field from page
        if(!in_array($siteframework,$pTags)){
          $inTags = false;
        }
      }
      return $inTags;
    });
}




/*

The $limit parameter can be passed to this snippet to
display only a specified amount of websites:

```
<?php snippet('showcase', ['limit' => 3]) ?>
```

Learn more about snippets and parameters at:
https://getkirby.com/docs/templates/snippets

*/

if(isset($limit)) $websites = $websites->limit($limit);

?>

<ul class="showcase grid">

  <?php foreach($websites as $website): ?>

    <li class="showcase-item column">
        <a href="<?= $website->url() ?>" class="showcase-link">
          <?php if($image = $website->images()->sortBy('sort', 'asc')->first()): $thumb = $image->crop(1200, 746); ?>
            <img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $website->title()->html() ?>" class="showcase-image" />
          <?php endif ?>
          <div class="showcase-caption">
            <span class="showcase-title"><?= $website->title()->html() ?></span>
            <span class="showcase-url"><?= $website->urlshort()->html() ?></span>
          </div>
        </a>
    </li>

  <?php endforeach ?>

</ul>


<?php if($websites->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($websites->pagination()->hasNextPage()): ?>
  <a class="next" href="<?= $websites->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
  <?php endif ?>

  <?php if($websites->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?= $websites->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>