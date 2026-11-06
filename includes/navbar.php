<nav class="navbar">
  <div class="wrap">
    <a class="brand" href="<?= BASE_URL ?>">
      <img src="<?= BASE_URL ?>assets/images/icons/Logo.png" alt="Home logo" class="brand-logo">
      <span><?= e($site['name']) ?></span>
    </a>
    <button class="nav-toggle" aria-expanded="false" aria-controls="menu">Menu</button>
    <div class="links" id="menu">
      <a href="<?= BASE_URL ?>#about">About</a>
      <a href="<?= BASE_URL ?>#skills">Skills</a>
      <a href="<?= BASE_URL ?>#projects">Projects</a>
      <a href="<?= BASE_URL ?>#education">Experience</a>
      <a href="<?= BASE_URL ?>#contact">Contact</a>
    </div>
  </div>
</nav>
