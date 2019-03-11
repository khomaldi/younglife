<div class="signup">
  <p class="signup__title rus-font-title rus-font-300">Регистрация</p>
  <form name="signup__form" class="signup__form" action="signup.php" method="post" autocomplete="off" accept-charset="UTF-8">
    <br>
    <input type="email" class="form__input form__email" name="form__email" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="6" maxlength="100" placeholder="E-mail" tabindex="1" required spellcheck="false" oninput="check_email(this.value)">
    <br>
    <input type="text" class="form__input form__name" name="form__name" autofocus="autofocus" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2" maxlength="32" placeholder="Имя" tabindex="2" required spellcheck="false" oninput="check_name(this.value)">
    <br>
    <input type="text" class="form__input form__surname" name="form__surname" autofocus="autofocus" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2" maxlength="32" placeholder="Фамилия" tabindex="3" required spellcheck="false" oninput="check_surname(this.value)">
    <br>
    <select class="form__input form__sex" name="form__sex" placeholder="Пол" tabindex="4">
      <option value="мужской">Мужской</option>
      <option value="женский">Женский</option>
    </select>
    <br>
    <input type="text" class="form__input form__town" name="form__town" autofocus="autofocus" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2" maxlength="32" placeholder="Город" tabindex="5" required spellcheck="false" oninput="check_town(this.value)">
    <br>
    <input type="password" class="form__input form__password" name="form__password" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="8" maxlength="72" placeholder="Пароль" tabindex="6" required oninput="check_password(this.value)">
    <br>
    <input type="submit" class="form__button form__button_disable" name="form__button" tabindex="7" value="Создать профиль">
  </form>
</div>