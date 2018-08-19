<!DOCTYPE html>
<head>
    <title>Ma page de test du cours PHP et MYSQL Open Classroom</p></title>
    <meta charset="utf-8" />
</head>
<body>
    <h2>Affichage de texte avec PHP</h2>
    <p>
    Cette ligne a été ecrite entièrement en HTML.<br />
    <?php echo "Celle-ci a été écrite entièrement en PHP."; ?>
    <p>Aujourd'hui, nous sommes le <?php echo date ('d/m/Y h:i:s'); ?>.</p>
    <?php
    echo "J'habite en Chine. "; //Cette ligne indique ou j'habite
    // La ligne suivante indique mon âge
    echo "J'ai 92 ans";
    ?>

    <?php
    /* La ligne suivante indique mon âge
    Si vous ne me croyez pas... vous avez raison ;o */
    echo "J'ai 92 ans";
    ?>
<br/>
    <?php 
    $age_du_visiteur = 17;
    echo "Le visiteur a ";
    echo $age_du_visiteur;
    echo "ans";
    ?>
<br/>
    <?php 
    $age_du_visiteur = 17;
    echo "Le visiteur a $age_du_visiteur ans";
    ?>
<br/>
    <?php
    $age_du_visiteur = 17;
    echo'Le visiteur a ' . $age_du_visiteur . 'ans';
    ?>

    <?php
    $nombre = 2 + 4;
    $nombre = 3 * 5;
    $nombre = 10 / 2;
    $nombre = 3 * 5 + 1;
    ?>

 <br/>

    <?php
    $age = 8;

    if ($age <= 12) 
    {
        echo "Salut gamin!";
    }
    ?>
 <br/>
    <?php
    $age = 15;
    if ($age <= 12) // SI l'âge est inférieur ou égale à 12
    {
        echo "Salut gamin ! Bienvenu sur mon site !</br>";
        $autorisation_enter = " Oui";
    }
    else //SINON
    {
        echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir entrer. Au revoir !</br>";
        $autorisation_enter = "Non";
    }
    echo "Avez vous l'autorisation d'entrer ? La réponse est : $autorisation_enter";
    ?>
<br/>

    <?php
    if ($autorisation_enter == "Oui") // SI on a l'autorisation d'entrer
    {
        // Instructions à exécuter quand on est autorisé à entrer
    }
    elseif ($autorisation_enter =="Non") // SINON SI on n'a pas l'autorisation d'entrer
    {
        // Instructions à exécuter quand on n'est pas autorisé à enter
    }
    else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
    {
        echo "Euh, je ,ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
    }
    ?>

<br/>

    <?php
    if ($autorisation_enter)
    {
        echo "Bienvenue petit nouveau";
    }
    else
    {
        echo "T'as pas le droit d'entrer";
    }
    ?>
<br/>

    <?php
    $autorisation_enter = true;
    if ($autorisation_enter == true)
    {
        echo "Bienvenue petit nouveau";
    }
    elseif ($autorisation_enter == false)
    {
        echo "T'as pas le droit d'entrer";
    }
    ?>

<br/>

    <?php
    $age = 12;
    $langue = "anglais";
    if ($age <= 12 AND $langue == "français")
    {
        echo "Bienvenue sur mon site";
    }
    elseif ($age <= 12 AND $langue == "anglais")
    {
        echo "Welcome to my website";
    }
    ?>
<br/>

    <?php
    $sexe = false;
    if ($sexe == "fille" OR $sexe == "garçon")
    {
        echo "Salut les Terriens !";
    }
    else
    {
        echo "Euh, si t'es ni une fille ni un garçon, t'es quoi ?";
    }
    ?>

<br/>

    <?php
    if ($variable == 23)
    {
        echo "<strong>Bravo !</strong> Vous avez trouver le nombre mystère !";
    }
    ?>


<br/>

<?php
if ($variable == 23)
{
?>
<strong>Bravo !</strong> Vous avez trouver le nombre mystère !
<?php
}
?>
<br/>

    <?php
    $note = 16;
    if ($note == 0)
    {
        echo "Tu es vraiment un gros nul !";
    }

    elseif ($note == 5)
    {
        echo "Tu es très mauvais";
    }

    elseif ($note == 10)
    {
        echo "Tu es mauvais";
    }

    elseif ($note == 16)
    {
        echo "Tu es bon";
    }

    else
    {
        echo "Désolé,je n'ai pas de message à afficher pour cette note";
    }
    ?>

    <?php
    $note = 10;
    switch ($note) // On indique sur quelle variable on travaille
    {
        case 0: // Dans le cas ou note vaut 0
            echo "Tu es vraiment un gros nul !";
        break;
        
        case 5: // Dans le cas ou note vaut 0
            echo "Tu es très mauvais";
        break;

        case 10: // Dans le cas ou note vaut 0
            echo "Tu es mauvais";
        break;

        case 16: // Dans le cas ou note vaut 0
            echo "Tu es bon";
        break;

        default:
            echo "Désolé,je n'ai pas de message à afficher pour cette note";
    }
    ?>

    <?php 
    while ($continuer_boucle == true)
    {
        //Instruction à éxécuter dans la boucle
    }
     ?>  

    <?php 
    $nombre_de_lignes = 1;

    while ($nombre_de_lignes <= 100)
    {
        echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br/>';
        $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
    }
    ?>

    <?php
    $nombre_de_lignes = 1;

    while ($nombre_de_lignes <= 100)
    {
        echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br>';
        $nombre_de_lignes++;
    }
    ?>

    <?php
    for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
    {
        echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br/>';
    }
    ?>

<br/>
    <?php 
    // La fonction array permet de créer un array
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoit');
    ?> 

<br/>

    <?php 
    $prenoms [0] = 'François';
    $prenoms [1] = 'Michel';
    $prenoms [2] = 'Nicole';
    ?>

<br/>

    <?php 
    $prenoms [] = 'François'; // Créera $prenoms [0]
    $prenoms [] = 'Michel'; // Créera $prenoms [1]
    $prenoms [] = 'Nicole'; // Créera $prenoms [2]
    ?>

<br/>

    <?php 
    echo $prenoms[1];
    ?>

<br/>

   <?php 
   // On crée notre array $coordonnees
   $coordonnees = array (
       'prenom' => 'François',
       'nom' => 'Dupont',
       'adresse' => '3 rue du Paradis',
       'ville' => 'Marseille');
   ?>

<br/>

    <?php
    $coordonnees['prenom'] = 'François';
    $coordonnees['nom'] = 'Dupont';
    $coordonnees['adresse'] = '3 rue du Paradis';
    $coordonnees['ville'] = 'Marseille';
    ?>
<br/>

    <?php
    echo $coordonnees['ville'];
    ?>

<br/>

    <?php
    // On crée notre array $prenoms
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoit');

    // Puis on fait une boucle pour tout afficher ()
    for ($numero = 0; $numero < 3; $numero++)
    {
        echo $prenoms[$numero] . '<br/>'; // Affichera $prenoms[0], $prenoms[1] etc
    }
    ?>
<br/>

    <?php
    $prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoit');

    foreach($prenoms as $element)
    {
        echo $element . '<br/>'; // Affichera $prenoms[0], $prenoms[1] etc
    }
    ?>
<br/>
    <?php
    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 rue du Paradis',
        'ville' => 'Marseille');

        foreach($coordonnees as $element)
        {
            echo $element . '<br/>';
        }
    ?>
<br/>

    <?php
    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 rue du Paradis',
        'ville' => 'Marseille');

        foreach($coordonnees as $cle => $element)
        {
            echo '[' . $cle . '] vaut :' . $element . '<br/>';
        }
    ?>

<br/>

        <?php
    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 rue du Paradis',
        'ville' => 'Marseille');

       echo '<pre>';
       print_r($coordonnees);
       echo '</pre>';
    ?>
<br/>

        <?php
        if (array_key_exists('nom', $coordonnees))
        {
            echo 'La clé "nom" se trouve dans les coordonnées !';
        }
        ?>
<br/>

        <?php
    $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise');

    if (in_array('Myrtille', $fruits))
    {
        echo 'La valeur "Myrtille" se trouve dans les fruits';    
    }
    if (in_array('Cerise', $fruits))
    {
        echo 'La valeur "Cerise" se trouve dans fruits';
    }
        ?>
<br/>
    <?php
    $position = array_search('Fraise', $fruits);
    echo '"Fraise" se trouve en position : ' . $position . '<br/>';

    $position = array_search('Banane', $fruits);
    echo '"Banane" se trouve en position : ' . $position . '<br/>';
    ?>

</body>
</html>