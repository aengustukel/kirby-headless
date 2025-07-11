<?php

$continentsList = ['asia', 'africa', 'europe', 'north-america', 'south-america', 'oceania'];
$continents = [];

foreach ($continentsList as $continent) {
  $continentObj = new stdClass();
  $continentObj->name = $continent;
  $continentObj->states = [];
  
  foreach ($site->find($continent)->children()->listed()->sortBy('title', 'asc') as $state) {
    if ($map = $state->map()->toFile()) {
      $obj = new stdClass();
      $obj->thumb_url = $map->thumb(['format' => 'webp'])->url(); //Read https://getkirby.com/docs/cookbook/performance/responsive-images
      $obj->state_url = $state->url();
      $obj->state_title = $state->title();
      $obj->state_location = $state->location();
      $obj->state_theme = $state->theme();
      
      $continentObj->states[] = $obj;
    }
  }
  
  $continents[] = $continentObj;
}

$data = [
  'title' => $page->title()->value(),
  'continents' => $continents
];

// Output the data as a JSON string
echo json_encode($data);
?>

