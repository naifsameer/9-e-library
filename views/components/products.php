<template id="product">
  <li class="user-card" x-v="name,description">
    <h2>{{name}}</h2>

    <p>{{description}}</p>

  </li>
</template>

<div x-v="isOnline" x-data="{ isOnline: 1 }">
  <button @click="isOnline += 1">
    {{isOnline}}
  </button>
</div>

<div x-data="{ showAlert: true }">
  <div x-show="showAlert" class="p-6 text-white bg-red-700 rounded-lg" role="alert">
    Lorem ipsum dolor sit amet consectetur!
  </div>


  <button @click="showAlert = !showAlert">
    close/open
  </button>
</div>