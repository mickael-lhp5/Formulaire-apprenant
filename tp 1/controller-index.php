<?php

$urLastname = '';
$urFirstname = '';

// var_dump($_POST);

$errorMessages = [];
$regexName = '/^[a-zA-Z]+$/';
$regexFirstName = '/^[a-zA-Z]+$/';
$regexBirthday = "/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/";
$regexNationality = '/^[a-zA-Z]+$/';
$regexMail = '/^[a-z0-9.-_]{20}+[@]{1}[a-z0-9]+[.]{1} [a-z]{2-4}+$/';
$regexPhone = '/^[0-9]{10}$/';
$regexPoleEmploiNumber = '/^[0-9]{7}[a-z]{1}+$/';
$certificatesArray = [
1=>'sans',
2=>'Bac',
3=>'Bac+2',
4=>'Bac+3',
5=>'Superieur'
];


// $regexCodeAcademyLink = '(https?|ftp|ssh|mailto)://[a-z0-9/:%_+.,#?!@&=-]+';
// $regexChichSuperHeroe = '/^[a-zA-Z0-9]+$/';
// $regexCack = '/^[a-zA-Z0-9]+$/';
// $regexCodingExperience = '/^[a-zA-Z0-9]+$/';

if (isset($_POST['submit'])) {

    if (isset($_POST["lastname"])) {
        if (!preg_match($regexName, $_POST['lastname'])) {
            $errorMessages['lastname'] = 'veuillez saisir un nom valide';
        }
        if (empty($_POST["lastname"])) {
            $errorMessages['lastname'] = 'veuillez saisir votre nom';
        }
    }


    if (isset($_POST["firstname"])) {
        if (!preg_match($regexFirstName, $_POST['firstname'])) {
            $errorMessages['firstname'] = 'veuillez saisir un prénom valide';
        }
        if (empty($_POST["firstname"])) {
            $errorMessages['firstname'] = 'veuillez saisir votre prénom';
        }
    }


    if (isset($_POST["birthday"])) {
        // if (!preg_match($regexBirthday, $_POST['birthday'])) {
        //     $errorMessages['birthday'] = 'veuillez saisir une date de naissance valide';
        // }
        if (empty($_POST["birthday"])) {
            $errorMessages['birthday'] = 'veuillez saisir votre date de naissance';
        }
    }


    if (isset($_POST["birthCountry"])) {

        if (empty($_POST["birthCountry"])) {
            $errorMessages['birthCountry'] = 'veuillez saisir votre pays de naissance';
        }
    }


    if (isset($_POST["nationality"])) {
        if (!preg_match($regexNationality, $_POST['nationality'])) {
            $errorMessages['nationality'] = 'veuillez saisir une nationalité valide';
        }
        if (empty($_POST["nationality"])) {
            $errorMessages['nationality'] = 'veuillez saisir votre nationalité';
        }
    }


    if (isset($_POST["adress"])) {

        if (empty($_POST["adress"])) {
            $errorMessages['adress'] = 'veuillez saisir votre adresse';
        }
    }


    if (isset($_POST["email"])) {
        // if (!preg_match($regexMail, $_POST['email'])) {
        //     $errorMessages['email'] = 'veuillez saisir un email valide.';
        // }

        // var_dump(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['email'] = 'veuillez saisir un email valide';
        }

        if (empty($_POST["email"])) {
            $errorMessages['email'] = 'veuillez saisir email';
        }
    }

    if (isset($_POST['phone'])) {
        if (!preg_match($regexPhone, $_POST['phone'])) {
            $errorMessages['phone'] = 'veuillez saisir un numéro de téléphone valide';
        }
        if (empty($_POST['phone'])) {
            $errorMessages['phone'] = 'veuillez saisir votre numéro de téléphone';
        }
    }

    if(!isset($_POST["certificates"])) {
        $errorMessages['certificates'] = 'veuillez saisir votre niveau d étude'; 
    }

    if (isset($_POST["certificates"])) {

        if(!array_key_exists($_POST['certificates'], $certificatesArray)){
            $errorMessages ['certificates'] = 'petit coquin';
        }
    }

    if (isset($_POST['poleEmploiNumber'])) {
        if (!preg_match($regexPoleEmploiNumber, $_POST['poleEmploiNumber'])) {
            $errorMessages['poleEmploiNumber'] = 'veuillez saisir un numéro Pole Emploi valide';
        }

        if (empty($_POST['poleEmploiNumber'])) {
            $errorMessages['poleEmploiNumber'] = 'veuillez saisir votre numéro Pole Emploi';
        }
    }

    if (isset($_POST["numberOfBadge"])) {

        if (empty($_POST["numberOfBadge"])) {
            $errorMessages['numberOfBadge'] = 'veuillez saisir votre nombre de badge';
        }
    }

    if (isset($_POST["codeAcademyLink"])) {
        // if (!preg_match($regexCodeAcademyLink, $_POST['codeAcademyLink'])) {
        //     $errorMessages['codeAcademyLink'] = 'veuillez saisir un code valide.';
        // }

        if (empty($_POST["codeAcademyLink"])) {
            $errorMessages['codeAcademyLink'] = 'veuillez saisir votre code';
        }
    }

    if (isset($_POST["whichSuperHeroe"])) {
        // if (!preg_match($regexWhichSuperHeroe, $_POST['whichSuperHeroe'])) {
        //     $errorMessages['whichSuperHeroe'] = 'veuillez saisir un super hero valide.';
        // }

        if (empty($_POST["whichSuperHeroe"])) {
            $errorMessages['whichSuperHeroe'] = 'veuillez saisir votre super heroe';
        }
    }


    if (isset($_POST["hack"])) {
        // if (!preg_match($regexHack, $_POST['hack'])) {
        //     $errorMessages['hack'] = 'veuillez saisir un hack valide.';
        // }
        if (empty($_POST["hack"])) {
            $errorMessages['hack'] = 'veuillez saisir votre hack';
        }
    }


    if (isset($_POST["codingExperience"])) {
        // if (!preg_match($regexCodingExperience, $_POST['codingExperience'])) {
        //     $errorMessages['codingExperience'] = 'veuillez saisir une experience valide.';
        // }
        if (empty($_POST["codingExperience"])) {
            $errorMessages['codingExperience'] = 'veuillez saisir votre experience';
        }
    }

    // var_dump($errorMessages);
}
