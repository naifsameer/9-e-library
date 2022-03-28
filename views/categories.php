<?php
include_once 'includes/modals.php';
include_once 'includes/header.php';
include_once 'includes/slider.php';

?>

<main class="c-categories">
  <div class="container">
    <div class="categories-wrapper">
      <!-- sidebar section -->
      <aside class="sidebar">
        <!-- links -->
        <div class="nav-links">
          <a href="#" class="nav-item"> الرئيسيه </a>
          <a href="#" class="nav-item"> الكتب العربية </a>
          <a href="#" class="nav-item"> كتب الكترونية </a>
        </div>

        <div class="sidebar-label">
          <i class="fa fa-book"></i>
          كتب الكترونية
        </div>

        <div class="sidebar-filter">
          <h3 class="title">تصفيه النتائج</h3>

          <div class="item">
            علامات تجارية
            <i class="fa fa-minus-square"></i>
          </div>

          <div class="item">
            السعر
            <i class="fa fa-minus-square"></i>
          </div>

          <div class="item-range">
            <div class="range">
              <input type="range" name="" id="" />
            </div>

            <div class="price">
              <span> 0 ر.س </span>

              <span> 200 ر.س </span>
            </div>
          </div>

          <div class="item">
            صيغه الكتاب
            <i class="fa fa-minus-square"></i>
          </div>
        </div>
      </aside>

      <!-- products section -->
      <div class="products">
        <div class="products-filter">
          <div>ترتيب بحسب:</div>

          <select>
            <option selected disabled>الرجاء الاختيار</option>
            <option value="price">السعر</option>
            <option value="value">القيمة</option>
          </select>
        </div>

        <!-- books -->
        <div class="c-books">
          <div class="list">
            <!-- item 1 -->
            <div class="item">
              <div class="item-img">
                <img src="/images/books/book-3.jpg" alt="book image" />
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

                <h4 class="item-title">ألرياضيات</h4>

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

        <!-- show more -->
        <button class="show-more">عرض المزيد</button>

        <div class="dived-line"></div>

        <h3 class="buy-more-book">
          اشتر من إلكتروني على متجر جرير الكتروني
        </h3>
      </div>
    </div>
  </div>
</main>


<script src="/js/books.js"></script>

<script>
  renderBooks(9);

  // get the value from the local storage
  document.querySelector('.shopping-item-number').innerHTML =
    localStorage.getItem('checkout-product-nubmer');
</script>


<?php include_once 'includes/footer.php'; ?>
</body>

</html>