<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=reporteComentario.xls');
?>
<table width="100%" border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>REMITENTE</th>
      <th>CORREO</th>
      <th>ASUNTO</th>
      <th>MENSAJE</th>
      <th>USUARIO</th>
      <th>FECHA</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <td> {{$dato->id}}    </td>
      <td> {{$dato->remitente}}    </td>
      <td> {{$dato->correo}} </td>
      <td> {{$dato->asunto}}  </td>
      <td> {{$dato->mensaje}}</td>
      <td> {{$dato->name}}  </td>
      <td> {{$dato->created_at}} </td>
    </tr>
    @endforeach
  </tbody>
</table>
