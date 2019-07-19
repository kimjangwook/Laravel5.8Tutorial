<template>
    <div>
        <button type="submit" class="btn btn-primary" v-text="label"></button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'label'
        ]
    }
</script>

<style>
    button {
        padding: 10px 20px;
        font-weight: bold;
    }
</style>
