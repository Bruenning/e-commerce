<template>
    <v-footer class="d-flex flex-column py-0" v-if="$route.name != 'login'">
        <div class="bg-teal d-flex w-100 align-center px-7 py-4">
            <strong>Sistema portfólio com tema de E-commerce</strong>

            <v-spacer></v-spacer>

            <Vbutton
                v-for="icon in icons"
                :key="icon.icon"
                :style="`border: 2px solid ${icon.color}; background:#fff;`"
                icon
                :to="url[icon.name]"
                target="_blank"
                small
                class="mx-2"
            >
                <v-icon :icon="`mdi-${icon.icon}`" :color="icon.color"></v-icon>
            </Vbutton>
        </div>
        <div class="px-4 py-4 w-100 justify-content-between d-flex">
            <div>
                &copy;{{ new Date().getFullYear() }} <br />
                <small
                    >Desenvolvido por Guilherme Henrique Bruenning V -
                    {{ $version }}</small
                ><br />
            </div>
            <div v-if="!isUrlAdmin()">
                <Vbutton
                    to="a/login"
                    small
                    class="mx-2"
                    color="#000"
                    icon="mdi-lock"
                >
                    <v-icon icon="mdi-lock"></v-icon>
                </Vbutton>
            </div>
        </div>
    </v-footer>
</template>
<script>
export default {
    data() {
        return {
            icons: [
                { name: "facebook", icon: "facebook", color: "#3b5998 " },
                { name: "instagram", icon: "instagram", color: "#C13584" },
                { name: "linkedin", icon: "linkedin", color: "#0e76a8" },
                { name: "github", icon: "github", color: "#171515" },
            ],
            url: {
                facebook: "https://www.facebook.com/guilherme.bruenning",
                instagram: "https://www.instagram.com/guilhermehbruenning/",
                linkedin:
                    "https://www.linkedin.com/in/guilherme-henrique-bruenning-2b1b3b1b0/",
                github: "https://github.com/bruenning",
            },
        }
    },
    methods: {
        isUrlAdmin() {
            return new URL(location.href).pathname.split("/").indexOf("a") >= 0
                ? true
                : false
        },
    },
}
</script>
