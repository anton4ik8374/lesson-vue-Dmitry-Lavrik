<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue.js</title>
    <link rel="icon" type="image/png" sizes="32x32" href="https://ru.vuejs.org//images/icons/favicon-32x32.png">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="wrapper">
        <div class="sample">
            <input type="text" v-model:value="name">
            <button class="btn btn-primary" v-on:click.prevent="toggleH2()">
                GO
            </button>
            <hr>
            <h2 v-text="name" v-show="viseble"></h2>
        </div>
    </div>
</div>
</body>
<script src="/vue.js"></script>
</html>