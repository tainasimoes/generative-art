<svg viewBox="0 0 300 300">
  <?php for($i = 1; $i <= 24; $i++){ ?>
    <line
      x1="10%"
      y1="50%"
      x2="90%"
      y2="50%"
      stroke="#ff0"
      transform="rotate(<?php echo 15 * $i ?>) translate(<?php echo 15 * $i ?>, 0)";
      transform-origin="center"
    />
  <?php } ?>
</svg>