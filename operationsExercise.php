<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
         crossorigin="anonymous"
      />

</head>
<body>

  <form method="post" action="">
    <div class="form-group mb-3">
      <label for="my-select">Text</label>
      <select  class="custom-select" name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="++">++</option>
        <option value="--">--</option>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">num a</label>
      <input type="number"
      class="form-control w-25"  name="a" >
    </div>
    <div class="mb-3">
      <label class="form-label">num b</label>
      <input type="number"
      class="form-control w-25" name="b" >
    </div>
    <button type="submit" class="btn btn-primary">calc</button>
  </form>
    
  <?php
  include("operation.php");
  if (isset($_POST)) {
    $a = intval($_POST["a"]);
    $b = intval($_POST["b"]);
    $operation = $_POST["operation"];
    operate($operation);
  }
  ?>

  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
  crossorigin="anonymous"
></script>
</body>
</html>
