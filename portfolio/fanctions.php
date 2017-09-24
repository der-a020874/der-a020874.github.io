<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>portfolio</title>
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
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
                                 <p><strong>Городской/Факс</strong>&nbsp
                                    <a href="#" data-toggle="tooltip" title="+375-29-777-77-77" data-placement="bottom"><span class="glyphicon glyphicon-erase" aria-hidden="true">velcom</span></a>
                                     <a href="#" data-toggle="tooltip" title="+375-23-777-77-77" data-placement="bottom"><span class="glyphicon glyphicon-erase" aria-hidden="true">mts</span></a>
                                     <a href="#" data-toggle="tooltip" title="+375-25-777-77-77" data-placement="bottom"><span class="glyphicon glyphicon-erase" aria-hidden="true">life</span></a></p>
                             </div>
                               <div class="head2">
                                   <div style="float:left"><img src="images/Object.png"></div>
                                   <div style="float:left">
                                       &nbsp&nbsp<span class="nam"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span><strong>8(0232)58-69-34</strong></span><br><br>
                                       &nbsp&nbsp<a href="#" style="text-align: right">Обратная связь</a></div>
                                   
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
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Фотогалерея</a></li>
                    <li><a href="reg.php">Регистрация</a></li>
                    <li><a href="#">Контакты</a></li>
               </ul>
           </div> 
        </div>
      </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                
<?php 
$users = 'users.txt';

	// валидация 
	$name=$_POST['login']; 
	// обрезаем пробелы в начале и в конце строки 
	// и выполняем экранирование активных символов, чтобы исключить передачу како-го-либо скрипт
	$pass=$_POST['pass'];
	$email=$_POST['email'];


	if($name =='' || $pass =='' || $email =='') // проверка на пустое поле
	{ 
		echo "<h3/><span style='color:red;'>Не заполнены обязательные поля!</span><h3/>";
		return false;
	}

	if(strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30) // проверка на длину символов
	{
		echo "<h3/><span style='color:red;'>Логин должны быть в пределах от 3 до 30!</span><h3/>";
		return false;	
	}

	// Проверяем уникальность логина
	global $users;
	$file=fopen($users,'a+'); // открываем файл, если его нет, то создаем его

	while($line=fgets($file, 128)) // читаем построчно
	{
		$readname=substr($line,0,strpos($line,':')); // Возвращает подстроку и  Возвращает позицию первого вхождения подстроки
		if($readname == $name) // делаем проверку
		{
			echo "<h3/><span style='color:red;'>Такой логин уже используется!</span><h3/>";
			return false;
		}
	}
	// добавление нового пользователя
	$line=$name.':'.md5($pass).':'.$email."\r\n";
	fputs($file,$line);
	fclose($file);
    echo "<h3><span style='color:green;'> $name поздравляем вас! Вы успешно прошли регистрацию</span></h3>";
	return true;

    

?>
                </div>
            </div>
      </div>
    </body>
</html>