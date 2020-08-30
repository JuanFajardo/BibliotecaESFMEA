<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=reporteVista.xls');
?>
<table width="100%" border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>IP</th>
      <th>NAVEGADOR</th>
      <th>USUARIOS</th>
      <th>TITULO</th>
      <th>TIPO</th>
      <th>FECHA</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <td> {{$dato->id}}    </td>
      <td> {{$dato->ip}}    </td>
      <td> {{$dato->navegador}} </td>
      <td> {{$dato->name}}  </td>
      <td> {{$dato->titulo}}</td>
      <td> {{$dato->tipo}}  </td>
      <td> {{$dato->fecha}} </td>
    </tr>
    @endforeach
  </tbody>
</table>
