<?php
 include __DIR__.'/../../templates/header.php';
?>

<div class="text-center p-5">
    <h1 class="p-3 text-primary">Creéz votre annonce :</h1>
    <form action="formAnnonce/add" method="POST">
        <div class="p-3">
           <label for="Title">Indiquez le titre de votre annonce</label>
           <input type="Title" name="Title" id="Title">
        </div>
        <div class="p-3">
           <label for="content">Remplissez le contenu de votre annonce</label><br>
           <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>  
        <div>
            <button class="bg-success text-white" type="submit">Postez votre annonce</button>
        </div> 
    </form>
</div>


<?php
 include __DIR__.'/../../templates/footer.php';
?>