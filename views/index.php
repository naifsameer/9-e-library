<?php

use app\helpers\UtilHelper;

include_once 'includes/modals.php';
include_once 'includes/header.php';
include_once 'includes/slider.php';

// UtilHelper::log($params);
// exit;
?>

<!-- main section -->
<div>
  <main class="main">
    <div class="container">
      <!-- categories section -->
      <div class="c-home-categories">
        <h2 class="title">تسوّق بالأقسام</h2>

        <div class="list">
          <?php if (isset($params['categories'])) {
            foreach ($params['categories'] as $category) {
          ?>
              <a href="/categories?id=<?= $category['id'] ?>">
                <div class="item">
                  <i class="fa fa-phone"></i>

                  <h3 class="item-title"><?= $category['name']; ?></h3>
                </div>
              </a>
          <?php }
          } ?>
        </div>
      </div>


      <!-- offers book (working....) -->
      <div class="hidden c-books">
        <div class="c-book-label">
          <h2>العروض الحالية</h2>

          <a href="#"> عرض الكل </a>
        </div>
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
          <?php if (isset($params['books'])) {
            foreach ($params['books'] as $book) {
          ?>
              <div class="item">
                <div class="item-img">
                  <img src="/images/<?= $book['image'] ?>" alt="book image" />
                </div>

                <div class="item-content">
                  <h3 class="item-label">
                    <i class="fa fa-book"></i>
                    <?= $book['format']; ?>
                  </h3>

                  <div class="c-rating-icons">
                    <i class="fa fa-star is-active"></i>
                    <i class="fa fa-star is-active"></i>
                    <i class="fa fa-star is-active"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>

                  <h4 class="item-title"><?= $book['title']; ?></h4>

                  <div class="c-price" dir="rtl">
                    <span class="price-label"> <?= $book['price']; ?> </span>
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
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </main>
</div>



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

<?php include_once 'includes/footer.php'; ?>
</body>

</html>