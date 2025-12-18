<?php
// includes/navbar.php
// Variables optionnelles : $active (ex: 'home','theatre','apropos','publications','conferences','contact')
$active = $active ?? '';
function navActive($key, $active) {
  return $key === $active ? ' aria-current="page" style="color: var(--color-primary);"' : '';
}
?>
<div class="navbar-wrapper">
  <div class="container navbar">
    <div class="brand">
      <a href="index.php" class="brand-link" aria-label="Retour à l'accueil">
        <img class="brand-logo" src="assets/images/logo.png" alt="Logo Ludo & Psycho">
      </a>
      <div class="brand-text">
        <div class="brand-title"><span>Ludo</span> & Psycho</div>
        <div class="brand-tagline">Facteurs humains · Soft skills · Pédagogies actives</div>
      </div>
    </div>

    <nav class="menu" id="menu">
      <a class="nav-link" href="index.php"# <?php echo navActive('home', $active); ?>>Accueil</a>
      <a class="nav-link" href="index.php#approches">Approches</a>
      <a class="nav-link" href="conferences.php" <?php echo navActive('conferences', $active); ?>>Calendrier</a>
      <a class="nav-link" href="publication.php" <?php echo navActive('publications', $active); ?>>Ressources</a>
      <a class="nav-link" href="a_propos.php" <?php echo navActive('apropos', $active); ?>>À propos</a>
      <button class="nav-cta" onclick="window.location.href='contact.php'">Contact</button>
    </nav>

    <button class="burger" id="burger" aria-label="Menu"><span></span></button>
  </div>
</div>
