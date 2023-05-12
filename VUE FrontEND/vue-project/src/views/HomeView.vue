<script setup>
import { ref, onMounted } from "vue";
import { inject } from 'vue';

const axios = inject('axios')
// reactive state
const count = ref(0);

// functions that mutate state and trigger updates
function axiosCall() {
  debugger;
  axios
    .get("http://127.0.0.1:8000")
    .then((response) => {
      debugger;
      console.log(response.data);
    });
}

// lifecycle hooks
onMounted(() => {
  console.log(`The initial count is ${count.value}.`);
});
</script>

<template>
  <button @click="axiosCall">Axios Call</button>
</template>
