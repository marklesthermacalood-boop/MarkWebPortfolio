<?php
require __DIR__ . '/config/config.php';
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navbar.php';
$heroPhoto = 'assets/images/profile/heroSectionImg.jpg';
$aboutPhoto = 'assets/images/profile/aboutSectionImg.jpg';
$initials = implode('', array_map(fn($w) => mb_substr($w, 0, 1), array_slice(explode(' ', $site['name']), 0, 2)));
?>
<main>
  <section id="home" class="hero">
    <div class="wrap hero-grid">
      <div class="hero-text">
        
        <h1>Hello, I am <span style="color: var(--accent);"><?= e($site['name']) ?></span></h1>
        <h2>Aspiring Web Developer</h2>
        <p class="lead">Third-year BSIT student passionate about web development, crafting digital experiences, and building technology-driven solutions that solve real-world problems.</p>
       
        <div class="actions">
          <a class="btn primary" href="#projects">View my projects</a>
          <a class="btn" href="#contact">Get in touch</a>
        </div>

        <a class="scroll-cue" href="#about" aria-label="Scroll to explore">
          <span class="scroll-line"></span>
          <span>Scroll to explore</span>
        </a>
      </div>
      <div class="avatar">
        <?php if (is_file(__DIR__ . '/' . $heroPhoto)): ?>
          <img src="<?= BASE_URL . $heroPhoto ?>" alt="Photo of <?= e($site['name']) ?>">
        <?php else: ?><span><?= e($initials) ?></span><?php endif; ?>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="wrap">
      <h2 class="section-heading"><span class="section-number">01</span> | About</h2>
      <div class="about-grid">
        <div class="about-photo">
          <?php if (is_file(__DIR__ . '/' . $aboutPhoto)): ?>
            <img src="<?= BASE_URL . $aboutPhoto ?>" alt="Photo of <?= e($site['name']) ?>">
          <?php else: ?><span><?= e($initials) ?></span><?php endif; ?>
        </div>
        <div class="about-copy">
          <?php foreach ($about as $para): ?><p><?= e($para) ?></p><?php endforeach; ?>
          <div class="about-divider"></div>
          <div class="about-tags">
            <span><img src="<?= BASE_URL ?>assets/images/icons/locationIcon.png" alt="Location icon"> Valenzuela, Philippines</span>
            <span><img src="<?= BASE_URL ?>assets/images/icons/studentIcon.png" alt="Student icon"> BSIT Student</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="skills"><div class="wrap">
    <h2 class="section-heading"><span class="section-number">02</span> |  Tool Kit</h2>
    <div class="card skills">
      <?php foreach ($skills as $cat => $items): ?>
        <div class="row"><h3><?= e($cat) ?></h3>
          <ul class="tags"><?php foreach ($items as $s): ?>
            <?php $icon = match (strtoupper($s)) {
              'HTML' => 'assets/images/icons/html5.png',
              'CSS' => 'assets/images/icons/css-light.png',
              'JAVASCRIPT' => 'assets/images/icons/javascript-light.png',
              'PHP' => 'assets/images/icons/php-light.png',
              'C#' => 'assets/images/icons/csharp.png',
              'JAVA' => 'assets/images/icons/java.png',
              'PYTHON' => 'assets/images/icons/python.png',
              'MYSQL' => 'assets/images/icons/mysql.png',
              'MSSQL' => 'assets/images/icons/Mssql.png',
              'VISUAL STUDIO' => 'assets/images/icons/visual-studio-2022.png',
              'VS CODE' => 'assets/images/icons/vscode.png',
              'GITHUB' => 'assets/images/icons/github-light.png',
              default => ''
            }; ?>
            <li>
              <span class="tech-icon" aria-label="<?= e($s) ?> logo">
                <?php if ($icon): ?><img src="<?= BASE_URL . e($icon) ?>" alt="<?= e($s) ?> logo"><?php endif; ?>
              </span>
              <span class="tech-name"><?= e($s) ?></span>
            </li>
          <?php endforeach; ?></ul></div>
      <?php endforeach; ?>
    </div>
  </div></section>

  <section id="projects"><div class="wrap">
    <h2 class="section-heading"><span class="section-number">03</span> | Projects</h2>
    <div class="grid">
      <?php foreach ($projects as $index => $p) include __DIR__ . '/includes/project-card.php'; ?>
    </div>
  </div></section>

  <section id="education"><div class="wrap">
    <h2 class="section-heading"><span class="section-number">04</span> | Experience</h2>
    <div class="experience-grid">
      <?php foreach ($education as $ed): ?>
        <article class="experience-card">
          <div class="experience-image-wrap" aria-label="Photo placeholder for <?= e($ed['title']) ?>">
            <?php if (!empty($ed['image'])): ?>
              <img src="<?= BASE_URL . e($ed['image']) ?>" alt="<?= e($ed['title']) ?> photo" class="experience-image">
            <?php endif; ?>
          </div>
          <div class="experience-body">
            <div class="experience-head">
              <div>
                <span class="experience-tag">Experience</span>
                <h3><?= e($ed['title']) ?></h3>
              </div>
              <span class="experience-year"><?= e($ed['meta']) ?></span>
            </div>
            <p><?= e($ed['text']) ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div></section>

  <section id="contact"><div class="wrap">
    <h2 class="section-heading"><span class="section-number">05</span> | Contact</h2>
    <div class="card contact-card">
      <div class="contact-copy">
        <p class="eyebrow">Contact</p>
        <p class="para">Open to internships, collaborations, and conversations about web development.</p>
        <div class="actions contact-actions">
          <a class="btn primary" href="mailto:<?= e($site['email']) ?>">
            <span class="btn-icon" aria-hidden="true">
              <img src="<?= BASE_URL ?>assets/images/icons/email.png" alt="Email icon">
            </span>
            <span>Email me</span>
          </a>
          <a class="btn" href="<?= e($site['github']) ?>" target="_blank" rel="noopener">
            <span class="btn-icon" aria-hidden="true">
              <img src="<?= BASE_URL ?>assets/images/icons/github-light.png" alt="GitHub icon">
            </span>
            <span>GitHub</span>
          </a>
          <a class="btn" href="<?= BASE_URL . e($site['resume']) ?>" download="macaloodCV.pdf">
            <span class="btn-icon" aria-hidden="true">
              <img src="<?= BASE_URL ?>assets/images/icons/download.png" alt="Download icon">
            </span>
            <span>Download CV</span>
          </a>
        </div>
      </div>

      <div class="contact-meta">
        <div class="contact-item">
          <span class="label">Email</span>
          <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
        </div>
        <div class="contact-item">
          <span class="label">Location</span>
          <span>Valenzuela, Philippines</span>
        </div>
        <div class="contact-item">
          <span class="label">Availability</span>
          <span>Open for internships</span>
        </div>
      </div>
    </div>
  </div></section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
