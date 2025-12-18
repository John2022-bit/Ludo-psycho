<?php
$pageTitle = "Théâtre & jeu scénique — Ludo & Psycho";
$pageDescription = "Développer la prise de parole et la présence grâce aux techniques théâtrales.";
$active = "theatre";
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
        Approche — Théâtre
      </div>

      <h1 class="hero-title">Théâtre & <span>jeu scénique</span></h1>

      <p class="hero-lead">
        Un outil puissant pour travailler la présence, la voix, la posture
        et la relation au public dans un cadre sécurisant.
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="#devis">Demander un devis</a>
        <a class="btn btn-ghost" href="#videos">Voir les vidéos</a>
      </div>
    </div>

    <aside class="hero-card">
      <div class="media">
        <img src="assets/images/applaudissement.jpg" alt="">
      </div>
      <div class="note">
        Des exercices progressifs et accessibles, adaptés aux situations professionnelles réelles.
      </div>
    </aside>
  </div>
</header>

<main>

  <!-- BENEFICES -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Objectifs pédagogiques</h2>
      <p class="section-subtitle">
        Le théâtre comme levier d’apprentissage expérientiel.
      </p>

      <div class="grid-3">
        <article class="card">
          <div class="tag">Présence</div>
          <h3>Posture & confiance</h3>
          <p class="mini">Gérer le trac, s’ancrer, incarner son message.</p>
        </article>

        <article class="card">
          <div class="tag">Voix</div>
          <h3>Expression orale</h3>
          <p class="mini">Projection, articulation, rythme et intention.</p>
        </article>

        <article class="card">
          <div class="tag">Relation</div>
          <h3>Interaction & écoute</h3>
          <p class="mini">Créer du lien avec le public et le groupe.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- VIDEOS -->
  <section class="section section--alt" id="videos">
    <div class="container">
      <h2 class="section-title">Extraits vidéo</h2>
      <p class="section-subtitle">
        Quelques extraits de représentations et d’ateliers.
      </p>

      <div class="grid-3">
        <div class="card">
          <iframe width="100%" height="220" src="https://www.youtube-nocookie.com/embed/VIDEO_ID_1"
            allowfullscreen loading="lazy"></iframe>
        </div>
        <div class="card">
          <iframe width="100%" height="220" src="https://www.youtube-nocookie.com/embed/VIDEO_ID_2"
            allowfullscreen loading="lazy"></iframe>
        </div>
        <div class="card">
          <iframe width="100%" height="220" src="https://www.youtube-nocookie.com/embed/VIDEO_ID_3"
            allowfullscreen loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section" id="devis">
    <div class="container">
      <div class="cta-band">
        <div>
          <h2>Un projet théâtre ?</h2>
          <p>
            Intervention ponctuelle ou parcours : construisons un format adapté à vos objectifs.
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
<script src="assets/js/main.js"></script>
</body>
</html>
