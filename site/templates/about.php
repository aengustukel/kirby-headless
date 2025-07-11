<?php snippet('header') ?>

        <!-- Content -->
	<div class="container about no-gutters">
    <div class="row no-gutters">
					<div class="col-md-7  padding-bottom margin-bottom" >
						<h3 class="margin-bottom padding-bottom"><?= $page->intro()->kt() ?></h3>
            <p><?= $page->mainText()->kt() ?></p>
					</div>
		</div>
    <div class="row justify-content-end no-gutters">
					<div class="col-lg-4 col-md-5 padding-bottom padding-top" >
          <?php $organisations = $page->organisations()->toStructure();
							foreach ($organisations as $organisation): ?>
								<h5><a style="color:white;" href="<?= $organisation->organisationName()->url() ?>" target="_blank"><?= $organisation->organisationName()->upper() ?></a></h5>
                <p><?= $organisation->organisationText()->kt() ?></p>
							<?php endforeach ?>
					</div>
		</div>
	</div><!-- END CONTAINER -->

<?php snippet('footer') ?>





							


              

