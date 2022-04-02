<script setup>
import Button from '@/components/form/Button.vue';
import Select from '@/components/form/Select.vue';
import { onMounted, ref } from 'vue';
import { getUsers, getPayments, addUserPayment } from '@/api';

// get data from api
let users = ref([]);
let payments = ref([]);
onMounted(async () => {
  users.value = await getUsers();
  payments.value = await getPayments();
});

let addFormRef = ref(null);
let onSubmit = async () => {
  let formData = new FormData(addFormRef.value);

  let res = await addUserPayment(formData);

  console.log(res);
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">add user-payment</h4>
  </div>

  <form ref="addFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <input type="hidden" name="id" />
    <Select name="user_id" label="user" :options="users" />
    <Select name="payment_id" label="payment" :options="payments" />

    <!-- <Input name="payment_id" label="payment" /> -->
    <!-- <Input name="user" label="user" /> -->

    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> add </Button>
    </div>
  </form>
</template>
