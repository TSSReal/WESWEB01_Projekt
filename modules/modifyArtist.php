<div class="edit_artist_content">
  <div class="form_wrapper">
    <form action="" method="post">
      <fieldset class="editing">
        <legend>Redigera artisten <?php echo $result["name"]; ?></legend>
        <div class="values">
          <label for="name">Namn:</label>
          <input type="text" name="name" id="name" value="<?php echo $result["name"]; ?>">
          <label for="genre">Genre:</label>
          <input type="text" name="genre" id="genre" value="<?php echo $result["genre"]; ?>">
        </div>
        <div class="answers">
          <input type="submit" name="answer" value="Spara">
          <input type="submit" name="answer" value="Avbryt">
        </div>
      </fieldset>
    </form>
  </div>
</div>