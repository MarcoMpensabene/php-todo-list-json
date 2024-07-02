<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="app">
        <div id="todo-container">

            <div id="header">
                <h1>To Do List</h1>
            </div>

            <form action="./server/add.php" method="GET">
                <label for="addTask">Add your tasks</label>
                <input type="text" class="input-item" name="addTask" id="addTask" v-model="newTask" />
                <!-- <label for="addDate">Add DATE</label>
                <input type="text" class="input-item" name="addTask" id="addTask" v-model="newDate" /> -->

                <button type="submit">Add</button>
            </form>


            <h2>Task List</h2>
            <ul id="list-container" v-for="element in toDoList" :key="element.id">
                <li>In data {{element.dueDate}} : {{element.task}}</li>
            </ul>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>