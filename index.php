<?php
$pageTitle = "Ludo & Psycho — Facteurs humains et pédagogies actives";
$pageDescription = "Ateliers, théâtre, improvisation et conférences pour développer les soft skills et la coopération.";
$active = "home";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include __DIR__ . "/includes/head.php"; ?>
</head>
<body>

<?php include __DIR__ . "/includes/navbar.php"; ?>

<header class="page-hero">
  <div class="container hero-grid">
    <div>
      <div class="hero-kicker">
        <span class="hero-dot"></span>
        Facteurs humains & pédagogies actives
      </div>

      <h1 class="hero-title">
        Développer les <span>soft skills</span><br>
        par l’expérience
      </h1>

      <p class="hero-lead">
        Théâtre, improvisation, ateliers et conférences pour renforcer la communication,
        la coopération et la prise de parole dans les collectifs.
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="#approches">Découvrir les approches</a>
        <a class="btn btn-ghost" href="contact.php">Contact</a>
      </div>
    </div>

    <aside class="hero-card">
      <div class="media">
        <img src="assets/images/people.jpg" alt="Atelier collaboratif">
      </div>
      <div class="note">
        Des formats concrets, participatifs et adaptables à vos enjeux professionnels,
        pédagogiques ou institutionnels.
      </div>
    </aside>
  </div>
</header>

<main>

  <!-- APPROCHES -->
  <section class="section" id="approches">
    <div class="container">
      <h2 class="section-title">Approches proposées</h2>
      <p class="section-subtitle">
        Chaque dispositif combine pratique, analyse et transfert vers le terrain.
      </p>

      <div class="grid-3">
        <article class="card">
          <div class="tag">Théâtre</div>
          <h3>Théâtre & jeu scénique</h3>
          <p class="mini">
            Travailler la présence, la posture et la prise de parole à partir des techniques théâtrales.
          </p>
          <a class="btn btn-primary" href="theatre.php" style="margin-top:.9rem">En savoir plus</a>
        </article>

        <article class="card">
          <div class="tag">Improvisation</div>
          <h3>Improvisation appliquée</h3>
          <p class="mini">
            Développer l’écoute, l’adaptabilité et la coopération dans des situations imprévues.
          </p>
          <a class="btn btn-primary" href="improvisation.php" style="margin-top:.9rem">Découvrir</a>
        </article>

        <article class="card">
          <div class="tag">Conférences</div>
          <h3>Conférences & ateliers</h3>
          <p class="mini">
            Apports structurés sur les facteurs humains, complétés par des temps interactifs.
          </p>
          <a class="btn btn-primary" href="conferences.php" style="margin-top:.9rem">Voir le calendrier</a>
        </article>
      </div>
    </div>
  </section>

  <!-- GALERIE -->
  <section class="section section--alt">
    <div class="container">
      <h2 class="section-title">En images</h2>
      <p class="section-subtitle">
        Quelques instantanés d’ateliers, de conférences et de temps collectifs.
      </p>

      <div class="gallery">
        <div class="shot" data-full="assets/images/applaudissement.jpg">
          <img src="assets/images/applaudissement.jpg" alt="">
          <div class="cap">Conférence</div>
        </div>
        <div class="shot" data-full="assets/images/skills.jpg">
          <img src="assets/images/skills.jpg" alt="">
          <div class="cap">Soft skills</div>
        </div>
        <div class="shot" data-full="assets/images/levemain.jpg">
          <img src="assets/images/levemain.jpg" alt="">
          <div class="cap">Engagement</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section">
    <div class="container">
      <div class="cta-band">
        <div>
          <h2>Construisons votre intervention</h2>
          <p>
            Parlons de votre contexte, de votre public et de vos objectifs.
          </p>
        </div>
        <div>
          <a class="btn btn-primary" href="contact.php">Demander un devis</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . "/includes/footer.php"; ?>

<!-- Lightbox -->
<div class="modal" id="modal" aria-hidden="true">
  <div class="modal-content">
    <button class="modal-close" id="modalClose">✕</button>
    <img id="modalImg" src="" alt="">
  </div>
</div>

<script src="assets/js/main.js"></script>
</body>
</html>
