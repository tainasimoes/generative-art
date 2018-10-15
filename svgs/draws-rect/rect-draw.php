<svg
  viewBox="0 0 400 400"
>
  <?php for($i = 1; $i <= 13; $i++){ ?>
    <rect 
      x="<?php echo ((12.5 * $i)); ?>"
      y="<?php echo ((12.5 * $i)); ?>"
      width="<?php echo (400 - (25 * $i)); ?>"
      height="<?php echo (400 - (25 * $i)); ?>"
      stroke="#f0f"
      fill="none"
    />
  <?php }?>
</svg>