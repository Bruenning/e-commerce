<template>
    <v-toolbar v-if="$route.name != 'login'">
        <v-toolbar-title>
            <router-link
                :to="home()"
                class="v-btn v-theme--light v-btn--density-default v-btn--size-default"
                style="color: #000; caret-color: #000; height: inherit"
            >
                Guilherme Henrique Bruenning
            </router-link>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <Vbutton
                v-for="(item, key) in menu"
                :key="key"
                variant=""
                :to="item.path"
                >{{ item.meta.title }}</Vbutton
            >
            <Vbutton
                v-if="isUrlAdmin()"
                color="#000"
                variant=""
                @click="logout()"
                >logout</Vbutton
            >
<script>
export default {
    data() {
        return {
            menu: [],
        }
    },
    mounted() {
        this.getMenu()
    },
    watch: {
        $route() {
            this.getMenu()
        },
    },
    methods: {
        getMenu() {
            this.menu = []
            this.$router.options.routes.forEach((route) => {
                if (
                    route.meta &&
                    route.meta.type.indexOf("site") >= 0 &&
                    new URL(location.href).pathname.split("/").indexOf("a") < 0
                ) {
                    this.menu.push(route)
                } else if (
                    route.meta &&
                    route.meta.type.indexOf("admin") >= 0 &&
                    new URL(location.href).pathname.split("/").indexOf("a") >= 0
                ) {
                    this.menu.push(route)
                }
            })
        },
        logout() {
            localStorage.removeItem("token")
            localStorage.removeItem("user_id")
            this.$router.push({ name: "login" })
            reload()
        },

        reload() {
            windows.location.reload()
        },

        isUrlAdmin() {
            return new URL(location.href).pathname.split("/").indexOf("a") >= 0
                ? true
                : false
        },

        home() {
            return new URL(location.href).pathname.split("/").indexOf("a") >= 0
                ? "/a"
                : "/"
        },
    },
}
</script>
