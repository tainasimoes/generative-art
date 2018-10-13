<svg
  height="100%"
  width="100%"
> 
  <?php for($i = 1; $i <= 7; $i++){ ?>
    <ellipse 
      cx="50%"
      cy="<?php echo (95 - (5 * $i)) ?>%"
      rx="<?php echo (90 - (10 * $i)) ?>"
      ry="<?php echo (20 - (2*$i)) ?>"
      stroke="#0ff"
      fill="none"
      id="ellipsebottom2<?php echo $i ?>"
    />
    <animate
      xlink:href="#ellipsebottom2<?php echo $i ?>"
      attributeName="cy"
      from="<?php echo (95 - (5 * $i)) ?>%"
      to="90%" 
      dur="5s"
      begin="<?php echo (0.2 * $i) ?>s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (95 - (5 * $i)) ?>%; 90%; 92%; <?php echo (95 - (5 * $i)) ?>%"
    />
  <?php } for($i = 1; $i <= 7; $i++){ ?>
    <ellipse
      cx="50%"
      cy="<?php echo (60 - (5 * $i)) ?>%"
      rx="<?php echo (10 + (10 * $i)) ?>"
      ry="<?php echo (4 + (2 * $i)) ?>"
      stroke="#0ff"
      fill="none"
      id="ellipsetop2<?php echo $i ?>"
    />
    <animate
      xlink:href="#ellipsetop2<?php echo $i ?>"
      attributeName="cy"
      from="<?php echo (60 - (5 * $i)) ?>%"
      to="90%" 
      dur="5s"
      begin="<?php echo (0.2 * $i) ?>s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (60 - (5 * $i)) ?>%; 90%; 92%; <?php echo (60 - (5 * $i)) ?>%"
    />
  <?php } ?>
</svg>

