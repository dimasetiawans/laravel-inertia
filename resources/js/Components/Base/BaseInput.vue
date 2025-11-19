<script setup>

defineProps({
    id: String,
    label: String,
    type: {
        type: String,
        default: "text",
    },
});

const modelValue = defineModel();
</script>

<template>
    <div class="form-floating mb-3">
        <input
            :id="id"
            :type="type"
            class="form-control"
            v-model="modelValue"
            v-bind="$attrs"
        />
         <label :for="id"> {{ label }}</label>
    </div>
</template>
