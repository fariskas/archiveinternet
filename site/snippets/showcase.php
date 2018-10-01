<?php

$paginateCount = 4;
$websites = page('websites')->children()->visible()->paginate($paginateCount);


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
    })->paginate($paginateCount);
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
    })->paginate($paginateCount);
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
    })->paginate($paginateCount);
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
    })->paginate($paginateCount);
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
    })->paginate($paginateCount);
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
    })->paginate($paginateCount);
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
    })->paginate($paginateCount);
}

$pagination = $websites->pagination();


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




<nav class="pagination">
  <ul>

    <?php if($pagination->hasPrevPage()): ?>
    <li><a href="<?= $pagination->prevPageURL() ?>">Prev</a></li>
    <?php else: ?>
    <!-- <li><span>&larr;</span></li> -->
    <?php endif ?>

    <?php foreach($pagination->range(10) as $r): ?>
    <li><a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a></li>
    <?php endforeach ?>

    <?php if($pagination->hasNextPage()): ?>
    <li class="last"><a href="<?= $pagination->nextPageURL() ?>">Next</a></li>
    <?php else: ?>
    <!-- <li class="last"><span>&rarr;</span></li> -->
    <?php endif ?>

  </ul>
</nav>