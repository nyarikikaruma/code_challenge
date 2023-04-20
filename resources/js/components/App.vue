<template>
    
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Task name
                </th>
                <th scope="col" class="px-6 py-3">
                    Task description
                </th>
                <th scope="col" class="px-6 py-3">
                    Task owner
                </th>
                <th scope="col" class="px-6 py-3">
                    Start time
                </th>
                <th scope="col" class="px-6 py-3">
                    End time
                </th>
                <th scope="col" class="px-6 py-3">
                    Due date
                </th>
            </tr>
        </thead>
        <tbody v-for="(item, index) in items" :key="index">
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{item.task.name}}
                </th>
                <td class="px-6 py-4">
                    {{item.task.description}}
                </td>
                <td class="px-6 py-4">
                    {{item.user.name}}
                </td>
                <td class="px-6 py-4">
                    {{ item.start_time}}
                </td>
                <td class="px-6 py-4">
                    {{ item.end_time }}
                </td>
                <td class="px-6 py-4">
                    {{ item.due_date }}
                </td>
            </tr>
        </tbody>
    </table>
</div>

</template>
<script>
export default {
    data() {
        return {
            items: []
        }
    },
    mounted() {
        axios.get('http://127.0.0.1:8000/api/user_task')
            .then(response => {
                console.log(response.data);
                this.items = response.data;
            })
            .catch(error => {
                console.log(error);
            });
    }
}
</script>
<style>
    
</style>