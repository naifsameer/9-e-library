<div id="app">

  <div class="flex justify-between" :class="dark ? 'dark' : ''">
    <!-- dashboard nav -->
    <aside id="sidebar" class="min-h-screen flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
      <?php include 'components/sidebar.html'; ?>
    </aside>

    <div class="flex-1 dark:bg-gray-800 dark:text-gray-300">
      <!-- dashboard header -->
      <?php include 'components/header.html'; ?>

      <!-- dashboard content-->
      <div class="px-4 lg:px-8 py-6">
        <router-view></router-view>
      </div>

    </div>
  </div>
</div>


<script src="/js/axios.js"></script>
<script src="/js/vue.dev.js"></script>
<script src="/js/vuex.js"></script>
<script src="/js/vue-router.js"></script>
<script src="/js/v-icons.js"></script>

<script>
  // components
  <?php include 'components/shared-components.js' ?>
  <?php include 'components/modal.js' ?>

  // pages
  <?php include 'pages/categories.js' ?>
  <?php include 'pages/books.js' ?>
  <?php include 'pages/authors.js' ?>
  <?php include 'pages/publishers.js' ?>
  <?php include 'pages/users.js' ?>
  <?php include 'pages/cities.js' ?>
  <?php include 'pages/offers.js' ?>
  <?php include 'pages/orders.js' ?>
  <?php include 'pages/user-payments.js' ?>
  <?php include 'pages/user-addresses.js' ?>

  let app = Vue.createApp({
    components: {
      VLinkItem,
      VIconSignIn,
      VIconSignup,
      VIconProduct,
      VIconUser,
      VIconCategories,
      VIconDashboard,
      VModal
    },
    data() {
      return {
        dark: true,
        isSideMenuOpen: false,
        isNotificationsMenuOpen: false,
        isProfileMenuOpen: false,
        isPagesMenuOpen: false,
      };
    },
    methods: {
      toggleTheme() {
        this.dark = !this.dark
      },

      toggleSideMenu() {
        this.isSideMenuOpen = !this.isSideMenuOpen
      },

      closeSideMenu() {
        this.isSideMenuOpen = false
      },

      toggleNotificationsMenu() {
        this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
      },

      closeNotificationsMenu() {
        this.isNotificationsMenuOpen = false
      },

      toggleProfileMenu() {
        this.isProfileMenuOpen = !this.isProfileMenuOpen
      },

      closeProfileMenu() {
        this.isProfileMenuOpen = false
      },

      togglePagesMenu() {
        this.isPagesMenuOpen = !this.isPagesMenuOpen
      },
    },
  })


  const routes = [{
      path: '/',
      name: "Dashboard",
      component: {
        template: `<h2>Dashboard</h2>`
      }
    }, {
      path: '/categories',
      name: "Categories",
      component: VCategories
    },
    {
      path: '/books',
      name: "Books",
      component: VBooks
    },
    {
      path: '/authors',
      name: "Authors",
      component: VAuthors
    },
    {
      path: '/publishers',
      name: "Publishers",
      component: VPublishers
    },
    {
      path: '/users',
      name: "Users",
      component: VUsers
    },
    {
      path: '/cities',
      name: "Cities",
      component: VCities
    },
    {
      path: '/offers',
      name: "Offers",
      component: VOffers
    },
    {
      path: '/orders',
      name: "Orders",
      component: VOrders
    },
    {
      path: '/user-payments',
      name: "UserPayments",
      component: VUserPayments
    },
    {
      path: '/user-addresses',
      name: "UserAddresses",
      component: VUserAddresses
    }
  ]

  const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes
  })

  app.use(router)
  app.mount('#app')
</script>