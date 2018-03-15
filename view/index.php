<?php include "includes/header.php"; ?>

    <div class="col-sm-12 col-md-12">
        <div class="col-sm-12 col-md-4">
            <div class="box-button">
                <!-- Large modal -->
                <a data-toggle="modal" data-target=".bs-example-modal-lg">ADICIONAR CONTATO</a>

                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Adicionar Contato</h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form class="form-horizontal" id="create-form" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" placeholder="Nome"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="lastname" placeholder="Sobrenome"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="phone" placeholder="Telefone"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="email" placeholder="E-mail"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="cpf" placeholder="CPF"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="birth_date" placeholder="Aniversário"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="street" placeholder="Rua"/>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="number" placeholder="Número"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="neighborhood" placeholder="Bairro"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="city" placeholder="Cidade"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="state" placeholder="Estado"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="country" placeholder="País"/>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary">Salvar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="box-button">
                <a href="rest/contact/list">RELATÓRIO DE CONTATOS</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="box-button">

            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="col-sm-12 col-md-12 main">
            <div class="row">
                <div class="col-lg-12">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar contato ...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscar</button>
                        </span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Cleverson</td>
                        <td>(41) 99692-7387</td>
                        <td>cleverson@gmail.com</td>
                        <td><a data-toggle="modal" data-target=".bs-example-modal-lg">editar</a> | <a href="#">excluir</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Julio</td>
                        <td>(41) 94552-7535</td>
                        <td>julio@gmail.com</td>
                        <td><a data-toggle="modal" data-target=".bs-example-modal-lg">editar</a> | <a href="#">excluir</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include "includes/footer.php";