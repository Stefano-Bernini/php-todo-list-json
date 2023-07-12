<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="stylesheet" href="./css/style.css"/>
        <title>PHP ToDo List JSON</title>
    </head>
    <body>
        <div class="layout">
            <div id="app">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">To do List</h1>
                            <ul class="list-group list-group-flush border border-1 rounded">
                                <li v-for="(item, index) in todoList" :key="index" class="list-group-item"> {{ item.text }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="text" @keyup.enter="updateList" v-model="todoItem" placeholder="Aggiungi Task" class="form-control">
                                <button type="button" @click="updateList" class="btn btn-primary"  id="button-add">Aggiungi Task</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
        <script text="text/javascript" src="./js/script.js"></script>
    </body>
</html>