<div id="app">
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

  <!-- header section -->
  <header class="c-header">
    <!-- header menu section -->
    <div class="c-header-menu">
      <div class="container">
        <ul class="list">
          <li class="item">
            <button class="js-show-signup-modal">
              <i class="fa fa-user"></i>
              ادخل لحسابك أو سجل الآن
            </button>
          </li>
          <li class="item">
            <a href="">
              <i class="fa fa-star"></i>
              المفضلة
            </a>
          </li>
          <li class="item">
            <a href="">
              <i class="fa fa-bus"></i>

              تتبع الشحنة
            </a>
          </li>
          <li class="item">
            <a href="">
              <i class="fa fa-save"></i>

              طلبات الصيانة
            </a>
          </li>
          <li class="item">
            <a href="">
              <i class="fa fa-info-circle"></i>

              المساعدة
            </a>
          </li>
          <li class="item">
            <a href="">
              <i class="fa fa-podcast"></i>

              فروعنا
            </a>
          </li>
          <li class="item">
            <a href="">
              <i class="fa fa-cloud-moon"></i>
              المملكة العربية السعودية | ر.س
            </a>
          </li>
          <li class="item">
            <button data-lang="ar" class="lang-btn">
              <i class="fa fa-language"></i>
              English
            </button>
          </li>
        </ul>
      </div>
    </div>

    <!-- nav -->
    <div class="container">
      <nav class="c-nav">
        <!-- logo -->
        <a href="/" class="logo">
          <img src="images/icons/logo.svg" alt="" />
        </a>

        <form autocomplete="off" action="" class="form autocomplete">
          <input id="myInput" type="text" name="search-input" placeholder="search...." />

          <button>
            <i class="fa fa-search"></i>
          </button>
        </form>

        <a href="/checkout">
          <button class="shopping-btn">
            <i class="fa fa-shopping-cart"></i>

            <span class="shopping-item-number"></span>
          </button>
        </a>
      </nav>
    </div>
  </header>

  <!-- hero section-->
  <section class="c-slider">
    <div class="container">
      <div class="list">
        <div class="item">
          <img src="images/slider/slider-1.jpg" alt="slider image" />
        </div>
        <div class="item">
          <img src="images/slider/slider-2.webp" alt="slider image" />
        </div>
        <div class="item">
          <img src="images/slider/slider-3.jpg" alt="slider image" />
        </div>
        <div class="item">
          <img src="images/slider/slider-1.jpg" alt="slider image" />
        </div>
        <div class="item">
          <img src="images/slider/slider-2.webp" alt="slider image" />
        </div>
        <div class="item">
          <img src="images/slider/slider-3.jpg" alt="slider image" />
        </div>

        <div class="c-slider-btn">
          <button class="slider-next-btn">
            <i class="fa fa-angle-right"></i>
          </button>

          <button class="slider-prev-btn">
            <i class="fa fa-angle-left"></i>
          </button>
        </div>

        <div class="c-slider-dotes"></div>
      </div>
    </div>
  </section>

  <!-- main section -->
  <main class="main">
    <div class="container">
      <!-- categories section -->
      <div class="c-home-categories">
        <h2 class="title">تسوّق بالأقسام</h2>

        <div class="list">
          <a href="/categories">
            <div class="item">
              <i class="fa fa-phone"></i>

              <h3 class="item-title">هواتف</h3>
            </div>
          </a>

          <a href="/categories">
            <div class="item">
              <i class="fa fa-car"></i>

              <h3 class="item-title">سيارات</h3>
            </div>
          </a>

          <a href="/categories">
            <div class="item">
              <i class="fa fa-qrcode"></i>

              <h3 class="item-title">ادوات</h3>
            </div>
          </a>

          <a href="/categories">
            <div class="item">
              <i class="fa fa-tv"></i>

              <h3 class="item-title">اجهزه</h3>
            </div>
          </a>

          <a href="/categories">
            <div class="item">
              <i class="fa fa-paperclip"></i>

              <h3 class="item-title">ادوات مكتبيه</h3>
            </div>
          </a>

          <a href="/categories">
            <div class="item">
              <i class="fa fa-baseball-ball"></i>

              <h3 class="item-title">رياضة</h3>
            </div>
          </a>

          <a href="/categories">
            <div class="item">
              <i class="fa fa-ship"></i>

              <h3 class="item-title">سفر</h3>
            </div>
          </a>
        </div>
      </div>

      <!-- current books -->
      <div class="c-books">
        <div class="c-book-label">
          <h2>العروض الحالية</h2>

          <a href="#"> عرض الكل </a>
        </div>
        <div class="list">
          <!-- item 1 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="offer-item"></div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 2 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="offer-item"></div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 3 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="offer-item"></div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 4 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="offer-item"></div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- current books -->
      <div class="c-books">
        <div class="c-book-label">
          <h2>الكتب الدينية</h2>

          <a href="#"> عرض الكل </a>
        </div>

        <div class="list">
          <!-- item 1 -->

          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 1 -->

          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 1 -->

          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 1 -->

          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- math books -->
      <div class="c-books">
        <div class="c-book-label">
          <h2>الكتب الرياضية</h2>

          <a href="#"> عرض الكل </a>
        </div>

        <div class="list">
          <!-- item 1 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 1 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 1 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
          <!-- item 1 -->
          <div class="item">
            <div class="item-img">
              <img src="images/books/book-3.jpg" alt="book image" />
            </div>

            <div class="item-content">
              <h3 class="item-label">
                <i class="fa fa-book"></i>

                كتاب الاكتروني
              </h3>

              <div class="c-rating-icons">
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star is-active"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>

              <h4 class="item-title">نظرية الضفادع تحت المجهر</h4>

              <div class="c-price" dir="rtl">
                <span class="price-label"> 120 </span>
                ر.س

                <span class="tax"> شامل الضرائب </span>
              </div>

              <div class="item-another-format">
                <span>صيغ اخرى: </span>
                <a href="#"> كتاب مطبوع </a>
              </div>

              <div class="item-footer">
                <a href="#" class="star">
                  <i class="fa fa-star"> </i>
                </a>

                <a href="#" class="shopping">
                  <i class="fa fa-shopping-cart"> </i>
                </a>

                <a href="#" class="share">
                  <i class="fa fa-share-alt"> </i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- footer section -->
  <footer class="c-footer">
    <!-- footer navigation -->
    <div class="c-footer-nav">
      <div class="container">
        <div class="c-footer__list">
          <!-- social and form section -->
          <div class="c-footer__item">
            <!-- form section -->
            <div>
              <h3 class="c-footer__item-title">انضم إلى نشرتنا البريدية</h3>

              <form action="" class="c-footer__form">
                <div class="input-group">
                  <i class="fa fa-lock"></i>
                  <input type="email" name="email" placeholder="ادخل بريدك الالكتروني" />
                </div>

                <button>اشتراك</button>
              </form>
            </div>

            <!-- social links section -->
            <div class="c-social">
              <h3 class="c-footer__item-title">تواصل معنا</h3>

              <ul class="c-social__list">
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/facebook.svg" alt="social icon" />
                  </a>
                </li>
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/google-plus.svg" alt="social icon" />
                  </a>
                </li>
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/linkedin.svg" alt="social icon" />
                  </a>
                </li>
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/snapchat.svg" alt="social icon" />
                  </a>
                </li>
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/youtube.svg" alt="social icon" />
                  </a>
                </li>
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/tiktok.svg" alt="social icon" />
                  </a>
                </li>
                <li class="c-social__item">
                  <a href="">
                    <img src="images/icons/twitter.svg" alt="social icon" />
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- services for clients -->
          <div class="c-footer__item">
            <h3 class="c-footer__item-title">خدمة العملاء</h3>

            <ul class="c-footer__links">
              <li class="c-footer__link">
                <a href="">مبيعات الشركات </a>
              </li>
              <li class="c-footer__link">
                <a href=""> الأسئلة المتكررة </a>
              </li>
              <li class="c-footer__link">
                <a href=""> دليل التسوق والمطبوعات </a>
              </li>
              <li class="c-footer__link">
                <a href=""> مواقع المعارض </a>
              </li>
              <li class="c-footer__link">
                <a href=""> سياسة الضمان </a>
              </li>
              <li class="c-footer__link">
                <a href=""> سياسة الاسترجاع والاستبدال </a>
              </li>
              <li class="c-footer__link">
                <a href=""> اتصل بنا > 920000089 </a>
              </li>
            </ul>
          </div>

          <!-- library services -->
          <div class="c-footer__item">
            <h3 class="c-footer__item-title">خدمات جرير</h3>

            <ul class="c-footer__links">
              <li class="c-footer__link">
                <a href=""> تذاكر جرير </a>
              </li>
              <li class="c-footer__link">
                <a href=""> خدمة تقسيط المشتريات </a>
              </li>
              <li class="c-footer__link">
                <a href=""> خدمات ما بعد البيع </a>
              </li>
              <li class="c-footer__link">
                <a href=""> خدمة الحماية الشاملة </a>
              </li>
              <li class="c-footer__link">
                <a href=""> خدمة تمديد الضمان </a>
              </li>
              <li class="c-footer__link">
                <a href=""> حماية أجهزة آبل </a>
              </li>
              <li class="c-footer__link">
                <a href=""> بطاقة خصم جرير </a>
              </li>
              <li class="c-footer__link">
                <a href=""> بطاقة جرير للهدايا </a>
              </li>
            </ul>
          </div>

          <!-- fast links -->
          <div class="c-footer__item">
            <h3 class="c-footer__item-title">روابط سريعة</h3>

            <ul class="c-footer__links">
              <li class="c-footer__link">
                <a href=""> إصدارات جرير </a>
              </li>
              <li class="c-footer__link">
                <a href=""> قارئ جرير </a>
              </li>
              <li class="c-footer__link">
                <a href=""> شركاء برامج المكافئات </a>
              </li>
              <li class="c-footer__link">
                <a href=""> خدمات شركات الإتصالات </a>
              </li>
            </ul>
          </div>

          <!-- about links -->
          <div class="c-footer__item">
            <h3 class="c-footer__item-title">عن جرير</h3>

            <ul class="c-footer__links">
              <li class="c-footer__link">
                <a href=""> من نحن </a>
              </li>
              <li class="c-footer__link">
                <a href=""> الحوكمة </a>
              </li>
              <li class="c-footer__link">
                <a href=""> علاقات المستثمرين والتقارير </a>
              </li>
              <li class="c-footer__link">
                <a href=""> الاستدامة </a>
              </li>
              <li class="c-footer__link">
                <a href=""> الأخبار </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- copyright section -->
    <div class="c-copyright">
      <div class="container">
        <div class="c-copyright__info">
          <!-- links -->
          <div class="c-copyright__links">
            <a href=""> سياسة الخصوصية </a>
            <a href=""> شروط الخدمة </a>
          </div>

          <p>
            .جميع الحقوق محفوظة لمكتبة جرير © 2015. س.ت. 1010032264. اونلاين
            س.ت. 1010654213
          </p>
        </div>

        <div class="c-copyright__payments">
          <img src="images/payments/visa-grey.svg" alt="payment icon" />
          <img src="images/payments/amex.svg" alt="payment icon" />
          <img src="images/payments/mada.svg" alt="payment icon" />
          <img src="images/payments/master.svg" alt="payment icon" />
          <img src="images/payments/qitaf.svg" alt="payment icon" />
          <img src="images/payments/pay-at-showroom.svg" alt="payment icon" />
        </div>
      </div>
    </div>
  </footer>
</div>


<script src="js/slider.js"></script>
<script src="js/modal.js"></script>
<script>
  slider({
    items: '.c-slider .item',
    nextBtn: '.slider-next-btn',
    prevBtn: '.slider-prev-btn',
    dotes: true,
  });
</script>

<script>
  // change page mode when the language change
  const langBtn = document.querySelector('.lang-btn');

  langBtn.onclick = () => {
    const lang = langBtn.getAttribute('data-lang');
    if (lang === 'en') {
      langBtn.setAttribute('data-lang', 'ar');
      document.querySelector('html').dir = 'rtl';
      document.querySelector('html').lang = 'ar';
    } else if (lang === 'ar') {
      langBtn.setAttribute('data-lang', 'en');
      document.querySelector('html').dir = 'ltr';
      document.querySelector('html').lang = 'en';
    }
  };

  // get the value from the local storage
  document.querySelector('.shopping-item-number').innerHTML =
    localStorage.getItem('checkout-product-nubmer');

  // when click on the img or title of the book go to details page
  document.querySelectorAll('.c-books .item-img').forEach((item) => {
    item.style.cursor = 'pointer';
    item.addEventListener('click', () => {
      window.location.assign('/details');
    });
  });

  document.querySelectorAll('.c-books .item-label').forEach((item) => {
    item.style.cursor = 'pointer';
    item.addEventListener('click', () => {
      window.location.assign('/details');
    });
  });
</script>

<script>
  const time = new Date().getTime();
  const timeEnd = new Date('Jan 30, 2022').getTime();
  const s = 1000;
  const m = s * 60;
  const h = m * 60;
  const d = h * 24;
  const offerTime = Math.floor((timeEnd - time) / d);

  document.querySelectorAll('.offer-item').forEach((item, index) => {
    if (offerTime + index <= 2) {
      item.innerHTML = `انتهاء العرض الحالي`;
    } else {
      item.innerHTML = `${offerTime + index} ايام متبقي`;
    }
  });
</script>
<script src="js/autocomplete.js"></script>