<template>
    <div class="row h-100">
        <div class="col-9 colImg h-100">
            <img :src="`/images/login${imageLogin}.png`" />
        </div>
        <div class="col-3 colForm d-flex h-100">
            <Vform class="w-100">
                <Vinput label="Email" v-model="email"></Vinput>
                <Vinput label="Password" v-model="password" type="password" icon="form-textbox-password"></Vinput>
            </Vform>

            <br/>
            <Vbutton to="/" @click="push('home')">Home</Vbutton>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                login: {
                    email: '',
                    password: ''
                },
                rules: {
                    email: [
                        v => !!v || 'Email is required',
                        v => /.+@.+\..+/.test(v) || 'Email must be valid'
                    ],
                    password: [
                        v => !!v || 'Password is required',
                    ]
                },
                imageLogin: 1
            }
        },
        mounted() {
            imageLogin = Math.floor(Math.random() * 3) + 1;
        },
        methods: {
            login() {
                localStorage.setItem('token', '123');
                localStorage.setItem('user_id', '1');
                this.$router.push({name: 'dashboard'});
                reload()
            },

            reload() {
                window.location.reload()
            },

            push(route) {
                this.$router.push({name: route})
            }
        }        
    }
</script>