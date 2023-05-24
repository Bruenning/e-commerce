<template>
    <v-app :class="routeName()">
        <Vheader />

        <Vcontainer class="h-100">
            <RouterView />
        </Vcontainer>

        <Vfooter />
    </v-app>
</template>

<script>
export default {
    watch: {
        '$route'() {
            document.title = this.$route.meta.title
        }
    },
    methods: {
        routeName() {
            return this.$route.name
        }
    }
}
</script>