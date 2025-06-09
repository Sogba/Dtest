<?php
require_once "./src/classes/databaseBound.php";

function room(Room $room) {
  if(true): ?>
    <div class="room" data-room-id="<?php echo $room->id; ?>">
      <p hidden><?php echo $room->id; ?></p>
      <h1><?php echo $room->name; ?></h1>
      <p><?php echo $room->description; ?></p>
      <p><?php echo $room->availability ? 'available' : 'unavailable'; ?></p>
      <button class="edit-room-btn">Edit</button>
    </div>
    <div class="room-editing">
      <form action="" method="post">
        <input type="hidden" name="roomEdit" value="koko">
        <label for="name">Room name</label>
        <input type="text" name="name" id="name" value="<?php echo $room->name; ?>">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="<?php echo $room->description; ?>">
        <label for="availability">Availability</label>
        <input type="checkbox" name="availability" id="availability" <?php if($room->availability){echo "checked";} ?>>
        <button type="submit">Edit</button>
      </form>
    </div>
  <?php
  endif;
}