<?php snippet('header') ?>

<div class="row no-gutters justify-content-center">
    <div class="mainlistcontainer container">
        <div class="col-12">
            <ul class="mainlist">
                <li><h5><?= $page->title()->upper() ?></h5></li>
                <?php foreach ($page->children()->listed() as $State): ?>
                    <li>
                        <?php if($map = $State->map()->toFile()): ?>
                            <a data-src="<?= $map->url() ?>" href="<?= $State->url() ?>"><?= $State->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $State->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<div class="map-holder">
<?php if($cover = $page->cover()->toFile()): ?>
        <img data-tilt data-tilt-max="5" data-tilt-reverse="true" data-tilt-full-page-listening class="cover" src="<?= $cover->url() ?>">
        <?php endif ?>
</div>          

<div class="row no-gutters fader-bottom"></div>

<?php snippet('footer') ?>



