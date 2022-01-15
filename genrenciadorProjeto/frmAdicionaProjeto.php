<div class="ui longer modal" id="modalAdicionarProjeto">
  <div class="header">Adicionar Projeto</div>
  <div class="scrolling content">
    <form id="frmAdicionarProjeto">
      <div class="ui form">
          <div class="fields">
              <div class="six wide field">
                  <label>Nome do projeto</label>
                  <input type="text" placeholder="Ex: Take on me Tabs" name="nome_projeto" id="nome_projeto">
              </div>
          </div>
      </div>
    </form>
  </div>
  <div class="actions">
    <div class="ui button"  onclick='gerenciadorScreen();' >Voltar</div>
    <div class="ui button"  onclick='adicionarProjeto();' > <i class="plus icon"></i> Adicionar</div>
  </div>
</div>

<div class="ui mini modal" id="modalSucesso">
  <div class="header">Pronto!</div>
  <div class="content">
    <p>Projeto Adicionado com sucesso</p>
  </div>
  <div class="actions">
    <div class="ui button"  onclick='gerenciadorScreen();' >OK</div>
  </div>
</div>