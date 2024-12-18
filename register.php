<?php
include('layout/header.php')
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

                <!-- Field 2 -->
                <label for="">Nom</label>
                <input type="text" name="nom" required>
                <span class="text-danger"><i class="bi bi-exclamation-circle"></i> Please enter correct Nom</span>
                <!-- Field 3 -->
                <label for="">Prenom</label>
                <input type="text" name="prenom" required>
                <!-- Field 4 -->
                <label for="">Date de naissance </label>
                <input type="date" name="dateNaissance" required>
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
                <!-- Field 6 -->
                <label for="">Numéro de téléphone </label>
                <input type="number" name="telephone" required>
                <!-- Field 7 -->
                <label for="">Numéro de téléphone </label>
                <input type="number" name="telephone" required>
                <!-- Field 8 -->
                <label for="">Numéro de téléphone </label>
                <input type="number" name="telephone" required>
            </form>
        </div>
    </div>
</section>



<?php
include('layout/footer.php')
?>

