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
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="/post.php">Блог</a></li>
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
    
    <div class="container-fluid" style="background-color:rgb(38, 115, 176);">
       
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <div class="carousel-caption" style="text-align: left; top: 5%">
                        <h3 style="font-weight: 700">КАКОЙ БЫ НИ БЫЛА ЗАДАЧА</h3>
                        <h3 style="font-weight: 100">БУДТЕ УВЕРЕНЫ,<br> ОНА БУДЕТ ВЫПОЛНЕНА<br> С ВЫСОКИМ КАЧЕСТВОМ</h3>
               <a href="gallery.php"><button type="button" class="btn btn-info">ПОСМОТРЕТЬ РАБОТЫ</button></a>
                    </div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/slade.png" alt="" style="float: right; padding-right: 15%">
                    
                </div>
                <div class="item">
                    <img src="images/slaide2.jpeg" alt="" style="float: right; padding-right: 15%; opacity: 0.5; filter: blur(0.5px)">
                    
                </div>
                <div class="item">
                    <img src="images/slaide2.png" alt="" style="float: right; padding-right: 15%; opacity: 0.5; filter: blur(0.5px)">
                    
                </div>
                
            </div>
            
        
        <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    
    <div class="container">
        <div class="row" style="margin-top:5%">
            <div class="col-md-12">
                <h2 style="text-align: center">ВИДЫ РАБОТ</h2>
            </div>
        </div>
    </div>
    
    <div class="container">
       <div class="row" style="margin-top:5%">
            <div class="col-md-4">
                <center>
                <img src="images/icon1.png" alt="icon1" class="img-responsive">
                <div class="dt">общестроительныеные<br> работы</div>
                </center><br>
                <a href="#"><div class="dt2"><img src="images/money.png">узнать цену</div></a><br>
                <a href="#"><div class="dt2"><img src="images/shape.png">задать вопрос</div></a><br>
                <a href="#"><button type="button" class="btn btn-info btn-lg">ПОДРОБНЕЕ</button></a>
                
                
            </div>
            <div class="col-md-4">
                <center>
                <img src="images/icon2.png" alt="icon2" class="img-responsive">
                <div class="dt">внутриотделочные<br> работы</div>
                </center><br>
                <a href="#"><div class="dt2"><img src="images/money.png">узнать цену</div></a><br>
                <a href="#"><div class="dt2"><img src="images/shape.png">задать вопрос</div></a><br>
                <a href="#"><button type="button" class="btn btn-info btn-lg">ПОДРОБНЕЕ</button></a>
            </div>
            <div class="col-md-4">
                <center>
                <img src="images/icon3.png" alt="icon3" class="img-responsive">
                <div class="dt">фасадные<br> работы</div>
                </center><br>
                <a href="#"><div class="dt2"><img src="images/money.png">узнать цену</div></a><br>
                <a href="#"><div class="dt2"><img src="images/shape.png">задать вопрос</div></a><br>
                <a href="#"><button type="button" class="btn btn-info btn-lg">ПОДРОБНЕЕ</button></a>
            </div>
        </div>
        
        <div class="row" style="margin-top:5%; padding-bottom:5%">
            <div class="col-md-4">
                <center>
                <img src="images/icon4.png" alt="icon4" class="img-responsive">
                <div class="dt">все виды<br> высотных работ</div>
                </center><br>
                <a href="#"><div class="dt2"><img src="images/money.png">узнать цену</div></a><br>
                <a href="#"><div class="dt2"><img src="images/shape.png">задать вопрос</div></a><br>
                <a href="#"><button type="button" class="btn btn-info btn-lg">ПОДРОБНЕЕ</button></a>
                
            </div>
            <div class="col-md-4">
                <center>
                <img src="images/icon5.png" alt="icon5" class="img-responsive">
                <div class="dt">промышленный<br> альпинизм</div>
                </center><br>
                <a href="#"><div class="dt2"><img src="images/money.png">узнать цену</div></a><br>
                <a href="#"><div class="dt2"><img src="images/shape.png">задать вопрос</div></a><br>
                <a href="#"><button type="button" class="btn btn-info btn-lg">ПОДРОБНЕЕ</button></a>
            </div>
            <div class="col-md-4">
                <center>
                <img src="images/icon6.png" alt="icon6" class="img-responsive">
                <div class="dt">кровельные<br> работы</div>
                </center><br>
                <a href="#"><div class="dt2"><img src="images/money.png">узнать цену</div></a><br>
                <a href="#"><div class="dt2"><img src="images/shape.png">задать вопрос</div></a><br>
                <a href="#"><button type="button" class="btn btn-info btn-lg">ПОДРОБНЕЕ</button></a>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:5%; margin-bottom:5%; color: red">
        <div class="row">
            <div class="col-md-6">
                <div class="footm">
                <ul class="list-inline" style="color:red">
                    
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="/post.php">Блог</a></li>
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
    
    
   
    
  </body>
</html>