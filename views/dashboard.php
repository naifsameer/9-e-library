<?php

use app\helpers\UtilHelper;

include 'includes/nav.php'; ?>

<div class="container mx-auto py-8">

  <div class="pb-8 flex justify-between items-center">
    <h2 class="text-4xl">Product list </h2>
    <a class="border border-blue-500 text-blue-500 px-4 py-2 rounded" href="/post/add">Add new product</a>
  </div>

  <!-- table -->
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <!-- table header -->
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Image
          </th>

          <th scope="col" class="px-6 py-3">
            Title
          </th>

          <th scope="col" class="px-6 py-3">
            Category
          </th>

          <th scope="col" class="px-6 py-3">
            content
          </th>

          <th scope="col" class="px-6 py-3">
            <span class="sr-only">Action</span>
          </th>
        </tr>
      </thead>

      <!-- table body -->
      <tbody>

        <!-- item -->
        <?php foreach ($params as $key) { ?>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
              <img class="w-16 h-16" src="/images/<?php echo $key['image']; ?>" alt="post image">
            </th>
            <td class="px-6 py-4">
              <?php echo $key['title']; ?>
            </td>
            <td class="px-6 py-4">
              <?php echo $key['category']; ?>
            </td>
            <td class="px-6 py-4">
              <?php echo $key['content']; ?>
            </td>
            <td class="px-6 py-4">
              <div class="flex justify-center">
                <a href="/post/edit?id=<?php echo $key['postsID']; ?>" class="font-medium fill-white hover:fill-blue-500 text-blue-600 dark:text-blue-500 hover:underline">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path class="fill-inherit" fill="#ffffff" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z" />
                  </svg>
                </a>

                <!-- delete -->
                <form action="/post/delete" method="post" class="flex">
                  <input type="hidden" name="postID" value="<?php echo $key['postsID']; ?>">

                  <button class="font-medium  hover:underline">
                    <svg fill="#ffffff" class="hover:fill-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" />
                    </svg>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        <?php } ?>

      </tbody>
    </table>
  </div>
</div>