<template>
    <div class="text-center">

        <img alt="Vue logo" src="https://raw.githubusercontent.com/vitejs/vite/main/packages/create-app/template-vue/src/assets/logo.png" />

        <h1>{{ state.message }}</h1>

        <p>
            <a href="https://v3.vuejs.org/" target="_blank">Vue 3 Documentation</a>
        </p>

        <button @click="state.count++">count is: {{ state.count }}</button>
        <p>
            Edit
            <code>resources/js/components/EaseComponent.vue</code> to test hot module replacement.
        </p>
    </div>
</template>

<script setup>
import { reactive } from 'vue'

const state = reactive({
    message: 'Hello Vue 3',
    count: 0
})
</script>

<style scoped>
img {
    display: unset;
}

.text-center {
    text-align: center;
}
</style>
