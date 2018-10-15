<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
  <title>Arte Generativa - SVG e CSS</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>

  <header>
    <h1>Arte Generativa</h1>
    <p>[SVG e CSS]</p>
  </header>

  <section>
    <h2>Shapes Básicos</h2>

    <article>
      <a class="canvas" href="svgs/basic/circle.php" target="_blank">
        <?php require_once('svgs/basic/circle.php'); ?>
      </a>
      <h3>&lt;circle&gt;</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/ellipse.php" target="_blank">
        <?php require_once('svgs/basic/ellipse.php'); ?>
      </a>
      <h3>&lt;ellipse&gt;</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/line.php" target="_blank">
        <?php require_once('svgs/basic/line.php'); ?>
      </a>
      <h3>&lt;line&gt;</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/rect.php" target="_blank">
        <?php require_once('svgs/basic/rect.php'); ?>
      </a>
      <h3>&lt;rect&gt;</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/polygon.php" target="_blank">
        <?php require_once('svgs/basic/polygon.php'); ?>
      </a>
      <h3>&lt;polygon&gt;</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/polyline.php" target="_blank">
        <?php require_once('svgs/basic/polyline.php'); ?>
      </a>
      <h3>&lt;polyline&gt;</h3>
    </article>
  </section>

  <section>
    <h2>Atributos SVG</h2>

    <article>
      <a class="canvas code" href="javascript:void(0);" target="_blank">
        id="simbol" </br>
        class="circle" </br>
        style="fill: #f0f" </br>
      </a>
      <h3>Atributos Genericos</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/circle.php" target="_blank">
        <svg viewBox="0 0 300 300">
          <circle
            id="simbol"
            class="circle"
            style="fill: #f0f"
            cx="50%" 
            cy="50%" 
            r="60" 
            stroke="none"
          />
        </svg>
      </a>
      <h3>Atributos Genericos</h3>
    </article>

    <article>
      <a class="canvas code" href="javascript:void(0);" target="_blank">
        fill,</br>
        fill-opacity,</br>
        opacity,</br>
        stroke,</br>
        stroke-dasharray,</br>
        stroke-dashoffset,</br>
        stroke-linecap,</br>
        stroke-opacity,</br>
        stroke-width</br>
        transform
      </a>
      <h3>Mais Atributos</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/basic/circle.php" target="_blank">
        <svg viewBox="0 0 300 300">
          <circle
            cx="50%" 
            cy="50%" 
            r="60" 
            stroke="#0ff"
            stroke-width="4"
            stroke-dasharray="4"
            stroke-linecap="unset";
            stroke-dashoffset="6";
            stroke-opacity=".6";
          />
        </svg>
      </a>
      <h3>Mais Atributos</h3>
    </article>
  </section>

  <section>
    <h2>Formas, Desenhos e Movimentos - Retangulo</h2>

    <article>
      <a class="canvas" href="svgs/draws-rect/rect-form.php" target="_blank">
        <?php require_once('svgs/draws-rect/rect-form.php'); ?>
      </a>
      <h3>Forma</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-rect/rect-draw.php" target="_blank">
        <?php require_once('svgs/draws-rect/rect-draw.php'); ?>
      </a>
      <h3>Desenho</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-rect/rect-move.php" target="_blank">
        <?php require_once('svgs/draws-rect/rect-move.php'); ?>
      </a>
      <h3>Movimento</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-rect/rect-animate.php" target="_blank">
        <?php require_once('svgs/draws-rect/rect-animate.php'); ?>
      </a>
      <h3>Animação</h3>
    </article>
  </section>

  <section>
    <h2>Formas, Desenhos e Movimentos - Circulos</h2>

    <article>
      <a class="canvas" href="svgs/draws-circle/circle-form.php" target="_blank">
        <?php require_once('svgs/draws-circle/circle-form.php'); ?>
      </a>
      <h3>Forma</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-circle/circle-draw.php" target="_blank">
        <?php require_once('svgs/draws-circle/circle-draw.php'); ?>
      </a>
      <h3>Desenho</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-circle/circle-move.php" target="_blank">
        <?php require_once('svgs/draws-circle/circle-move.php'); ?>
      </a>
      <h3>Movimento</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-circle/circle-animate.php" target="_blank">
        <?php require_once('svgs/draws-circle/circle-animate.php'); ?>
      </a>
      <h3>Animação</h3>
    </article>
  </section>

  <section>
    <h2>Formas, Desenhos e Movimentos - Ellipse</h2>

    <article>
      <a class="canvas" href="svgs/draws-ellipse/ellipse-form.php" target="_blank">
        <?php require_once('svgs/draws-ellipse/ellipse-form.php'); ?>
      </a>
      <h3>Forma</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-ellipse/ellipse-draw.php" target="_blank">
        <?php require_once('svgs/draws-ellipse/ellipse-draw.php'); ?>
      </a>
      <h3>Desenho</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-ellipse/ellipse-move.php" target="_blank">
        <?php require_once('svgs/draws-ellipse/ellipse-move.php'); ?>
      </a>
      <h3>Movimento</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-ellipse/ellipse-animate.php" target="_blank">
        <?php require_once('svgs/draws-ellipse/ellipse-animate.php'); ?>
      </a>
      <h3>Animação</h3>
    </article>
  </section>

  <section>
    <h2>Formas, Desenhos e Movimentos - Linha</h2>

    <article>
      <a class="canvas" href="svgs/draws-line/line-form.php" target="_blank">
        <?php require_once('svgs/draws-line/line-form.php'); ?>
      </a>
      <h3>Forma</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-line/line-draw.php" target="_blank">
        <?php require_once('svgs/draws-line/line-draw.php'); ?>
      </a>
      <h3>Desenho</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-line/line-move.php" target="_blank">
        <?php require_once('svgs/draws-line/line-move.php'); ?>
      </a>
      <h3>Movimento</h3>
    </article>

    <article>
      <a class="canvas" href="svgs/draws-line/line-animate.php" target="_blank">
        <?php require_once('svgs/draws-line/line-animate.php'); ?>
      </a>
      <h3>Animação</h3>
    </article>
  </section>

  <footer>
    <p>Referencias: </p>
  </footer>

</body>
</html>
