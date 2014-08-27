<form action="register.php" method="post" class="registration_form">
  <fieldset>
    <legend>Register Your Vote </legend>

    
    <div class="elements">
      <label for="name">Name :</label>
      <input type="text" id="name" name="name" size="25" />
    </div>
    <div class="elements">
      <label for="e-mail">E-mail :</label>
      <input type="text" id="e-mail" name="e-mail" size="25" />
    </div>
    <div class="submit">
     <input type="hidden" name="formsubmitted" value="TRUE" />
      <input type="submit" value="Register" />
    </div>
  </fieldset>
</form>