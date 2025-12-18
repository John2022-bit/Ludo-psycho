<?php
$pageTitle = "À propos — Ludo & Psycho";
$pageDescription = "Démarche, valeurs et personne derrière le projet Ludo & Psycho.";
$active = "apropos";
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
        À propos
      </div>

      <h1 class="hero-title">Le projet <span>Ludo</span> & Psycho</h1>

      <p class="hero-lead">
        Une pédagogie active pour comprendre et transformer les dynamiques humaines.
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="contact.php">Échanger</a>
        <a class="btn btn-ghost" href="index.php#approches">Voir les approches</a>
      </div>
    </div>

    <aside class="hero-card">
      <div class="media">
        <img src="assets/images/people.jpg" alt="">
      </div>
      <div class="note">
        L’expérience comme point de départ, le transfert comme objectif.
      </div>
    </aside>
  </div>
</header>

<main>

  <!-- MISSION -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">Démarche</h2>
      <p class="section-subtitle">
        Comprendre les facteurs humains pour mieux coopérer.
      </p>

      <div class="grid-3">
        <article class="card">
          <div class="tag">Mission</div>
          <h3>Remettre l’humain au centre</h3>
          <p class="mini">
            Communication, émotions, biais cognitifs et relations.
          </p>
        </article>

        <article class="card">
          <div class="tag">Valeurs</div>
          <h3>Cadre sécurisant</h3>
          <p class="mini">
            Bienveillance, exigence et droit à l’erreur.
          </p>
        </article>

        <article class="card">
          <div class="tag">Méthode</div>
          <h3>Expérimentation</h3>
          <p class="mini">
            Vivre → analyser → transférer.
          </p>
        </article>
      </div>
    </div>
  </section>

  <!-- PORTRAIT -->
  <section class="section section--alt">
    <div class="container">
      <h2 class="section-title">La fondatrice</h2>
      <p class="section-subtitle">
        Une approche de terrain, ancrée dans la pratique.
      </p>

      <div class="grid-2">
        <div>
          <img src="assets/images/sophie.jpg" alt="Sophie" style="border-radius:18px;box-shadow:var(--shadow)">
        </div>
        <div>
          <h3>Sophie</h3>
          <p>
            Animatrice, formatrice et intervenante sur les soft skills,
            la prise de parole et les dynamiques de groupe.
          </p>
          <p>
            Chaque intervention est conçue sur-mesure,
            en fonction du public, des objectifs et du contexte.
          </p>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include __DIR__ . "/includes/footer.php"; ?>
<script src="assets/js/main.js"></script>
</body>
</html>
