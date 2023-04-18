<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>tasks</title>
</head>
<style>


</style>
<body style="padding: 20px;">
<form method="post" action="create/task"> 

    <div class="input-group">
  <span class="input-group-text">Description Task</span>
  <textarea name="description" class="form-control" aria-label="With textarea"></textarea>
</div>
<div class="d-grid gap-2">
  <button class="btn btn-primary mt-2" type="submit">Save</button>

</div>
</form>
  <table class="table caption-top">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($tasks as $task): ?>
      <tr>
        <th scope="row"><?php echo $task->id; ?></th>
        <td  ><?php echo $task->description; ?></td>
        <td>
          <input type="checkbox" name="completed[]" value="<?php echo $task->id; ?>" <?php echo $task->completed ? 'checked' : ''; ?>>
        </td>
        <td class="w-fit">
          <button  class="btn btn-warning" data-id="<?php echo $task->id; ?>">Edit</button>
          <button  class="btn btn-danger"  >Delete</button>
        </td>
      </tr>
    <?php endforeach;?>
  </tbody>
</table>

</body>
</html>
