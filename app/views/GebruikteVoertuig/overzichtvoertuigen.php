<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLRROOT; ?>/css/style.css">
    <title>Overzicht van Instructeur Gebruikte Voertuigen</title>
</head>
<body>
    <?= $data['title']; ?>

    <table>
        <thead>
            <th>TypeVoertuig</th>
            <th>Type</th>
            <th>Kenteken </th>
            <th>Bouwjaar</th>
            <th>Brandstof</th>
            <th>Rijbewijscategorie</th>
        </thead>
        <tbody>
        
        <?= $data['row']; ?>
        
        </tbody>
    </table>
    
</body>
</html>