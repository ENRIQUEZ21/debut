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



if(isset($_POST['validation'])) {
    echo 'On a gagné';
    //echo '<br />'.htmlspecialchars($_POST['prenom']);
} else {
    echo 'On a perdu';
}

if(!empty($_POST['mail'])) {
    $email = $_POST['mail'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Votre e-mail n\'est pas valide';
    } else {
        echo 'OK, votre adresse mail est valide !!!';
    }
} else {
    echo 'Veuillez taper un mail !!!!';
}

if(!empty($_POST['nom'])) {
    $nom = $_POST['nom'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $nom)) {
        echo 'Vous devez prendre des noms avec seulement des lettres et des espaces';
    } else {
        echo "OK, c'est bon !!!!!!!";
    }
}
?>
<html>
<link rel="stylesheet" href="styleDebutPHP.css" type="text/css">
<title>Début PHP</title>
<h4 class="bonjour">Bonjour Monsieur</h4>
<section>
    <form method="post" action="">
        <div><label>Votre mail : </label><input type="email" name="mail"></div>
        <div><label>Votre prénom : </label><input type="text" name="prenom"></div>
        <div><label>Votre nom : </label><input type="text" name="nom"></div>
        <input type="submit" name="validation">
    </form>
</section>
</html>

<?php
include 'footer.php';
?>
