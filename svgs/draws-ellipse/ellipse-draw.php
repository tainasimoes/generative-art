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
    stroke="#f0f"
    fill="none"
  />
<?php } for($i = 1; $i <= 7; $i++){ ?>
  <ellipse 
    cx="50%"
    cy="<?php echo (60 - (5 * $i)) ?>%"
    rx="<?php echo (10 + (10 * $i)) ?>"
    ry="<?php echo (4 + (2 * $i)) ?>"
    stroke="#f0f"
    fill="none"
  />
<?php } ?>

</svg>
