<?php
// includes/head.php
// Variables attendues : $pageTitle (string), $pageDescription (string, optionnel)
if (!isset($pageTitle)) { $pageTitle = "Ludo & Psycho"; }
if (!isset($pageDescription)) { $pageDescription = ""; }
?>
<meta charset="UTF-8" />
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php if ($pageDescription !== ""): ?>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<?php endif; ?>

<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&family=Roboto+Slab:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/main.css">
