

<?php

include_once 'frmAdicionaProjeto.php';

?>

<script src="js/gerenciador.js"></script>


<div class="ui fullscreen modal" id="gerenciadorModal">
  <div class="header"> <i class="folder open icon" style="margin-right:5px;"></i> Gerenciador de projetos</div>
  <div class="content">
  <table class="ui compact celled definition table">
    <thead>
      <tr>
        <th></th>
        <th>Nome do Projeto</th>
        <th>Criação Data/Hora</th>
        <th>Ultima Atualização</th>
        <th>Publicado</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="collapsing">
          <div class="ui fitted slider checkbox">
            <input type="checkbox"> <label></label>
          </div>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
    <tfoot class="full-width">
      <tr>
        <th></th>
        <th colspan="4">
          <div class="ui right floated small primary labeled icon button" onclick='formAdicionarProjeto();'>
          <i class="plus icon"></i> Adicionar Projeto
          </div>
          <div class="ui small button"  onclick='desabilitarProjeto();'> 
          <i class="x icon"></i> Desabilitar
          </div>
        </th>
      </tr>
    </tfoot>
  </table>
  </div>
  <div class="actions">
    <div class="ui button"  onclick='fecharGerenciador();' >Voltar</div>
  </div>
</div>
