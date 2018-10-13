<svg
  width="100%"
  height="100%"
>
  <?php for($i = 1; $i <= 12; $i++){ ?>
    <circle 
      cx="50%"
      cy="50%"
      r="<?php echo (120 - (10 * $i)) ?>" 
      fill="#000"
      stroke="#f0f"
    />
  <?php } ?>
</svg>
