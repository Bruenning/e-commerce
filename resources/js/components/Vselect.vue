<template>
    <v-select :items="items" item-value="id" item-title="name" :label="label" :rules="rules" @input="$emit('input', $event)" persistent-hint ></v-select>
</template>

<script>
export default {
    emits: ['input'],
    props: {
        items: {
            type: Array,
        },
        label: {
            type: String,
        },
        rules: {
            type: Array,
        }
    },
}
</script>