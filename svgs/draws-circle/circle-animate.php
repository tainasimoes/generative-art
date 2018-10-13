<svg
  width="100%"
  height="100%"
>
  <?php for($i = 0; $i <= 12; $i++){ ?>
    <circle 
      cx="<?php echo (50 - (3 * $i)) ?>%"
      cy="<?php echo (50 - (3 * $i)) ?>%"
      r="<?php echo (120 - (10 * $i)) ?>" 
      fill="#000"
      stroke="#0ff"
      id="circle<?php echo $i ?>"
    />
    <animate
      xlink:href="#circle<?php echo $i ?>"
      attributeName="cx"
      from="<?php echo (50 - (3 * $i)) ?>%"
      to="<?php echo (50 + (5 * $i))?>%" 
      dur="5s"
      begin="0s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (50 - (3 * $i)) ?>%; <?php echo (50 + (5 * $i))?>%; <?php echo (50 + (5 * $i))?>%; <?php echo (50 - (3 * $i)) ?>%"
    />
    <animate
      xlink:href="#circle<?php echo $i ?>"
      attributeName="cy"
      from="<?php echo (50 - (5 * $i)) ?>%"
      to="<?php echo (50 + (5 * $i))?>%" 
      dur="5s"
      begin="2s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (50 - (3 * $i)) ?>%; <?php echo (50 + (5 * $i))?>%; <?php echo (50 + (5 * $i))?>%; <?php echo (50 - (3 * $i)) ?>%"
    />
    />
  <?php } ?>
</svg>
