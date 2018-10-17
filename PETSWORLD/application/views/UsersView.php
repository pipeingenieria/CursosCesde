<html>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
    </tr>
  </thead>
  <tbody>
      <?php
    foreach($usuarios as $usuario){
        echo"
    <tr> <td>{$usuario->nombre}</td>
    <td>{$usuario->nombre}</td></tr>";
    }
    ?>
  </tbody>
</table>
    </html>