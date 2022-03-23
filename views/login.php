<?php

use app\helpers\UtilHelper;

include 'includes/nav.php';

$email = '';
$password = '';

if (isset($params['email']) && isset($params['password'])) {
  $email = $params['email'];
  $password = $params['password'];
}

$errors = [];

if (isset($params['error'])) {
  $errors = $params['error'];
}

$isError = !empty($errors);

// UtilHelper::log($params);
?>

<div class="mt-8 max-w-sm mx-auto p-4 bg-gray-800 rounded">

  <h2 class="text-4xl mb-8">Login page</h2>

  <!-- alert -->
  <?php

  if ($isError) {  ?>

    <div class="flex my-8 w-full overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
      <div class="flex items-center justify-center w-12 bg-red-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
        </svg>
      </div>

      <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
          <span class="font-semibold text-red-500 dark:text-red-400">Error</span>


          <?php
          if (is_array($errors)) {
            foreach ($errors as $key) { ?>
              <p class="text-sm text-gray-600 dark:text-gray-200">
                <?php echo $key; ?>
              </p>
            <?php }
          } else { ?>
            <p class="text-sm text-gray-600 dark:text-gray-200">
              <?php echo $errors; ?>
            </p>
          <?php } ?>

        </div>
      </div>
    </div>
  <?php  }   ?>

  <form method="POST" action="">
    <div class="mb-6 ">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>

      <input autocomplete="email" value="<?php echo $email; ?>" name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:bor der-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@super-blog.com" required>
    </div>

    <div class="mb-6">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your password</label>

      <input value="<?php echo $password; ?>" autocomplete="current-password" name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>
</div>