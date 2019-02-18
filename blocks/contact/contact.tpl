<div class="contact">
  <p class="contact__title geo-font-mtavruli">მოგვწერეთ</p>
  <form name="contact__form" class="contact__form" action="contact.php" method="post" autocomplete="off" accept-charset="UTF-8">
    <span class="geo-font">ჩვენი</span><span class="rus-font"> e-mail: mail@younglife.ge</span><br>
    <input type="text" class="form__input geo-font" name="form-name" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2"
      maxlength="32" pattern="{L}{2,32}" placeholder="თქვენი სახელი" required spellcheck="false">
    <br>
    <input type="email" class="form__input" name="form-email" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="6"
      maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="your@mail.com" required spellcheck="false">
    <br>
    <input type="text" class="form__input geo-font" name="form-subject" autocomplete="off" autocapitalize="off" autocorrect="off" minlength="2"
      maxlength="100" pattern="{L}{2,100}" placeholder="წერილის თემა" required spellcheck="true">
    <br>
    <textarea class="form__input form__textarea geo-font" name="form-textarea" maxlength="1234" placeholder="დაწერეთ წერილის ტექსტი..." value="" required
      spellcheck="true" wrap="soft"></textarea>
    <br>
    <input type="submit" class="form__submit geo-font-mtavruli" name="form-submit" value="გაგზავნა">
  </form>
</div>
