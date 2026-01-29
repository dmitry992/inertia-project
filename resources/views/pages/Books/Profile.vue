<template>
    <div>
        <h1>Profile</h1>
        <p>Страница профиля пользователя</p>

        <Links></Links>

        <div style="max-width: 400px; margin: 50px auto;">
            <h1>Форма отправки данных</h1>

            <form @submit.prevent="submitForm">
                <div style="margin-bottom: 10px;">
                    <label>Имя:</label>
                    <input type="text" v-model="form.name" placeholder="Ваше имя" />
                </div>

                <div style="margin-bottom: 10px;">
                    <label>Email:</label>
                    <input type="email" v-model="form.email" placeholder="Ваш email" />
                </div>

                <button type="submit" :disabled="form.processing">Отправить</button>
            </form>
        </div>


    </div>
</template>
<script setup>
import Links from "@/components/Links.vue";
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    name: '',
    email: '',
})

const submitForm = () => {
    form.post('/profile', {
        preserveScroll: true,
        onSuccess: () => {
            console.log('Данные отправлены!');
            form.reset('name', 'email')
        }

    })
}

</script>
