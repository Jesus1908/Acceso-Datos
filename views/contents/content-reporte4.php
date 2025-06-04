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
        <th>Propietario</th>
        <th>ID Mascota</th>
        <th>Nombre Mascota</th>
        <th>Tipo</th>
      </tr>
    </thead>

    <?php foreach ($listaPropietario as $propietario): ?>
      <tr>
        <td><?= $propietario['idpropietario'] ?></td>
        <td><?= $propietario['propietario'] ?></td>
        <td><?= $propietario['idmascota'] ?></td>
        <td><?= $propietario['nombre_mascota'] ?></td>
        <td><?= $propietario['tipo'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>
</body>
</html>