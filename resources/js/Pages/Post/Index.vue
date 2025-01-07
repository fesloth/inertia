<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
  posts: {
    type: Array,
    default: () => [],
  },
});

const form = useForm({});

const deletePost = (id) => {
    form.delete(`posts/${id}`);
};
</script>

<template>
    <Head title="Manage Posts" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">Manage Posts</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link href="posts/create"><button class="px-4 py-2 my-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Create New Post</button></Link>
                        <table class="w-full table-auto">
                            <thead>
                              <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">Title</th>
                                <th class="px-4 py-2 border">Content</th>
                                <th class="px-4 py-2 border" width="250px">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                <tr v-for="post in posts" :key="post.id">
                                  <td class="px-4 py-2 border">{{ post.id }}</td>
                                  <td class="px-4 py-2 border">{{ post.title }}</td>
                                  <td class="px-4 py-2 border">{{ post.content }}</td>
                                  <td class="px-4 py-2 border">
                                    <Link :href="`posts/${post.id}/edit`"><button class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Edit</button></Link>
                                    <button class="px-4 py-2 ml-2 font-bold text-white bg-red-500 rounded hover:bg-red-700" @click="deletePost(post.id)">Delete</button>
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
