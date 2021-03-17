<?php snippet('header') ?>
<div class="Home is-relative has-height-100" data-router-view="home">
  <ul class="Home__menu container is-absolute is-flex is-right-y has-width-100 is-wrap">
  <?php $i = 0; ?>
  <?php foreach($projects as $project): ?>
    <li class="Home__menu--item is-column is-2 is-3-touch is-7-phone">
      <a href="<?= $project->url() ?>" class="Home__menu--link is-block is-relative">
        <p class="has-color-grey has-fontsize-14"><?= $project->category() ?></p>
        <h2 class="Home__menu--title has-fontsize-20"><?= $project->title() ?></h2>
        <div class="Home__menu--border is-absolute"></div>
      </a>
    </li>
    <?php $i++ ?>
  <?php endforeach; ?>
  </ul>

  <div class="Home__background">
  <?php foreach($projects as $project): ?>
    <div class="Home__background--item is-absolute has-width-100 has-height-100">
      <?= Image::create($project->cover()) ?>
    </div>
  <?php endforeach; ?>
  </div>
</div>
<?php snippet('footer') ?>