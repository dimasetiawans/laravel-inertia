<script setup>
import { computed } from 'vue'

const props = defineProps({
  type: {
    type: String,
    default: "danger" // danger, success, warning, info
  },
  message: {
    type: String,
    default: ""
  }
})

const alertClass = computed(() => {
  return `alert alert-${props.type} py-2`
})
</script>

<template>
  <div v-if="message" :class="alertClass" role="alert">
    {{ message }}
  </div>
</template>