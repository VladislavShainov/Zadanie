<!DOCTYPE html>
<html lang="RU">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Подсчет рабочих и выходных дней</title>
</head>
<body>

<form method="post" action="">
<label for="month">Выберите месяц:</label>
<select name="month" id="month">
<?php
$months = [
1 => 'Январь',
2 => 'Февраль',
3 => 'Март',
4 => 'Апрель',
5 => 'Май',
6 => 'Июнь',
7 => 'Июль',
8 => 'Август',
9 => 'Сентябрь',
10 => 'Октябрь',
11 => 'Ноябрь',
12 => 'Декабрь',
];

foreach ($months as $key => $value) {
echo "<option value=\"$key\">$value</option>";
}
?>
</select>

<label for="year">Выберите год:</label>
<select name="year" id="year">
<?php
$startYear = 2022;
$endYear = 2032;

for ($i = $startYear; $i <= $endYear; $i++) {
echo "<option value=\"$i\">$i</option>";
}
?>
</select>

<button type="submit" name="submit">Подсчитать</button>
</form>

<?php
if (isset($_POST['submit'])) {
$selectedMonth = $_POST['month'];
$selectedYear = $_POST['year'];

$firstDay = date('Y-m-01', strtotime("$selectedYear-$selectedMonth-01"));
$lastDay = date('Y-m-t', strtotime("$selectedYear-$selectedMonth-01"));

$workdays = 0;
$weekendDays = 0;

$currentDay = strtotime($firstDay);

while ($currentDay <= strtotime($lastDay)) {
$dayOfWeek = date('N', $currentDay);

if ($dayOfWeek >= 1 && $dayOfWeek <= 5) {
$workdays++;
} else {
$weekendDays++;
}

$currentDay = strtotime('+1 day', $currentDay);
}

setlocale(LC_TIME, 'RU_RU.UTF-8');

$firstDayOfWeek = strftime('%A', strtotime($firstDay));
$lastDayOfWeek = strftime('%A', strtotime($lastDay));

echo "<p>В месяце $months[$selectedMonth] $selectedYear:</p>";
echo "<p>Рабочих дней: $workdays</p>";
echo "<p>Выходных дней: $weekendDays</p>";
echo "<p>Первый день месяца: $firstDayOfWeek</p>";
echo "<p>Последний день месяца: $lastDayOfWeek</p>";
}
?>

</body>
</html>