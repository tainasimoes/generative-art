<svg
  height="100%"
  width="100%"
>
  <?php for($i = 0; $i <= 24; $i++){ ?>
    <line
      x1="10%"
      y1="50%"
      x2="90%"
      y2="50%"
      stroke="#f0f"
      transform="rotate(<?php echo (0 + (15 * $i))?>)";
      style="transform-origin: center"
    />
  <?php } ?>
</svg>