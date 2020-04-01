<?php
define('NAME', 'Gabriel');


include 'header.php';


    echo 'Bonjour les amis';
    /*$name = 'Gabriel';
    $name = 2;
    echo $name;
    echo 'Bonjour'.$name;
    echo NAME;
    echo 'Bonjour  '.NAME;
    echo $name[0];
    echo strlen($name);
    echo strtoupper($name);
    echo strtolower($name);
    echo str_replace('a', 's', 'Gabriel');
    $nombre = 4.3;
    echo $nombre**2;
    echo $nombre / 3;
    echo $nombre++;
    echo '  '.$nombre++;
    echo '  '.$nombre;
    echo '  '.ceil($nombre);
    echo '  '.ceil(8.485);
    echo '  '.pi();

    //indexed arrays
    $pierresPresieuses = ['ruby', 'saphir', 'diamant'];
    echo '     '.$pierresPresieuses[1];

    $ages = [20, 30, 40, 50];
    $ages[] = "salut";
    array_push($ages, 70);
    print_r($ages);
    echo count($ages);

    $essaiMerge = array(1, ' ');
    array_push($essaiMerge, '  2');
    $mergeArray = array_merge($pierresPresieuses, $ages, $essaiMerge);
    print_r($mergeArray);

    //assiocative arrays
    $tableau_associatif = ['Jean'=>'marron', 'Gabriel'=>'bleu', 'Jacques'=>'vert'];
    echo ' '.$tableau_associatif['Gabriel'];
    $tableau_associatif['Donald'] = 'noir';
    $tableau_associatif['Jean'] = 'vert';
    print_r($tableau_associatif);

    echo count($tableau_associatif);

    $tableau_associatif2 = ['Homme'=>'Multicilore'];
    $tab = array_merge($tableau_associatif, $tableau_associatif2);
    print_r($tab);*/

    //multidimensional arrays
    /*$multi_array = [
        ['a', 'b', 'c'],
        ['A', 'B', 'C']
    ];
    print_r($multi_array);
    print_r($multi_array[1]);
    print_r($multi_array[1][1]);
    echo count($multi_array).'<br />';

    echo '   ';
    $multi_array[] = [1, 2];
    print_r($multi_array);
    //multi va enlever la dernière valeur de multi_array et va l'afficher
    //$multi = array_pop($multi_array);
   // print_r($multi);

    // Loops

    //for
    for($i = 0; $i < 5; $i ++) {
        echo 'abc'.'<br />';
    }
    for($i = 0; $i < count($multi_array); $i ++) {
        echo 'BONJOUR   '.'<br />';
    }

    //foreach
    $salut = ['salut', 'bonjour'];
    foreach($salut as $salam) {
        echo $salam.'<br />';
}
    // On utilise le foreach() avec les multidimensionnal arrays
    foreach($multi_array as $m) {
        print_r( $m[0].'<br />');
}

    // while
    $i = 0;
    while ($i < count($multi_array)) {
        echo $multi_array[$i][0].'<br />';
        $i++;
    }


    

?>

<html>
<h1>BONJOUR ESSAIS</h1>
<?php foreach($multi_array as $m) { ?>
    <h3><?php echo $m[0].'VOILA  '.'<br />'; ?></h3>

<?php  } ?>

</html>

<?php
echo '<br />';
echo 'Et le boolean true s\'écrit en PHP :'.true;
echo '<br />';
echo 'Et le boolean false s\'écrit en PHP :'.false;
echo '<br />';
echo '<br />';
echo 'a' < 'b';
echo '<br />';
echo 'a' > 'A';
echo '<br />';
echo 5=='5';
echo '<br />';
echo 5==='5';
echo 'salut';
echo "1" == '1';


    $bonjour = [
        [1, 2, 3],
        [4, 5, 6]
    ];
    foreach ($bonjour as $bon) {
        if($bon[0] < 'B') {
            break;
        }
        if($bon[2] < 8) {
            continue;
        }
        echo '<br />'.'SALUT ';
    }*/

    //fonctions

    // variable scope
    /*function myFunc() {
        $price = 10;
        echo '<br />'.$price;
    }
    myFunc();*/
    function myFunc2($age) {
        echo $age;
    }
    myFunc2(20);

    $name = 'Gabriel';
    function sayHello() {
        global $name;
        $name = 'Jean-Jacques';
        echo "<br/> Bonjour $name";
    }
    sayHello();
    echo '<br />'.$name;

    $product = 'chaise';
    function presentation($product) {
        echo "<br /> Voici une $product";
    }
    presentation($product);

$errors = array('mail'=>'', 'prenom'=>'', 'nom'=>'', 'age'=>'');


if(isset($_POST['validation'])) {
    echo 'On a gagné';
    //echo '<br />'.htmlspecialchars($_POST['prenom']);
} else {
    echo 'On a perdu';
}



if(isset($_POST['age'])) {
    if(!empty($_POST['age'])) {
        $age = $_POST['age'];
        echo 'OK, votre age est valide';
    } else {
        $errors['age'] = "Votre age ,n'est pas renseigné !!!";
    }
}


if(isset($_POST['mail'])) {
    $email = $_POST['mail'];
    if(!empty($_POST['mail'])) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Votre e-mail n\'est pas valide';
        } else {
            echo '<br />OK, votre adresse mail est valide !!!';
        }
    } else {
        $errors['mail'] = 'Veuillez taper un mail !!!!';
    }
}


if(isset($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
    if(!empty($_POST['prenom'])){
        if(!preg_match('/^[a-zA-Z\s]+$/', $prenom)) {
            $errors['prenom'] = 'Vous devez prendre un prénom avec seulement des lettres et des espaces';
        }
        else {
            echo 'Ok, bon prénom !!!!!!';
        }
    } else {
        $errors['prenom'] = 'Vous devez saisir un prénom';
    }
}


if(isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    if(!empty($_POST['nom'])) {
        if(!preg_match('/^[a-zA-Z\s]+$/', $nom)) {
            $errors['nom'] = 'Vous devez prendre des noms avec seulement des lettres et des espaces';
        } else {
            echo "OK, c'est un bon nom !!!!!!!";
        }
    }
    else {$errors['nom'] = 'Vous devez saisir un nom';
    }
}
// array_filter() sert à regarder pour chaque élément d'un tableau et filtrer
if(array_filter($errors)) {
    $gestionTableau = 'Il y a un probleme dans votre formulaire. Veuillez reessayer.';
} else {
    $gestionTableau = 'Le formulaire a bien ete rempli. Merci pour votre collaboration et a bientot !!!!';
}

// Connexion à la BDD
$connexion = mysqli_connect('localhost', 'root', '', 'base1');

// Vérification si la connexion s'est bien faite
if(!$connexion) {
    echo 'Une erreur de connexion avec la BDD s\'est produite';
} else {
    echo 'C\'est bon, la connexion s\'est bien faite';
}

// On va obtenir des données de notre BDD

// On crée la requête
$sql_1 = 'SELECT * FROM table_skills ORDER BY skill';

// On va obtenir la requête que l'on a précédemment écrite
$resultat = mysqli_query($connexion, $sql_1);

// Problème, le résultat n'est pas sous la forme que nous voulons, on fait donc mysqli_fetch_all(), pour aller
// chercher le $resultat sous form de tableaux, et qu'il soit ainsi affichable
$obtention = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

//print_r($obtention); // On affiche le résultat


// Cependant, afin de mieux afficher le résultat, on peut le faire avec la fct foreach(),
// qui va permettre de bien afficher les différentes parties du assiocative array Ex ci-dessous
foreach ($resultat as $result) {
    //echo '<br />'.'On a comme compétence : '.htmlspecialchars($result['skill']);
    foreach(explode(',', $result['skill']) as $obt) { ?>
        <li><?php echo htmlspecialchars($obt);?></li>
    <?php }
}

// On utilise la fonction explode


// On libère la place prise par le résultat : mysqli_free_result()
mysqli_free_result($resultat);

// On ferme la connexion avec la BDD
mysqli_close($connexion);
if($connexion) {
    echo 'Vous n\'êtes pas connecté à la BDD'; // Ainsi on vérifie qu'on s'est bien déconnecté de la BDD
}



?>
<html>
<link rel="stylesheet" href="styleDebutPHP.css" type="text/css">
<title>Début PHP</title>
<h4 class="bonjour">Bonjour Monsieur</h4>
<section>
    <form method="post" action="">
        <label>Votre prénom : </label><input type="text" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>">
        <div class="error"><?php echo $errors['prenom']; ?></div>
        <label>Votre nom : </label><input type="text" name="nom" value="<?php echo htmlspecialchars($nom); ?>">
        <div class="error"><?php echo $errors['nom']; ?></div>
        <label>Votre mail : </label><input type="email" name="mail" value="<?php echo htmlspecialchars($email); ?>">
        <div class="error"><?php echo $errors['mail']; ?></div>
        <label>Votre age : </label><input type="int" name="age" value="<?php echo htmlspecialchars($age); ?>">
        <div class="error"><?php echo $errors['age']; ?></div>
        <input type="submit" name="validation">
    </form>
</section>
<div id="gestionTableau"><?php echo '<br />'.htmlspecialchars(strtoupper($gestionTableau));?></div>
</html>

<?php
$conn = mysqli_connect('localhost', 'root', '', 'base1');

// Ici, on va sauver les données prises dans la BDD
$mail = mysqli_real_escape_string($conn, $_POST['mail']);
$pren = mysqli_real_escape_string($conn, $_POST['prenom']);
$nom_ = mysqli_real_escape_string($conn, $_POST['nom']);
$age_insertion = mysqli_escape_string($conn, $_POST['age']);
if(isset($_POST['validation']) AND !$errors['prenom'] OR !$errors['nom'] OR !$errors['mail'] OR !$errors['age']) {
    $sql_insertion = "INSERT INTO table_user(email, prenom, nom, age) VALUES ('$mail', '$pren', '$nom_', '$age_insertion')";
    if(mysqli_query($conn, $sql_insertion)) {
        echo '<br />'.'Ca va ouf !!!!';
    } else {
        echo '<br />'.'Aïe, problème de connexion !!!!';
    }
}

class Personne {
    public function __construct() {
        echo '<br />'.'<br />'.'Je me présente, je suis un être humain.';
    }
    public function Avancer() {
        echo '<br />'.'J\'avance';
    }
}


$gabriel = new Personne();
for($i = 0; $i < 6; $i ++) {
    $gabriel->Avancer();
}



include 'footer.php';
?>

