<template>
  <div>
  <h1>My Inertia CRUD</h1>
  <Link href="posts/create">Create new Post</Link>
  <table>
    <thead>
      <tr>
        <th v-for="header in headers" :key="header">
          {{ header }}
        </th>
      </tr>
      </thead>
      <tbody>
        
        <tr v-for="post in posts" :key="post.id">
          <td>{{ post.title }}</td>
          <td>{{ post.body }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
defineProps({
  posts: {
    type: Array,
    default: () => [],
  },
});

const headers = ["posts", "body"];
</script>