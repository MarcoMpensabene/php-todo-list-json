const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
            newTask: '',
        }
    },
    methods: {
        getData() {
            axios.get('./script/script.php', {
                params: {

                }
            })
                .then((response) => {
                    console.log(response);
                    this.toDoList = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                });
        },
        addTask() {
            if (this.newTask.trim() === '') return;
            axios.post('./script/script.php', { task: this.newTask })
                .then(response => {
                    if (response.data.success) {
                        this.toDoList.push(response.data.task);
                        this.newTask = '';
                    }
                })
                .catch(error => console.error(error));
        }
    },
    created() {
        this.getData();
    }
}).mount('#app')