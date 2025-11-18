<script setup>
import Header from "./Header.vue"
import Sidebar from "./Sidebar.vue"
import Footer from "./Footer.vue"
</script>

<template>
  <div>
    <Header />

    <div class="d-flex">
      <Sidebar />

      <main class="p-4" style="width: 100%;">
        <slot />
      </main>
    </div>

    <Footer />
  </div>
</template>
