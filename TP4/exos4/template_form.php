
<form>
  <div>
    <label for="title">Titre du billet :</label>
    <input type="text" id="title" name="title" value="Mon meilleur billet">
  </div>
  <div>
    <label for="content">Contenu :</label>
    <textarea id="content" name="content" cols="60" rows="5">
Voici le contenu de mon meilleur billet, j'espère que ça vous plaît !
    </textarea>
  </div>
  <div>
    <button type="submit">Mettre à jour le billet</button>
  </div>
  <input type="hidden" id="postId" name="postId" value="34657">
</form>