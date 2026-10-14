<?php
declare(strict_types=1);

$versiSesuai = version_compare(PHP_VERSION, '8.0.0', '>=');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan PHP</title>
</head>
<body>
    <h1>Pemeriksaan Lingkungan Praktikum</h1>

    <p>
        Versi PHP:
        <strong>
            <?= htmlspecialchars(
                PHP_VERSION,
                ENT_QUOTES,
                'UTF-8'
            ) ?>
        </strong>
    </p>

    <?php if ($versiSesuai): ?>
        <p>PHP sudah sesuai. Anda dapat melanjutkan praktikum.</p>
    <?php else: ?>
        <p>
            PHP belum sesuai.
            Hubungi dosen atau pengelola laboratorium.
        </p>
    <?php endif; ?>

    <p>
        <a href="index.php">Buka aplikasi praktikum</a>
    </p>
</body>
</html>