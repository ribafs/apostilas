    <div class="text-center">
    <br>
    <b>Você está na view: App/views/products/index.php</b>
    <br><br>

        <h3 class="text-center">Lista de produtos</h3>

        <table class="table table-striped table-sm table-bordered table-hover">
            <thead class="bg-dark text-white">
            <thead>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Preço</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $product) { ?>
                <tr>
                    <td><?=$product['id']?></td>
                    <td><?=$product['nome']?></td>
                    <td><?=$product['preco']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
