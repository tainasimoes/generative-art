<svg
  width="100%"
  height="100%"
>
  <?php for($i = 1; $i <= 12; $i++){ ?>
    <circle 
      cx="<?php echo (50 - (3 * $i)) ?>%"
      cy="<?php echo (50 - (3 * $i)) ?>%"
      r="<?php echo (120 - (10 * $i)) ?>" 
      fill="#000"
      stroke="#ff0"
    />
  <?php } ?>
</svg>
