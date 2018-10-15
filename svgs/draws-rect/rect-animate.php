<svg
  viewBox="0 0 400 400"
  style="padding: 20px"
>
  <?php for($i = 1; $i <= 13; $i++){ ?>
    <rect
      id="rect<?php echo $i ?>"
      x="<?php echo ((12.5 * $i)); ?>"
      y="<?php echo ((12.5 * $i)); ?>"
      width="<?php echo (400 - (25 * $i)); ?>"
      height="<?php echo (400 - (25 * $i)); ?>"
      stroke="#0ff"
      fill="#000"
      transform="rotate(<?php echo (10 * $i)?>)"
      transform-origin="center"
    />
    <animateTransform 
      xlink:href="#rect<?php echo $i ?>"
      attributeName="transform"
      type="rotate"
      from="0"
      to="<?php echo (10 * $i)?>" 
      dur="15s"
      begin="0s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (-10 * $i)?>; <?php echo (10 * $i)?>; <?php echo (-10 * $i)?>"
    />
  <?php }?>

</svg>