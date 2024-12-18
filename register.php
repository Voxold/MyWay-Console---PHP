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
                <!-- Field 3 -->
                <label for="">Prenom</label>
                <input type="text" name="prenom" required>
                <!-- Field 4 -->
                <label for="">Date de naissance </label>
                <input type="date" name="dateNaissance" required>
                <!-- Field 5 -->
                <label for="">Numéro de téléphone </label>
                <input type="number" name="telephone" required>
            </form>
        </div>
    </div>
</section>



<?php
include('layout/footer.php')
?>

