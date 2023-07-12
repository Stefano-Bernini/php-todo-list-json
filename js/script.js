const { createApp } = Vue;

createApp({
    data() {
        return {
            todoItem: '',
            todoList: [],
            apiUrl: 'server.php'
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
    },
    methods: {
        updateList() {
            const data = {
                todoItem: this.todoItem
            }

            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.todoItem = '';
                this.todoList = response.data;
            });
        }
    },
}).mount('#app');