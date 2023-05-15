<template>
    <v-app>
        <router-view></router-view>
        <v-footer class="d-flex flex-column" >
            <div class="bg-teal d-flex w-100 align-center px-4">
                <strong>Minhas Redes socias</strong>

                <v-spacer></v-spacer>

                <v-btn v-for="icon in icons" :key="icon.icon" :style="`border-color:${icon.color}`"  icon :href="url[icon.name]" target="_blank" small class="mx-2">
                    <span :style="`color:${icon.color}`" class="fa" :class="icon.icon"></span>
                </v-btn>
            </div>

            <div class="px-4 py-2 text-center w-100">
                &copy;{{ new Date().getFullYear() }} — <strong>Guilherme Henrique Bruenning</strong>
            </div>
        </v-footer>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
                icons: [
                    {name: 'facebook', icon: 'fa-facebook', color: 'blue'},
                    {name: 'instagram', icon: 'fa-instagram', color: 'pink'},
                    {name: 'linkedin', icon: 'fa-linkedin', color: 'blue'},
                    {name: 'github', icon: 'fa-github', color: 'black'},
                ],
                url: {
                    'facebook': 'https://www.facebook.com/guilherme.bruenning',
                    'instagram': 'https://www.instagram.com/guilhermehbruenning/',
                    'linkedin': 'https://www.linkedin.com/in/guilherme-henrique-bruenning-2b1b3b1b0/',
                    'github': 'https://github.com/bruenning',
                }
            }
        },
    }
</script>