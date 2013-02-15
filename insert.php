<?php
require_once("appelClasse.php");
$bdd = new BDD();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <script src="calcul.js"></script>
        <title>Ajouter un message</title>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header"> 
                <h2>Ajouter un message</h2> 
            </div> 

            <div data-role="content">
                <form method="post">
                    <label for="printCA3">Qui</label>
                    <select name="qui">
                        <?php
                        $q = $bdd->query("SELECT * FROM users");
                        while ($ligne = $q->fetch()) {
                            ?>
                        <option value="<?php echo $liste["ID"];?>"><?php echo $ligne["Prenom"]; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </form>
            </div>
        </div>
    </body>
</html>
