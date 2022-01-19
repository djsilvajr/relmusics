

<?php

include_once 'frmAdicionaProjeto.php';
// include_once '../controllers/pesquisaProjeto.php';

?>

<script src="js/gerenciador.js"></script>

<style>

</style>

<div class="ui fullscreen modal" id="gerenciadorModal">
  <div class="header"> <i class="folder open icon" style="margin-right:5px;"></i> Gerenciador de projetos</div>
  <div class="content">
  <table class="ui selectable table" id="tableProjetos">
    <thead>
      <tr>
        <th>Nome do Projeto</th>
        <th>Criação Data/Hora</th>
        <th>Ultima Atualização</th>
        <th>Publicado</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody id="tableProjetosTbody" >
      <!-- <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr> -->
    </tbody>
    <tfoot class="full-width">
      <tr>
        <th colspan="5">
          <div class="ui right floated small primary labeled icon button" onclick='formAdicionarProjeto();'>
          <i class="plus icon"></i> Adicionar Projeto
          </div>
        </th>
      </tr>
    </tfoot>
  </table>
  </div>
  <div class="actions">
    <div class="ui button"  onclick='fecharGerenciador();' >  Voltar</div> 
  </div>
</div>
