<template>
    <v-dialog max-width="500px">
        <v-card>
            <v-card-title class="headline">{{ title }}</v-card-title>
            <v-card-text>
                <div v-html="message"></div>
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="blue darken-1" text @click="cancel">Cancelar</v-btn>
                <v-btn color="blue darken-1" text @click="confirm">Aceptar</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>

<script>
export default {
    emits: ['confirm', 'cancel'],
    props: {
        title: {
            type: String,
            default: 'Confirmación'
        },
        message: {
            type: String,
            default: '¿Está seguro de realizar esta acción?'
        }
    },
    data() {
        return {
            dialog: false
        }
    },
    methods: {
        confirm() {
            this.$emit('confirm')
        },
        cancel() {
            this.$emit('cancel')
        }
    }
}
</script>