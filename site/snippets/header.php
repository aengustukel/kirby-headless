<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?= $site->title() ?> | <?= $page->title() ?></title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="google-site-verification">
  <!-- Icons -->
	<link href="assets/images/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link href="assets/images/favicon/apple-icon-57x57.png" rel="apple-touch-icon" sizes="57x57">
	<link href="assets/images/favicon/apple-icon-60x60.png" rel="apple-touch-icon" sizes="60x60">
	<link href="assets/images/favicon/apple-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="assets/images/favicon/apple-icon-76x76.png" rel="apple-touch-icon" sizes="76x76">
	<link href="assets/images/favicon/apple-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="assets/images/favicon/apple-icon-120x120.png" rel="apple-touch-icon" sizes="120x120">
	<link href="assets/images/favicon/apple-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
	<link href="assets/images/favicon/apple-icon-152x152.png" rel="apple-touch-icon" sizes="152x152">
	<link href="assets/images/favicon/apple-icon-180x180.png" rel="apple-touch-icon" sizes="180x180">
	<link href="assets/images/favicon/android-icon-192x192.png" rel="icon" sizes="192x192" type="image/png">
	<link href="assets/images/favicon/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
	<link href="assets/images/favicon/favicon-96x96.png" rel="icon" sizes="96x96" type="image/png">
	<link href="assets/images/favicon/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
	<meta content="assets/images/favicon/smalltile.png" name="msapplication-square70x70logo">
	<meta content="assets/images/favicon/mediumtile.png" name="msapplication-square150x150logo">
	<meta content="assets/images/favicon/widetile.png" name="msapplication-wide310x150logo">
	<meta content="assets/images/favicon/largetile.png" name="msapplication-square310x310logo">
  <!-- SEO -->
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="en_IE" property="og:locale">
	<meta content="website" property="og:type">
	<meta content="" property="og:title">
	<meta content="" property="og:description">
	<meta content="Portfolio of Aengus Tukel" property="og:site_name">
	<meta content="" property="og:image">
	<meta content="" property="og:url">
	<meta content="nopin" name="pinterest">

<!-- new -->



<!-- new end -->



  <!-- css + javascript -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link href="https://use.typekit.net/cvl6fxu.css" rel="stylesheet">
  <?= css([
    'assets/css/styles.css',
    '@auto'
  ]) ?>    

</head>
<body>  

<header>
    <nav class=" header no-gutters justify-content-between nav-down fixed-top">
        <div class="col-6">
            <a href="<?= $site->url() ?>"><img class="ident" src="https://via.placeholder.com/260x55"></a>
        </div>

				
        <div class="col-6">
          <?php foreach ($site->children()->listed() as $item): ?>
            <h5><a class="navbutton" <?php e($item->isOpen(), 'active') ?> href="<?= $item->url() ?>"><?= $item->title()->upper()	->html() ?></a></h5>
          <?php endforeach ?>
        </div>
      </nav>
    <div class="row no-gutters fader-top"></div>
</header>

<main>
