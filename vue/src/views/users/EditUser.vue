<script setup>
import { axios } from 'axios';

import Input from '@/components/form/Input.vue';
import Button from '@/components/form/Button.vue';
import Select from '@/components/form/Select.vue';

let onSubmit = () => {
  let formData = new FormData(this.$refs.editFormRef);
  axios
    .post('/users/edit', formData, {
      headers: {
        'Content-Type': 'multipart/form-data',
      },
    })
    .then((res) => {
      console.log(res);
    });
};
</script>

<template>
  <div>
    <button class="border rounded px-4 py-2 mb-5" @click="$router.go(-1)">
      Back
    </button>
    <h4 class="text-2xl mb-6 capitalize">edit user</h4>
  </div>

  <form ref="editFormRef" @submit.prevent="onSubmit" class="space-y-4">
    <input type="hidden" name="id" />
    <Input name="name" label="name"></Input>
    <Input name="email" type="email" label="email"></Input>
    <Input name="password" type="password" label="password"></Input>

    <Select name="role_id" label="role" :options="[{ admin: 1 }]"></Select>
    <div
      class="flex py-2 rounded-b border-t border-gray-200 dark:border-gray-600"
    >
      <Button type="submit"> edit </Button>
    </div>
  </form>
</template>
