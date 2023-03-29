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


