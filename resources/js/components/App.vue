<template>
    <div>
        <div style="margin-bottom: 10px;">
            <input type="text" name="buscar" id="buscar" style="border-width: 1px;">
        </div>
        <table border="1">
            <thead>
                <th v-for="title in titleTable">{{ title }}</th>
            </thead>
            <tbody>
                <tr style="text-align: center;" v-for="user in users">
                    <td v-for="u in user"> {{ u }} </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { ref } from "vue"
const props = defineProps({ users: Object })
const propsArray = props.users.map(t => Object.getOwnPropertyNames(t))
const titleTable = ref(propsArray[0])
</script>