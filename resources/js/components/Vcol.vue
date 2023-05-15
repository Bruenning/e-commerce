<template>
    <v-col :cols="cols">
        <slot></slot>
    </v-col>
</template>

<script>
    export default {
        props: {
            cols: {
                type: Number,
                default: 12
            }
        }
    }
</script>