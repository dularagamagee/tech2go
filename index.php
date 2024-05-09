<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landing Page</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Inconsolata">
  <link rel="stylesheet" href="styles.css" />
  <style>
    /* Inserisci qui il codice CSS fornito */
  </style>
</head>
<body>
  <div class="smooth">
    <header>
      <h3>AWSDON</h3>
      <ul>
        <li><a href="#one">Home</a></li>
        <li><a href="#two">About</a></li>
        <li><a href="#three">Services</a></li>
        <li><a href="#four">Reviews</a></li>
        <li><a href="#bottom">Contact</a></li>
      </ul>
    </header>
    <section id="one">
      <div class="content parallax">
        <div>
          <h1>AWSDON MEDiA</h1>
          <svg class="title">
            <text x="0" y="40">AWSDON MEDiA</text>
            <path d="M 0 66 50 61"></path>
          </svg>
          <p class="lead">
            If you click on navigation links, smooth scrolling does not work, perhaps the functions are not supported by your browser. You can check the support on the
             <a class="leadlink" href="https://caniuse.com/#search=scroll-behavior" target="_blank">Can I use</a> site.
          </p>
          <p class="lead">
            And also added a parallax effect and logo animation, a sample of which you
             <a class="leadlink" href="https://codepen.io/andrejsharapov/pen/PVJrLO" target="blank">can find here.</a>
          </p>
        </div>
        <div class="blur">
          <form><img src="https://s.cdpn.io/profiles/user/2727382/80.jpg?1545923020"/>
            <input type="text" placeholder="Email:"/>
            <input type="text" placeholder="Password:"/><a class="button" href="#bottom">Follow me</a>
          </form>
        </div>
      </div>
    </section>
    <section id="two">
      <h2>Section<span> two</span></h2>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum blanditiis rerum, at sunt fugit nam, labore, quas voluptate et recusandae veniam ea dignissimos deserunt! Veritatis facilis repudiandae libero distinctio tempora.</p>
      <div class="blocks">
        <div class="block">
          <p>TEXT or ICON</p>
        </div>
        <div class="block">
          <p>TEXT or ICON</p>
        </div>
        <div class="block">
          <p>TEXT or ICON</p>
        </div>
        <div class="block">
          <p>TEXT or ICON</p>
        </div>
      </div>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam perspiciatis vel, soluta earum at iure error eos voluptates excepturi velit! Totam aliquam impedit architecto aperiam officia aliquid, aspernatur magnam recusandae!</p>
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
