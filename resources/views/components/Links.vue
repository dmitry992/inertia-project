<template>
    <div class="links">
        <Link class="links-item" href="/">Home</Link>
        <Link class="links-item" href="/dashboard">Dashboard</Link>
        <Link class="links-item" href="/profile">Профиль</Link>
    </div>
</template>
<script setup>
</script>
<style>
    .links{
        margin-bottom: 10px;
    }
    .links-item{
        margin-right: 5px;
    }
    .links-item:last-child{
        margin-right: 0;
    }
</style>
