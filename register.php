<?php
include('layout/header.php');



$civilite = "";
$nom = "";
$prenom = "";
$date_naissance = "";
$region = "";
$email = "";
$telephone = "";
$ville = "";
$password = "";
$confirme_password = "";

// ERRORS 
$civilite_error = "";
$nom_error = "";
$prenom_error = "";
$date_naissance_error = "";
$region_error = "";
$email_error = "";
$telephone_error = "";
$ville_error = "";
$password_error = "";
$confirme_password_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $civilite = $_POST['civilite'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['dateNaissance'];
    $region = $_POST['region'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $ville = $_POST['ville'];
}

$error = false;

/*************************** Validate name ***************************/
if (empty($nom)) {
    $nom_error = 'Nom requis';
    $error = true;
}
/*************************** Validate Prenom ***************************/
if (empty($prenom)) {
    $prenom_error = 'Prénom requis';
    $error = true;
}
/*************************** Validate Email ***************************/
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = 'Email non-valide';
    $error = true;
}
/*************************** Validate Telephone ***************************/
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = 'Email non-valide';
    $error = true;
}
/*************************** Validate Password ***************************/
if ($confirme_password != $password) {
    $password_error = 'Le mot de passe ne correspond pas';
    $confirme_password_error = 'Le mot de passe ne correspond pas';
    $error = true;
}

?>


<!-- Main -->
<section class="container">
    <div class="d-flex justify-content-center align-items-center ">
        <div class="d-flex flex-column rounded shadow p-5 m-5 border w-50 justify-content-center align-items-center">
            <h2>Créer mon compte</h2>
            <hr>
            <form action="register.php" method="POST" class="d-flex flex-column w-100">
                <!-- Field 1 -->
                <label for="civilite">Civilité</label>
                <select name="civilite" id="civilite">
                <option value="" disabled selected>Sélectionner la Civilité</option>
                    <option value="madmoiselle">Madmoiselle</option>
                    <option value="madame">Madame</option>
                    <option value="monsieur">Monsieur</option>
                </select>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $civilite_error ?></span>

                <!-- Field 2 -->
                <label for="">Nom</label>
                <input type="text" name="nom">
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $nom_error ?></span>
                
                <!-- Field 3 -->
                <label for="">Prenom</label>
                <input type="text" name="prenom">
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $prenom_error ?></span>

                <!-- Field 4 -->
                <label for="">Date de naissance </label>
                <input type="date" name="dateNaissance">
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $date_naissance_error ?></span>

                <!-- Field 6 -->
                <label for="telephone">Numéro de téléphone </label>
                <input type="number" name="telephone">
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $telephone_error?></span>

                <!-- Field 7 -->
                <label for="">Mot de passe </label>
                <input type="password" name="password">
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $password_error?></span>


                <!-- Field 8 -->
                <label for="">Confirmer le mot de passe </label>
                <input type="password" name="confirme_password">
                <?php 
                    if ($error == true) {
                        echo "<span class='text-danger'><i class='bi bi-exclamation-circle'></i> ";
                        echo $confirme_password_error;
                        echo "</span>";
                    }
                ?>



                <!-- Field 9 -->
                <label for="">Région</label>
                <select name="region" id="region">
                    <option value="" disabled selected>Sélectionner la région</option>
                    <option value="tanger-tetouan-al-hoceima">Tanger-Tétouan-Al Hoceïma</option>
                    <option value="oriental">L'Oriental</option>
                    <option value="fes-meknes">Fès-Meknès</option>
                    <option value="rabat-sale-kenitra">Rabat-Salé-Kénitra</option>
                    <option value="beni-mellal-khenifra">Béni Mellal-Khénifra</option>
                    <option value="casablanca-settat">Casablanca-Settat</option>
                    <option value="marrakech-safi">Marrakech-Safi</option>
                    <option value="draâ-tafilalet">Drâa-Tafilalet</option>
                    <option value="souss-massa">Souss-Massa</option>
                    <option value="guelmim-oued-noun">Guelmim-Oued Noun</option>
                    <option value="laayoune-sakia-el-hamra">Laâyoune-Sakia El Hamra</option>
                    <option value="dakhla-oueled-ed-dahab">Dakhla-Oued Ed Dahab</option>
                </select>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $region_error?></span>

                <!-- Field 7 -->
                <label for="city">Ville :</label>
                <select name="city" id="city" class="mb-3">
                    <option value="" disabled selected>Sélectionner une ville</option>
                </select>
                
                <div class="w-100 d-flex justify-content-center mt-2">
                    <button class="btn btn-primary w-50" type="submit">Continuer</button>
                </div>

            </form>
        </div>
    </div>
</section>



<?php
include('layout/footer.php')
?>

