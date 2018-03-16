<?php include "view/includes/header.php"; ?>

    <div class="col-sm-12 col-md-12">
        <div class="col-sm-12 col-md-4">
            <div class="box-button">
                <!-- create modal active -->
                <a data-toggle="modal" data-target=".bs-create-modal-lg">Adicionar contato</a>
                <div id="create-modal" class="modal fade bs-create-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <!-- Create Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Adicionar Contato</h4>
                            </div>
                            <!-- Create Modal Body -->
                            <div class="modal-body">
                                <form class="form-horizontal" id="create-form" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="name" placeholder="Nome"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="last_name" placeholder="Sobrenome"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control phone_with_ddd" id="phone_number" placeholder="Telefone"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="email" placeholder="E-mail"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control cpf" id="cpf" placeholder="CPF"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control date" id="birth_date" placeholder="Aniversário"/>
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
                                    <button type="submit" class="btn btn-default">Salvar</button>
                                </form>
                            </div>
                            <!-- Create Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="edit-modal" class="modal fade bs-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <!-- Create Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Editar Contato</h4>
                            </div>
                            <!-- Create Modal Body -->
                            <div class="modal-body">
                                <form class="form-horizontal" id="edit-form" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="hidden" class="form-control" id="edit_id"/>
                                            <input type="text" class="form-control" id="edit_name" placeholder="Nome"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="edit_last_name" placeholder="Sobrenome"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control phone_with_ddd" id="edit_phone_number" placeholder="Telefone"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" id="edit_email" placeholder="E-mail"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control cpf" id="edit_cpf" placeholder="CPF"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control date" id="edit_birth_date" placeholder="Aniversário"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="edit_street" placeholder="Rua"/>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="edit_number" placeholder="Número"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="edit_neighborhood" placeholder="Bairro"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="edit_city" placeholder="Cidade"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="edit_state" placeholder="Estado"/>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="edit_country" placeholder="País"/>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default">Salvar</button>
                                </form>
                            </div>
                            <!-- Create Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="box-button">
                <p id="contacts-counter"></p>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="box-button">
                <p id="clock"></p>
            </div>
        </div>
    </div>

    <div class="col-sm-12 col-md-12">
        <div class="col-sm-12 col-md-12 main">
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
                    <tbody id="contact-body">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include "view/includes/footer.php";