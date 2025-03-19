<link rel="stylesheet" href="../css/modals/modal.css">

<dialog id="modalAdd">
    <div class="modal-content">
        <button id="buttonClose" class="close-button" aria-label="Fechar">&times;</button>
        <h2>Adicionar <?= $modalEspecifico ?></h2>

        <form action="../../controllers/actions/addAction.php" method="POST" enctype="multipart/form-data">
            <div class="parent">
                <section id="coluna1">
                    <div class="div1">
                        <h3>Informações Básicas</h3>

                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Nome do evento..." required>
                        
                        <label for="nome">Categoria</label>
                        <select id="categoria" name="categoria" required>
                            <option value="">Selecione a Categoria</option>
                            <option value="Saúde">Ambientes e Saúde</option>
                            <option value="Artes">Artes</option>
                            <option value="Beleza">Beleza</option>
                            <option value="Comércio">Comércio</option>
                            <option value="Comunicação">Comunicação</option>
                            <option value="Design">Design</option>
                            <option value="Educacional">Educacional</option>
                            <option value="Eventos">Eventos</option>
                            <option value="Games">Games</option>
                            <option value="Gastronomia">Gastronomia</option>
                            <option value="Gestão">Gestão</option>
                            <option value="Hospedagem">Hospedagem</option>
                            <option value="Hospitalidade">Hospitalidade</option>
                            <option value="Idiomas">Idiomas</option>
                            <option value="Moda">Moda</option>
                            <option value="Produção de Alimentos">Produção de Alimentos</option>
                            <option value="Recursos Naturais">Recursos Naturais</option>
                            <option value="Saúde">Saúde</option>
                            <option value="Segurança">Segurança</option>
                            <option value="Social">Social</option>
                            <option value="Telecomunicações">Telecomunicações</option>
                            <option value="TI">TI</option>
                            <option value="Transporte e Armazenagem">Transporte e Armazenagem</option>
                            <option value="Turismo">Turismo</option>
                            <option value="Zeladoria">Zeladoria</option>
                        </select>
                        
                        <label for="descricao">Descrição</label>
                        <textarea id="descricao" name="descricao" placeholder="Descrição do evento..." required></textarea>
                    
                    </div>

                    <div class="div2">
                        <h3>Local</h3>
                        <div class="input-group">
                            <div class="input-item">
                                <label for="cidade">Cidade</label>
                                <input type="text" id="cidade" name="cidade" placeholder="Cidade do evento..." required>
                            </div>
                            <div class="input-item">
                                <label for="estado">Estado</label>
                                <select id="estado" name="estado" required>
                                    <option value="">Selecione o Estado</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                        
                        <label for="nome_local">Nome do Local</label>
                        <input type="text" id="nome_local" name="nome_local" placeholder="Nome do local..." required>
                        
                        <div id="divRua" class="input-group">
                            <div class="input-item">
                                <label for="rua">Rua</label>
                                <input type="text" id="rua" name="rua" placeholder="Rua do local..." required>
                            </div>

                            <div class="input-item">
                                <label for="numRua">Número</label>
                                <input type="text" id="numRua" name="numRua" placeholder="Número do local..." required>
                            </div>
                        </div>
                        
                        <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" placeholder="Bairro do local..." required>
                    </div>
    
                </section>
                
                <section id="coluna2">
                    <div class="div4">
                        <h3>Informações</h3>
                        <label for="data_inicio">Data de Início</label>
                        <input type="date" id="data_inicio" name="data_inicio" required>
    
                        <label for="data_fim">Data Final</label>
                        <input type="date" id="data_fim" name="data_fim" required>
                    </div>
    

                    <input type="hidden" id="emAndamento" name="status" value="Em Andamento">
                    <!-- <div class="div5">
                        <h3>Status</h3>
                        <div class="checkbox-group">
                            <label><input type="radio" id="emAndamento" name="status" value="emAndamento"> Em Andamento</label>
                            <label><input type="radio" id="encerrado" name="status" value="encerrado"> Encerrado</label>
                            <label><input type="radio" id="cancelado" name="status" value="cancelado"> Cancelado</label>
                        </div>
                    </div> -->
    
                    <div class="div6">
                        <h3>Visibilidade</h3>
                        <div class="checkbox-group">
                            <label><input type="radio" id="publicado" name="visibilidade" value="publicado"> Publicado</label>
                            <label><input type="radio" id="privado" name="visibilidade" value="privado"> Privado</label>
                        </div>
                    </div>

                    <div class="div3">
                        <h3>Mídia do Evento</h3>
                        <small>Apenas arquivos PNG e JPG | 1252x415 pixels é recomendado</small>

                        <label for="banner">Banner</label>
                        <input type="file" id="banner" name="banner" accept="image/png, image/jpeg" aria-label="Escolher banner">

                        <!-- <label for="fotos">Fotos <small>(Adicione até 10 fotos)</small></label>
                        <input type="file" name="fotos[]" accept="image/png, image/jpeg" multiple aria-label="Escolher fotos"> -->
                    </div>
                </section>
            </div>

            <div class="div7">
                <h3>Palestras</h3>
                <!-- palestras -->
            </div>
            
            <div id="divButton">
                <button type="submit" class="submit-button" name="salvar">Salvar</button>
            </div>
        </form>
    </div>
</dialog>