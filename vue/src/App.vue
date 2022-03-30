<script setup>
import { ref } from 'vue';
import { RouterView } from 'vue-router';
import SidebarSection from './components/SidebarSection.vue';
import HeaderSection from './components/HeaderSection.vue';

let dark = ref(true);

const toggleNotificationsMenu = () => {};
const toggleProfileMenu = () => {};
const toggleSideMenu = () => {};
const toggleTheme = () => {
  dark.value = !dark.value;
};
</script>

<template>
  <div class="flex justify-between min-h-screen" :class="dark ? 'dark' : ''">
    <!-- dashboard nav -->
    <aside
      id="sidebar"
      class="w-1/5 items-stretch flex max-w-64 relative dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 border-r"
    >
      <SidebarSection :dark="dark" />
    </aside>

    <div class="w-4/5 dark:bg-gray-800 dark:text-gray-300">
      <!-- dashboard header -->
      <!-- <?php include 'components/header.html'; ?> -->
      <HeaderSection
        :dark="dark"
        :toggleNotificationsMenu="toggleNotificationsMenu"
        :toggleProfileMenu="toggleProfileMenu"
        :toggleSideMenu="toggleSideMenu"
        :toggleTheme="toggleTheme"
      />

      <!-- dashboard content-->
      <div class="px-4 lg:px-8 py-6">
        <RouterView />
      </div>
    </div>
  </div>
</template>
