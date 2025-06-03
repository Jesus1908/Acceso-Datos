<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    thead th{
      background-color: aquamarine;
    }

    th, td {
      border: .5px solid black;
      padding: 5px;
    }

    td:nth-child(even) {
      background-color: gray;
    }
  </style>

  <table>
    <colgroup>
      <col style="width: 10%;">
      <col style="width: 30%;">
      <col style="width: 15%;">
      <col style="width: 15%;">
      <col style="width: 10%;">
      <col style="width: 20%;">
    </colgroup>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre mascota</th>
        <th>Tipo</th>
        <th>Color</th>
        <th>Genero</th>
        <th>Propietario</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Firulais</td>
        <td>Perro</td>
        <td>Negro</td>
        <td>Macho</td>
        <td>El Kevin</td>
      </tr>
    </tbody>
  </table>
</body>
</html>