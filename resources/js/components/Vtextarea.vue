<template>
    <v-textarea :label="label" :prepend-icon="`mdi-${icon}`" :color="color" :rules="rules"></v-textarea>
</template>

<script>
export default {
    props: {
        label: {
            type: String,
            required: true,
        },
        icon: {
            type: String,
            default: ''
        },
        color: {
            type: String,
            default: ''
        },
        rules: {
            type: Array,
            default: () => []
        },
    },
}
</script>
