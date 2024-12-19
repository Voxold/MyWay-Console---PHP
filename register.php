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

// ERRORS 
$civilite_error = "";
$nom_error = "";
$prenom_error = "";
$date_naissance_error = "";
$region_error = "";
$email_error = "";
$telephone_error = "";
$ville_error = "";

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

$regions = [
    "tanger-tetouan-al-hoceima" => ["Tanger", "Tétouan", "Al Hoceïma", "Larache", "Chefchaouen", "Ouezzane"],
    "oriental" => ["Oujda", "Nador", "Berkane", "Taourirt", "Jerada", "Driouch"],
    "fes-meknes" => ["Fès", "Meknès", "Ifrane", "Taza", "El Hajeb", "Sefrou"],
    "rabat-sale-kenitra" => ["Rabat", "Salé", "Kénitra", "Sidi Slimane", "Témara", "Skhirat"],
    "beni-mellal-khenifra" => ["Béni Mellal", "Khénifra", "Azilal", "Fquih Ben Salah", "Kasba Tadla"],
    "casablanca-settat" => ["Casablanca", "Settat", "El Jadida", "Berrechid", "Mohammédia", "Mediouna"],
    "marrakech-safi" => ["Marrakech", "Safi", "Essaouira", "Chichaoua", "Youssoufia"],
    "draâ-tafilalet" => ["Errachidia", "Ouarzazate", "Zagora", "Tinghir", "Midelt"],
    "souss-massa" => ["Agadir", "Taroudant", "Tiznit", "Inezgane", "Chtouka Ait Baha"],
    "guelmim-oued-noun" => ["Guelmim", "Tan-Tan", "Sidi Ifni", "Assa-Zag"],
    "laayoune-sakia-el-hamra" => ["Laâyoune", "Boujdour", "Tarfaya", "Es-Semara"],
    "dakhla-oueled-ed-dahab" => ["Dakhla", "Aousserd"]
];

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
                    <option value="madmoiselle">Madmoiselle</option>
                    <option value="madame">Madame</option>
                    <option value="monsieur">Monsieur</option>
                </select>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $civilite_error ?></span>

                <!-- Field 2 -->
                <label for="">Nom</label>
                <input type="text" name="nom" required>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $nom_error ?></span>
                
                <!-- Field 3 -->
                <label for="">Prenom</label>
                <input type="text" name="prenom" required>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $prenom_error ?></span>

                <!-- Field 4 -->
                <label for="">Date de naissance </label>
                <input type="date" name="dateNaissance" required>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $date_naissance_error ?></span>

                <!-- Field 6 -->
                <label for="">Numéro de téléphone </label>
                <input type="number" name="telephone" required>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> <?= $telephone_error?></span>

                <!-- Field 5 -->
                <label for="">Région</label>
                <select name="region" id="region" required>
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
                <select name="city" id="city" required class="mb-3">
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

