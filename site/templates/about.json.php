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

$organisationsArr = [];

  $organisations = $page->organisations()->toStructure();
  foreach ($organisations as $organisation)
  {
    array_push($organisationsArr, $organisation->organisationName()->value());
    array_push($organisationsArr, $organisation->organisationText()->value());
    array_push($organisationsArr, $organisation->organisationUrl()->url());
  }


if ($worldMap = $page->worldMap()->toFile()) {
  $mapUrl = $worldMap->thumb(['format' => 'webp'])->url();
}



$data = [
  'mainIntro' => $page->mainIntro()->value(),
  'intro' => $page->intro()->value(),
  'mainText' => $page->mainText()->value(),
  'criteriaIntro' => $page->mcriteriaIntro()->value(),
  'criteriaMainText' => $page->criteriaMainText()->value(),
  'organisations' => $organisationsArr,
  'map' => $mapUrl, // This needs work
  'disclaimer' => $page->disclaimer()->value()
];

echo json_encode($data);
?>
