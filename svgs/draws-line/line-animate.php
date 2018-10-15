<svg viewBox="0 0 300 300">
  <?php for($i = 1; $i <= 24; $i++){ ?>
    <line
      x1="10%"
      y1="50%"
      x2="90%"
      y2="50%"
      stroke="#0ff"
      transform="rotate(0)";
      transform-origin="center"
      id="line2<?php echo $i ?>"
    />
    <animateTransform
      xlink:href="#line2<?php echo $i ?>"
      attributeName="transform"
      type="rotate"
      dur="5s"
      begin="0s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (15 * $i) ?>; 0; 0; <?php echo (15 * $i) ?>"
    />
  <?php } ?>
</svg>

