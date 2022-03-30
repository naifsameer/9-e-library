<script setup>
import LinkItem from './LinkItem.vue';
import IconDashboard from './icons/IconDashboard.vue';
</script>

<template>
  <div class="transition-width duration-75 pt-0 sticky top-0">
    <!-- logo -->
    <div class="py-5">
      <a
        class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
        href="/"
      >
        E-library
      </a>
    </div>

    <div class="py-4 overflow-y-auto">
      <div class="flex-1 px-3 divide-y space-y-1 dark:divide-gray-600">
        <ul class="space-y-2 pb-2">
          <li>
            <form action="#" method="GET" class="lg:hidden">
              <label for="mobile-search" class="sr-only">Search</label>
              <div class="relative">
                <div
                  class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                >
                  <svg
                    class="w-5 h-5 text-gray-500"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                    ></path>
                  </svg>
                </div>
                <input
                  type="text"
                  name="email"
                  id="mobile-search"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600"
                  placeholder="Search"
                />
              </div>
            </form>
          </li>

          <li>
            <LinkItem href="/">
              <IconDashboard />

              <template #body>
                <span>Dashboard</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/categories">
              <IconDashboard />

              <template #body>
                <span>Categories</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/books">
              <IconDashboard />

              <template #body>
                <span>Books</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/authors">
              <IconDashboard />

              <template #body>
                <span>Authors</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/publishers">
              <IconDashboard />
              <template #body>
                <span>Publishers</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/users">
              <IconDashboard />
              <template #body>
                <span>Users</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/cities">
              <IconDashboard />
              <template #body>
                <span>Cities</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/offers">
              <IconDashboard />
              <template #body>
                <span>Offers</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/orders">
              <IconDashboard />
              <template #body>
                <span>Orders</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/user-payments">
              <IconDashboard />
              <template #body>
                <span>User Payments</span>
              </template>
            </LinkItem>
          </li>

          <li>
            <LinkItem href="/user-addresses">
              <IconDashboard />
              <template #body>
                <span>User Addresses</span>
              </template>
            </LinkItem>
          </li>
        </ul>

        <div class="space-y-2 pt-2"></div>
      </div>
    </div>
  </div>
</template>
