<?php snippet('header') ?>

<div class="row no-gutters justify-content-center">
    <div class="mainlistcontainer container">
        <div class="col-12">
            <ul class="mainlist">
                <li><h5>AFRICA</h5></li>
                <?php foreach ($site->find('africa')->children()->listed()->sortBy('title', 'asc') as $afState): ?>
                    <li>
                        <?php if($map = $afState->map()->toFile()): ?>
                            <a data-src="<?= $map->thumb(['format' => 'webp'])->url() ?>" href="<?= $afState->url() ?>"><?= $afState->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $afState->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
                <li><h5>ASIA</h5></li>
                <?php foreach ($site->find('asia')->children()->listed()->sortBy('title', 'asc') as $asState): ?>
                    <li>
                    <?php if($map = $asState->map()->toFile()): ?>
                            <a data-src="<?= $map->thumb(['format' => 'webp'])->url() ?>" href="<?= $asState->url() ?>"><?= $asState->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $asState->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
                <li><h5>AMERICAS &amp; OCEANIA</h5></li>
                <?php foreach ($site->find('north-america')->children()->listed()->sortBy('title', 'asc') as $naState): ?>
                    <li>
                    <?php if($map = $naState->map()->toFile()): ?>
                            <a data-src="<?= $map->thumb(['format' => 'webp'])->url() ?>" href="<?= $naState->url() ?>"><?= $naState->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $asState->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
                <?php foreach ($site->find('south-america')->children()->listed()->sortBy('title', 'asc') as $saState): ?>
                    <li>
                    <?php if($map = $saState->map()->toFile()): ?>
                            <a data-src="<?= $map->thumb(['format' => 'webp'])->url() ?>" href="<?= $saState->url() ?>"><?= $saState->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $asState->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
                <?php foreach ($site->find('oceania')->children()->listed()->sortBy('title', 'asc') as $ocState): ?>
                    <li>
                    <?php if($map = $ocState->map()->toFile()): ?>
                            <a data-src="<?= $map->thumb(['format' => 'webp'])->url() ?>" href="<?= $ocState->url() ?>"><?= $ocState->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $asState->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
                <li><h5>EUROPE</h5></li>
                <?php foreach ($site->find('europe')->children()->listed()->sortBy('title', 'asc') as $euState): ?>
                    <li>
                    <?php if($map = $euState->map()->toFile()): ?>
                            <a data-src="<?= $map->thumb(['format' => 'webp'])->url() ?>" href="<?= $euState->url() ?>"><?= $euState->title() ?></a>
                        <?php endif ?>
                        <div class="location"><?= $asState->location()->upper()  ?></div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

<div class="map-holder">
        <img data-tilt data-tilt-max="5" data-tilt-reverse="true" data-tilt-full-page-listening class="cover" src="http://placehold.it/350x150">
</div>

<div class="row no-gutters fader-bottom"></div>

<?php snippet('footer') ?>
