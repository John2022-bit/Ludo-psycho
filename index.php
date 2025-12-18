<?php
$pageTitle = "Ludo & Psycho — Révélez vos talents";
$pageDescription = "Coaching, théâtre, improvisation, conférences et ludopédagogie pour développer les soft skills, la coopération et la qualité de vie au travail.";
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
        Innovation — Engagement — Efficacité
      </div>

      <h1 class="hero-title">
        Affûtez votre esprit,<br>
        <span>révélez vos talents</span>
      </h1>

      <p class="hero-lead">
        Sciences cognitives et ludopédagogie «en-jeu» pour faire de la performance
        collective une conséquence du bien-être et de l’épanouissement individuel.
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="#solutions">Découvrir les solutions</a>
        <a class="btn btn-ghost" href="contact.php">Prendre contact</a>
      </div>

      <div class="pill-row">
        <span class="pill">Institutions</span>
        <span class="pill">Collectivités</span>
        <span class="pill">Associations</span>
        <span class="pill">Entreprises</span>
      </div>
    </div>

    <aside class="hero-card">
      <div class="media">
        <img src="assets/images/people.jpg" alt="Atelier collaboratif">
      </div>
      <div class="note">
        Formations agiles, ateliers, théâtre, improvisation et conférences créées sur-mesure
        pour vos publics : jeunes, salariés, cadres dirigeants ou équipes terrain.
      </div>
    </aside>
  </div>
</header>

<main>

  <!-- PARLONS SOLUTIONS -->
  <section class="section" id="solutions">
    <div class="container">
      <div class="grid-2 align-center">
        <div>
          <h2 class="section-title">Parlons solutions&nbsp;!</h2>
          <p class="section-subtitle">
            Du coaching individuel aux séminaires pour plusieurs centaines de personnes,
            les formats sont co-construits après étude de votre contexte, de votre public
            et de vos objectifs.
          </p>
          <div class="pill-row">
            <span class="pill">Communication</span>
            <span class="pill">Coopération</span>
            <span class="pill">Prise de parole</span>
            <span class="pill">Prévention RPS</span>
          </div>
        </div>
        <div class="card card--floating">
          <h3 class="card-heading">Formats & publics</h3>
          <ul class="list">
            <li>1/2 journée à plusieurs jours</li>
            <li>Conférences interactives et ateliers participatifs</li>
            <li>Coaching individuel ou collectif</li>
            <li>Équipes, managers, jeunes, personnes en insertion ou éloignées de l’emploi</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- AXES D'INTERVENTION -->
  <section class="section section--alt" id="axes">
    <div class="container">
      <h2 class="section-title">Trois axes pour développer talents et bien-être</h2>
      <p class="section-subtitle">Théâtre improvisé, ludopédagogie et sciences humaines au service de vos enjeux.</p>

      <div class="grid-3">
        <article class="card service-card">
          <div class="tag">Performer</div>
          <h3>Développer ses talents et son agilité</h3>
          <p class="mini">Gagner en présence, s’adapter en temps réel, sécuriser ses interventions.</p>
          <ul class="list">
            <li>Improvisation appliquée pour prendre la parole sans perdre ses moyens</li>
            <li>Expression, confiance en soi et assertivité</li>
            <li>Posture managériale et agilité relationnelle</li>
          </ul>
          <a class="btn btn-primary" href="theatre.php" style="margin-top:1rem">Découvrir le théâtre</a>
        </article>

        <article class="card service-card">
          <div class="tag">Rassembler</div>
          <h3>Team building original</h3>
          <p class="mini">Créer de la cohésion et une culture d’équipe vivante grâce au jeu et à la scène.</p>
          <ul class="list">
            <li>Improvisation et ateliers ludiques de coopération</li>
            <li>Théâtre en entreprise pour ancrer vos messages</li>
            <li>Évènements et spectacles participatifs (impro show, théâtre playback)</li>
          </ul>
          <a class="btn btn-primary" href="theatre.php" style="margin-top:1rem">Voir les formats</a>
        </article>

        <article class="card service-card">
          <div class="tag">Prendre soin</div>
          <h3>Qualité de vie au travail</h3>
          <p class="mini">Accompagner l’évolution des pratiques et prévenir les risques psychosociaux.</p>
          <ul class="list">
            <li>Ateliers ou conférences «Travailler avec le stress»</li>
            <li>Cadre bienveillant autour du droit à l’erreur</li>
            <li>Gestion des émotions, régulation des relations tendues, audace maîtrisée</li>
          </ul>
          <a class="btn btn-primary" href="conferences.php" style="margin-top:1rem">Parler QVT</a>
        </article>
      </div>
    </div>
  </section>

  <!-- GALERIE -->
  <section class="section">
    <div class="container">
      <h2 class="section-title">En images</h2>
      <p class="section-subtitle">
        Théâtre, improvisation, ateliers et conférences pour mobiliser vos équipes.
      </p>

      <div class="gallery">
        <div class="shot" data-full="assets/images/applaudissement.jpg">
          <img src="assets/images/applaudissement.jpg" alt="Intervention devant un public">
          <div class="cap">Conférence</div>
        </div>
        <div class="shot" data-full="assets/images/skills.jpg">
          <img src="assets/images/skills.jpg" alt="Improvisation en groupe">
          <div class="cap">Improvisation</div>
        </div>
        <div class="shot" data-full="assets/images/theatre.jpg">
          <img src="assets/images/theatre.jpg" alt="Exercice théâtral">
          <div class="cap">Théâtre</div>
        </div>
      </div>
    </div>
  </section>

  <!-- QUI SUIS-JE -->
  <section class="section section--alt" id="sophie">
    <div class="container">
      <div class="grid-2 align-center">
        <div class="profile-card card">
          <div class="profile-media">
            <img src="assets/images/sophie.jpg" alt="Sophie Jaffé">
          </div>
          <div>
            <h3>Sophie Jaffé</h3>
            <p class="mini">Comédienne et formatrice soft skills, spécialisée en sciences cognitives et ludopédagogie.</p>
            <ul class="list">
              <li>Improvisation appliquée, prise de parole et confiance en soi</li>
              <li>Coach auprès de cadres dirigeants, managers, étudiants et publics éloignés de l’emploi</li>
              <li>Accompagnement du changement et prévention des risques psychosociaux</li>
            </ul>
          </div>
        </div>
        <div>
          <h2 class="section-title">Envie d’en parler&nbsp;?</h2>
          <p class="section-subtitle">Posons un cadre bienveillant pour tester vos idées, pratiquer et ancrer de nouvelles postures.</p>
          <div class="cta-band">
            <div>
              <h3 class="card-heading">Contact</h3>
              <p style="margin:0">06 63 95 44 27<br>contact@ludopsycho.fr</p>
            </div>
            <div>
              <a class="btn btn-primary" href="contact.php">Construire mon projet</a>
            </div>
          </div>
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
