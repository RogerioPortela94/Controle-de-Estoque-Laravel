<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
       
        <title>Controle de estoque</title>
    </head>
    <body>
        <h1 class="text-center">Listagem de produtos</h1>
        <table class="table table-striped">
            <?php foreach ($produtos as $p): ?>
            <tr>
                <td><?=$p->nome?></td>
                <td><?=$p->valor?></td>
                <td><?=$p->descricao?></td>
                <td><?=$p->quantidade?></td>
                <td>
                    <a href="/produtos/mostra?id= <?= $p->id?>">
                        <span class="bi bi-search" ></span>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
        
    </body>
</html>