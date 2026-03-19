<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="/assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <h1 class="title">To Do List</h1>

    <div class="bt_add_task">
        Nova Tarefa
        <a href="/create" class="icon" data-original-title="Edit">
            <img class="icon_size" src="/assets/images/create.png" />
        </a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th style="width: 400px">Titulo</th>
                <th>Descrição</th>
                <th style="width: 150px">Entrega</th>
                <th style="width: 200px">Status</th>
                <th class="acoes">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a href="/edit/" class="icon" data-original-title="Edit">
                        <img class="icon_size" src="/assets/images/view.png" />
                    </a>
                    <a href="/edit/" class="icon" data-original-title="Edit">
                        <img class="icon_size" src="/assets/images/edit.png" />
                    </a>
                    <a href="/edit/" class="icon" data-original-title="Edit">
                        <img class="icon_size" src="/assets/images/delete.png" />
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>