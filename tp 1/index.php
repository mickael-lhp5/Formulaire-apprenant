<!-- Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :  
Nom
Prénom
Date de naissance
Pays de naissance
Nationalité
Adresse
E-mail
Téléphone
Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
Numéro pôle emploi
Nombre de badge
Liens codecademy
Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire. -->

<?php
require_once 'controller-index.php';
?>


<!doctype html>
<html lang="fr">

<head>
    <title>part9tp1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-warning mb-3 justify-content-center ml-3 mr-3 mt-3 shadow">
        <a href="index.php" class="navbar-brand">FORMULAIRE APPRENANT</a>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center col-12">

            <form novalidate class="myForm mb-3 shadow" name="inscription" method="post" action="index.php">

                <div class="form-group">
                    <label for="firstname"></label>
                    <input class="form-control" type="text" name="firstname" id="firstname" class="w-100" placeholder="ex : John" value="<?= isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'])  : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['firstname']) ? $errorMessages['firstname'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname"></label>
                    <input class="w-100 form-control" type="text" name="lastname" id="lastname" placeholder="ex : Doe" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['lastname']) ? $errorMessages['lastname'] : '' ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="birthday"></label>
                    <input class="form-control w-100" type="date" name="birthday" id="birthday" placeholder="Date de naissance" value="<?= isset($_POST['birthday']) ? $_POST['birthday'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['birthday']) ? $errorMessages['birthday'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthCountry"></label>
                    <input class="form-control w-100" type="text" name="birthCountry" id="birthCountry" placeholder="Pays de naissance" value="<?= isset($_POST['birthCountry']) ? $_POST['birthCountry'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['birthCountry']) ? $errorMessages['birthCountry'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nationality"></label>
                    <input class="form-control w-100" type="text" name="nationality" id="nationality" placeholder="Nationalité" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['nationality']) ? $errorMessages['nationality'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="adress"></label>
                    <input class="form control w-100" type="text" name="adress" id="adress" placeholder="Adresse" value="<?= isset($_POST['adress']) ? $_POST['adress'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['adress']) ? $errorMessages['adress'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input class="form-control w-100" type="mail" name="email" id="email" placeholder="Adresse mail" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['email']) ? $errorMessages['email'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone"></label>
                    <input class="form-control w-100" type="tel" name="phone" id="phone" placeholder="Numéro de téléphone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['phone']) ? $errorMessages['phone'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group ml-1">
                    <!-- <p>Quel niveau possedes tu ?</p>
                    <label class="checkbox-inline"><input type="checkbox" value="sans">Sans diplôme</label>
                    <label class="checkbox-inline"><input type="checkbox" value="bac">Bac</label>
                    <label class="checkbox-inline"><input type="checkbox" value="bacPlusDeux">Bac +2</label>
                    <label class="checkbox-inline"><input type="checkbox" value="bacPlus>Trois">Bac +3</label>
                    <label class="checkbox-inline"><input type="checkbox" value="bacPlusQuatreEtPlus">Bac +4 et plus</label> -->

                    <select name="certificates">
                        <option value="null" disabled selected>Quel est votre niveau d'étude</option>

                        <?php
                        foreach ($certificatesArray as $key => $value) { ?>
                            <option value="<?= $key ?>" <?= isset($_POST['certificates']) && $_POST["certificates"] == $key ? "selected" : '' ?>><?= $value ?></option>

                        <?php } ?>

                        ?>

                    </select>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['certificates']) ? $errorMessages['certificates'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="poleEmploiNumber"></label>
                    <input class="form-control w-100" type="text" name="poleEmploiNumber" id="poleEmploiNumber" placeholder="Numéro Pole Emploi" value="<?= isset($_POST['poleEmploiNumber']) ? $_POST['poleEmploiNumber'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['poleEmploiNumber']) ? $errorMessages['poleEmploiNumber'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="numberOfBadge"></label>
                    <input class="form-control w-100" type="number" min="0" max="20" name="numberOfBadge" id="numberOfBadge" placeholder=" Nombre de badge" value="<?= isset($_POST['numberOfBadge']) ? $_POST['numberOfBadge'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['numberOfBadge']) ? $errorMessages['numberOfBadge'] : '' ?></span>
                    </div>


                    <label for="codacAcademyLink"></label>
                    <input class="form-control w-100" type="url" name="codeAcademyLink" id="codeAcademyLink" placeholder="Lien Codacademy" value="<?= isset($_POST['codeAcademyLink']) ? $_POST['codeAcademyLink'] : '' ?>" required>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['codeAcademyLink']) ? $errorMessages['codeAcademyLink'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="hack"></label>
                    <textarea class="form-control" name="whichSuperHeroe" id="superHeroe" cols="60" rows="8" placeholder="Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?"></textarea>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['whichSuperHeroe']) ? $errorMessages['whichSuperHeroe'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="hack"></label>
                    <textarea class="form-control" name="hack" id="hack" cols="60" rows="8" placeholder="Racontez nous un de vos hacks"></textarea>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['hack']) ? $errorMessages['hack'] : '' ?></span>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="codingExperience"></label>
                    <textarea class="form-control" name="codingExperience" id="codingExperience" cols="60" rows="8" placeholder="Quelle est votre expérience en programmation ou en informatique ?"></textarea>
                    <div class="text-danger">
                        <span><?= isset($errorMessages['codingExperience']) ? $errorMessages['codingExperience'] : '' ?></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning justify-content-center mb-3" name="submit">enregistre toi !</button>
            </form>

            <?php
            if (!empty($urLastname) && !empty($urFirstname) && !empty($urFirstname) && !empty($urBirthday) && !empty($urFirstname) && !empty($urBirthCountry) && !empty($urNationality) && !empty($urAdress) && !empty($urEmail) && !empty($urPhone) && !empty($urCertificates) && !empty($urPoleEmploiNumber) && !empty($urNumberOfBadge) && !empty($urCodingExperience) && !empty($urWhichSuperHeroe) && !empty($urCertificates) && !empty($urHack) && !empty($urCodingExperience)); { ?>

                <p> <?= $urLastname ?> <?= $urFirstname ?></p>

            <?php } ?>
        </div>
    </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>