<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Overzicht Instructeurs</title>
</head>
<body>
    <?= $data['title']; ?>

    <table>
        <thead>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam </th>
            <th>Mobiel</th>
            <th>Datum_in_Dienst</th>
            <th>Aantal_sterren</th>
            <th>Voertuigen</th>
        </thead>
        <tbody>
        
        <?= $data['rows']; ?>
        
        </tbody>
    </table>
    
</body>
</html>