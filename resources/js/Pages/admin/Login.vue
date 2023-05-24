<template>
    <Vbutton @click="login()">entrar</Vbutton>
    <Vbutton color="#000" variant="" @click="reload('Home')" >Home Site</Vbutton>
</template>

<script>
    export default {
        methods: {
            login() {
                localStorage.setItem('token', '123');
                localStorage.setItem('user_id', '1');
                this.$router.push({name: 'dashboard'});
                reload()
            },

            reload(route = null) {

                if(route != null) {
                    this.$router.push({name: route});
                }
                window.location.reload()
            }
        }        
    }
</script>