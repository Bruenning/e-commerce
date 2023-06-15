<template>
    <v-app :class="routeName()">
        <Vheader />

        <Vcontainer v-if="$route.name != 'login'" class="h-100">
            <RouterView />
        </Vcontainer>

        <RouterView v-else/>
        
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