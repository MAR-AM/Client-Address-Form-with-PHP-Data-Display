<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" width="400" height="200">
        <tr>
            <td>nom :</td>
            <td> <?php echo $_POST['nom']; ?> </td>
        </tr>
        <tr>
            <td>prenom :</td>
            <td> <?php echo $_POST['prenom']; ?> </td>
        </tr>
        <tr>
            <td>adresse :</td>
            <td> <?php echo $_POST['adresse']; ?> </td>
        </tr>
        <tr>
            <td>Ville :</td>
            <td> <?php echo $_POST['ville']; ?> </td>
        </tr>
        <tr>
            <td>Code Postal :</td>
            <td> <?php echo $_POST['code_postal']; ?> </td>
        </tr>
        
    </table>
</body>
</html>