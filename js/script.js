const { createApp } = Vue

createApp({
    data() {
        return {
            toDoList: [],
            newTask: '',
            newDate: '',
        }
    },
    methods: {
        getData() {
            axios.get('./server/script.php', {
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
    },
    addItem() {
        if (this.newTask.trim() !== "") {          //&& this.newDate.trim() !== "" 
            axios.get("./server/add.php", {
                params: {
                    task: this.newTask,
                    // dueData: this.newDate
                }
            })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                })
        }
    },
    created() {
        this.getData();
    }
}).mount('#app')