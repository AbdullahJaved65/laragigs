<h1>This is a listings page bro!</h1>
<h1><?= $heading ?></h1>
<?php foreach ($listings as $listings): ?>
<h1><?= $listings['title'] ?></h1>
<h2><?= $listings['name'] ?></h2>
<p><?= $listings['description'] ?></p>
<?php endforeach; ?>
