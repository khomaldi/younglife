<div class="contact">
  <p class="contact__title rus-font-title rus-font-300">Напишите нам</p>
  <form name="contact__form" class="contact__form" onsubmit="feedback_sender();" action="" method="post" autocomplete="off" accept-charset="UTF-8">
    <span class="rus-font">Наш e-mail: mail@younglife.ge</span>
    <br>
    <input type="text" class="form__input form__name" name="form-name" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2"
      maxlength="32" placeholder="Ваше имя" required spellcheck="false">
    <br>
    <input type="email" class="form__input form__email" name="form-email" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="6"
      maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Ваш e-mail" required spellcheck="false">
    <br>
    <input type="text" class="form__input form__subject" name="form-subject" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2" maxlength="100" placeholder="Тема сообщения" required spellcheck="true">
    <br>
    <input type="text" class="phone" name="phone" autocomplete="off" autocapitalize="off" autocorrect="off">
    <textarea class="form__input form__textarea" name="form-textarea" maxlength="1234" placeholder="Введите текст сообщения..." value="" required
      spellcheck="true" wrap="soft"></textarea>
    <br>
    <input type="submit" class="form__submit rus-font-title rus-font-300" name="form-submit" value="Отправить">
  </form>
  <div class="contact__info">
      <div class="info__message_success rus-font-300">
        <p>Спасибо!</p>
        <p>Сообщение отправлено</p>
      </div>
      <div class="info__message_wrong rus-font-300">
        <p>Ошибка!</p>
        <p>Сообщение не отправлено</p>
      </div>
    </div>
</div>
