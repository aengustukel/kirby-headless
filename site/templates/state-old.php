<?php snippet('header') ?>

        <!-- Content -->
	<div class="container no-gutters">
		<!--======== NEW LAYOUT TEST ========-->
		<div class="left">
			<div class="leftcontent animated fadeIn slow">
				<div class="row no-gutters">
					<!-- col-lg-5 col-md-7 col-sm-12 -->
					<div class="col-sm-12 countryname border-bottom small-padding-bottom xrellax" xdata-xrellax-speed="1">
						<h5 class="margin-bottom border-bottom small-padding-bottom xrellax" xdata-xrellax-speed="-1"><strong><?= $page->continent()->upper() ?></strong> &mdash; <?= $page->location()->upper() ?></h5>
						<?php if ($flag = $page->flag()->toFile()): ?>
            	<img class="flag xrellax <?php e($page->flagBorder()->bool() === true, 'flagborder', '') ?>" xdata-xrellax-speed="-1" src="<?= $flag->url() ?>">
          	<?php endif ?>
						<?php if ($globbe = $page->globe()->toFile()): ?>
            	<img class="globe xrellax" xdata-xrellax-speed="-3" src="<?= $globe->url() ?>">
          	<?php endif ?>						
						<h1 class="xrellax" xdata-xrellax-speed="1"><?= $page->title() ?></h1>
						<h4 class="xrellax margin-bottom" xdata-xrellax-speed="0"><?= $page->localName()->html() ?></h4>
						<?php if ($page->memberships()->exists()): ?>
							<?php $membership = $page->memberships()->toStructure();
							foreach ($membership as $member): ?>
								<h5 class="xrellax margin-top" xdata-xrellax-speed="0"><?= $member->organisation()->upper() ?></h5>
							<?php endforeach ?>
						<?php endif ?>

					</div>
				</div>
				<div class="row no-gutters">
					<div class="col-sm-12 xrellax countrytext border-bottom padding-bottom padding-top" xdata-xrellax-speed="2" >
						<p><?= $page->aboutState() ?></p>
					</div>
				</div>
				<div class="row no-gutters xrellax data border-bottom padding-bottom xpadding-top" xdata-xrellax-speed="1">
					<div class="col-6">
						<h5>CAPITAL:</h5>
						<h3><?= $page->capital() ?></h3>
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
				<div class="row no-gutters xrellax reference" xdata-xrellax-speed="1">
					<div class="col-12">
						<h5>REFERENCES:</h5>
            <?php $references = $page->references()->toStructure();
            foreach ($references as $reference): ?>
              <a href="<?= $referennce->reference()->url() ?>"><?= $referennce->reference() ?></a>
              <h3><?= $religion->religion() ?></h3>
            <?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="row no-gutters justify-content-center main">
				<div class="col-10 align-self-center map">
          <?php if ($map = $page->map()->toFile()): ?>
            <img class="img-fluid animated fadeIn slow" src="<?= $map->resize(1310)->url() ?>" alt="<?= $map->alt() ?>" >
           <?php endif ?>
        </div>
			</div>
		</div><!--======== NEW LAYOUT TEST  END ========-->
	</div><!-- END CONTAINER -->


<?php snippet('footer') ?>