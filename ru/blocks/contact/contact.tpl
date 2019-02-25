<div class="contact">
  <p class="contact__title rus-font-title rus-font-300">Напишите нам</p>
  <form name="contact__form" class="contact__form" action="contact.php" method="post" autocomplete="off" accept-charset="UTF-8">
    <span class="rus-font">Наш e-mail: mail@younglife.ge</span>
    <br>
    <input type="text" class="form__input" name="form-name" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2"
      maxlength="32" pattern="{L}{2,32}" placeholder="Ваше имя" required spellcheck="false">
    <br>
    <input type="email" class="form__input" name="form-email" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="6"
      maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Ваш e-mail" required spellcheck="false">
    <br>
    <input type="text" class="form__input" name="form-subject" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2" maxlength="100" pattern="{L}{2,100}" placeholder="Тема сообщения" required spellcheck="true">
    <br>
    <textarea class="form__input form__textarea" name="form-textarea" maxlength="1234" placeholder="Введите текст сообщения..." value="" required
      spellcheck="true" wrap="soft"></textarea>
    <br>
    <input type="submit" class="form__submit rus-font-title rus-font-300" name="form-submit" value="Отправить">
  </form>
</div>
