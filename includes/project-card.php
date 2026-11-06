<?php
$imagePath = !empty($p['image']) ? $p['image'] : '';
$img = '';
if ($imagePath !== '') {
  if (strpos($imagePath, 'assets/') === 0) {
    $img = $imagePath;
  } elseif (strpos($imagePath, 'thumbnails/') === 0) {
    $img = 'assets/images/' . $imagePath;
  } else {
    $img = 'assets/images/projects/' . $imagePath;
  }
}
?>
<article class="card project reveal">
  <div class="project-copy">
    <span class="project-kicker">Project / <?= sprintf('%02d', $index + 1) ?></span>
    <span class="badge"><?= e($p['status']) ?></span>
    <h3><?= e($p['title']) ?></h3>
    <p><?= e($p['desc']) ?></p>
    <ul class="tags"><?php foreach ($p['tech'] as $t): ?>
      <?php $icon = match (strtoupper($t)) {
        'HTML' => 'assets/images/icons/html5.png',
        'CSS' => 'assets/images/icons/css-light.png',
        'PHP' => 'assets/images/icons/php-light.png',
        'C#' => 'assets/images/icons/csharp.png',
        'JAVA' => 'assets/images/icons/java.png',
        'JAVASCRIPT' => 'assets/images/icons/javascript-light.png',
        'PYTHON' => 'assets/images/icons/python.png',
        'MYSQL' => 'assets/images/icons/mysql.png',
        'MSSQL' => 'assets/images/icons/Mssql.png',
        'SWAGGER' => 'assets/images/icons/swagger.png',
        'GITHUB' => 'assets/images/icons/github-light.png',
        default => ''
      }; ?>
      <li>
        <span class="tech-icon" aria-label="<?= e($t) ?> logo">
          <?php if ($icon): ?><img src="<?= BASE_URL . e($icon) ?>" alt="<?= e($t) ?> logo"><?php endif; ?>
        </span>
        <span class="tech-name"><?= e($t) ?></span>
      </li>
    <?php endforeach; ?></ul>
    <ul class="feat"><?php foreach ($p['features'] as $f): ?><li><?= e($f) ?></li><?php endforeach; ?></ul>
    <?php if (!empty($p['contribution'])): ?><p><strong>My contribution:</strong> <?= e($p['contribution']) ?></p><?php endif; ?>
  </div>

  <div class="project-preview">
    <?php if (is_file(__DIR__ . '/../' . $img)): ?>
      <div class="project-frame">
        <img src="<?= BASE_URL . e($img) ?>" alt="Screenshot of <?= e($p['title']) ?>" loading="lazy">
      </div>
      <?php if ($index < 2 && !empty($p['demo'])): ?>
        <a class="project-live-link" href="<?= e($p['demo']) ?>" target="_blank" rel="noopener" aria-label="View live project for <?= e($p['title']) ?>">View live project</a>
      <?php endif; ?>
    <?php else: ?>
      <div class="shot">Screenshot coming soon</div>
    <?php endif; ?>
  </div>
</article>
