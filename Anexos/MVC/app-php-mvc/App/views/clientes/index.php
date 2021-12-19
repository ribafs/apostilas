    <!-- Busca form -->
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <form action="<?=URL?>clientes/search" method="get" >
            <div class="pull-right topo" style="padding-left: 0;">
                <span class="pull-right">  
                <label class="control-label" for="palavra" style="padding-right: 5px;">
                    <input type="text" value="" placeholder="nome ou parte" class="form-control" name="keyword">
                </label>
                </span>          
                <input type="submit" name="submit_search_cliente" value="Buscar" class="btn btn-primary"/> 
           </div>
           </form>
        </div>
    </div>
    <br>

    <?php
    // Testar se vem de ClienteController/add
    if(isset($clientes)){
    ?>

    <!-- Add form -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
        <form action="<?=URL?>clientes/add?>" method="POST">                                
                <input type="text" name="nome" value="" required placeholder="Nome"/>
                <input type="text" name="idade" value="" required placeholder="Idade"/>
                <input type="submit" name="submit_add_cliente" value="Adicionar" class="btn btn-primary"/>
            </form>
        </div>
   </div>

    <?php 
    // Testar se vem de ClienteController/edit
    }elseif(isset($cliente)){
        $action = 'edit';
        $id = isset($cliente->id) ? $cliente->id : null;
        $nome = isset($cliente->nome) ? $cliente->nome : null;
        $idade = isset($cliente->idade) ? $cliente->idade : null;
    ?>

    <!-- Edit form -->
    <br><br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <form action="<?=URL?>clientes/update?>" method="POST">                                
                <input type="text" name="nome" value="<?=$nome?>" required placeholder="Nome"/>
                <input type="text" name="idade" value="<?=$idade?>" required placeholder="Idade"/>
                <input type="hidden" name="id" value="<?=$id?>" />
                <input type="submit" name="submit_update_cliente" value="Atualizar" class="btn btn-primary"/>
            </form>
        </div>
    </div>

    <?php 
    }

    if(isset($clientes)){?>

    <!-- Listagem index -->
    <div class="text-center">
        <div class="row">
            <!-- Form de busca-->
	    </div>

        <br><br>
        <h3>Lista de clientes</h3>
        <table class="table table-striped table-sm table-bordered table-hover"> 
            <thead class="bg-dark text-white">
            <tr>
                <td><b>Id</td>
                <td><b>Nome</td>
                <td><b>Idade</td>
                <td colspan="2"><b>Ação</td>
            </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($clientes as $cliente) { ?>
                <tr class="table-success">
                    <td><?php if (isset($cliente->id)) echo $cliente->id; ?></td>
                    <td><?php if (isset($cliente->nome)) echo $cliente->nome; ?></td>
                    <td><?php if (isset($cliente->idade)) echo $cliente->idade; ?></td>
                    <td><a href="<?=URL . 'clientes/edit/' . $cliente->id?>">Editar</a></td>
                    <td><a href="<?=URL . 'clientes/delete/' . $cliente->id?>">Excluir</a></td>
                </tr>
            <?php 
                } 
            } ?>
            </tbody>
        </table>
    </div>
</div>

