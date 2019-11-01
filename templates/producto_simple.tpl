{include file="top.tpl"}
{include file="nav.tpl"}

<div class="container-fluid">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Detalle</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$lista_productos item=producto}
      <tr>
        <td>{$producto->nombre}</td>
        <td scope="col"> <a href="detalle/{$producto->id_producto}">Detalle</th>
      </tr>
      {/foreach}
  </tbody>
</table>
</div>

{include file="footer.tpl"}