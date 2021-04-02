<template>
  <tr>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="flex items-center">
        <div class="flex-shrink-0 h-10 w-10">
          <img
            class="h-10 w-10 rounded-full"
            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
            alt=""
          />
        </div>
        <div class="ml-4">
          <div class="text-sm font-medium text-gray-900">
            {{ todo.user.name }}
          </div>
          <div class="text-sm text-gray-500">{{ todo.user.email }}</div>
        </div>
      </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm text-gray-900">{{ todo.description }}</div>
      <div class="text-sm text-gray-500">Feature</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <span
        v-if="todo.status_id == status.Todo"
        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
      >
        Todo
      </span>
      <span
        v-if="todo.status_id == status.Doing"
        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"
      >
        Doing
      </span>
      <span
        v-if="todo.status_id == status.Completed"
        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
      >
        Completed
      </span>
    </td>

    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
    </td>
  </tr>
</template>
<script>
export default {
  props: {
    todo: Object,
  },
  data() {
    return {
        status: {
            'Todo': 1,
            'Doing': 2,
            'Completed': 3,
        }
    };
  },
};
</script>
