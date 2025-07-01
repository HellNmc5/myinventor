<?php
include ('F:/Empty_Plagin/myinventor/inc/menu.php');

Session::checkRight("config", READ);

Html::header(__('SNMP Info', 'pcinfo'), $_SERVER['PHP_SELF'], "plugins", "pcinfo", "snmp_page");

// Параметры SNMP
$deviceIP = '192.168.1.100';
$community = 'public';
$version = '2c';

// OID для описания устройства
$sysDescrOID = '1.3.6.1.2.1.1.1.0';
// OID для списка портов
$ifDescrOID = '1.3.6.1.2.1.2.2.1.2';

function getSnmpValue($ip, $community, $oid) {
    $result = @snmpget($ip, $community, $oid, 1000000, 2);
    return $result ? trim(str_replace('STRING: ', '', $result), '"') : 'N/A';
}

function getSnmpWalk($ip, $community, $oid) {
    $walk = @snmpwalk($ip, $community, $oid, 1000000, 2);
    return $walk ?: [];
}

// Получаем описание устройства
$deviceInfo = getSnmpValue($deviceIP, $community, $sysDescrOID);

// Получаем список портов
$ports = getSnmpWalk($deviceIP, $community, $ifDescrOID);

// Выводим данные
echo "<h2 class='center'>Информация о коммутаторе</h2>";
echo "<table class='tab_cadre' cellpadding='5' style='margin:auto;'>";
echo "<tr><th>Параметр</th><th>Значение</th></tr>";
echo "<tr><td>Описание устройства</td><td>" . htmlspecialchars($deviceInfo) . "</td></tr>";
echo "</table>";

echo "<h3 class='center'>Список портов</h3>";
echo "<table class='tab_cadre' cellpadding='5' style='margin:auto;'>";
echo "<tr><th>Номер порта</th><th>Описание</th></tr>";
foreach ($ports as $index => $port) {
    $port = trim(str_replace('STRING: ', '', $port), '"');
    echo "<tr><td>" . ($index + 1) . "</td><td>" . htmlspecialchars($port) . "</td></tr>";
}
echo "</table>";

Html::footer();
?>
