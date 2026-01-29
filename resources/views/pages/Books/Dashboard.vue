<template>
    <div>
        <h1>Dashboard</h1>
        <p>Панель пользователя.</p>

        <Links></Links>

        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <div class="block"></div>
        <button @click="refreshData">Обновить данные</button>

    </div>
</template>

<script setup>
import Links from "@/components/Links.vue";
import { router } from '@inertiajs/vue3';

defineProps({
    items: Array
});

const refreshData = () => {
    router.visit('/dashboard', {
        preserveScroll: true,
        preserveState: true
    });

};

</script>
<style>
.block{
    height: 400px;
    width: 400px;
    border: 2px solid #333333;
    border-radius: 4px;
    margin-bottom: 10px;
}
</style>
