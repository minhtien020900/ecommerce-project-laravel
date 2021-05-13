<template>
  <div>
    <AdminHeader />
    <AdminSideBar />
    <AdminPage />
    <AdminFooter />
    <scr
</div>
  
  
</template>

<script>
// import a from 'assets/plugins/jquery/jquery.min.js'
import AdminHeader from "../../admin/layouts/AdminHeader";
import AdminFooter from "../../admin/layouts/AdminFooter.vue";
import AdminPage from "../../admin/layouts/AdminPage.vue";
import AdminSideBar from "../../admin/layouts/AdminSideBar.vue";
export default {
  components: {
    AdminHeader,
    AdminFooter,
    AdminPage,
    AdminSideBar,
  },
};
</script>

<style>
</style>