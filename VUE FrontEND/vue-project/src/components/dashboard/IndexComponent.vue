<template>
  <!-- ======= Header ======= -->
  <header-component></header-component>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <sidebar-component></sidebar-component>
  <!-- End Sidebar-->

  <main id="main" class="main">
    <page-title-component></page-title-component>
    <!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <RouterView />
      </div>
    </section>
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer-component></footer-component>
  <!-- End Footer -->
</template>

<script setup>
import { onMounted } from "vue"
import FooterComponent from "./FooterComponent.vue"
import HeaderComponent from "./HeaderComponent.vue"
import PageTitleComponent from './PageTitleComponent.vue'
import SidebarComponent from "./SidebarComponent.vue";
import { RouterView } from "vue-router"

onMounted(() => {
  document
    .querySelector(".toggle-sidebar-btn")
    .addEventListener("click", function (event) {
      event.preventDefault();
      var target = document.querySelector(".page-wrapper");
      if (target.classList.contains("toggle-sidebar")) {
        target.classList.remove("toggle-sidebar");
      } else {
        target.classList.add("toggle-sidebar");
      }
    });
});
</script>

<style lang="scss" scoped></style>
