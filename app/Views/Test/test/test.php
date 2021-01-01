<		<?php if (isset($validation)): ?>
    <div class="col-12">
      <div class="alert alert-danger" role="alert">
        <?= $validation->listErrors(); ?>
      </div>
    </div>
    <?php endif; ?>

<?= form_open(); ?>
<div class="form-group">
  <label> Address </label>
  <input type="text" name="address" class="form-control" />

</div>
<div class="form-group">
  <label> days </label>
  <input type="text" name="days" class="form-control" />

</div>
<div class="form-group">
  <label> time </label>
  <input type="text" name="time" class="form-control" />

</div>

<div class="form-group">

  <input type="submit" name="email" class="form-control" />

</div>
<?= form_close(); ?>

<div class="col-12 col-sm-12">
    <div class="form-group">
    <label for="address">Start Time</label>
  <select class="form-control" id="day">
    <option value=" "> 8:00 AM</option>
    <option value=" "> 9:00 AM</option>
    <option value=" "> 10:00 AM</option>
    <option value=" "> 11:00 AM</option>
    <option value=" "> 12:00 AM</option>
    <option value=" "> 01:00 PM</option>
    <option value=" "> 02:00 PM</option>
    <option value=" "> 03:00 PM</option>
    <option value=" "> 04:00 PM</option>
    <option value=" "> 05:00 PM</option>
    <option value=" "> 06:00 PM</option>
    <option value=" "> 07:00 PM</option>
  </select>
</div>
</div>
<div class="col-12 col-sm-12">
    <div class="form-group">
    <label for="address">End Time</label>
  <select class="form-control" id="day">
    <option value=" "> 8:00 AM</option>
    <option value=" "> 9:00 AM</option>
    <option value=" "> 10:00 AM</option>
    <option value=" "> 11:00 AM</option>
    <option value=" "> 12:00 AM</option>
    <option value=" "> 01:00 PM</option>
    <option value=" "> 02:00 PM</option>
    <option value=" "> 03:00 PM</option>
    <option value=" "> 04:00 PM</option>
    <option value=" "> 05:00 PM</option>
    <option value=" "> 06:00 PM</option>
    <option value=" "> 07:00 PM</option>
  </select>
</div></div>


<?php
echo "<script>
    var javascriptVar = 'success';
 </script>";


$phpVar = "<script>document.writeln(javascriptVar);</script>";
echo $phpVar;
?>
