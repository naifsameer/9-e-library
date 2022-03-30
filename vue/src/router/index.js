import { createRouter, createWebHashHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'Dashboard',
    component: () => import('@/views/HomeView.vue'),
  },
  /*******************************/
  {
    path: '/categories',
    name: 'Categories',
    component: () => import('@/views/categories/Categories.vue'),
  },
  {
    path: '/categories/add',
    name: 'AddCategory',
    component: () => import('@/views/categories/AddCategory.vue'),
  },
  {
    path: '/categories/edit',
    name: 'EditCategory',
    component: () => import('@/views/categories/EditCategory.vue'),
  },
  /*******************************/

  {
    path: '/books',
    name: 'books',
    component: () => import('@/views/books/Books.vue'),
  },
  {
    path: '/books/add',
    name: 'add-book',
    component: () => import('@/views/books/AddBook.vue'),
  },
  {
    path: '/books/edit',
    name: 'edit-book',
    component: () => import('@/views/books/EditBook.vue'),
  },
  /*******************************/

  {
    path: '/authors',
    name: 'Authors',
    component: () => import('@/views/authors/Authors.vue'),
  },
  {
    path: '/authors/add',
    name: 'AddAuthor',
    component: () => import('@/views/authors/AddAuthor.vue'),
  },
  {
    path: '/authors/edit',
    name: 'EditAuthor',
    component: () => import('@/views/authors/EditAuthor.vue'),
  },

  /*******************************/

  {
    path: '/publishers',
    name: 'Publishers',
    component: () => import('@/views/publishers/Publishers.vue'),
  },
  {
    path: '/publishers/add',
    name: 'AddPublisher',
    component: () => import('@/views/publishers/AddPublisher.vue'),
  },
  {
    path: '/publishers/edit',
    name: 'EdiPublisher',
    component: () => import('@/views/publishers/EditPublisher.vue'),
  },

  /*******************************/

  {
    path: '/users',
    name: 'Users',
    component: () => import('@/views/users/Users.vue'),
  },
  {
    path: '/users/add',
    name: 'AddUser',
    component: () => import('@/views/users/AddUser.vue'),
  },
  {
    path: '/users/edit',
    name: 'EdiUser',
    component: () => import('@/views/users/EditUser.vue'),
  },
  /*******************************/

  {
    path: '/cities',
    name: 'Cities',
    component: () => import('@/views/cities/Cities.vue'),
  },
  {
    path: '/cities/add',
    name: 'AddCity',
    component: () => import('@/views/cities/AddCity.vue'),
  },
  {
    path: '/cities/edit',
    name: 'EdiCity',
    component: () => import('@/views/cities/EditCity.vue'),
  },
  /*******************************/

  {
    path: '/offers',
    name: 'Offers',
    component: () => import('@/views/offers/Offers.vue'),
  },
  {
    path: '/offers/add',
    name: 'AddOffer',
    component: () => import('@/views/offers/AddOffer.vue'),
  },
  {
    path: '/offers/edit',
    name: 'EditOffer',
    component: () => import('@/views/offers/EditOffer.vue'),
  },
  /*******************************/

  {
    path: '/orders',
    name: 'Orders',
    component: () => import('@/views/orders/Orders.vue'),
  },
  {
    path: '/orders/add',
    name: 'AddOrder',
    component: () => import('@/views/orders/AddOrder.vue'),
  },
  {
    path: '/orders/edit',
    name: 'EditOrder',
    component: () => import('@/views/orders/EditOrder.vue'),
  },
  /*******************************/

  {
    path: '/user-payments',
    name: 'UserPayments',
    component: () => import('@/views/user-payments/UserPayments.vue'),
  },
  {
    path: '/user-payments/add',
    name: 'AddUserPayment',
    component: () => import('@/views/user-payments/AddUserPayment.vue'),
  },
  {
    path: '/user-payments/edit',
    name: 'EditUserPayment',
    component: () => import('@/views/user-payments/EditUserPayment.vue'),
  },
  /*******************************/

  {
    path: '/user-addresses',
    name: 'UserAddresses',
    component: () => import('@/views/user-addresses/UserAddresses.vue'),
  },
  {
    path: '/user-addresses/add',
    name: 'AddUserAddress',
    component: () => import('@/views/user-addresses/AddUserAddress.vue'),
  },
  {
    path: '/user-addresses/edit',
    name: 'EditUserAddress',
    component: () => import('@/views/user-addresses/EditUserAddress.vue'),
  },
];

const router = createRouter({
  history: createWebHashHistory(import.meta.env.BASE_URL),
  routes,
});

export default router;
