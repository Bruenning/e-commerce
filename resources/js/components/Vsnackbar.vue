<template>
    <v-snackbar :color="color" :timeout="timeout" location="top right">
        {{ message }}
    </v-snackbar>
</template>
  
<script>
export default {
    props: {
        message: {
            type: String,
            default: 'Erro de validação'
        },
        color: {
            type: String,
            default: 'error'
        },
        timeout: {
            type: Number,
            default: 3000
        }
    },
    methods: {
        open(message, color, timeout) {
            this.message = message
            this.color = color
            this.timeout = timeout
            this.$refs.snackbar.open()
        },
    }
}
</script>