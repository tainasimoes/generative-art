<svg viewBox="0 0 100 60" xmlns="http://www.w3.org/2000/svg">
  <style>
  path {
    fill: none;
    stroke: black;
    stroke-width: 2;
    stroke-dasharray: 10;
  }
  </style>

  <!-- No pathLength, the real length of the path is used. In that case, 100 user units -->
  <path d="M 0,10 h100"/>
 
  <!-- compute everything like if the path length was 90 user units long -->
  <path d="M 0,20 h100" pathLength="90"/>
 
  <!-- compute everything like if the path length was 50 user units long -->
  <path d="M 0,30 h100" pathLength="50"/>
 
  <!-- compute everything like if the path length was 30 user units long -->
  <path d="M 0,40 h100" pathLength="30"/>
 
  <!-- compute everything like if the path length was 10 user units long -->
  <path d="M 0,50 h100" pathLength="10"/>
</svg>