<svg viewBox="0 0 300 300">
  <?php for($i = 0; $i <= 24; $i++){ ?>
    <line
      x1="10%"
      y1="50%"
      x2="90%"
      y2="50%"
      stroke="#f0f"
      transform="rotate(<?php echo (15 * $i) ?>)";
      transform-origin="center"
    />
  <?php } ?>
</svg>