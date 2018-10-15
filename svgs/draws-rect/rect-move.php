<svg
  viewBox="0 0 400 400"
  style="padding: 20px;"
>
  <?php for($i = 1; $i <= 13; $i++){ ?>
    <rect 
      x="<?php echo ((12.5 * $i)); ?>"
      y="<?php echo ((12.5 * $i)); ?>"
      width="<?php echo (400 - (25 * $i)); ?>"
      height="<?php echo (400 - (25 * $i)); ?>"
      stroke="#ff0"
      fill="#000"
      transform-origin="center"
      transform="rotate(<?php echo (10 * $i)?>)"
    />
  <?php }?>
</svg>