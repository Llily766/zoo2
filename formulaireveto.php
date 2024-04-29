<h3>Espace Vétérinaire</h3>
<form method="POST" action="CRUDVeto.php" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="titre" class="form-label">Titre</label>
        <input type="text" name="titre" id="titre" class="form-control">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="30"></textarea>
    </div>

    <div class="mb-3">
        <label for="etat_animal" class="form-label">État de l'animal</label>
        <textarea name="etat_animal" id="etat_animal" cols="30"></textarea>
    </div>

    <div class="mb-3">
        <label for="nourriture_proposee" class="form-label">Nourriture proposée</label>
        <textarea name="nourriture_proposee" id="nourriture_proposee" cols="30"></textarea>
    </div>

    <div class="mb-3">
        <label for="grammage_nourriture" class="form-label">Grammage de la nourriture</label>
        <textarea name="grammage_nourriture" id="grammage_nourriture" cols="30"></textarea>
    </div>

    <div class="mb-3">
        <label for="date_passage" class="form-label">Date de passage</label>
        <textarea name="date_passage" id="date_passage" cols="30"></textarea>
    </div>

    <div class="mb-3">
        <label for="detail_etat_animal" class="form-label">Détail de l'état animal</label>
        <textarea name="detail_etat_animal" id="detail_etat_animal" cols="30"></textarea>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Catégorie</label>
        <select name="category" id="category" class="form-select">
            <option value="1">Santé</option>
            <option value="2">Nourriture</option>
            <option value="3">État de santé générale</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="file" class="form-label">Image</label>
        <input type="file" name="image" accept="image/*">
    </div>

    <button type="submit">Submit</button>

</form>