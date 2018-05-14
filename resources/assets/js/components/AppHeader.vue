<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">VR Design&Development studio
                <!--img src="" alt="VR Design&Development studio" width="112" height="28"-->
            </a>




        </div>

        <div class="navbar-menu is-active">
            <router-link to="/home" class="navbar-item">Главная</router-link>
            <router-link to="/about" class="navbar-item">О программе</router-link>
        </div>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </nav>
</template>

<script>
    export default {
        name: "app-header"
    }
</script>

<style scoped>

</style>