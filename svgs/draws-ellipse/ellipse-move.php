<svg viewBox="0 0 300 300">
  <?php for($i = 1; $i <= 7; $i++){ ?>
    <ellipse 
      cx="50%"
      cy="<?php echo (95 - (5 * $i)) ?>%"
      rx="<?php echo (90 - (10 * $i)) ?>"
      ry="<?php echo (20 - (2 * $i)) ?>"
      stroke="#ff0"
      fill="none"
      id="ellipsebottom<?php echo $i ?>"
    />
    <animate
      xlink:href="#ellipsebottom<?php echo $i ?>"
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
      stroke="#ff0"
      fill="none"
      id="ellipsetop<?php echo $i ?>"
    />
    <animate
      xlink:href="#ellipsetop<?php echo $i ?>"
      attributeName="cy"
      from="<?php echo (60 - (5 * $i)) ?>%"
      to="10%" 
      dur="5s"
      begin="<?php echo (0.2 * $i) ?>s"
      fill="freeze"
      repeatCount="indefinite"
      values="<?php echo (60 - (5 * $i)) ?>%; 10%; 12%; <?php echo (60 - (5 * $i)) ?>%"
    />
  <?php } ?>
</svg>

