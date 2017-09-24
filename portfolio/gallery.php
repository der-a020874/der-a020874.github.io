<?php
    require "db.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>portfolio</title>
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link rel="stylesheet" type="text/css" href="style.css">   
  </head>
  <body>
    
            <div class="container" style="margin-top: 15px">
                <div class="row">
                    <div class="col-md-6">
                     <div class="row">  
                            <div class="col-md-6">
                                <a href="#"><img src="images/logo.png"></a>
                            </div>
                            <div class="col-md-6">
                                <img src="images/logo2.png">
                            </div>
                       </div>
                     
                     </div>
                      
                         <div class="col-md-6">
                           <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                            <div class="head">
                             <div class="head1">
                                 <p style="border-bottom-color: rgb(248, 122, 3); border-bottom: 3px;"><strong>Городской/Факс</strong>&nbsp
                                    <a href="#" data-toggle="tooltip" title="+375-29-777-77-77" data-placement="bottom"><span class="glyphicon glyphicon-erase" aria-hidden="true">velcom</span></a>
                                     <a href="#" data-toggle="tooltip" title="+375-23-777-77-77" data-placement="bottom"><span class="glyphicon glyphicon-erase" aria-hidden="true">mts</span></a>
                                     <a href="#" data-toggle="tooltip" title="+375-25-777-77-77" data-placement="bottom"><span class="glyphicon glyphicon-erase" aria-hidden="true">life</span></a></p>
                             </div>
                               <div class="head2">
                                   <div style="float:left"><img src="images/Object.png"></div>
                                   <div style="float:left">
                                       &nbsp&nbsp<span class="nam"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><strong style="color: rgb(248, 122, 3)">8(0232)58-69-34</strong></span><br><br>
                                       &nbsp&nbsp<a href="/kontakti.php" style="text-align: right">Обратная связь</a></div>
                                   
                               </div>
                                </div>
                               </div>
                             </div>
                         </div>
                                
                </div>
            </div>
    <nav class="navbar navbar-default">        
        <div class="container-fluid">
           <div>
               <ul class="nav navbar-nav" style="padding-left: 10%">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="/post.php">Блог</a></li>
                    <li><a href="/kontakti.php">Обратная связь</a></li>
                    <li class="active"><a href="gallery.php">Фотогалерея</a></li>
                    <li><a href="signup.php">Регистрация</a></li>
                    <li><a href="login.php">Авторизация</a></li>
               </ul>
           </div> 
        </div>
    
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <?php if(isset($_SESSION['logged_user'])) : ?>
                Авторизован!<br>
                Привет, <?php echo $_SESSION['logged_user']->login;?>!
                <a href="/logout.php">Выйти</a>
                <?php else : ?>
                <h5>Вы не авторизованы!</h5>
                <a href="/login.php">Авторизоваться</a>&nbsp;
                <a href="/signup.php">Регистрация</a>
                <?php endif; ?>
            </div>
        </div>
    </div><br>
     
    
    <div class="modal fade" id="image-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-title">Просмотр изображения</div>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block" src="" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
   <div class="container">
   <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center">ФОТОГАЛЕРЕЯ РАБОТ</h2>
            </div>
        </div>
    
    <div class="row">
  
  <!-- 1 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str1.jpeg" alt="Изображение 1" title="Увеличить">
    </a>
  </div>
  
  <!-- 2 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str2.jpeg" alt="Изображение 2" title="Увеличить">
    </a>
  </div>
  
  <!-- 3 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str3.jpeg" alt="Изображение 3" title="Увеличить">
    </a>
  </div>
  
  <!-- 4 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str4.jpeg" alt="Изображение 4" title="Увеличить">
    </a>
  </div>
  
  <!-- 5 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str5.jpeg" alt="Изображение 5" title="Увеличить">
    </a>
  </div>
  
  <!-- 6 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str6.jpeg" alt="Изображение 6" title="Увеличить">
    </a>
  </div>
  
  <!-- 7 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str7.jpeg" alt="Изображение 7"  title="Увеличить">
    </a>
  </div>
  
  <!-- 8 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str8.jpeg" alt="Изображение 8" title="Увеличить">
    </a>
  </div>
  
  <!-- 9 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str9.jpeg" alt="Изображение 9" title="Увеличить">
    </a>
  </div>
  
  <!-- 10 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str10.jpeg" alt="Изображение 10" title="Увеличить">
    </a>
  </div>
  
  <!-- 11 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str11.jpeg" alt="Изображение 11" title="Увеличить">
    </a>
  </div>
  
  <!-- 12 Изображение -->
  <div class="col-sm-6 col-md-4 col-lg-3"> 
    <a href="#" class="thumbnail">
       <img src="images/str12.jpeg" alt="Изображение 12" title="Увеличить">
    </a>
  </div>
  
</div>
 </div>   
    
    <div class="container" style="margin-top:5%; margin-bottom:5%; color: red">
        <div class="row">
            <div class="col-md-6">
                <div class="footm">
                <ul class="list-inline">
                    
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="/post.php">Блог</a></li>
                    <li><a href="/kontakti.php">Обратная связь</a></li>
                    <li><a href="gallery.php">Фотогалерея</a></li>
                    <li><a href="/signup.php">Регистрация</a></li>
                    <li><a href="/login.php">Авторизация</a></li>
                    
                </ul>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
               <span class="footr">Республика Беларусь г.Гомель<br>
               ул.Советская, 97, к. 18</span> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <br><br><br><span class="footl">&#169Компания "КОДАТИСТРОЙ",2014<br>
                Все виды строительных работ</span>
            </div>
            <div class="col-md-6">
               
            </div>
            <div class="col-md-3">
                <br><span class="footr">тел.:+375 29 777 77 77<br>
                     +375 29 777 77 77<br>
                     +375 29 777 77 77<br>
                <a href="#">kodatistroy@gmail.com</a></span>     
            </div>
        </div>
    </div>
    
    
   <script>
// После загрузки DOM-дерева (страницы)
$(function() {     
  //при нажатии на ссылку, содержащую Thumbnail
  $('a.thumbnail').click(function(e) {
    //отменить стандартное действие браузера
    e.preventDefault();
    //присвоить атрибуту scr элемента img модального окна
    //значение атрибута scr изображения, которое обёрнуто
    //вокруг элемента a, на который нажал пользователь
    $('#image-modal .modal-body img').attr('src', $(this).find('img').attr('src'));
    //открыть модальное окно
    $("#image-modal").modal('show');
  });
  //при нажатию на изображение внутри модального окна 
  //закрыть его (модальное окно)
  $('#image-modal .modal-body img').on('click', function() {
    $("#image-modal").modal('hide')
  });
});
</script>
    
  </body>
</html>