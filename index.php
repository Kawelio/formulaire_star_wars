<?php

require 'params.php';
$valid = true;
$ip = str_replace('.', '_', $_SERVER['REMOTE_ADDR']);
$chemindestockage = 'stockage/' . $ip . '/';

if(empty($_POST) == false){

    if (isset($_POST['radiousage']) == false) {
       $valid = false;
       $erreurradio = 'Veuillez sélectionner vos maîtres.';
    }

    if ($_POST['selectionne'] == '') {
       $valid = false;
       $erreurselect = 'Veuillez sélectionner votre type de chevalier.';
    }

    if($_POST['per_pre'] == ''){
       $valid = false;
       $erreurpre = "Veuillez renseigner votre prénom.";
    }

    if($_POST['per_nom'] == ''){
       $valid = false;
       $erreurnom = "Veuillez renseigner votre nom.";
    }

    if(filter_var($_POST['per_email'], FILTER_VALIDATE_EMAIL) == false){
       $valid = false;
       $erreuremail = "Votre email n'est pas valide.";
    }

    if ($_POST['per_pwd1'] == '') {
       $valid = false;
       $erreurpwd1 = 'Veuillez renseigner un mot de passe.';
    }

    if ($_POST['per_pwd2'] == $_POST['per_pwd1'] ) {
    } else {
           $valid = false;
           $erreurpwd2 = 'Le mot de passe de confirmation est non valide.';
    }

    if ($_POST['pre_civ'] == '') {
       $valid = false;
       $erreurciv = 'Veuillez sélectionner votre civilité.';
    }

    if ($_POST['per_tixt'] == '') {
       $valid = false;
       $erreurtixt = 'Veuillez renseignez vos infos persos.';
    }

    if ($_FILES['per_photo']['error'] == UPLOAD_ERR_OK) {
            if ($_FILES['per_photo']['size'] <= 2000000) {
                // Test si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['per_photo']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
                if (in_array($extension_upload, $extensions_autorisees) == false) {
                    $valid = false;
                    $erreurphoto = 'Il y a eu un problème avec votre photo.';
                }
            } else {
                        $valid = false;
                        $erreurphoto = 'Veuillez uploader votre photo.';
        }
    } else {
        $valid = false;
        $erreurphoto = 'Il y a eu un problème avec votre photo.';
    }

    if ($valid == true) {
        mkdir($chemindestockage);

        file_put_contents($chemindestockage . $_POST['selectionne']. '.txt', 'ok');
        $file = fopen($chemindestockage . 'reponse.txt', 'w');
        $date=strftime("%d-%m-%Y %H:%M:%S");
        fwrite($file, $date . PHP_EOL);
        fwrite($file, 'Prénom :' . $_POST['per_pre'] . PHP_EOL);
        fwrite($file, 'Nom :' . $_POST['per_nom'] . PHP_EOL);
        fwrite($file, 'Email :' . $_POST['per_email'] . PHP_EOL);
        fwrite($file, 'Mot de passe :' . $_POST['per_pwd1'] . PHP_EOL);
        fwrite($file, 'Infos :' . $_POST['per_texti'] . PHP_EOL);
        fwrite($file, 'Maîtres :' . $_POST['radiousage'] . PHP_EOL);
        fwrite($file, 'Chevalier :' . $_POST['selectionne'] . PHP_EOL);
        fwrite($file, 'Civilité :' . $_POST['per_civ'] . PHP_EOL);
        fclose($file);
        move_uploaded_file($_FILES['per_photo']['tmp_name'], $chemindestockage . $_FILES['per_photo']['name']);

    }
}

if ((is_dir($chemindestockage) == true) && is_file($chemindestockage .'1.txt')) {
    header('Location: clair.php');
    exit;
}

if ((is_dir($chemindestockage) == true) && is_file($chemindestockage .'2.txt')) {
    header('Location: obscur.php');
    exit;
}

require 'view-index.php';

?>
