<!doctype html>
<title>503 - Site under maintenance</title>
<style>
  body {
    text-align: center;
    padding: 150px;
    outline: 13px solid #f04662;
    height: 100vh;
    box-sizing: border-box;
    outline-offset: -26px;
    overflow: hidden;
    margin: 0px;
    border: 13px solid #1d272e;
}
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #ffffff; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #f04662; text-decoration: none; }
  a:hover { color: #1d272e; text-decoration: none; }
  canvas#canv {
    position: fixed;
    left: 0;
    top: 0;
    z-index: -1;
}
</style>

<body>
  <canvas id="canv" width="500" height="200"></canvas>
  <article>
    <img src="{{asset('/images/logo-light.png')}}" alt="">
      <h1>We&rsquo;ll be back soon!</h1>
      <div>
          <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:contact@webiframe.com">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
          <p>&mdash; The Team</p>
      </div>
  </article>
  <script>
    const canvas = document.getElementById('canv');
const ctx = canvas.getContext('2d');

const w = canvas.width = document.body.offsetWidth;
const h = canvas.height = document.body.offsetHeight;
const cols = Math.floor(w / 20) + 1;
const ypos = Array(cols).fill(0);

ctx.fillStyle = '#f04662';
ctx.fillRect(0, 0, w, h);

function matrix () {
  ctx.fillStyle = '#0001';
  ctx.fillRect(0, 0, w, h);
  
  ctx.fillStyle = '#ef3b58';
  ctx.font = '15pt monospace';
  
  ypos.forEach((y, ind) => {
    const text = String.fromCharCode(Math.random() * 128);
    const x = ind * 20;
    ctx.fillText(text, x, y);
    if (y > 100 + Math.random() * 10000) ypos[ind] = 0;
    else ypos[ind] = y + 20;
  });
}

setInterval(matrix, 50);
  </script>
</body>