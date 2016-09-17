<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Cadastrar agendamento</h4>
                <div class="row">
                    <form class="form-horizontal">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Preencha os dados abaixo</legend>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="atendente">Atendente</label>
                                <div class="col-md-5">
                                    <select id="atendente" name="atendente" class="form-control">
                                        <option value="1">Tony</option>
                                        <option value="2">Edmilson</option>
                                        <option value="3">Júlio</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="atendente">Cliente</label>
                                <div class="col-md-5">
                                    <select id="cliente" name="cliente" class="form-control">
                                        <option value="1">Pessoa 1</option>
                                        <option value="2">Pessoa 2</option>
                                        <option value="3">Pessoa 3</option>
                                    </select>
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
                                <label class="col-md-4 control-label" for="profissao">Profissão</label>
                                <div class="col-md-5">
                                    <input id="profissao" name="profissao" type="text" placeholder="Digite a profissão" class="form-control input-md" required="">
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
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="bairro">Bairro</label>
                                <div class="col-md-5">
                                    <input id="bairro" name="bairro" type="text" placeholder="Digite o Bairro" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Multiple Checkboxes (inline) -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="servicos">Escolha os serviços</label>
                              <div class="col-md-4">
                                <label class="checkbox-inline" for="servicos-0">
                                  <input type="checkbox" name="servicos" id="servicos-0" value="1">
                                  Depilação
                                </label>
                                <label class="checkbox-inline" for="servicos-1">
                                  <input type="checkbox" name="servicos" id="servicos-1" value="2">
                                  Massagem
                                </label>
                                <label class="checkbox-inline" for="servicos-2">
                                  <input type="checkbox" name="servicos" id="servicos-2" value="3">
                                  Massagem Tântrica
                                </label>
                              </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="Data e Hora">Data e Hora</label>
                                <div class="col-md-5">
                                    <input id="Data e Hora" name="Data e Hora" type="datetime-local" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="horatermino">Término</label>
                                <div class="col-md-5">
                                    <input id="horatermino" name="horatermino" type="time" placeholder="Término do Atendimento" class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="valor">Valor</label>
                                <div class="col-md-5">
                                    <input id="valor" name="valor" type="text" placeholder="Digite o valor" class="form-control input-md" required="">
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
