<?php

$hostname = gethostname();
$time = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Azure Infra Learning</title>
</head>
<body>
    <h1>Azure Infra Learning</h1>

    <p>Application is running!</p>

    <ul>
        <li>Hostname: <?= htmlspecialchars($hostname) ?></li>
        <li>Server Time: <?= htmlspecialchars($time) ?></li>
    </ul>
</body>
</html>