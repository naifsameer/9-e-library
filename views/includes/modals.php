<!-- signup modal section -->
<div class="c-form modal-wrapper js-signup-modal">
  <div class="container modal">
    <button class="modal-btn">
      <i class="fa fa-plus"></i>
    </button>
    <h2 class="c-form__title">إنشاء حساب</h2>

    <form class="c-form__form">
      <div class="phone-group">
        <div>
          <label for="signup-form-name">رقم الجوال</label>
          <input id="signup-form-name" type="text" />
        </div>

        <div class="m-0">
          <label for="signup-form-name">رمز البلد</label>
          <select class="c-select">
            <option value="967">
              <span>967</span>
              <i class="fa fa-flag-usa"></i>
            </option>
          </select>
        </div>
      </div>

      <p>سوف نرسل لك رمز التحقق عن طريق رساله نصية</p>
      <div>
        <button>ارسال رمز التحقق</button>
      </div>

      <div>
        <label for="signup-form-name">الاسم الاول</label>
        <input id="signup-form-name" type="text" />
      </div>

      <div>
        <label for="signup-form-family-name"> اسم العائلة </label>
        <input id="signup-form-family-name" type="text" />
      </div>

      <div>
        <label>البريد الالكتروني</label>
        <input type="email" />
      </div>

      <div>
        <label>تأكيد البريد الالكتروني</label>
        <input type="email" />
      </div>

      <div>
        <label for="signup-form-pass">كلمة السر</label>
        <input type="text" id="signup-form-pass" />
      </div>

      <div class="checkbox-group">
        <input type="checkbox" name="" id="signup-form-checkbox-term" />
        <label for="signup-form-checkbox-term">
          <span> اوافق </span>

          <a href=""> على الشروط و الاحكام </a>
        </label>
      </div>

      <div class="checkbox-group">
        <input type="checkbox" name="" id="signup-form-checkbox-join-our-email" />
        <label for="signup-form-checkbox-join-our-email">
          التسجيل للانضام للنشرة البريدية
        </label>
      </div>

      <div>
        <button>انشاء حساب</button>
      </div>
    </form>

    <p class="c-form__sign-up-link">
      <span> لديك حساب؟ </span>

      <button class="js-show-login-modal">تسجيل الدخول</button>
    </p>
  </div>
</div>

<!-- login modal section -->
<div class="c-form modal-wrapper js-login-modal">
  <div class="container modal">
    <button class="modal-btn">
      <i class="fa fa-plus"></i>
    </button>
    <h2 class="c-form__title">تسجيل الدخول</h2>

    <form class="c-form__form">
      <div>
        <label for="login-form-name">
          البريد الالكتروني او رقم الجوال
        </label>
        <input id="login-form-name" type="text" />
      </div>

      <div>
        <label for="login-form-pass">كلمه السر</label>
        <input type="text" id="login-form-pass" />

        <a href="" class="forget-pass-link"> نسيت؟ </a>
      </div>

      <div>
        <button>تسجيل الدخول</button>
      </div>
    </form>

    <p class="new-account-label">ليس لديك حساب؟</p>

    <div class="c-form__new-account-link">
      <button class="js-show-signup-modal">انشاء حساب جديد</button>
    </div>
  </div>
</div>