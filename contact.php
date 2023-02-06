<?php include ('header.php');?>

    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="breadcrumps">
              <a href="index.php">Главная</a>
              <span class="raquo">/</span>
              <a href="contact.php">Контакты ООО "Буревестник"</a>
            </div>
            <h2><i class="glyphicon glyphicon-home" aria-hidden="true"></i>&nbsp Контакты</h2>
            <hr>
            <table>
              <tr><th>Адрес: </th><td>420127, РТ, Казань, ул. Дементьева, 45</td></tr> 
              <tr><th>Телефон:</th><td>+7 (987) 226-36-26</td></tr> 
              <tr><th>Время работы: </th><td>Понедельник-пятница с 8:00 до 17:00</td></tr> 
              <tr><th>E-mail:</th><td><a href="mailto:burtbo@mail.ru">burtbo@mail.ru</a></td></tr>
            </table>
            <hr>
            <a href="service.php"><button class="btn btn-default btn-lg" type="submit">Заказать услугу</button></a>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="margin-8"></div>
            <iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A0ef5b72a36b0c3d1526de94e8d8f9b06ec119dffed06f1b9a67b9a587e449db8&amp;source=constructor" width="450" height="450" frameborder="0"></iframe>
          </div>
          <div class="col-lg-3">
            <?php include ('sidebar.php');?>
          </div>
        </div>
      </div>
    </div>


    <?php include ('footer.php');?>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>