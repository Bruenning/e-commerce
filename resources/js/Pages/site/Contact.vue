<template>
    <FormArray v-model="aaaa" :items="items"></FormArray>
</template>

<script>
export default {
    data() {
        return {
            items: [
                {
                    label: "Name",
                    type: "text",
                    icon: "account",
                },
                {
                    label: "Email",
                    type: "email",
                    icon: "email",
                },
                {
                    label: "Phone",
                    type: "text",
                    icon: "phone",
                },
                {
                    label: "Message",
                    type: "textarea",
                    icon: "message",
                },
            ],
        }
    },
}
</script>
