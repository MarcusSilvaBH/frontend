<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page-head-line">Cadastrar usuário</h4>
                <div class="row">
                    <form class="form-horizontal" method="post" action="">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Preencha os dados abaixo</legend>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="login">Login</label>
                                <div class="col-md-5">
                                    <input id="login" name="login" type="text" placeholder="Digite o login" class="form-control input-md" required="">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="senha">Senha</label>
                                <div class="col-md-5">
                                    <input id="senha" name="senha" type="text" placeholder="Digite a senha" class="form-control input-md" required="">
                                </div>
                            </div>
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
                                <label class="col-md-4 control-label" for="perfil">Perfil</label>
                                <div class="col-md-5">
                                    <select id="perfil" name="perfil" class="form-control">
                                        <option value="1">Administrador</option>
                                        <option value="2">Atendente</option>
                                    </select>
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
