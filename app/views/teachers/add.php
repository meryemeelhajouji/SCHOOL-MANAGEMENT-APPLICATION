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
  <form method="POST" class="container">
    <div class="form-group">
      <label for="exampleInputPassword1">nom teacher</label>
      <textarea name="nom" class="form-control" id="exampleInputPassword1" placeholder="nom"></textarea>
    </div>
    <label for="exampleInputPassword1">gender teacher</label>
      <textarea name="gender" class="form-control" id="exampleInputPassword1" placeholder="gender"></textarea>
    </div>
    <label for="exampleInputPassword1">subject teacher</label>
      <textarea name="subject" class="form-control" id="exampleInputPassword1" placeholder="subject"></textarea>
    </div>
    <label for="exampleInputPassword1">phone teacher</label>
      <textarea name="phone" class="form-control" id="exampleInputPassword1" placeholder="phone"></textarea>
    </div>
   
    <button name="submit" type="submit" class="btn btn-primary">Ajouter</button>
  </form>
</body>
</html>