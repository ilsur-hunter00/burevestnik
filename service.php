<?php include ('header.php');?>

    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="margin-8"></div>

            <div class="txt">
              <div class="breadcrumps">
                <a href="index.php">Главная</a>
                <span class="raquo">/</span>
                <a href="service.php">Заказать услугу ООО "Буревестник"</a>
              </div>
            </div>

            <hr>
            
            <p class="service_txt">Заполните форму ниже. В ближайшее время вам перезвонят.</p>

            <form role="form">
              <!-- Hidden Required Fields -->
              <input type="hidden" name="project_name" value="OOO Burevestnik">
              <input type="hidden" name="admin_email" value="ilsur.vafin.00@yandex.ru">
              <input type="hidden" name="form_subject" value="Клиент" >

              <div class="form-group">
                <input type="text" name="ФИО" class="form-control input-lg" placeholder="ФИО" required>
              </div>
              <div class="form-group">
                <input type="text" name="Номер телефона" class="form-control input-lg" placeholder="Номер телефона" required>
              </div>
              <div class="form-group">
                <input type="text" name="E-mail" class="form-control input-lg" placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <input type="text" name="Услуга" class="form-control input-lg" placeholder="Введите услугу" required>
              </div>
              <a href=""><button class="btn btn-default btn-lg pull-right" type="submit">Отправить</button></a>
            </form>


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

    
    <script src="assets/js/script.js"></script>
  </body>
</html>