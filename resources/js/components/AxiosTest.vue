<template>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" v-for="item in headers" :key="item">{{ item }}</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td v-for="item in contents" :key="item">{{ item }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        name: "AxiosTest",
        mounted() {
            axios.get('/api/test')
                .then(res => {
                    this.headers = Object.keys(res.data);
                    this.contents = Object.values(res.data);
                });
        },
        data: function () {
            return {
                headers: null,
                contents: null,
            }
        }
    }
</script>

<style scoped>

</style>
