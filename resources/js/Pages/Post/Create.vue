<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { useForm, Link } from "@inertiajs/vue3";

const form = useForm({
  title: "",
  content: "",
});

const submit = () => {
  form.post("/posts");
};
</script>

<template>
    <Head title="Manage Posts" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Create Post</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link href="/posts"><button class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Back</button></Link>

                        <form @submit.prevent="submit">
                            <div class="mb-4">
                                <label
                                    for="title"
                                    class="block mb-2 text-sm font-bold text-gray-700">
                                    Title:</label>
                                <input
                                    type="text"
                                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    placeholder="Enter Title"
                                    id="title"
                                    v-model="form.title" />

                            </div>

                            <div class="mb-4">
                                <label
                                    for="content"
                                    class="block mb-2 text-sm font-bold text-gray-700">
                                    Content:</label>
                                <textarea
                                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="content"
                                    v-model="form.content"
                                    placeholder="Enter Content"></textarea>
                            </div>

                            <button type="submit" class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                Submit
                            </button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
