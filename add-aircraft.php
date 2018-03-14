<form class="form-add-aircraft" action="scripts/add-aircraft.php" method="post">
  <div class="form-group">
    <label for="InputManufacturer">Manufacturer</label>
    <input class="form-control" type="text" placeholder="Insert Manufacturer" id="InputManufacturer">
  </div>
  <div class="form-group">
    <label for="InputType">Type</label>
    <input class="form-control" type="text" placeholder="Insert Type" id="InputType">
  </div>
  <div class="form-group">
    <label for="InputIcao">Aircraft ICAO</label>
    <input class="form-control" type="text" placeholder="Insert ICAO" id="InputIcao">
  </div>
  <input type="hidden" name="aktion" value="speichern">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>