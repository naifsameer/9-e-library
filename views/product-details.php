<?php
include_once 'includes/modals.php';
include_once 'includes/header.php';
include_once 'includes/slider.php';

?>
<!-- show book image in modal  -->
<div class="details-modal">
  <button class="close-btn">
    <i class="fa fa-plus"></i>
  </button>
</div>


<!-- navigation history section -->
<div class="c-nav-history">
  <div class="container">
    <a class="c-nav-history__item">الرئيسيه</a>
    <a class="c-nav-history__item">كتب عربية</a>
    <a class="c-nav-history__item">كتب الاكترونية</a>
    <a class="c-nav-history__item">كيف تربح مليار دولار في ساعه</a>
  </div>
</div>



<!-- details section -->
<div class="c-details">
  <div class="container">
    <div class="c-details-wrapper">
      <!-- img wrapper -->
      <div class="c-img-wrapper">
        <img src="images/books/book-1.jpg" class="book-img" alt="book img" />

        <div class="other-imgs">
          <img src="images/books/book-3.jpg" alt="book img" />
          <img src="images/books/book-2.jpg" alt="book img" />
          <img src="images/books/book-1.jpg" alt="book img" />
        </div>
      </div>

      <!-- info section -->
      <div class="c-info">
        <h2 class="c-info__title">الثقه التامه بالنفس</h2>

        <a href="#" class="c-info__show-more">
          <span> عرض المزيد </span>
          <i class="icon fa fa-angle-down"></i>
        </a>

        <div class="c-price" dir="rtl">
          <span class="price-label"> 120 </span>
          ر.س

          <span class="tax"> شامل الضرائب </span>
        </div>

        <div dir="ltr" class="c-info__rates">
          <span>وحده البيع</span>

          <div class="c-icon">
            <a href="">
              (
              <span> المراجعات </span>
              )
            </a>

            <div class="c-rating-icons">
              <i class="fa fa-star is-active"></i>
              <i class="fa fa-star is-active"></i>
              <i class="fa fa-star is-active"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
          </div>

          <div>
            <span>
              رقم الصنف
              <b>203049</b>
            </span>
            <span>
              رقم المنتج
              <b>203049</b>
            </span>
          </div>
        </div>

        <!-- receive product options -->
        <div class="c-info__download">
          <h4 class="download-title">الصيغ المتوفرة</h4>
          <div class="c-info__download-item">
            <div>
              <input type="radio" name="book-type" id="pdf-book-radio" />

              <label for="pdf-book-radio"> كتب الكتروني </label>
            </div>

            <div class="c-price" dir="rtl">
              <span class="price-label"> 120 </span>
              ر.س
              <span class="tax"> شامل الضرائب </span>
            </div>
          </div>

          <div class="c-info__download-item">
            <div>
              <input type="radio" name="book-type" id="printer-book-radio" />
              <label for="printer-book-radio"> كتاب مطبوع </label>
            </div>

            <div class="c-price" dir="rtl">
              <span class="price-label"> 120 </span>
              ر.س
              <span class="tax"> شامل الضرائب </span>
            </div>
          </div>
        </div>
      </div>

      <!-- add to cart -->
      <div class="c-buy">
        <p class="note">
          <b dir="ltr"> :ملاحظه </b>
          هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني
          <a href="#"> كيفية الحصول على المنتج? </a>
        </p>

        <div class="add-to-cart">
          <select class="c-select">
            <option value="1">1</option>
            <option value="2">2</option>
          </select>

          <button class="add-to-cart-btn">
            <i class="fa fa-shopping-cart"></i>
            اضف الى السلة
          </button>
        </div>

        <!-- warranty labels -->
        <div class="c-warranty">
          <div class="c-warranty__item">
            <i class="fa fa-lock"></i>

            <span> تسوق امن </span>

            <i class="fa fa-info-circle"></i>
          </div>

          <div class="c-warranty__item">
            <i class="fa fa-shield-alt"></i>
            <span> اصلي و مضمون </span>
            <i class="fa fa-info-circle"></i>
          </div>

          <div class="c-warranty__item">
            <i class="fa fa-bicycle"></i>
            <span> شحن سريع و مجاني </span>
            <i class="fa fa-info-circle"></i>
          </div>
        </div>

        <hr />
        <!-- buttons  -->
        <div class="c-buy-btns">
          <button>
            <i class="fa fa-share"></i>
            <span> مشاركة </span>
          </button>

          <button>
            <i class="fa fa-heart"></i>
            <span> المفضلة </span>
          </button>

          <button>
            <i class="fa fa-compress"></i>
            <span> مقارنة </span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- details info section  -->
<div class="c-details-info">
  <!-- desc -->
  <div class="desc">
    <div class="container">
      <p>كتاب يتحدث عن الثقه بالنفس و الطرق الصحيحه للتعامل معها</p>
    </div>
  </div>

  <div class="container">
    <!-- info list section -->
    <div class="list">
      <h2 class="section-title">المواصفات</h2>

      <div class="item">
        <span>رقم الصنف</span>
        <b>123456789</b>
      </div>

      <div class="item">
        <span>رقم المنتج</span>
        <b>5</b>
      </div>

      <div class="item">
        <span>المؤلف</span>
        <b>حمود صالح</b>
      </div>

      <div class="item">
        <span>الناشر</span>
        <b>دار البطيخ للرعاية الفنية</b>
      </div>

      <div class="item">
        <span>تاريخ النشر</span>
        <b>2022</b>
      </div>

      <div class="item">
        <span>صيغة الكتاب</span>
        <b>Ebook</b>
      </div>

      <div class="item">
        <span>عدد الصفحات</span>
        <b>250</b>
      </div>

      <div class="item">
        <span>وزن الشحن (كجم)</span>
        <b>0.0100</b>
      </div>

      <div class="item">
        <span>صيغة الملف</span>
        <b>Pdf</b>
      </div>

      <div class="item">
        <span>اللغه</span>
        <b>عربي</b>
      </div>

      <div class="list-show-less">
        <button>عرض اقل</button>
        <i class="fa fa-angle-up"></i>
      </div>
    </div>
  </div>
</div>

<!-- customer list -->
<div class="c-customer">
  <div class="container">
    <div class="header">
      <h2 class="section-title">مراجعات العملاء</h2>

      <div class="add-review-btn">
        <i class="fa fa-plus"></i>
        <span>اكتب مراجعتك</span>
      </div>
    </div>

    <div class="list">
      <div class="item">
        <div class="item-header">
          <h4 class="item-title">Good</h4>

          <div class="item-user">
            <div class="item-name">من قبل</div>
            <time class="item-date"> 2020/11/16 </time>
          </div>
        </div>

        <p class="item-comment">good</p>
      </div>
      <div class="item">
        <div class="item-header">
          <h4 class="item-title">Good</h4>

          <div class="item-user">
            <div class="item-name">من قبل</div>
            <time class="item-date"> 2020/11/16 </time>
          </div>
        </div>

        <p class="item-comment">good</p>
      </div>
      <div class="item">
        <div class="item-header">
          <h4 class="item-title">Good</h4>

          <div class="item-user">
            <div class="item-name">من قبل</div>
            <time class="item-date"> 2020/11/16 </time>
          </div>
        </div>

        <p class="item-comment">good</p>
      </div>

      <div class="list-show-all">
        <button>اظهار جميع المراجعات (15)</button>
        <i class="fa fa-angle-left"></i>
      </div>
    </div>
  </div>
</div>

<hr />

<!-- others products -->
<div class="c-other-products">
  <div class="container">
    <h2 class="section-title">منتجات مشابهه</h2>

    <div class="slider-wrapper">
      <div class="slider">
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
        <div class="slider-item">
          <img class="slider-item-img" src="images/books/book-1.jpg" alt="book image" />

          <h3 class="slider-item-title">فن الثقه بالنفس</h3>

          <div class="c-price" dir="rtl">
            <span class="price-label"> 120 </span>
            ر.س
            <span class="tax"> شامل الضرائب </span>
          </div>
        </div>
      </div>

      <div class="slider-btns">
        <button class="slider-btn-next">
          <i class="fa fa-angle-right"></i>
        </button>

        <button class="slider-btn-preview">
          <i class="fa fa-angle-left"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<!-- book modal -->
<script>
  // get the value from the local storage
  document.querySelector('.shopping-item-number').innerHTML =
    localStorage.getItem('checkout-product-nubmer');

  // book modal
  document
    .querySelector('.c-img-wrapper')
    .addEventListener('click', (e) => {
      const imgSrc = e.target.src;

      const modal = `
          <button class="close-btn">
            <i class="fa fa-plus"></i>
          </button>
          <div>
            <img src='${imgSrc}' />
          </div>
        `;

      const modalItem = document.querySelector('.details-modal');
      modalItem.innerHTML = modal;
      modalItem.classList.add('is-active');

      document.querySelector('.details-modal .close-btn').onclick = () => {
        modalItem.classList.remove('is-active');
      };
    });
</script>