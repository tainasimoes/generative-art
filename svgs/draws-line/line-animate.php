<svg
  height="100%"
  width="100%"
>
  <?php for($i = 1; $i <= 24; $i++){ ?>
    <line
      x1="10%"
      y1="50%"
      x2="90%"
      y2="50%"
      stroke="#0ff"
      transform="rotate(0)";
      style="transform-origin: center"
      id="line2<?php echo $i ?>"
    />
    <animateTransform
      xlink:href="#line2<?php echo $i ?>"
      attributeName="transform"
      type="rotate"
      from="0"
      to="<?php echo (0 + (15 * $i))?>" 
      dur="5s"
      begin="0s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (0 + (15 * $i))?>; 0; 0; <?php echo (0 + (15 * $i))?>"
    />
  <?php } ?>
</svg>

