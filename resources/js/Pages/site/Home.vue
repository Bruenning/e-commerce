<template>
    aaaaaaaa
</template>

<script>
    export default {
        data() {
            return {
                user: {},
            }
        },
        mounted() {
            this.$api.get('user/user/', {id: 3}).then((response) => {
                console.log(response.data);
            })
        }
    }
</script>