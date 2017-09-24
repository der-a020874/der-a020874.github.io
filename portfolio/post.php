<?php
    require "db.php";
?>
<?php
$link = mysqli_connect('localhost', 'root', '', 'kodati');

if(mysqli_connect_errno())
{
    echo 'Ошибка в подключении к базе данных ('.mysqli_connect_errno().'): '.mysqli_connect_error();
    exit();
    
}
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
 <link rel="stylesheet" href="style.css">   
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
                    <li class="active"><a href="/post.php">Блог</a></li>
                    <li><a href="/kontakti.php">Обратная связь</a></li>
                    <li><a href="gallery.php">Фотогалерея</a></li>
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
    
  <div class="container">
      <div class="row">
          <div class="col-md-9">
              <div class="page-header">
                  <h1>Записи блога:</h1>
              </div>
              <?php
               $posts = get_posts();
              ?>
              
              <?php foreach($posts as $post): ?>
              <div class="row">
                  <div class="col-md-3">
                      <a href="#" class="thumbnail">
                          <img src="<?=$post['image']?>" alt="">
                      </a>
                  </div>
                  <div class="col-md-9">
                      <h4><a href="#"><?=$post['title']?></a></h4>
                    <p>
                      <?=$post['content']?>
                    </p>
                    <p><a class="btn btn-info btn-sm" href="#">Читать полностью</a></p>
                    <br>
                    <ul class="list-inline">
                        <li><i class="gliphicon gliphicon-list"></i><a href="#">Название категории</a> | </li>
                        <li><i class="gliphicon gliphicon-calendar"></i> 24 сентября 2017 21:00
                    </ul>
                  </div>
              </div>
              <hr>
              <?php endforeach; ?>
              
          </div>
        <div class="col-md-3"></div>
      </div>
  </div>
    
    <div class="container" style="margin-top:5%; margin-bottom:5%; color: red">
        <div class="row">
            <div class="col-md-6">
                <div class="footm">
                <ul class="list-inline" style="color:red">
                    
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li class="active"><a href="/post.php">Блог</a></li>
                    <li><a href="/kontakti.php">Обратная связь</a></li>
                    <li><a href="/gallery.php">Фотогалерея</a></li>
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
    
    
   <?php
      
      function get_categories(){
         global $link;
          $sql = "SELECT * FROM categories";
          $result = mysqli_query($link, $sql);
          $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $categories;
      }
      
      function get_posts(){
         global $link;
          $sql = "SELECT * FROM posts";
          $result = mysqli_query($link, $sql);
          $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $posts;
      }
      ?>
    
  </body>
</html>