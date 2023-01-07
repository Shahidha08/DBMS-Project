<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>IT Training Group</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('connect.php') ?>
  <div class = "panel text-center">
    <div class="head panel-item">
      <h1>Insert trainee details:</h1>
    </div>
    <form action="connect.php" method="POST">
      <div class="panel-item">
        Trainee name:
        <input type="text" name = "tname"/><br/>
      </div>
      <div class = "panel-item">
      <label for="cname">Choose a course:</label>

      <select id="cname" class="form-select" name='cname'>
            <option disabled>Select a course</option>
<?php
                    $sql = "select * from course";
                    $result = ($conn->query($sql));
                    $row = [];
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_all(MYSQLI_ASSOC);
                    }
                    if (!empty($row))
                        foreach ($row as $rows) {
                    ?>
                      <option value="<?php echo $rows['cou_name']; ?>"><?php echo $rows['cou_name']; ?></option>
                    <?php }
                    mysqli_close($conn);
                    ?>
        </select><br/>
</div>
      <div class = "panel-item">
        <label for="email">Email : </label>
        <input type="text" name = "email"/>
      </div>
      <div class = "panel-item">
        <label for="">Contact: </label>
        <input type="text" name = "contact"/>
      </div>
      <div class="last panel-item">
        <button type="submit" name="tinsert">Submit</button>
      </div>
    </form>
    <div class="head panel-item">
      <h1>Delete trainee:</h1>
    </div>
    <form action="delete.php" method="GET">
    <div class="panel-item">
        <label for="name">Enter trainee name: </label>
        <input type="text" name = "delete"/><br/>
      </div>
      <div class="last panel-item">
        <button type="submit">Submit</button>
      </div>
    </form>
    <div class="head panel-item">
    <form action="view.php" method="GET">
    <div class="panel-item">
      <div class="last panel-item">
        <button type="view">View trainee details</button>
      </div>
    </form>
  </div>
</body>
</html>