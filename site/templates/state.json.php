<?php
$membershipArr = [];

if ($page->memberships()->exists())
{  
  $membership = $page->memberships()->toStructure();
  foreach ($membership as $member)
  {
    array_push($membershipArr, $member->organisation()->upper()->value());
  }
}

$ethnicGroupsArr = [];

  $ethnicGroups = $page->ethnicGroups()->toStructure();
  foreach ($ethnicGroups as $ethnicGroup)
  {
    array_push($ethnicGroupsArr, $ethnicGroup->ethnicGroup()->value());
  }

  
if ($flag = $page->flag()->toFile()) {
  $flagUrl = $flag->thumb(['format' => 'webp'])->url(); //Read https://getkirby.com/docs/cookbook/performance/responsive-images
}

  
if ($globe = $page->globe()->toFile()) {
  $globeUrl = $globe->thumb(['format' => 'webp'])->url(); //Read https://getkirby.com/docs/cookbook/performance/responsive-images
}

if ($map = $page->map()->toFile()) {
  $mapUrl = $map->thumb(['format' => 'webp'])->url(); //Read https://getkirby.com/docs/cookbook/performance/responsive-images
}


$data = [
  'title' => $page->title()->value(),
  'localName'  => $page->localName()->value(),
  'continent' => $page->continent()->upper()->value(),
  'location' => $page->location()->value(),
  'flag' => $flagUrl, // This needs work
  'globe' => $globeUrl, // This needs work
  'aboutStateIntro' => $page->aboutStateIntro()->value(),
  'aboutState' => $page->aboutState()->value(),
  'independence' => $page->independence()->value(),
  'population' => $page->population()->value(),
  'populationNote' => $page->populationNote()->value(), // If note ???
  'ethnicGroups' => $ethnicGroupsArr,
  'memberships' => $membershipArr,
  'map' => $mapUrl, // This needs work
  'theme' => $page->theme()->value()
];

echo json_encode($data);
?>
