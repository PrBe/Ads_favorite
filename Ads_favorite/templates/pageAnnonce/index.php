<?php
 include __DIR__.'/../../templates/header.php';
?>

<h1 class="text-center">Toutes nos annonces :</h1>
<div class="row">
<?php foreach($annonces as $annonce) : ?>
    
      <div class="border border-dark col-4 m-2">
        <div>
          <div><?= $annonce->id ?></div>
          <div><?= $annonce->Title ?></div>
          <div><?= $annonce->content ?></div>
        </div>
        <form action="/Fav/add" method="POST">
            <input type="hidden" name="id" value="<?= $annonce->id  ?>" />
            <button class="bg bg-success text-white" type="submit">Ajouter au favoris</button>
        </form>
      </div>
    
<?php endforeach ?>
</div>

<?php
 include __DIR__.'/../../templates/footer.php';
?>