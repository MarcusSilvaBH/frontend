<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Cadastrar atendente</h4>
                <div class="row">
                    <form class="form-horizontal" method="post" action="">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Preencha os dados abaixo</legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="atendente">Atendente</label>
                                <div class="col-md-5">
                                    <input id="atendente" name="atendente" type="text" placeholder="Digite o nome do atendente" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nascimento">Nascimento</label>
                                <div class="col-md-5">
                                    <input id="nascimento" name="nascimento" type="date" min="1998-01-01" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="telefone">Telefone</label>
                                <div class="col-md-5">
                                    <input id="telefone" name="telefone" type="text" placeholder="Digite o telefone" class="form-control input-md" required="" maxlength="14" onkeypress="mascaraTelefone(this)">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>
                                <div class="col-md-5">
                                    <input id="email" name="email" type="email" placeholder="Digite o email" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="endereco">Endereço</label>
                                <div class="col-md-5">
                                    <input id="endereco" name="endereco" type="text" placeholder="Digite o endereço" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="uf">Estado</label>
                                <div class="col-md-5">
                                    <select id="uf" name="uf" class="form-control">
                                        <option value="1">Option one</option>
                                        <option value="2">Option two</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cidade">Cidade</label>
                                <div class="col-md-5">
                                    <select id="cidade" name="cidade" class="form-control">
                                        <option value="1">Option one</option>
                                        <option value="2">Option two</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="observacoes">Observações</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="observacoes" name="observacoes"></textarea>
                                </div>
                            </div>
                            <!-- Button (Double) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="salvar"></label>
                                <div class="col-md-8">
                                    <input type="submit" id="salvar" name="salvar" class="btn btn-info" value="Salvar">
                                    <input type="reset" id="limpar" name="limpar" class="btn btn-danger" value="Limpar">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
