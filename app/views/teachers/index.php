

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title']?></title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">nom</th>
      <th scope="col">gender</th>
      <th scope="col">subject</th>
      <th scope="col">phone</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data['teachers'] as $teachers) : ?>
  <tr>
  <td class="card-title"><?php echo $teachers->	teacher_name; ?></td>
  <td class="card-title"><?php echo $teachers->teacher_gender; ?></td>
  <td class="card-title"><?php echo $teachers->teacher_subject	; ?></td>
  <td class="card-title"><?php echo $teachers->	teacher_phone; ?></td>
  <td><a href="./teachers/delete/<?=$teachers->	teacher_id; ?>">delete</a></td>
  <td><a href="./modifier/<?=$teachers->	teacher_id;  ?>">modifier</a></td>
 
</tr>
<?php endforeach; ?>
  </tbody>
</table>
<a href="./teachers/add/">
  <button class="btn btn-info" >new teacher</button>
</a>

</body>
</html>