<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2014-04-24 21:41:21 --> Query error: Column 'kd_gejala' in field list is ambiguous - Invalid query: SELECT *, count(kd_gejala) count_kd_gejala
FROM `sp_gejala`
LEFT JOIN `sp_analisa` ON `id_analisa`=`id_gejala`
WHERE `id_gejala` = 1
AND `id_analisa` = '4'
ERROR - 2014-04-24 21:42:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '>cms_complete_table_name(analisa).kd_gejala) count_kd_gejala
FROM `sp_gejala`
LE' at line 1 - Invalid query: SELECT *, count($this->cms_complete_table_name(analisa).kd_gejala) count_kd_gejala
FROM `sp_gejala`
LEFT JOIN `sp_analisa` ON `id_analisa`=`id_gejala`
WHERE `id_gejala` = 1
AND `id_analisa` = '4'
ERROR - 2014-04-24 21:43:46 --> Query error: Unknown column 'id_relasi_gejala' in 'where clause' - Invalid query: SELECT *, count(sp_analisa.kd_gejala) count_kd_gejala
FROM `sp_gejala`
LEFT JOIN `sp_analisa` ON `id_analisa`=`id_gejala`
WHERE `id_relasi_gejala` = 1
AND `id_analisa` = '4'
ERROR - 2014-04-24 21:43:55 --> Query error: Column 'id_analisa' in where clause is ambiguous - Invalid query: SELECT *, count(sp_analisa.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
LEFT JOIN `sp_analisa` ON `id_analisa`=`id_gejala`
WHERE `id_relasi_gejala` = 1
AND `id_analisa` = '4'
ERROR - 2014-04-24 21:44:30 --> Query error: Column 'id_analisa' in where clause is ambiguous - Invalid query: SELECT *, count(sp_analisa.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
LEFT JOIN `sp_analisa` ON `sp_analisa`.`id_analisa`=`sp_relasi_gejala`.`id_gejala`
WHERE `id_relasi_gejala` = 1
AND `id_analisa` = '4'
ERROR - 2014-04-24 21:44:51 --> Query error: Unknown column 'sp_relasi_gejala.id_gejala' in 'on clause' - Invalid query: SELECT *, count(sp_analisa.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
LEFT JOIN `sp_analisa` ON `sp_analisa`.`id_analisa`=`sp_relasi_gejala`.`id_gejala`
WHERE `id_relasi_gejala` = 1
AND `sp_analisa`.`id_analisa` = '4'
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:09 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 21:46:10 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 21:46:10 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 21:46:10 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 21:46:10 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:46:13 --> Severity: Notice  --> Undefined property: stdClass::$id C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 21:51:26 --> Query error: Unknown column 'sp_analisa.id_analisa' in 'where clause' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = 1
AND `sp_analisa`.`id_analisa` = '4'
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:05:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:05:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:05:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:05:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:05:53 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:53 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:53 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:53 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:53 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:53 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:54 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:05:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:20 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:20 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:20 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:21 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:22 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:06:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:06:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:06:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:06:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:26 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:06:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:06:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:06:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:06:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:07:00 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:27 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:28 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:29 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:30 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:31 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:31 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:37 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:38 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:39 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:40 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:41 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:47 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:48 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:49 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:50 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:51 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:51 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:51 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:09:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:56 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:57 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 136
ERROR - 2014-04-24 22:09:58 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:57 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:12:58 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:01 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 135
ERROR - 2014-04-24 22:13:08 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:13:10 --> Severity: Warning  --> array_keys() expects parameter 1 to be array, integer given C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:14:38 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:14:40 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:15:03 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:15:06 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:55 --> Severity: Notice  --> Uninitialized string offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:56 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 140
ERROR - 2014-04-24 22:22:56 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:22:56 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:22:57 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:22:57 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:22:57 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:22:59 --> Severity: Notice  --> Uninitialized string offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:00 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 140
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:15 --> Severity: Notice  --> Uninitialized string offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Notice  --> Uninitialized string offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:16 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:16 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:16 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:16 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:17 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:18 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:18 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:19 --> Severity: Notice  --> Uninitialized string offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:42 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:42 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:42 --> Severity: Notice  --> Uninitialized string offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:42 --> Severity: Notice  --> Uninitialized string offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:42 --> Severity: Notice  --> Uninitialized string offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:43 --> Severity: Notice  --> Uninitialized string offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:23:46 --> Severity: Notice  --> Uninitialized string offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:46 --> Severity: Notice  --> Uninitialized string offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:46 --> Severity: Notice  --> Uninitialized string offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:23:47 --> Severity: Notice  --> Uninitialized string offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:24:42 --> Severity: Notice  --> Undefined variable: cars C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 130
ERROR - 2014-04-24 22:24:42 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:43 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:44 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:24:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:44 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined variable: cars C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 130
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:47 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:48 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:53 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:54 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:54 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:54 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:54 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:54 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:24:54 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:54 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:54 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:54 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:55 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 139
ERROR - 2014-04-24 22:24:57 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 141
ERROR - 2014-04-24 22:25:22 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:22 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:22 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:22 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:23 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:24 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:24 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:24 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:26 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:27 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:36 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:37 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:37 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:37 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:37 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:38 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\sispakar\system\core\Exceptions.php:186) C:\xampp\htdocs\sispakar\system\libraries\Session\drivers\Session_cookie.php 725
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 3 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 4 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 5 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 6 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 7 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 8 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 9 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 10 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 11 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 12 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 13 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 14 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 15 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 16 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 17 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 18 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 19 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 20 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 21 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 22 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 23 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:25:40 --> Severity: Notice  --> Undefined offset: 24 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:30:48 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:30:48 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 140
ERROR - 2014-04-24 22:30:51 --> Severity: Notice  --> Undefined offset: 1 C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 138
ERROR - 2014-04-24 22:30:51 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 140
ERROR - 2014-04-24 22:53:21 --> Severity: Notice  --> Undefined variable: gej C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 145
ERROR - 2014-04-24 22:53:26 --> Severity: Notice  --> Undefined variable: gej C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 145
ERROR - 2014-04-24 22:55:03 --> Severity: Notice  --> Undefined variable: gej C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 145
ERROR - 2014-04-24 22:55:06 --> Severity: Notice  --> Undefined variable: gej C:\xampp\htdocs\sispakar\modules\pakar\controllers\manage_analisa.php 145
ERROR - 2014-04-24 22:56:18 --> Query error: Unknown column 'count_kd_gejala' in 'field list' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala, sum(count_kd_gejala) sum_count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = 1
AND `sp_relasi_gejala`.`id_analisa` = '4'
ERROR - 2014-04-24 23:23:09 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\system\database\DB_query_builder.php 651
ERROR - 2014-04-24 23:23:09 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = `Array`
AND `sp_relasi_gejala`.`id_analisa` = '4'
ERROR - 2014-04-24 23:23:25 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\system\database\DB_query_builder.php 651
ERROR - 2014-04-24 23:23:25 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = `Array`
AND `sp_relasi_gejala`.`id_analisa` = '4'
ERROR - 2014-04-24 23:24:01 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\system\database\DB_query_builder.php 651
ERROR - 2014-04-24 23:24:01 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = `Array`
AND `sp_relasi_gejala`.`id_analisa` = '4'
ERROR - 2014-04-24 23:24:25 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\system\database\DB_query_builder.php 651
ERROR - 2014-04-24 23:24:25 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = `Array`
AND `sp_relasi_gejala`.`id_analisa` = '4'
ERROR - 2014-04-24 23:25:02 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\system\database\DB_query_builder.php 651
ERROR - 2014-04-24 23:25:02 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT *, count(sp_relasi_gejala.kd_gejala) count_kd_gejala
FROM `sp_relasi_gejala`
WHERE `sp_relasi_gejala`.`kd_gejala` = `Array`
AND `sp_relasi_gejala`.`id_analisa` = '4'
