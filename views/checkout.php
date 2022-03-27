<?php
include_once 'includes/modals.php';
include_once 'includes/header.php';
include_once 'includes/slider.php';

?>


<div class="c-stepper" dir="ltr">
  <div class="container">
    <div class="step-nav">
      <div class="step__item is-active">1</div>
      <div class="step__item">2</div>
      <div class="step__item">3</div>
      <div class="step__item">4</div>
    </div>

    <!-- first step -->
    <div class="js-step is-active">
      <!-- user information form -->
      <form action="" class="user-information">
        <div class="input-group">
          <label for="usrer-name">Name</label>
          <input type="text" id="user-name" />
        </div>

        <div class="input-group">
          <label for="usrer-email">Email</label>
          <input type="email" id="user-email" />
        </div>

        <div class="input-group">
          <label for="usrer-address">Address</label>
          <input type="text" id="user-address" />
        </div>

        <div class="input-group">
          <label for="usrer-age">Age</label>
          <input type="text" id="user-age" />
        </div>

        <div class="btn-group">
          <button type="button" class="btn next-btn">Next</button>
        </div>
      </form>
    </div>

    <!-- second step -->
    <div class="js-step">
      <!-- payment information form -->
      <form action="" class="payment-information">
        <div class="input-group">
          <label for="payment-number">Card number</label>
          <input type="text" id="payment-number" />
        </div>

        <div class="input-group">
          <label for="payment-date">Card date</label>
          <input type="date" id="payment-date" />
        </div>

        <div class="input-group">
          <label for="payment-number">Address</label>
          <input type="text" id="payment-number" />
        </div>

        <div class="btn-group">
          <button type="button" class="btn previews-btn">Previews</button>

          <button type="button" class="btn next-btn">Next</button>
        </div>
      </form>
    </div>

    <!-- third step -->
    <div class="js-step">
      <div class="confirm">
        <h3 class="confirm__title">please confirm the payment</h3>

        <!-- <button class="confirm-btn">Confirm</button> -->

        <div class="btn-group">
          <button type="button" class="btn previews-btn">Previews</button>

          <button type="button" class="btn next-btn">Confirm</button>
        </div>
      </div>
    </div>

    <!-- forth step -->
    <div class="js-step">
      <div class="done-checkout">
        <h2 class="title">
          Wow man you do it. No you can spent the rest of your live with a
          big smile.

          <a class="stepper-home-link" href="/"> Home page </a>
        </h2>
      </div>
    </div>
  </div>
</div>

<script src="/js/stepper.js"></script>