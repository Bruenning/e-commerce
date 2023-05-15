<!--component input using vuetify e validate-->
<template>
    <v-text-field :type="type" :prepend-icon="`mdi-${icon}`" :color="color" :label="Nome" :rules="rules"></v-text-field>
</template>

<script>
export default {
    emits: ['update:rules'],
    props: {
        icon: {
            type: String,
            default: 'account'
        },
        color: {
            type: String,
            default: 'primary'
        },
        Nome: {
            type: String,
            default: 'Nome'
        },
        rules: {
            type: Array,
            default: () => []
        },
        type: {
            type: String,
            default: 'text'
        },
    },
    watch: {
        rules: {
            handler() {
                this.$emit('update:rules', this.rules)
            },
            deep: true
        }
    },
    methods: {
    }
}
</script>