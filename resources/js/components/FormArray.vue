<template>
    <Vform class="d-flex justify-content-center">
        <Vrow class="v-col-6">
            <Vcol v-for="(item, index) in items" :key="index" cols="12">
                <slot :item="item">
                    <Vinput
                        v-if="item.type != 'textarea'"
                        :type="item.type"
                        :label="item.label"
                        :icon="item.icon"
                    />
                    <Vtextarea v-else :label="item.label" :icon="item.icon" />
                </slot>
            </Vcol>
        </Vrow>
    </Vform>
</template>

<script>
export default {
    props: {
        items: {
            type: Array,
            required: true,
            default: () => [
                {
                    label: "Name",
                    type: "text",
                },
            ],
        },
    },
}
</script>
