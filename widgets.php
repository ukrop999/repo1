<?php
include "header.php";
?>
    <main role="main">

      <div class="container">
        <div class="row mt50">
          <div class="col-md-12">
            <h2 class="text-center">Widgets JqueryUI</h2>
          </div>
          <div class="col-md-6">
            <h2>Widget Accordion</h2>
            <div id="accord">
              <h3><a href="#">Section 1</a></h3>
              <div>
                <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Знаках безорфографичный прямо необходимыми заголовок раз, инициал себя мир, сих, назад послушавшись, рот имеет. Дорогу снова букв переулка вскоре всеми.</p>
              </div>
              <h3><a href="#">Section 2</a></h3>
              <div>
                <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Знаках безорфографичный прямо необходимыми заголовок раз, инициал себя мир, сих, назад послушавшись, рот имеет. Дорогу снова букв переулка вскоре всеми.</p>
              </div>
              <h3><a href="#">Section 3</a></h3>
              <div>
                <ul>
                  <li>Punkt 1</li>
                  <li>Punkt 2</li>
                  <li>Punkt 3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h2>Widget Tabs</h2>
            <div id="tabs">
              <ul>
                <li><a href="#tab1">Vkladka1</a></li>
                <li><a href="#tab2">Vkladka2</a></li>
                <li><a href="#tab3">Vkladka3</a></li>
              </ul>
              <div id="tab1">
                <p>Vkladka 1. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Текста свой оксмокс от всех бросил большого предупреждал повстречался, на берегу то если, приставка курсивных маленький залетают которое ведущими жизни за себя.</p>
              </div>
              <div id="tab2">
                <p>Vkladka2. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Текста свой оксмокс от всех бросил большого предупреждал повстречался, на берегу то если, приставка курсивных маленький залетают которое ведущими жизни за себя.</p>
              </div>
              <div id="tab3">
                <p>Vkladka3. Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Текста свой оксмокс от всех бросил большого предупреждал повстречался, на берегу то если, приставка курсивных маленький залетают которое ведущими жизни за себя.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt50">
          <div class="col-md-3">
            <h2>Widget Menu</h2>
            <ul id="menu">
             <li><a href="#">Punkt 1</a></li>
             <li><a href="#">Punkt 2</a>
                 <ul>
                   <li><a href="#">Podpunkt 1</a></li>
                    <li><a href="#">Podpunkt 2</a></li>
                 </ul>
             </li>
             <li><a href="#">Punkt 3</a></li>
             <li><a href="#">Punkt 4</a></li>
             <li><a href="#">Punkt 5</a></li>
            </ul>
          </div>
          <div class="col-md-3 offset-md-2">
            <h2>Widget Button</h2>
            <button id="butt">Button</button>
          </div>
          <div class="col-md-4">
            <h2>Виджет погоды</h2>
            <div id="SinoptikInformer" style="width:240px;" class="SinoptikInformer type1c1"><div class="siHeader"><div class="siLh"><div class="siMh"><a onmousedown="siClickCount();" class="siLogo" href="https://sinoptik.ua/" target="_blank" rel="nofollow" title="Погода"> </a>Погода <span id="siHeader"></span></div></div></div><div class="siBody"><a onmousedown="siClickCount();" href="https://sinoptik.ua/погода-днепр-303007131" title="Погода в Днепре" target="_blank"><div class="siCity"><div class="siCityName"><span>Днепр</span></div><div id="siCont0" class="siBodyContent"><div class="siLeft"><div class="siTerm"></div><div class="siT" id="siT0"></div><div id="weatherIco0"></div></div><div class="siInf"><p>влажность: <span id="vl0"></span></p><p>давление: <span id="dav0"></span></p><p>ветер: <span id="wind0"></span></p></div></div></div></a><div class="siLinks">Погода на 10 дней от <a href="https://sinoptik.ua/погода-днепр-303007131/10-дней" title="Погода на 10 дней" target="_blank" onmousedown="siClickCount();">sinoptik.ua</a></div></div><div class="siFooter"><div class="siLf"><div class="siMf"></div></div></div></div><script type="text/javascript" charset="UTF-8" src="//sinoptik.ua/informers_js.php?title=4&amp;wind=3&amp;cities=303007131&amp;lang=ru"></script>
          </div>
        </div>
        <div class="row mt50">
          <div class="col-md-12">
            <h2 class="text-center">Widget Datepicker</h2>
          </div>
          <div class="col-md-4">
            <input type="text" id="date">
          </div>
          <div class="col-md-4">
            <div id="calendar"></div>
          </div>
        </div>
        <div class="row mt50">
          <div class="col-md-6">
            <h2 class="text-center">Widget Slider</h2>
             <label for="amount">Выбор цены</label>
             <input type="text" id="amount">
            <div id="slider"></div>
          </div>
          <div class="col-md-6">
            <h2 class="text-center">Widget Dialog</h2>
            <div id="dialog">
              <form>
                <div class="form-group">
                  <label for="name" class="col-sm-2">Name</label>
                  <input type="text" id="name" class="col-sm-10">
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2">Password</label>
                  <input type="password" id="password" class="col-sm-10">
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2">E-mail</label>
                  <input type="email" id="email" class="col-sm-10">
                </div>
                <button type="submit" class="btn btn-lg btn-info">Register</button>
              </form>
            </div>
            <button class="btn btn-lg btn-warning" id="opdialog">Create User</button>
          </div>
        </div>
        <div class="row mt50">
          <div class="col-md-6">
            <h2>Widget Selectmenu</h2>
            <form>
              <div class="form-group">
                <label for="spisok">Spisok</label>
                <select name="spisok" id="spisok">
                  <option value="">Option 1</option>
                  <option value="">Option 2</option>
                  <option value="">Option 3</option>
                  <option value="">Option 4</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing mt50">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->
<?php 
include "footer.php";
?>

    