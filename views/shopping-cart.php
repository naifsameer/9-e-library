<?php
include_once 'includes/modals.php';
include_once 'includes/header.php';
include_once 'includes/slider.php';

?>

<div class="c-checkout">
  <div class="container">
    <!-- checkout title -->
    <h2 class="title">
      <i class="fa fa-shopping-cart"></i>
      السلة
      <span>
        (
        <span class="checkout-product-number">4</span> منتجات )
      </span>
    </h2>

    <!-- checkout items -->
    <div class="item-wrapper">
      <!-- list items -->
      <div class="list">
        <!-- item 1 -->
        <div class="item">
          <div class="item-container">
            <!-- right side -->
            <div class="item-right">
              <div class="img">
                <img src="/images//books/book-1.jpg" alt="book image" />
              </div>
              <div>
                <h3 class="title">البدايات و النهايات الجزء الاول</h3>
                <p class="docs">
                  منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير
                </p>
                <p class="note">
                  <b> :ملاحظه </b>
                  هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني
                  <a href="#"> كيفية الحصول على المنتج? </a>
                </p>
              </div>
            </div>

            <!-- left side -->
            <div class="item-left">
              <p class="price">
                <span class="price-label">3.99</span>
                ر.س
              </p>

              <div>
                <select class="c-select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
          </div>

          <!-- footer -->
          <div class="item-footer">
            <hr />
            <div>
              <i class="fa fa-trash"></i>
              احذف
            </div>
          </div>
        </div>

        <!-- item 2 -->
        <div class="item">
          <div class="item-container">
            <!-- right side -->
            <div class="item-right">
              <div class="img">
                <img src="/images//books/book-2.jpg" alt="book image" />
              </div>
              <div>
                <h3 class="title">
                  مبادىء الرياضيات وتطبيقاتها في العلوم الادارية والانسانية
                </h3>
                <p class="docs">
                  منتج قابل للخصم لحاملي بطاقة خصم مكتبة جرير
                </p>
                <p class="note">
                  <b> :ملاحظه </b>
                  هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني
                  <a href="#"> كيفية الحصول على المنتج? </a>
                </p>
              </div>
            </div>

            <!-- left side -->
            <div class="item-left">
              <p>
                <span class="price-label">3.99</span>
                ر.س
              </p>

              <div>
                <select class="c-select">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
            </div>
          </div>

          <!-- footer -->
          <div class="item-footer">
            <hr />
            <div>
              <i class="fa fa-trash"></i>
              احذف
            </div>
          </div>
        </div>
      </div>

      <!-- price -->
      <div class="summary">
        <div class="summary-row">
          <div class="summary-title">المجموع</div>

          <div class="price">
            <span class="price-label"> 143.75 </span>
            ر.س.
          </div>
        </div>

        <div class="summary-row">
          <div class="summary-title">تكاليف الشحن</div>

          <div class="price">
            <span class="price-label"> 13.75 </span>
            ر.س.
          </div>
        </div>

        <div class="summary-row">
          <div class="summary-title total">
            المجموع الكلي
            <span> شامل الضريبة </span>
          </div>

          <div class="price">
            <span class="price-label"> 200.75 </span>
            ر.س.
          </div>
        </div>

        <div class="summary-footer">
          <p class="summary-desc">
            بالضغط على '' انهاء التسوق '' فانت توافق على على الشروط والأحكام
            و سياسة الخصوصية
          </p>

          <a href="checkout" class="summary-btn btn">تحديث السله</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="/js/checkout.js"></script>

<script>
  // get the value from the local storage
  document.querySelector('.shopping-item-number').innerHTML =
    localStorage.getItem('checkout-product-nubmer');
</script>

<?php include_once 'includes/footer.php'; ?>
</body>

</html>