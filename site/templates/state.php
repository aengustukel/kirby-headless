<?php snippet('header') ?>

        <!-- Content -->
	<div class="container no-gutters">
		<!--======== NEW LAYOUT TEST ========-->
		<div class="left">
			<div class="leftcontent animated fadeIn slow">
				<div class="row no-gutters">
					<!-- col-lg-5 col-md-7 col-sm-12 -->
					<div class="col-sm-12 countryname small-padding-bottom xrellax" xdata-xrellax-speed="1">
						<!-- <h5 class="margin-bottom border-bottom small-padding-bottom xrellax" xdata-xrellax-speed="-1"><strong><?= $page->continent()->upper() ?></strong> &mdash; <?= $page->location()->upper() ?></h5> -->
						<?php if ($flag = $page->flag()->toFile()): ?>
            	<img class="flag xrellax <?php e($page->flagBorder()->bool() === true, 'flagborder', '') ?>" xdata-xrellax-speed="-1" src="<?= $flag->url() ?>">
          	<?php endif ?>
						<?php if ($globe = $page->globe()->toFile()): ?>
            	<img class="globe xrellax" xdata-xrellax-speed="-3" src="<?= $globe->thumb(['format' => 'webp'])->url() ?>">
          	<?php endif ?>						
						<h1 class="xrellax" xdata-xrellax-speed="1"><?= $page->title() ?></h1>
						<h4 class="xrellax margin-bottom" xdata-xrellax-speed="0"><?= $page->localName()->html() ?></h4>
						<!-- <h5 class="margin-bottom border-bottom small-padding-bottom xrellax" xdata-xrellax-speed="-1"><strong><?= $page->continent()->upper() ?></strong> &mdash; <?= $page->location()->upper() ?></h5> -->
						<!-- <?php if ($page->memberships()->exists()): ?>
							<?php $membership = $page->memberships()->toStructure();
							foreach ($membership as $member): ?>
								<h5 class="xrellax margin-top" xdata-xrellax-speed="0"><?= $member->organisation()->upper() ?></h5>
							<?php endforeach ?>
						<?php endif ?> -->
					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-sm-12 xrellax countrytext border-bottom padding-bottom padding-top text" xdata-xrellax-speed="2" >
						<p><?= $page->aboutState()->kt() ?></p>
					</div>
				</div>
				<!-- -->
				<div class="right border-top sm-only">
					<div class="row no-gutters justify-content-center main">
						<div class="<?= $page->mapSize()->html() ?> align-self-center map">


<?php
$sizes = "(min-width: 1200px) 25vw,
        (min-width: 900px) 33vw,
        (min-width: 600px) 50vw,
        100vw";

if ($map = $page->map()->toFile()): ?>
    <picture>
        <source
            srcset="<?= $map->srcset('avif') ?>"
            sizes="<?= $sizes ?>"
            type="image/avif"
        >
        <source
            srcset="<?= $map->srcset('webp') ?>"
            sizes="<?= $sizes ?>"
            type="image/webp"
        >
        <img
            alt="<?= $map->alt() ?>"
            src="<?= $map->resize(1310)->url() ?>"
            srcset="<?= $map->srcset() ?>"
            sizes="<?= $sizes ?>"
        >
    </picture>
<?php endif ?>




        		</div>
					</div>
				</div>
				<!-- -->
				<div class="row no-gutters xrellax xpadding-bottom data padding-top" xdata-xrellax-speed="1">
					<div class="col-4">
						<h5>DATE OF DECLARATION OF INDEPENDENCE</h5>
						<h3><?= $page->independence()->toDate('j F o') ?></h3>
						<h5>OFFICIAL LANGUAGES</h5>
            <?php $languages = $page->languages()->toStructure();
            foreach ($languages as $language): ?>
              <h3><?= $language->language() ?></h3>
            <?php endforeach ?>
						<h5>ETHNIC GROUPS:</h5>
            <?php $enthincGroups = $page->ethnicGroups()->toStructure();
            foreach ($enthincGroups as $enthincGroup): ?>
              <h3><?= $enthincGroup->ethnicGroup() ?></h3>
            <?php endforeach ?>
					</div>
					<div class="col-6">
						<h5>RELIGIONS:</h5>
            <?php $religions = $page->religions()->toStructure();
            foreach ($religions as $religion): ?>
              <h3><?= $religion->religion() ?></h3>
            <?php endforeach ?>
						<h5>POPULATION: <?= $page->populationNote()->upper() ?></h5>
						<h3><?= $page->population() ?></h3>
					</div>
        </div>
				<!-- <div class="row no-gutters padding-bottom xrellax reference" xdata-xrellax-speed="1">
					<div class="col-12 border-bottom border-top padding-bottom padding-top">
						<h5>REFERENCES:</h5>
            <?php $references = $page->references()->toStructure();
            foreach ($references as $reference): ?>
              <a href="<?= $reference->reference()->url() ?>" target="_blank"><?= $reference->reference() ?></a>
            <?php endforeach ?>
					</div>
				</div> -->
			</div>
		</div>
		<div class="right lg-only">
			<div class="row no-gutters justify-content-center main">
				<div class="<?= $page->mapSize()->html() ?> align-self-center map">
          <?php if ($map = $page->map()->toFile()): ?>
            <img data-tilt data-tilt-max="5" data-tilt-speed="1000" data-tilt-reverse="true" class="img-fluid animated fadeIn slow" src="<?= $map->thumb(['width' => 1000, 'format' => 'webp'])->url() ?>" alt="<?= $map->alt() ?>" >
           <?php endif ?>
        </div>
			</div>
		</div>
	</div><!-- END CONTAINER -->


  <div class="ticker">
    <div class="row">
			<a href="<?= $pages->find('africa')->url() ?>"><?= $pages->find('africa')->title() ?></a>
			<?php foreach ($pages->find('africa')->children()->listed()->sortBy('title', 'asc') as $state): ?>
			<a href="<?= $state->url() ?>">
				<?php if($image = $state->flag()->toFile()): ?>
				<img src="<?= $image->thumb(['height' => 160, 'format' => 'webp'])->url() ?>" alt="<?= $image->alt() ?>"/>
				<?php endif ?>
			</a>	
			<?php endforeach ?>
			<!-- Asia -->
			<a href="<?= $pages->find('asia')->url() ?>"><?= $pages->find('asia')->title() ?></a>
			<?php foreach ($pages->find('asia')->children()->listed()->sortBy('title', 'asc') as $state): ?>
			<a href="<?= $state->url() ?>">
				<?php if($image = $state->flag()->toFile()): ?>
				<img src="<?= $image->thumb(['height' => 160, 'format' => 'webp'])->url() ?>" alt="<?= $image->alt() ?>"/>
				<?php endif ?>
			</a>	
			<?php endforeach ?>
			<!-- Europe -->
			<a href="<?= $pages->find('europe')->url() ?>"><?= $pages->find('europe')->title() ?></a>
			<?php foreach ($pages->find('europe')->children()->listed()->sortBy('title', 'asc') as $state): ?>
			<a href="<?= $state->url() ?>">
				<?php if($image = $state->flag()->toFile()): ?>
				<img src="<?= $image->thumb(['height' => 160, 'format' => 'webp'])->url() ?>" alt="<?= $image->alt() ?>"/>
				<?php endif ?>
			</a>	
			<?php endforeach ?>
			<!-- North America -->
			<a href="<?= $pages->find('north-america')->url() ?>"><?= $pages->find('north-america')->title() ?></a>
			<?php foreach ($pages->find('north-america')->children()->listed()->sortBy('title', 'asc') as $state): ?>
			<a href="<?= $state->url() ?>">
				<?php if($image = $state->flag()->toFile()): ?>
				<img src="<?= $image->thumb(['height' => 160, 'format' => 'webp'])->url() ?>" alt="<?= $image->alt() ?>"/>
				<?php endif ?>
			</a>	
			<?php endforeach ?>
			<!-- South America -->
			<a href="<?= $pages->find('south-america')->url() ?>"><?= $pages->find('south-america')->title() ?></a>
			<?php foreach ($pages->find('south-america')->children()->listed()->sortBy('title', 'asc') as $state): ?>
			<a href="<?= $state->url() ?>">
				<?php if($image = $state->flag()->toFile()): ?>
				<img src="<?= $image->thumb(['height' => 160, 'format' => 'webp'])->url() ?>" alt="<?= $image->alt() ?>"/>
				<?php endif ?>
			</a>	
			<?php endforeach ?>
			<!-- Oceania -->
			<a href="<?= $pages->find('oceania')->url() ?>"><?= $pages->find('oceania')->title() ?></a>
			<?php foreach ($pages->find('oceania')->children()->listed()->sortBy('title', 'asc') as $state): ?>
			<a href="<?= $state->url() ?>">
				<?php if($image = $state->flag()->toFile()): ?>
				<img src="<?= $image->thumb(['height' => 160, 'format' => 'webp'])->url() ?>" alt="<?= $image->alt() ?>"/>
				<?php endif ?>
			</a>	
			<?php endforeach ?>


    </div>
  </div>


	<?php snippet('footer') ?>