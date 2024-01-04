<template>
    <v-btn :color="color" :variant="variant" :icon="icon">
        <slot></slot>
    </v-btn>
</template>

<script>
export default {
    props: {
        color: {
            type: String,
            default: "primary",
        },
        variant: {
            type: String,
            default: "outlined",
        },
        icon: {
            type: Boolean,
            default: false,
        },
    },
}
</script>
