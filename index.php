<!DOCTYPE html>
<html lang="en">
<head>
  <title>Benvenuto</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Inconsolata">
  <link rel="stylesheet" href="styles.css" />
  <style>
    str-style,
section#one .title text,
section#one .title path {
  stroke-dasharray: 700;
  stroke-dashoffset: 1000;
  animation: dash 4s linear forwards;
}
*,
::before,
::after {
  box-sizing: border-box;
}
body {
  margin: 0;
  padding: 0 4px;
  height: 100vh;
  overflow: hidden;
  line-height: 1.5;
  font-family: 'Inconsolata', sans-serif;
  font-size: 62.5%;
  color: #fff;
  background-color: #1d1e22;
}
::-webkit-scrollbar {
  width: 8px;
  height: 6px;
}
::-webkit-scrollbar-track {
  background-color: #1d1e22;
}
::-webkit-scrollbar-thumb {
  border-radius: 1em;
  background-color: #312d3c;
}
::-webkit-scrollbar-thumb:hover {
  background-color: #df2359;
}
a {
  text-decoration: none;
  color: #fff;
}
a:hover,
a.leadlink {
  color: #df2359;
}
h1,
h2,
header a {
  text-transform: uppercase;
}
.smooth {
  margin: 0 auto;
  padding: 0 4px;
  padding-left: 8px;
  height: 100%;
  overflow-x: hidden;
  overflow-y: scroll;
  scroll-behavior: smooth;
}
header,
footer {
  position: relative;
  padding: 2em 3em;
  display: flex;
  align-items: center;
  font-size: 1rem;
}
header {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 2;
  height: 10vh;
  background-color: #1d1e22;
}
header h3 {
  position: relative;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
  font-size: 2rem;
  color: #df2359;
}
header ul {
  list-style-type: none;
  padding: 0;
  margin: 1em 0;
  display: flex;
  width: 100%;
  justify-content: flex-end;
  align-items: center;
}
header ul li {
  position: relative;
  margin: 0 1em;
  transition: all 0.2s linear;
}
header ul li a {
  font-family: 'Montserrat', sans-serif;
  font-weight: 500;
  color: #fff;
}
header ul li::before {
  position: absolute;
  content: '';
  top: calc(100% + 4px);
  left: 0;
  width: 20px;
  height: 2px;
  background-color: #fff;
  transform-origin: 0 100%;
  transform: rotate(-5deg);
  transition: all 0.2s ease-out;
}
header ul li:hover::before {
  width: 100%;
  background-color: #df2359;
}
.grid {
  display: grid;
  grid-gap: 2em;
}
.grid.g_two {
  grid-template-columns: 1fr minmax(300px, auto);
}
.flex {
  display: flex;
  width: 100%;
  align-items: center;
}
.flex.column {
  flex-flow: column wrap;
  justify-content: space-between;
}
.jcsb {
  justify-content: space-between;
}
progress {
  position: relative;
  margin: 1em 0;
}
progress[value] {
  -webkit-appearance: none;
  appearance: none;
  width: 100%;
  max-width: 360px;
  height: 1px;
}
progress::-webkit-progress-bar {
  background-color: #666;
  border-radius: 1em;
}
progress::-webkit-progress-value {
  position: absolute;
  top: -2px;
  left: 0;
  background-color: #df2359;
  border-radius: 1em;
  height: 5px;
}
section {
  position: relative;
  display: flex;
  min-height: 100vh;
  padding: 2em 3em;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-size: 1rem;
  border-radius: 1em;
  background-color: #191a1d;
}
section:nth-child(odd) {
  background-color: #1d1e22;
}
section#one {
  background-image: url("https://andrejsharapov.github.io/iogo/src/header.jpg");
  background-position: center;
  background-size: cover;
  color: #fff;
}
section#one h1 {
  visibility: hidden;
  opacity: 0;
  font-family: 'Montserrat', sans-serif;
  font-size: 0;
}
section#one .title {
  min-width: 350px;
  max-height: 80px;
  font-family: 'Montserrat', sans-serif;
  font-size: 3rem;
  font-weight: 600;
}
section#one .title text {
  letter-spacing: 2px;
  fill: none;
  stroke: #fff;
  stroke-width: 2;
  stroke-linecap: round;
}
section#one .title path {
  stroke: #fff;
  stroke-width: 4;
  animation-delay: 1s;
}
section#one::after {
  position: absolute;
  content: '';
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-image: linear-gradient(0deg, rgba(29,30,34,0.3), #1d1e22);
}
section#two .blocks,
section#four .blocks {
  padding: 2em 0;
  display: flex;
  width: 100%;
  flex-flow: row wrap;
  justify-content: space-around;
  align-items: center;
}
section#two .blocks .block,
section#four .blocks .block {
  margin: 0 auto;
  display: flex;
  width: 23%;
  height: 150px;
  justify-content: center;
  align-items: center;
  border: 3px solid #312d3c;
  border-radius: 1em;
  background-color: #191a1d;
  transition: all 0.2s linear;
}
section#two .blocks .block:hover,
section#four .blocks .block:hover {
  transform: translateY(-10px);
  background-color: #312d3c;
}
section#four .blocks .block {
  padding: 0.25em 1em;
  width: 49%;
  height: auto;
  flex-flow: column wrap;
  background-color: #191a1d;
}
section#four .dots {
  margin-top: 2em;
  display: flex;
  width: 25%;
  align-items: center;
  justify-content: space-around;
}
section#four .dot {
  width: 20px;
  height: 20px;
  cursor: pointer;
  border: 2px solid #312d3c;
  border-radius: 50%;
  background-color: #191a1d;
}
section#four .dot:hover {
  transform: scale(1.1);
  background-color: #312d3c;
}
section h2 {
  font-family: 'Montserrat', sans-serif;
}
section h2 span {
  color: #df2359;
}
.content {
  position: relative;
  z-index: 1;
  display: flex;
  align-items: center;
}
.content p.lead {
  font-size: 1.25rem;
}
.content .blur {
  position: relative;
  overflow: hidden;
  margin: auto;
  margin-left: 2em;
  padding: 1em;
  width: 100%;
  height: 350px;
  border-radius: 0.35em;
}
.content .blur::before {
  position: absolute;
  content: '';
  top: -25%;
  left: -25%;
  width: 150%;
  height: 150%;
  box-shadow: inset 0 0 0 600px rgba(255,255,255,0.3);
  filter: blur(10px);
}
form {
  position: relative;
  z-index: 3;
  padding: 1em;
  display: flex;
  width: 100%;
  height: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: space-around;
  border: 2px solid #fff;
  border-radius: 0.35em;
}
form img {
  width: 64px;
  height: 64px;
}
form input {
  margin-bottom: 1em;
  min-height: 3em;
  font-size: 1em;
  color: #fff;
  border: 0;
  border-bottom: 2px solid #fff;
  background: none;
}
form input::placeholder {
  position: relative;
  top: 0;
  color: inherit;
  transition: all 0.2s linear;
}
form input:focus {
  outline: none;
}
form input:focus::placeholder {
  top: -1.25em;
  font-size: 0.825rem;
}
form .button {
  position: relative;
  margin-top: 1em;
  padding: 1em 3em;
  text-transform: uppercase;
  display: block;
  font-size: 1rem;
  cursor: pointer;
  color: #fff;
  border: 0;
  border-radius: 0.35em;
  background-color: #df2359;
}
footer {
  padding-bottom: 1em;
  width: 100%;
  min-height: 35vh;
  flex-direction: column;
  justify-content: space-around;
  background-color: #191a1d;
}
footer h3 {
  position: relative;
  font-family: 'Montserrat', sans-serif;
}
footer h3::before {
  position: absolute;
  content: '';
  top: calc(100% + 4px);
  left: 0;
  width: 20px;
  height: 2px;
  background-color: #df2359;
  transform-origin: 0 100%;
  transform: rotate(-5deg);
  transition: all 0.2s ease-out;
}
footer h5 {
  text-transform: uppercase;
  font-family: 'Montserrat', sans-serif;
}
footer h5.follow {
  color: #df2359;
}
footer ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
footer ul li {
  line-height: 1.5;
  transition: transform 200ms ease-in;
  will-change: transform;
}
footer ul li:hover {
  transform: translateX(5px);
}
footer .widgets,
footer .copy {
  display: flex;
  width: 100%;
  justify-content: space-between;
  align-items: center;
}
footer .widgets .widget,
footer .copy .widget {
  display: flex;
  flex-direction: column;
  align-items: center;
}
footer .copy {
  margin-top: 1em;
  border-top: 2px solid #312d3c;
}
footer .copy p {
  margin: 0.75em 0 0;
}
footer .copy span {
  position: relative;
  display: inline-block;
  color: #df2359;
  animation: hearts 0.6s cubic-bezier(0.18, 0.89, 0.29, 1.05) infinite;
}
@media (max-width: 991px) {
  .blur {
    display: none;
  }
  .content {
    text-align: center;
  }
  .content h1::before {
    display: none;
  }
}
@-moz-keyframes hearts {
  50% {
    transform: scale(1.4);
  }
}
@-webkit-keyframes hearts {
  50% {
    transform: scale(1.4);
  }
}
@-o-keyframes hearts {
  50% {
    transform: scale(1.4);
  }
}
@keyframes hearts {
  50% {
    transform: scale(1.4);
  }
}
@-moz-keyframes dash {
  90% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: 0;
    fill: #fff;
  }
}
@-webkit-keyframes dash {
  90% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: 0;
    fill: #fff;
  }
}
@-o-keyframes dash {
  90% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: 0;
    fill: #fff;
  }
}
@keyframes dash {
  90% {
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dashoffset: 0;
    fill: #fff;
  }
}
  </style>
</head>
<body>
  <div class="smooth">
    <header>
      <h3>AWS DON</h3>
      <ul>
        <li><a href="#one">INTRODUZIONE</a></li>
        <li><a href="#two">PREMESSA</a></li>
        <li><a href="#three">Services</a></li>
        <li><a href="#four">Reviews</a></li>
        <li><a href="#bottom">Contact</a></li>
      </ul>
    </header>
    <section id="one">
      <div class="content parallax">
        <div>
          <h1>AWSDON</h1>
          <svg class="title">
            <text x="0" y="40">AWS DON</text>
            <path d="M 0 66 50 61"></path>
          </svg>
          <p class="lead">
          Nella seguente relazione, ti guiderò attraverso i passaggi per configurare un ambiente Docker per un progetto web, utilizzando Docker e Docker Compose. Questi strumenti semplificano la gestione dei container e consentono di creare un ambiente isolato e portatile per sviluppare e distribuire le tue applicazioni.
          </p>
          
        </div>

        <section id="two">
  <h2><span>PREMESSA</span></h2>
  <div class="content parallax">
    <div>
      <svg class="title">
        <path d="M 0 66 50 61"></path>
      </svg>
      <p class="lead">
        Per iniziare, installa Docker e Docker Compose utilizzando i seguenti comandi:
      </p>
      <div class="command">
        <p class="lead darker-bg">sudo apt update</p>
      </div>
      <div class="command">
        <p class="lead darker-bg">sudo apt install -y docker.io</p>
      </div>
      <div class="command">
        <p class="lead darker-bg">sudo systemctl enable docker</p>
      </div>
      <div class="command">
        <p class="lead darker-bg">sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose</p>
      </div>
      <div class="command">
        <p class="lead darker-bg">sudo chmod +x /usr/local/bin/docker-compose</p>
      </div>
    </div>
  </div>
</section>

    <section id="three">
      <div class="grid g_two">
        <div>
          <h2>Section<span> three</span></h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, esse rerum numquam, quos incidunt, sapiente tempore magnam modi libero maiores repellendus! Cupiditate dolore doloremque deserunt! Eaque accusamus rem cumque nisi.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, esse rerum numquam, quos incidunt, sapiente tempore magnam modi libero maiores repellendus! Cupiditate dolore doloremque deserunt! Eaque accusamus rem cumque nisi.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, esse rerum numquam, quos incidunt, sapiente tempore magnam modi libero maiores repellendus! Cupiditate dolore doloremque deserunt! Eaque accusamus rem cumque nisi.</p>
        </div>
        <div class="flex column">
          <div class="flex column">
            <div class="flex jcsb">
              <h4>Comunity</h4><span>77%</span>
            </div>
            <progress value="77" max="100"></progress>
          </div>
          <div class="flex column">
            <div class="flex jcsb">
              <h4>Team and Developers</h4><span>65%</span>
            </div>
            <progress value="65" max="100"></progress>
          </div>
          <div class="flex column">
            <div class="flex jcsb">
              <h4>Marketing</h4><span>88%</span>
            </div>
            <progress value="88" max="100"></progress>
          </div>
          <div class="flex column">
            <div class="flex jcsb">
              <h4>Design</h4><span>68%</span>
            </div>
            <progress value="68" max="100"></progress>
          </div>
        </div>
      </div>
    </section>
    <section id="four">
      <h2>Section<span> four</span></h2>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, dolores quibusdam! Hic facere inventore consequatur deleniti error, vero molestiae quam at iusto! Exercitationem voluptatem amet totam doloribus, tenetur et nobis?</p>
      <div class="blocks">
        <div class="block">
          <h4>Author</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel sunt beatae ducimus eaque molestiae aliquid consequuntur perspiciatis dolores soluta iste voluptatibus, unde voluptate neque earum qui culpa saepe commodi. Tenetur?</p>
        </div>
        <div class="block">
          <h4>Author</h4>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel sunt beatae ducimus eaque molestiae aliquid consequuntur perspiciatis dolores soluta iste voluptatibus, unde voluptate neque earum qui culpa saepe commodi. Tenetur?</p>
        </div>
        <div class="dots">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      </div>
    </section>
    <footer id="bottom">
      <div class="widgets">
        <h3>AWSDON</h3>
        <div class="widget">
          <h5 class="follow">Follow me</h5>
          <ul>
            <li><a href="https://dribbble.com/andrejsharapov" target="blank">Dribbble</a></li>
            <li><a href="https://codepen.io/andrejsharapov" target="blank">CodePen</a></li>
            <li><a href="https://twitter.com/andrejsharapov" target="blank">Twitter</a></li>
            <li><a href="https://www.behance.net/andrejsharapov" target="blank">Behance</a></li>
          </ul>
        </div>
        <div class="widget">
          <h5>Heading</h5>
          <ul>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
          </ul>
        </div>
        <div class="widget">
          <h5>Heading</h5>
          <ul>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
          </ul>
        </div>
        <div class="widget">
          <h5>CONTACTS</h5>
          <ul>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
            <li>Text</li>
          </ul>
        </div>
      </div>
      <div class="copy">
        <p>
          © 2019 with  <span>♥</span> <a href="https://andrejsharapov.github.io/" target="_blank">Andrej Sharapov</a></p><a href="#one">Scroll top ↑</a>
      </div>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
