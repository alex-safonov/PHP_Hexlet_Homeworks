print_r(((string)3.04)." times");
============================================================

$name = 'anneirB';
============================================================

print_r($eurosCount * 1.25);
print_r("\n");
print_r($eurosCount * 1.25 * 60);
============================================================

namespace App\Solution;
$stark = 'Arya';
// BEGIN (write your solution here)
print_r("Do you want to eat, {$stark}?");
// END
============================================================

$one = "Naharis";
$two = "Mormont";
$three = "Sand";
// BEGIN (write your solution here)
print_r($one[2].$two[1].$three[3].substr($two,1,2));
// END
============================================================

$text = 'mount';

// BEGIN (write your solution here)
print_r(ucfirst($text));
// END
============================================================

$text = 'Never forget what you are, for surely the world will not';

// BEGIN (write your solution here)
print_r("First: {$text[0]}");
print_r("\n");
print_r("Last: {$text[strlen($text) - 1]}");
// END
============================================================

namespace App\Solution;

// BEGIN (write your solution here)
print_r(min(3, 10, 22, -3, 0));
// END
============================================================

$text = 'knock!';

// BEGIN (write your solution here)
 
print_r(strtoupper($text)); 

// END
============================================================

$motto = 'Family, Duty, Honor';

// BEGIN (write your solution here)
 print_r(gettype($motto));
// END
============================================================

namespace App\Solution;

// BEGIN (write your solution here)
function printMotto() 
{
    print_r('Winter is coming');
}
// END
============================================================

function saveEmail()
{
    $email = "  SuppORT@hexlet.IO";
    // обрезаем пробельные символы
    // функция trim() удаляет пробелы из начала и конца строки
    $trimmedEmail = trim($email);
    $preparedEmail = strtolower($trimmedEmail);
    print_r($preparedEmail);
    // здесь будет запись в базу данных
}
============================================================

namespace App\Solution;

// BEGIN (write your solution here)
function getCurrentYear()
{
    $date = date('Y-m-d');
    $year = substr($date, 0, 4);
    $yearInt = (int)$year;
    return $yearInt;
}
// END
============================================================

function getLastChar($str)
{
    // Вычисляем индекс последнего символа как длина строки - 1
    return $str[strlen($str) - 1];
}
============================================================

namespace App\Solution;

// BEGIN (write your solution here)
function truncate($text, $count)
{
    $stringTemp = substr($text, 0, $count);
    $string = "{$stringTemp}...";
    return $string;
}
// END
============================================================

namespace App\Solution;

// BEGIN (write your solution here)
function getHiddenCard($number, $star = 4)
{
    $numberEnd = substr($number, -4, 4);
    $stars = str_repeat('*', $star);
    return "{$stars}{$numberEnd}"; 
}
// END
============================================================

namespace App\Solution;

// BEGIN (write your solution here)
function getAgeDifference($year1, $year2)
{
    $difference = abs($year1 - $year2);
    return "The age difference is {$difference}";
}
// END
============================================================

Задание
Реализуйте функцию getFormattedBirthday(), которая принимает на вход три параметра: 
день, месяц и год рождения, а возвращает их строкой в отформатированном виде, 
например: 20-02-1953.

namespace App\Solution;

// BEGIN (write your solution here)
function getFormattedBirthday($day, $month, $year)
{
    $result = sprintf('%02d-%02d-%d', $day, $month, $year);
    return $result;
}
// END
============================================================

Реализуйте функцию isLeapYear(), которая проверят год на високосность. 
Год будет високосным, если он кратен 400, или он одновременно кратен 4 и не кратен 100. 

namespace App\Solution;

// BEGIN (write your solution here)
function  isLeapYear($year)
{
    return ($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0));
}
// END
============================================================

Реализуйте функцию normalizeUrl(), которая выполняет так называемую нормализацию данных. Она принимает адрес сайта и возвращает его с https:// в начале.

Функция принимает адреса в виде:

АДРЕС
http://АДРЕС
https://АДРЕС
Но всегда возвращает URL в виде https://АДРЕС

namespace App\Solution;

// BEGIN (write your solution here)
function normalizeUrl($url)
{
    if (strpos($url, 'https://') !== false){
        return $url;
    } elseif (strpos($url, 'http://') !== false) {
        return str_replace("http://", "https://", $url);
    } else {
        return "https://{$url}";
    }
}
// END
============================================================

Реализуйте функцию convertText(), которая принимает на вход строку и, 
если первая буква не заглавная, возвращает перевернутый вариант исходной строки. 
Если первая буква заглавная, то строка возвращается без изменений.

namespace App\Solution;

// BEGIN (write your solution here)
function convertText($string)
{
    $firstLetter = $string[0];
    return $firstLetter === ucfirst($firstLetter) ? $string : strrev($string);
}
// END
============================================================

В этом задании вам предстоит реализовать простейший калькулятор. 
Функция calculate() принимает следующие аргументы:

операция в виде строки (поддерживаются 4 операции +, -, /, *)
два числа (первый и второй операнд)
Результатом работы функции является применения операции к этим числам. 
Если передается операция, которая не поддерживается, то функция должна вернуть null.

namespace App\Solution;

// BEGIN (write your solution here)
function calculate ($sign, $number1, $number2)
{
    switch ($sign) {
        case '+':
            return $number1 + $number2;
        case '-':
            return $number1 - $number2;
        case '/':
            return $number1 / $number2;
        case '*':
            return $number1 * $number2;
        default:
            return null;
    }
}
// END
============================================================

Модифицируйте функцию printNumbers() так, чтобы она выводила числа в обратном порядке. 
Для этого нужно идти от верхней границы к нижней. То есть, счетчик должен быть 
инициализирован максимальным значением, а в теле цикла его нужно уменьшать до нижней границы.

namespace App\Solution;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    $i = $firstNumber;

    while ($i !== 0) {
        print_r($i);
        print_r("\n");
        $i = $i - 1;
    }
    print_r('finished!');
}
    // END
============================================================

Реализуйте функцию joinNumbersFromRange(), 
которая объединяет все числа из диапазона в строку:

namespace App\Solution;

// BEGIN (write your solution here)
function joinNumbersFromRange($num1, $num2)
{
    $i = $num1;
      $sum = '';

      while ($i <= $num2) {
          $sum = "{$sum}{$i}"; 
          $i = $i + 1; 
      }
      return $sum;
}
// END
============================================================

Реализуйте функцию-предикат isArgumentsForSubstrCorrect(), которая принимает три аргумента:

строку
индекс, с которого начинать извлечение
длину извлекаемой подстроки
Не всегда значения, которые передаются в функцию, бывают корректными. 
Поэтому функция возвращает false, если хотя бы одно из условий истинно:

Отрицательная длина извлекаемой подстроки
Отрицательный заданный индекс
Заданный индекс выходит за границу всей строки
Длина подстроки в сумме с заданным индексом выходит за границу всей строки
В ином случае функция возвращает true.

Не забывайте, что индексы начинаются с 0, поэтому индекс последнего элемента 
это «длина строки минус 1».

namespace App\Solution;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $index, $lenghtStr)
{
    if (
        $lenghtStr < 0 ||
        $index < 0 ||
        $index > (strlen($str)-1) ||
        ($index + $lenghtStr) > (strlen($str))
        )
    {
        return false;
    } else {
        return true;
    }
}
// END
============================================================
