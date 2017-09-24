
  <?php
   require "db.php";

    
    ?>
    
    <?php
    $data = $_POST;
    if(isset($data['do_signup'])){
        // здесь регистрируем
        
        $errors = array();
        if( trim($data['login']) == '' ){
            $errors[] = 'Введите логин!';
        }
        
        if( trim($data['email']) == '' ){
            $errors[] = 'Введите Email!';
        }
        
        if( $data['password'] == '' ){
            $errors[] = 'Введите пароль!';
        }
        
        if( $data['password_2'] != $data['password'] ){
            $errors[] = 'Повторный пароль введен не верно!';
        }
        
        if(R::count('users', "login=?", array($data['login'])) > 0){
            $errors[] = 'Пользователь с таким логином уже существует!';
        }
        
        if(R::count('users', "email=?", array($data['email'])) > 0){
            $errors[] = 'Пользователь с таким Email уже существует!';
        }
        
        if(empty($errors)){
            // все хорошо, регистрируем
            
            $user = R::dispense('users');
            $user->login = $data['login'];
            $user->email = $data['email'];
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style="color:green;">Вы успешно зарегистрированы!</div><hr>';
        }else{
            echo '<div style="color:red;">' . array_shift($errors). '</div><hr>';
        }
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
                    <li><a href="/post.php">Блог</a></li>
                    <li><a href="/kontakti.php">Обратная связь</a></li>
                    <li><a href="gallery.php">Фотогалерея</a></li>
                    <li class="active"><a href="signup.php">Регистрация</a></li>
                    <li><a href="login.php">Авторизация</a></li>
               </ul>
           </div> 
        </div>
    
    </nav>
    
    <div class="cotainer">
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
     <div class="col-md-6">
      <form method="POST" action="/signup.php" role="form">
         <div class="form-group">
          <label for="username">Введите ваш логин:</label>
          <input type="text" name="login" class="form-control" value="<?php echo @$data['login'];?>">
          </div>
          <div class="form-group">
          <label for="email">Введите ваш Email:</label>
          <input type="email" name="email" class="form-control" value="<?php echo @$data['email'];?>">
          </div>
           <div class="form-group">         
          <label for="password1">Введите ваш пароль:</label>
          <input type="password" name="password" class="form-control" value="<?php echo @$data['password'];?>">
          </div>
          <div class="form-group">
          <label for="password_2">Введите пароль еще раз:</label>
          <input type="password" name="password_2" class="form-control" value="<?php echo @$data['password_2'];?>">
          </div>
          <button type="submit" class="btn btn-primary" name="do_signup">Зарегистрироваться!</button>
      </form>
       </div>
        </div>
      </div>
    
    <div class="container" style="margin-top:5%; margin-bottom:5%; color: red">
        <div class="row">
            <div class="col-md-6">
                <div class="footm">
                <ul class="list-inline" style="color:red">
                    
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="post.php">Блог</a></li>
                    <li><a href="/kontakti.php">Обратная связь</a></li>
                    <li><a href="/gallery.php">Фотогалерея</a></li>
                    <li class="active"><a href="signup.php">Регистрация</a></li>
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
    
    
   
    
  </body>
</html>