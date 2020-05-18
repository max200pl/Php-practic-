/* ПЕРЕМЕННЫЕ PHP */

<?php
	$h =  date("H");
	$a = 50.5;
	$b = (int)$a; // отсечение дробной части
	$c = $c . $a ;  // как текстовый фрагмент (конкатенация);
	const PI = 3.14;
	define(PI, 3.14); //тоже самое --> const PI = 3.14; 

	$c = "50 приветов и 20 пока"; // округляем к нижнему числоу, так как 50 пробел и пробел это не число и возвращет 50
	$d = (int)$c;

	echo $d . '<br>';
?>

<?php
/* Операторы сравнения */
	// true false

	$a = 5;
	$b = 4;
	$c = ($a > $b); // 5 = 5 --->  false нет равно 
	echo $c;
	// php лож(false) не выводит на экран 
	var_dump($c); // отладочная функция выводит тип данных и значение 
	//echo (int)$c;  // если выводим на экран "0" нужно применять (int)

	/*==================*/

	$c = ($a = $b); // присвоение просто 
	$c = ($a == $b); // равенство  false  
	$c = ($a !== $b); // не равно  true
	$c = ($a !== $b); // не равно

    /*==================*/
    $a = 5;
	$b = 5.0;
	$c = ($a == $b); //  true
	$c = ($a === $b); //  false (строгое равенство)
	$c = ($a !== $b); //  true (строгое равенство)
?>

<?php
 /* ЛОГИЧЕСКИЕ ОПЕРАТОРЫ PHP */ 

//  и    &&
// или  || 
// не   !


идет дождь  (ИД)
обещают дождь (ОД)

ИД и ОД логическое умноже   0 * 0 = 0
                 		   0 * 1 = 0

ИД     ОД       ИД  и (&&) ОД            ИД или(||) ОД      НЕ(!) ИД

0      0           0				0            1

0      1           0 				1            1

1      0           0				1            0

1      1           1 				1            0
?>

<?php 

/*ВЕТВЛЕНИЯ*/

$a = 5;
$b = 7;

if($a > $b){
	echo $a;	       // ветка по иситине 
}

elseif ($a < $b) {
	echo "$a < $b";
}
  
else{
	echo "$a = $b";  // ветка по лжи  
}

 ?>

<?php 

/*Ветвления*/

//  и    && >  and
// или  ||  >   or 
// не   !
// 


$a = mt_rand(-10, 10);
$b = mt_rand(-10, 10);

/*==========или (||)===========*/

if ($a > 0 || $b > 0) {
	if($a > $b){
		echo $a;
	}
	else{
		echo $b;
	}
}

else{
	echo "сам руку суй";
}

/*==========и (&&)===========*/

if ($a <= 0 && $b <= 0) {
	echo "сам руку суй";  // ветка по истине 
}
else if($a > $b){ 		 // ветка по лжи  
	echo $a;
}
else{
	echo $b;
}
 ?>

<?php 


 /*=========Функции============*/

// работник который делает одну и тоже

 $a = mt_rand(-10, 10);
 $b = mt_rand(-10, 10);

	function danger_game($a, $b)  // параметры функции, или аргументы ($a, $b)
	 {
	 	 if ($a > 0 || $b > 0) {
		if($a > $b){
			echo $a;
		}
		else{
			echo $b;
		}
		}
		else{
			echo "сам руку суй";
		}
	 }

	 danger_game(mt_rand(-10,10), mt_rand(-10, 10));
	 danger_game(mt_rand(-10,10), mt_rand(-10, 10));
	 danger_game(mt_rand(-10,10), mt_rand(-10, 10));

    /*рекурсия*/

	 // вызов функции внутри себя

	function shop_walker($money, $list){
		бродит по магазину
		
		покупает нужно по списку
		несет обратно  	
	}

	shop_walker(1000, ['beer', 'milk', 'elephant']);
	shop_walker(5, ['milk']);
	shop_walker(5, ['milk']); 
?>

/* Функции часть 2 */

<?php 

	function area($r)
	{
		return 3.14 * $r * $r;  // return - оператор возврата 
	}

	$r1 = area(5);
	$r2 = area(3);
	echo "$r1 - $r2 =" . ($r1 - $r2);

	// тоже самое 

	echo area(5) - area (3); 
?>

/*=============ЦИКЛЫ==============*/

//while
//for

<?php 
$i = 1;

if ($i < 10) {  // если условие истинно входим в цикл до тех пор пока будет истинно. 

	echo $i;

	i++; // $i = $i + 1  $i += 1 инкремент   
}


?>

<select name="#" id="#">

     <?php 
		$j = 1200;
 
		while ($j <= 2010) {  // если условие истинно входим в цикл до тех пор пока будет истинно. (нет границ)
			echo "<option value= \"$j\">$j</option>";
			$j++;
		}
	?>
</select>

<select name="#" id="#">
     <?php 
		for ($k=1200; $k < 2010; $k++) {  // $k+= 2 вывод только четных 
			echo "<option value= \"$j\">$j</option>";
		}
	?>
</select>

// склонение минут пример

<?php 

$m = data('i');

function endings($m){
	$m0 = $m % 10;

	if ($m >= 5 && $m <=10) {  // диапазон 5 до 10
		$res = "минут";
	}

	elseif ($m == 1) {    // диапазон все единицы 
		$res = "минута";
	}
	
	elseif ($m0 >= 2 && $m0 <=4) {  // диапазон от 2 до 4 
		$res = "минуты";
	}

	else {
		$res = "минут"; // весь остальной
	}

	return $res;
}

for ($i=0; $i < 60; $i++) { 
		echo $i . " "  . endings($i) . "<br>";
}

?>


/**МАССИВЫ */

// склонение разных слов пример

<?php 

$m = data('i');

function endings($m, $variants){
	$m1 = $m % 100; 
	$m0 = $m % 10; 

	if ($m >= 5 && $m <=10) {  // диапазон 5 до 10
		$res = $variants[0];
	}

	elseif ($m == 1) {    // диапазон все единицы 
		$res = $variants[1];
	}
	
	elseif ($m0 >= 2 && $m0 <=4) {  // диапазон от 2 до 4 
		$res = $variants[2];
	}

	else {
		$res = $variants[0]; // весь остальной
	}

	return $res;
}

//* Нумерованные массивы (индексные)
$m = ["минут", "минута", "минуты"];

for ($i=0; $i < 60; $i++) { 
		echo $i . " "  . endings($i) . "<br>";
}

$m = ["секунд", "секунда", "секунды"];

for ($i=0; $i < 60; $i++) { 
		echo $i . " "  . endings($i) . "<br>";
}

$m = ["часов", "час", "часа"];

for ($i=0; $i < 24; $i++) { 
		echo $i . " "  . endings($i) . "<br>";
}

?>


/**МАССИВЫ часть 2 */

<?php 

$arr = [1,3,4,5];

$arr[4]="ура"; // добавляется в 4 элемент 

$arr[]="ура"; // добавляется в конец массива 

$arr = [1,3,4, 10 => 5]; // у четвертого элемента индекс 10 (ключ)

echo $arr[2]; // вывод на экран первого элемента массива  


// /*Вывод на экран всех элементов массива*/ Нумерованные массивы (индексные)

$arr = ["Москва", "Париж", "Лондон", "Минск", "Пекин", "Киев"];
	for ($i=0; $i < count($arr); $i++) {    // count($arr) функция которая считает Элементы в массиве 
		echo $arr[$i] . '<br/>';
	}

var_dump($arr); 
?>


/*АССОЦИАТИВНЫЕ МАССИВЫ (словарь) */

<?php 

$arr = [
//     ключ       значение
//	   $k		$v
	'Россия' => "Москва",
	'Франция' => "Париж",
	'Англия' => "Лондон",
	'Белорусь' => "Минск",
	'Китай' => "Пекин",
	'Украина' => "Киев"
];

echo $arr[4]; // ошибка !!! 
echo $arr[Париж]; // ошибка !!! по значениям искать нельзя только по ключам


/*Вывод массивов в нумерации ключей  нет закономерности  (ассоциативные)  */

//         пара      ключ  значение 
foreach ($capitals as $k => $v) {  
	echo "$k - $v<br>";
}

// вывод только значений  (ассоциативные)

foreach ($capitals as $v) {    
	echo "$v<br>";
}

?>

/*МНОГОМЕРНЫЕ МАССИВЫ*/
<?php 

$capitals = [
//                     ключ       значение       значение        значение
/*1 элемент -->*/ 	 'Россия' => ["Москва","Санкт-Петербург", "Новосибирск"],
/*2 элемент -->*/    'Франция' =>["Париж", "Марсель", "Лион", "Ницца"],
/*3 элемент -->*/    'Англия' => ["Лондон", "Ливерпуль", "Бирмингем"]
	];

/*ul-li-ol-li*/
echo "<ul>";
	foreach ($capitals as $country => $towns) { // key 'Россия'  value ["Москва","Санкт-Петербург", "Новосибирск"]
		echo "<li>";
			echo $country; // вывод стран 
			echo "<ol>";
				foreach ($towns as $town) {
					echo "<li>$town;</li>"  // вывод городов 
				}
			echo "</ol>";
		echo "</li>";
	}
echo "</ul>";
?>

/*ul-li-ol-li*/ // сокращенная запись
<ul>
     <? foreach ($capitals as $country => $towns): ?> // key 'Россия' value ["Москва","Санкт-Петербург", "Новосибирск"]
     <li>
          <!-- вывод стран -->
          <?= $country;?>
          <ol>
               <?foreach ($towns as $town): ?>
               <li>
                    <!--  вывод городов -->
                    <?= $town;?>
               </li>
               <? endforeach; ?>
          </ol>
     </li>
     <? endforeach; ?>
</ul>


<?php 
/*========== СОЗДАНИЕ ДИНАМИЧЕСКОЙ СТРАНИЦЫ =============*/

/*
// в сети два метода запроса  $_GET $_POST
// данные которе хранятся от пользователя в двух массивах 
$_GET  --> // массив формирует php интерпретатор ; все данные передаются через URL  localhost/site/news/?id=3&a=b
$_POST --> // массив формируеfт php интерпретатор ;

/* ============ МЕТОД GET ============ */

Чтение информации с страницы

Как передаются параметры?
site.ru/news.php?id=5;    // GET параметром хотим видеть 5 новость (id=5)

	print_r($_GET);          // вывод на экран массива $_GET

// все GET запросы делятся на пары (пара - амперсанд - пара)
localhost/site/news/?id=3&a=b

	Array (
		ключ       значение
		[id]   =>    3      
		[a]    =>    b
	)

localhost/site/news.php?id=5&a=b&some=nz

	Array (
			ключ        значение
	1 элемент --> 	id      =>     5
	2 элемент --> 	 a      =>     b
	3 элемент --> 	some    =>     nz
	)	    
?>



/*========== СОЗДАНИЕ ДИНАМИЧЕСКОЙ СТРАНИЦЫ 2 =============*/
<?php 

	print_r($_GET); // вывод на экран массива $_GET

	$id = $_GET['id'];	// записываем id статьи в переменную $id

	if (!isset($_GET['id'])) {  // если не найден элемент id
		exit('Нет id - 404');  // завершаем работу скрипта
	}

	$text = file_get_contents('data/$id.txt'); // функция file_get_contents получает файл (1.txt)

?>

Шапка


<?php 
	// если файлы именем 1,2,3,4 

	// ЧЕРЕЗ ЦИКЛ получаем идентификатор id= в строке
	for ($i=1; $i < 4; $i++) { 
		echo "<a href=\"index.php?id=$i\"> Статья $i</a>";
	}

	<a href="index.php?id=1"> Статья 1</a>
	<a href="index.php?id=2"> Статья 2</a>
	<a href="index.php?id=3"> Статья 3</a>
	<a href="index.php?id=4"> Статья 4</a>

	// если файлы разных имен 

	$files = scandir('data');   // функция scandir  директория  data
	
	var_dump($files);  // в директории data лежит массив 

	foreach ($files as $file) {

		if ('data/'. $file) {
			 echo "<a href=\"index.php?id=$file\"> Статья $file</a>";
		}
	}
?>
<hr>
<?php 
		echo $text;  //Распечатываем содержимое $text
	?>
<hr>

Подвал


/* ============ МЕТОД POST ============ */

/*
МЕТОД POST --> // информацию записать ;

Как передаются параметры?

через форму form*/

form по умолчанию работают методом GET

Array (
ключ значение
1 элемент --> name ="name" =>
2 элемент --> name ="password" =>
)


/* ПРИМЕР №1 */
/*
Array (
ключ значение
1 элемент --> [name] =>
2 элемент --> [password] =>
)
*/
<?php 
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>

<form method="post">
     Имя <br>
     <input type="text" name="name">

     Пароль <br>
     <input type="password" name="password">

     <input type="submit" value="Отправить">
</form>


/* ПРИМЕР №2 валидация формы */
/*
1) При заходе на страницу исп метод _GET!
2) При нажатии на кнопу type="submit" пользователь приходит методом _POST - изначально он пустой
3) При нажатии на кнопу type="submit" в массиве создаются элементы формы name="name" name="phone"

*/
<?php 
	if (count($_POST) > 0) {
		$name = $_POST ['name'];
		$phone = $_POST ['phone'];
		$dt = date ("Y-m-d H:i:s") // переменная с датой 

		if (strlen($name) < 2){		// проверка что введено больше двух символов через функцию strlen()	
			$msg = "Нужно имя по длиннее"	;
		}
		elseif (strlen($phone) < 7){		// проверка что введено больше 7 символов через функцию strlen()	
			$msg = "Мы не умеем звонить на телефон короче двух цифр"	;
		}
		elseif (!is_numeric($phone)) { // проверка что введено число через функцию is_numeric()	
			$msg = "Нужно ввести номер";
		}
		else {
			file_put_contents('apps.txt', "$dt-|-$name-|-$phone\n", FILE_APPEND ); 
			// создаем файл apps.txt и записываем "$name $phone\n"  в конец FILE_APPEND 
			// разделитель используем -|- так как пробелы не надежны 
			$msg = 'Ваша заявка принята';
		}
	}
	else {  // приходит на страницу методом GET
		$msg = "привет! заполни поля и нажми кнопку купить!";
	}
?>

<form method="post">
     Имя <br>
     <input type="text" name="name">

     Телефон <br>
     <input type="text" name="phone">

     <input type="submit" value="Отправить">
</form>

<?php 
echo $msg;
?>


/* ПРИМЕР СТРАНИЦЫ АДМИНА */
<?php 
	$apps = file('apps.txt'); // функция  file() возвращаем массив с элементами которые были строками в файле 13 строк (элементов)

	echo "<table>";

	foreach ($app as $line) {
		
		$arr = explode('-|-', $line); // создаем через функцию explode() массив с элементами разделитель которых '-|-'
		
		/*Пример 1 */
		echo "<tr>";
		echo "<td>" . $arr[0] . "</td>";
		echo "<td>" . $arr[1] . "</td>";
		echo "<td>" . $arr[2] . "</td>";
		echo "</tr>";

		/*Пример 1.1 тоже самое но через цикл */
		echo "<tr>";
		foreach ($arr as $one) {
			echo "<td>$one</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<style>
table,
td {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 5px;
}
</style>
/* /пример страницы админа */


/* ПРИМЕР 2 СТРАНИЦЫ АДМИНА */
<?php 
	$apps = file('apps.txt'); // функция  file() возвращаем массив с элементами которые были строками в файле 13 строк (элементов)

	echo "<table>";

	foreach ($app as $line) {
		
		$arr = explode('-|-', $line); // создаем через функцию explode() массив с элементами разделитель которых '-|-'
		
		/*Пример 1 */
		echo "<tr>";
		echo "<td>" . $arr[0] . "</td>";
		echo "<td>" . $arr[1] . "</td>";
		echo "<td>" . $arr[2] . "</td>";
		echo "</tr>";

		/*Пример 1.1 тоже самое но через цикл */
		echo "<tr>";
		foreach ($arr as $one) {
			echo "<td>$one</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

<style>
table,
td {
     border: 1px solid black;
     border-collapse: collapse;
     padding: 5px;
}
</style>


/* ======================== РАБОТА С ФАЙЛАМИ ============================= */

// Есть высокоуровневая работа с файлами
file(); // если большой файл сразу считать можно всю память заполнить
file_get_contents();
file_put_contents();

// Есть низкоуровневая работа с файлами

// для работы с большими файлами (для их нарезки на куски)
function file_get_contents($f)
{
$file = fopen('r');
$l = считываем длину файла
$str =fread($file,$l);

return $str
}

/* ПРИМЕР РЕДАКТИРОВАННОЕ ФАЙЛА */

// дескриптор файла
<?php 

$f = fopen('1.txt', 'r');// "r" // fopen() - курсор находиться на нулевой позиции 
var_dump($f); // resource(3) of type (stream) // resource --> тип 

$str1 = fread($f, 1); // команда на считывание fread и двигает курсор в право на 1 байт. Считать первый байт файла который правея курсора   
$str2 = fread($f, 1); 

// ВЫвод всего файла пример 1
while (!feof($f)) {  // !feof если курсор уперся в край файла, считывание файла закончилось.  
	$str1 = fread($f, 1);
	echo $str; 
}

// ВЫвод всего файла пример 2
$length = filesize('1.txt');
$str1 = fread($f, $length);
echo nl2br($str1);  //если перенос троки, в html ставит 2 <br><br>

fclose($f);

echo $str1;
echo $str2;

// Породи на функцию file_get_contents()

function my_file_get_contents($path)
{
	$f = fopen('1.txt', 'r');
	$length = filesize('1.txt');
	$str = fread($f, $length);
	fclose($f);
	return $str;
}

?>


/** МОДИФИКАТОРЫ РАБОТЫ */

r -- read --> прочитать, нельзя дописывать
r+ -- read & write --> прочитать и записать (курсор в начале стоит)
w -- write --> файл стирается, создать файл и записать
w+ -- write & read --> файл стирается а потом записываем
a -- append --> добавить в конец существующего файла
a+ -- append & read -->

$app = date("Y-m-d H:i:s") . "!!!!Дмитрий!!!!89111111111\n";

$f = fopen('apps.txt', 'w'); //открыли файл через функцию fopen() в режиме записи создали новый файл
fwrite($f, $app); // записали через функцию fwrite() строку в файл
fclose($f)

$f = fopen('apps.txt', 'a'); //открыли файл через функцию fopen() в режиме записи
fwrite($f, $app); // записали через функцию fwrite() строку в файл, добавили в конец строку
fclose($f);

/** /модификаторы работы */


<?php 
	$a1 = file_get_contents('1.txt');  // считать содержимое файла в виде строки, выводит строку (26) c количеством байт 
	var_dump($a1);

	$a2 = file('1.txt') //  считать содержимое файла в виде массива, выводит массив
	var_dump($a1);

	echo "<pre>"; // выводит на экран Аrray { }
	print_r($a2);
	echo "</pre>";	//


	//file_put_contents("1.txt", "1\n2\n3"); // режим w, файл перезаписывается 

	file_put_contents("1.txt", "1\n2\n3", FILE_APPEND); // режим a,  летит информация в конец 

       Еще есть функции: 
		mkdir ()
		rmdir (/) удаление из корня 
		unlink ()
		copy ()
		rename ()
?>


/* ПРИМЕР: Журнал посещения сайта */

//куки и сессии


<?php 
// Логи посещения сайта

// Глобальные пред определенные массивы в PHP: POST GET SERVER/ --<> собирает PHP интерпретатор 

echo "<pre>"; // выводит на экран Аrray { }
print_r($_SERVER);
echo "</pre>";	

/* Пример первый  */
$log = date("Y-m-d H:i:s") . "";  // дата 
$log .= "<@>" . $_SERVER["REMOTE_ADDR"];  //  любой разделитель "<@>" и  ip адрес 
$log .= "<@>" . $_SERVER["REMOTE_SELF"];  //  любой разделитель "<@>" и  url адрес по которому он обратился в рамках сайта 
$log .= "<@>" . $_SERVER["HTTP_REFERER"];  //  любой разделитель "<@>" и  url адрес c которого пришли 
echo $log;

file_put_contents('log.txt', "$log\n", FILE_APPEND); // \n данные о новом заходе на новой строчке 

/* Пример второй  */
$lines = file("log.txt"); //получение в строках данные захода на страницу
var_dump($lines); 

echo "<table>";

foreach ($lines as $line) {
	echo "<tr>";
	// пример 1
	$log = explode("<@>", $line); // будет лежать массив из 4 элементов 
	echo "<td> . $log[0]</td>";
	echo "<td> . $log[1]</td>";
	echo "<td> . $log[2]</td>";
	echo "<td> . $log[3]</td>";
	
	echo "</tr>";

	// пример 2
	$log = explode("<@>", $line); // будет лежать массив из 4 элементов 
	foreach ($log as $item) {
		echo "<td>$$item</td>";
	}

	echo "</tr>";
}

echo "<table>";


?>

<style>
table,
td {
     border: 1px solid black;
     padding: 5px;
}
</style>


/** Пример вывода информации по ссылкам */

<?php 
	$list = scandir("data");

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>1</title>
</head>

<body>
     <ul>
          <?php 
	foreach ($list as $fname) {
		if($fname != "." && $fname != ".."){
			echo "<li><a href=\"article.php?fname=$fname\"> Новость $fname </a></li>";
		}
	}
	
    ?>
     </ul>
</body>

</html>


/*БАЗОВЫЕ ПОНЯТИЕ ОПП*/

// Описание сущнности которая не является не стракой не масивом (какойто код)
// У сущности могут быть не только ключи, но и методы. 
// Метод .сохранить статью назад в базу 

<?php 	// простой ассациотивный массив 
	$cat = [
		'ege' => 1,    // *поле объетка 
		'eat' => function () // метод 'eat' что кот поел  // метод объекта 
		{	
			echo "cat eat";
		}
	];
	echo $cat['eat']();
 ?>

 // применение ООП для того что бы получать объект в которм методы обеъекта могут работать с полями объекта 
 (поля станут состоянием этого объекта)


<?php 

	/**
	 * Пример ООП создаем чертеж 
	 */
	class Сat // это сущность 
	{
		public $age = 1;  // *поле объетка 
		public function eat()  // метод eat() который обращается к возрасту кота  // метод обеъкта 
		{
			$this-> age++; // увеличивает на 1 
		}
	}

	// через оператор new создаем объект этого класса (получаем что то физическое )
	$cat = new Cat(); // создан объект Cat() у которого доступно через стрелку его возраст и метод eat() 
	$cat->eat(); //через ключ ->eat вызываем метод eat() 
	echo $cat->age;

	// создаем второй объект 
	$cat2 = new Cat();
	$cat2->eat(); // вызываем метод eat() 
	$cat2->eat(); // вызываем метод eat() 
	$cat2->eat(); // вызываем метод eat()   
	echo $cat->age;
 ?>

/*объектоно-ореентированное програмирование*/

/*Понятие ОПП на областях видемости в классическом процедурном подходе*/
и облость видеммости полей и то что нам это дает в ООП*/

<?php // /*НИЖЕ ПРИВЕДЕН ПРОЦЕДУРНЫЙ ПОДХОД*/
// В поцедурном подходе каждая функция работает с чистого листа у неё нет начального состояния 

$db = mysqli_connect('localhost', 'root', '', 'osnovyphp');  //'osnovyphp' -- база данных ; пустой пороль; "root" имя пользователя 
// теперь переменная $db должна передоваться во все функции msqli 
mysgli_query($db, "SET NAMES UTF8");

$res = mysgli_query($db, "SELECT * FORM articles");
$posts = mysqli_fetch_all($res);
var_dump(count($post));

/* Ниже преведен подход ООП */

$db = new mysqli('localhost', 'root', '', 'osnovyphp'); // создается экземпляр класса mysqli куда передается настройки 
$db->query("SET NAMES UTF8");  //метод () query передаем только те методы которые хотим выполнить на языке sql 
$posts = $db->query("SELECT * FORM articles")->fetch_all(); //метод fetch_all()
var_dump(count($posts)); 

// плюс того что когда образаемся к объекту видем эго список методов  $db->  
 ?>

 /*Пример 1  процедурный подход*/

 <?php  
 		$text = '....
				<span>1</span>
				...
				<a href="./buy">
					Пройти на курс PHP
					<span>35000</span>
				</a>...';	

	//алгоритм парсинга :
				//1) переставить курсор на ссылку
				//2) найти в нутри ссылки span
				//3) и прочитать в нутри тега span содержимое 
 
// превая функция  moveTo для парсинга данных 
 function moveTo($str, $find, $start = 0)	// принимает  $str ---> строку $text; подстроку $find; стартовая позиция $start = 0;	
 {
 	return strpos($str, $find, $start) + strlen($find);
 }
// вторая функция  moveTo для парсинга данных
 function moveTo($str, $find, $start = 0)			
 {
 	$stop = moveTo($str, $find, $start);		
 	return strpos($str, $find, - $start - strlen($find));
 }

 $pos = moveTo($text, '<a href= "./bue"');// ищется все с нулевой позиции <a ............ +  strlen($find) перестваляет курсор на длину строки  
 $pos = moveTo($text, '<span>', $pos);// стартуй с позии начала текста в Ссыле до тега <span> +  strlen($find) препрыгиваем в нутрыь тегов <span>
 $res = readTo($text, '<', $pos); // вызываем метод readTo  читай в нутри тега <span> до позиции "<" 
	echo $res;
?>

/*Пример 2  подход  в ООП */

<?php 
/**
 * ООП
 */
class Parser
{
	protected $text; // 
	protected $pos;

	public function __construct($text)
	{
          $this->text = $text;  // передаем нужный кусок текста 
          $this->pos = 0;  // по умолчанию курсор в 0 
	}
	// метод moveTo 
	public function moveTo($find)				
	{		
		$this->pos=strpos($this->text, $find, $this->pos) + strlen($find)// работаем с этим тестом и с этой позицией 
		return $this;
	}
	// метод readTo 
	public function readTo($find)				
	{		
		$start = $this->pos;
		$this->moveTo($find);
		return substr($this->text, $start, $this->pos - $start - strlen($find))
	}
}

$text = '....
		<span>1</span>
		...
		<a href="./buy">
			Пройти на курс PHP
			<span>35000</span>
		</a>...';	
$parser = new Parser($text); // курсор переставляется в $parser
echo $parser->moveTo('<a href="./buy">')->moveTo('<span>')->readTo('<'); 

// в ооп иделаьная зона видеммости поля класса видны его методам  
// методы стартуют уже с оперделенными параметрами 
 ?>

 /*РАЗНИЦА МЕЖДУ ООП И ПРОЦЕДУРНЫМИ ПРОГРОММИРОВАНИЕМ*/

// в процедурном программировании нет исполнителя нет разницы кто выполняет процедуру 
// В ооп появляетя этот исполнитель 

найти <span> в МОЕМ ТЕХТ правее МОЕГО POS 
записать в МОЙ POS ...
МОЙ POS = МОЙ POS + 6
<?php 
 this->pos= strpos($this->text, '<span>', $this->pos);
 this->pos += strlen('<span>');
 //$this - текущий объект тоесть имполнитель инструкции  
 ?>

 /*ПРИМЕР с THIS*/
<?php 
	function a()
	{
			var_dump($this);
	}
a(); ОШИБКА 
 ?>

<?php 
class B{
	function a()
	{
			var_dump($this);
	}
}
$b = new B();
b->a(); 
 ?>
/*ПРИМЕР 2*/

<?php 
/**
 * 
 */
class Ecavator
{   // поля объекта 
	public $map; 
	public $pos; 

	function __construct($map) // метод который отробатывает при создании экземпляра класса 
	{
		$this->map = $map; // $map локальная переменная   
		$this->pos = 0;
	}

	public function move($stop) // метод 
	{   // инструкция метода 
		$this->pos = strpos($this->map, $stop, $this->pos) + strlen($stop);
	}

	public function excavate($stop)	
	{
		$start = $this->pos;
		$this->move($stop);

		for ($i=$start; $i < $this->pos - strlen($stop); $i++) { 
			$this->map[$i] = '_';
		}
	}
}

$ex1 = new Ecavator('---------e-----------b-------'); // создаем экземпляр класса 
$ex1->move('e');
$ex1->excavate('b');

echo $ex1->map;



 ?>




















