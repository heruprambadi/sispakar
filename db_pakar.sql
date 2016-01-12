-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2016 pada 18.52
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_pakar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(50) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(20) DEFAULT NULL,
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('fcfbe2213d4c31e652f526407cd27a47', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.106 Safari/537.36', 1452599163, 'a:5:{s:8:"cms_lang";s:10:"indonesian";s:13:"cms_user_name";s:5:"admin";s:11:"cms_user_id";s:1:"1";s:18:"cms_user_real_name";s:5:"admin";s:14:"cms_user_email";s:15:"admin@admin.com";}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_authorization`
--

CREATE TABLE IF NOT EXISTS `main_authorization` (
  `authorization_id` int(20) NOT NULL AUTO_INCREMENT,
  `authorization_name` varchar(50) NOT NULL,
  `description` text,
  PRIMARY KEY (`authorization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `main_authorization`
--

INSERT INTO `main_authorization` (`authorization_id`, `authorization_name`, `description`) VALUES
(1, 'Everyone', 'All visitor of the web are permitted (e.g:view blog content)'),
(2, 'Unauthenticated', 'Only non-member visitor, they who hasn''t log in yet (e.g:view member registration page)'),
(3, 'Authenticated', 'Only member (e.g:change password)'),
(4, 'Authorized', 'Only member with certain privilege (depend on group)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_config`
--

CREATE TABLE IF NOT EXISTS `main_config` (
  `config_id` int(20) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(50) NOT NULL,
  `value` text,
  `description` text,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `main_config`
--

INSERT INTO `main_config` (`config_id`, `config_name`, `value`, `description`) VALUES
(1, 'site_name', 'Sistem Pakar', 'Site title'),
(2, 'site_slogan', 'Diagnosa penyakit Kolitis Infeksi', 'Site slogan'),
(3, 'site_logo', '{{ base_url }}assets/nocms/images/No-CMS-logo.png', 'Site logo'),
(4, 'site_favicon', '{{ base_url }}assets/nocms/images/No-CMS-favicon.png', 'Site favicon'),
(5, 'site_footer', '<a href = "http://heruprambadi.com" target = "_blank">heruprambadi.com</a> © 2016', 'Site footer'),
(6, 'site_theme', 'cerulean', 'Site theme'),
(7, 'site_language', 'english', 'Site language'),
(8, 'max_menu_depth', '5', 'Depth of menu recursive'),
(9, 'cms_email_reply_address', 'no-reply@No-CMS.com', 'Email address'),
(10, 'cms_email_reply_name', 'admin of No-CMS', 'Email name'),
(11, 'cms_email_forgot_subject', 'Re-activate your account at No-CMS', 'Email subject sent when user forgot his/her password'),
(12, 'cms_email_forgot_message', 'Dear, {{ user_real_name }}<br />Click <a href="{{ site_url }}main/forgot/{{ activation_code }}">{{ site_url }}main/forgot/{{ activation_code }}</a> to reactivate your account', 'Email message sent when user forgot his/her password'),
(13, 'cms_email_signup_subject', 'Activate your account at No-CMS', 'Email subject sent to activate user'),
(14, 'cms_email_signup_message', 'Dear, {{ user_real_name }}<br />Click <a href="{{ site_url }}main/activate/{{ activation_code }}">{{ site_url }}main/activate/{{ activation_code }}</a> to activate your account', 'Email message sent to activate user'),
(15, 'cms_signup_activation', 'FALSE', 'Send activation email to new member. Default : false, Alternatives : true, false'),
(16, 'cms_email_useragent', 'Codeigniter', 'Default : CodeIgniter'),
(17, 'cms_email_protocol', 'smtp', 'Default : smtp, Alternatives : mail, sendmail, smtp'),
(18, 'cms_email_mailpath', '/usr/sbin/sendmail', 'Default : /usr/sbin/sendmail'),
(19, 'cms_email_smtp_host', 'ssl://smtp.googlemail.com', 'eg : ssl://smtp.googlemail.com'),
(20, 'cms_email_smtp_user', 'your_gmail_address@gmail.com', 'eg : your_gmail_address@gmail.com'),
(21, 'cms_email_smtp_pass', '', 'your password'),
(22, 'cms_email_smtp_port', '465', 'smtp port, default : 465'),
(23, 'cms_email_smtp_timeout', '30', 'default : 30'),
(24, 'cms_email_wordwrap', 'TRUE', 'Enable word-wrap. Default : true, Alternatives : true, false'),
(25, 'cms_email_wrapchars', '76', 'Character count to wrap at.'),
(26, 'cms_email_mailtype', 'html', 'Type of mail. If you send HTML email you must send it as a complete web page. Make sure you do not have any relative links or relative image paths otherwise they will not work. Default : html, Alternatives : html, text'),
(27, 'cms_email_charset', 'utf-8', 'Character set (utf-8, iso-8859-1, etc.).'),
(28, 'cms_email_validate', 'FALSE', 'Whether to validate the email address. Default: true, Alternatives : true, false'),
(29, 'cms_email_priority', '3', '1, 2, 3, 4, 5  Email Priority. 1 = highest. 5 = lowest. 3 = normal.'),
(30, 'cms_email_bcc_batch_mode', 'FALSE', 'Enable BCC Batch Mode. Default: false, Alternatives: true'),
(31, 'cms_email_bcc_batch_size', '200', 'Number of emails in each BCC batch.'),
(32, 'cms_google_analytic_property_id', '', 'Google analytics property ID (e.g: UA-30285787-1). Leave blank if you don''t want to use it.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_group`
--

CREATE TABLE IF NOT EXISTS `main_group` (
  `group_id` int(20) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) NOT NULL,
  `description` text,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `main_group`
--

INSERT INTO `main_group` (`group_id`, `group_name`, `description`) VALUES
(1, 'Admin', 'Every member of this group can do everything possible, but only programmer can turn the impossible into real :D'),
(2, 'Employee', 'Example');

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_group_navigation`
--

CREATE TABLE IF NOT EXISTS `main_group_navigation` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `group_id` int(5) NOT NULL,
  `navigation_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `main_group_navigation`
--

INSERT INTO `main_group_navigation` (`id`, `group_id`, `navigation_id`) VALUES
(1, 1, 31),
(2, 1, 32),
(3, 1, 30),
(7, 1, 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_group_privilege`
--

CREATE TABLE IF NOT EXISTS `main_group_privilege` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `group_id` int(5) NOT NULL,
  `privilege_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_group_user`
--

CREATE TABLE IF NOT EXISTS `main_group_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `group_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `main_group_user`
--

INSERT INTO `main_group_user` (`id`, `group_id`, `user_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_group_widget`
--

CREATE TABLE IF NOT EXISTS `main_group_widget` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `group_id` int(5) NOT NULL,
  `widget_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_module`
--

CREATE TABLE IF NOT EXISTS `main_module` (
  `module_id` int(20) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(50) NOT NULL,
  `module_path` varchar(100) NOT NULL,
  `version` varchar(50) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `main_module`
--

INSERT INTO `main_module` (`module_id`, `module_name`, `module_path`, `version`, `user_id`) VALUES
(4, 'admin.pakar', 'pakar', '0.0.0', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_module_dependency`
--

CREATE TABLE IF NOT EXISTS `main_module_dependency` (
  `module_dependency_id` int(20) NOT NULL AUTO_INCREMENT,
  `module_id` int(5) NOT NULL,
  `parent_id` int(5) NOT NULL,
  PRIMARY KEY (`module_dependency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_navigation`
--

CREATE TABLE IF NOT EXISTS `main_navigation` (
  `navigation_id` int(20) NOT NULL AUTO_INCREMENT,
  `navigation_name` varchar(50) NOT NULL,
  `parent_id` int(5) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `page_title` varchar(50) DEFAULT NULL,
  `page_keyword` varchar(100) DEFAULT NULL,
  `description` text,
  `url` varchar(100) DEFAULT NULL,
  `authorization_id` int(5) NOT NULL DEFAULT '1',
  `active` int(5) NOT NULL DEFAULT '1',
  `index` int(5) NOT NULL DEFAULT '0',
  `is_static` int(5) NOT NULL DEFAULT '0',
  `static_content` text,
  `only_content` int(5) NOT NULL DEFAULT '0',
  `default_theme` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`navigation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data untuk tabel `main_navigation`
--

INSERT INTO `main_navigation` (`navigation_id`, `navigation_name`, `parent_id`, `title`, `page_title`, `page_keyword`, `description`, `url`, `authorization_id`, `active`, `index`, `is_static`, `static_content`, `only_content`, `default_theme`) VALUES
(1, 'main_login', NULL, 'Login', 'Login', NULL, 'Visitor need to login for authentication', 'main/login', 2, 1, 1, 0, NULL, 0, NULL),
(2, 'main_forgot', NULL, 'Forgot Password', 'Forgot', NULL, 'Accidentally forgot password', 'main/forgot', 2, 1, 3, 0, NULL, 0, NULL),
(3, 'main_logout', NULL, 'Logout', 'Logout', NULL, 'Logout for deauthentication', 'main/logout', 3, 1, 2, 0, NULL, 0, NULL),
(4, 'main_management', NULL, 'CMS Management', 'CMS Management', NULL, 'The main management of the CMS. Including User, Group, Privilege and Navigation Management', 'main/management', 4, 1, 6, 0, NULL, 0, NULL),
(5, 'main_register', NULL, 'Register', 'Register', NULL, 'New User Registration', 'main/register/add', 2, 1, 4, 0, NULL, 0, NULL),
(6, 'main_change_profile', NULL, 'Change Profile', 'Change Profile', NULL, 'Change Current Profile', 'main/change_profile', 3, 1, 5, 0, NULL, 0, NULL),
(7, 'main_group_management', 4, 'Group Management', 'Group Management', NULL, 'Group Management', 'main/group', 4, 1, 0, 0, NULL, 0, NULL),
(8, 'main_navigation_management', 4, 'Navigation Management', 'Navigation Management', NULL, 'Navigation management', 'main/navigation', 4, 1, 3, 0, NULL, 0, NULL),
(9, 'main_privilege_management', 4, 'Privilege Management', 'Privilege Management', NULL, 'Privilege Management', 'main/privilege', 4, 1, 2, 0, NULL, 0, NULL),
(10, 'main_user_management', 4, 'User Management', 'User Management', NULL, 'Manage User', 'main/user', 4, 1, 1, 0, NULL, 0, NULL),
(11, 'main_module_management', 4, 'Module Management', 'Module Management', NULL, 'Install Or Uninstall Thirdparty Module', 'main/module_management', 4, 1, 5, 0, NULL, 0, NULL),
(12, 'main_change_theme', 4, 'Change Theme', 'Change Theme', NULL, 'Change Theme', 'main/change_theme', 4, 1, 6, 0, NULL, 0, NULL),
(13, 'main_widget_management', 4, 'Widget Management', 'Widget Management', NULL, 'Manage Widgets', 'main/widget', 4, 1, 4, 0, NULL, 0, NULL),
(14, 'main_quicklink_management', 4, 'Quick Link Management', 'Quick Link Management', NULL, 'Manage Quick Link', 'main/quicklink', 4, 1, 7, 0, NULL, 0, NULL),
(15, 'main_config_management', 4, 'Configuration Management', 'Configuration Management', NULL, 'Manage Configuration Parameters', 'main/config', 4, 1, 8, 0, NULL, 0, NULL),
(16, 'main_layout', 4, 'Layout Management', 'Layout Management', NULL, 'Manage Layout', 'main/layout', 4, 1, 9, 0, NULL, 0, NULL),
(17, 'main_index', NULL, 'Home', 'Home', NULL, 'There is no place like home :D', 'main/index', 1, 1, 0, 1, '<h3>\r\n	Selamat Datang {{ user_name }}</h3>\r\n<p>\r\n	<strong><span style="font-size:16px;">Pengertian Penyakit Kolitis</span></strong></p>\r\n<p>\r\n	Penyakit Kolitis adalah peradangan pada usus besar atau penyakit radang usus. Deskripsi asli dari penyakit ini oleh <em>Crohn, Ginzberg dan Oppenheimer</em> pada tahun 1932 melokalisasi penyakit pada segmen ileum. Namun demikian proses yang sama dapat mengenai mucosal bukal, <em>esophagus</em>, lambung dan duodenum, serta jejunum dan ileum. Radang kronis usus besar dibagi dalam dua bagian colitis ulseratif non spesifik dan penyakit cohrn usus besar (colitis granulomatosa). <strong>(Asdie,1995:1577)</strong></p>\r\n<p>\r\n	Sistem ini dibuat oleh <a href="http://heruprambadi.com" target="_blank">Heru Prambadi</a>, dan hanya untuk bahan pembelajaran. Silahkan kembangkan lagi jika anda berniat untuk menggunakannya untuk keperluan komersil.</p>\r\n<p>\r\n	Jika ingin bertanya seputar sistem ini, silahkan tanyakan di : <a href="https://www.facebook.com/groups/924598607617619/" target="_blank">Group Facebook Pemrogramab Web</a></p>\r\n', 0, NULL),
(18, 'main_language', NULL, 'Language', 'Language', NULL, 'Choose the language', 'main/language', 1, 1, 0, 0, NULL, 0, NULL),
(19, 'main_third_party_auth', NULL, 'Third Party Authentication', 'Third Party Authentication', NULL, 'Third Party Authentication', 'main/hauth/index', 1, 1, 0, 0, NULL, 0, NULL),
(30, 'pakar_index', NULL, 'Pakar', NULL, NULL, NULL, 'pakar/pakar', 1, 1, 7, 0, NULL, 0, NULL),
(31, 'pakar_manage_gejala', 30, 'Manajemen Gejala', NULL, NULL, NULL, 'pakar/manage_gejala', 4, 1, 0, 0, NULL, 0, NULL),
(32, 'pakar_manage_analisa', 30, 'Manajemen Analisa', NULL, NULL, NULL, 'pakar/manage_analisa', 3, 1, 1, 0, NULL, 0, NULL),
(33, 'pakar_manage_relasi_gejala', 30, 'Manajemen Relasi Gejala', NULL, NULL, NULL, 'pakar/manage_relasi_gejala', 4, 0, 2, 0, NULL, 0, NULL),
(34, 'pakar_manage_penyakit', 30, 'Manajemen Penyakit', 'Manajemen Penyakit', NULL, NULL, 'pakar/manage_penyakit', 4, 1, 0, 0, NULL, 0, NULL),
(35, 'pakar_manage_analisa_personal', 30, 'Lihat Laporan Personal', 'Lihat Laporan Personal', NULL, NULL, 'pakar/manage_analisa/lihat', 3, 1, 0, 0, NULL, 0, NULL),
(36, 'pakar_bantuan', 30, 'Bantuan', 'Bantuan', NULL, NULL, 'pakar/bantuan', 1, 1, 0, 0, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_privilege`
--

CREATE TABLE IF NOT EXISTS `main_privilege` (
  `privilege_id` int(20) NOT NULL AUTO_INCREMENT,
  `privilege_name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text,
  `authorization_id` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`privilege_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `main_privilege`
--

INSERT INTO `main_privilege` (`privilege_id`, `privilege_name`, `title`, `description`, `authorization_id`) VALUES
(1, 'cms_install_module', 'Install Module', 'Install Module is a very critical privilege, it allow authorized user to Install a module to the CMS.<br />By Installing module, the database structure can be changed. There might be some additional navigation and privileges added.<br /><br />You''d be better to give this authorization only authenticated and authorized user. (I suggest to make only admin have such a privilege)\r\n&nbsp;', 4),
(2, 'cms_manage_access', 'Manage Access', 'Manage access\r\n&nbsp;', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_quicklink`
--

CREATE TABLE IF NOT EXISTS `main_quicklink` (
  `quicklink_id` int(20) NOT NULL AUTO_INCREMENT,
  `navigation_id` int(5) NOT NULL,
  `index` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`quicklink_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `main_quicklink`
--

INSERT INTO `main_quicklink` (`quicklink_id`, `navigation_id`, `index`) VALUES
(1, 17, 1),
(2, 5, 7),
(5, 32, 10),
(6, 31, 8),
(7, 1, 2),
(8, 3, 3),
(9, 10, 6),
(10, 34, 9),
(11, 2, 5),
(12, 6, 4),
(13, 36, 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_widget`
--

CREATE TABLE IF NOT EXISTS `main_widget` (
  `widget_id` int(20) NOT NULL AUTO_INCREMENT,
  `widget_name` varchar(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `url` varchar(100) DEFAULT NULL,
  `authorization_id` int(5) NOT NULL DEFAULT '1',
  `active` int(5) NOT NULL DEFAULT '1',
  `index` int(5) NOT NULL DEFAULT '0',
  `is_static` int(5) NOT NULL DEFAULT '0',
  `static_content` text,
  `slug` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`widget_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `main_widget`
--

INSERT INTO `main_widget` (`widget_id`, `widget_name`, `title`, `description`, `url`, `authorization_id`, `active`, `index`, `is_static`, `static_content`, `slug`) VALUES
(1, 'section_top_fix', 'Top Fix Section', '', '', 1, 1, 1, 1, '{{ widget_name:quicklink }}', NULL),
(2, 'section_banner', 'Banner Section', '', '', 1, 1, 2, 1, '<div class="well hidden-phone span12">\r\n  <div class="span1">\r\n    \r\n  </div>\r\n  <div class="span10">\r\n  </div>\r\n</div>', NULL),
(3, 'section_left', 'Left Section', '', '', 1, 1, 3, 1, '', NULL),
(4, 'section_right', 'Right Section', '', '', 1, 1, 4, 1, '{{ widget_name:static_accessories_visitor_count }}', NULL),
(5, 'section_bottom', 'Bottom Section', '', '', 1, 1, 5, 1, '{{ site_footer }}', NULL),
(6, 'left_navigation', 'Left Navigation', '', 'main/widget_left_nav', 1, 1, 6, 0, NULL, NULL),
(7, 'top_navigation', 'Top Navigation', '', 'main/widget_top_nav', 1, 1, 7, 0, NULL, NULL),
(8, 'quicklink', 'Quicklinks', '', 'main/widget_quicklink', 1, 1, 8, 0, NULL, NULL),
(9, 'login', 'Login', 'Visitor need to login for authentication', 'main/widget_login', 2, 1, 9, 0, '<form action="{{ site_url }}main/login" method="post" accept-charset="utf-8"><label>Identity</label><br><input type="text" name="identity" value=""><br><label>Password</label><br><input type="password" name="password" value=""><br><input type="submit" name="login" value="Log In"></form>', 'sidebar, user_widget'),
(10, 'logout', 'User Info', 'Logout', 'main/widget_logout', 3, 1, 10, 1, '{{ language:Welcome }} {{ user_name }}<br />\r\n<a href="{{ site_url }}main/logout">{{ language:Logout }}</a><br />', 'sidebar, user_widget'),
(11, 'social_plugin', 'Share This Page !!', 'Addthis', 'main/widget_social_plugin', 1, 1, 11, 1, '<!-- AddThis Button BEGIN -->\r\n<div class="addthis_toolbox addthis_default_style "><a class="addthis_button_preferred_1"></a> <a class="addthis_button_preferred_2"></a> <a class="addthis_button_preferred_3"></a> <a class="addthis_button_preferred_4"></a> <a class="addthis_button_preferred_5"></a> <a class="addthis_button_preferred_6"></a> <a class="addthis_button_preferred_7"></a> <a class="addthis_button_preferred_8"></a> <a class="addthis_button_preferred_9"></a> <a class="addthis_button_preferred_10"></a> <a class="addthis_button_preferred_11"></a> <a class="addthis_button_preferred_12"></a> <a class="addthis_button_preferred_13"></a> <a class="addthis_button_preferred_14"></a> <a class="addthis_button_preferred_15"></a> <a class="addthis_button_preferred_16"></a> <a class="addthis_button_compact"></a> <a class="addthis_counter addthis_bubble_style"></a></div>\r\n<script src="http://s7.addthis.com/js/250/addthis_widget.js?domready=1" type="text/javascript"></script>\r\n<!-- AddThis Button END -->', 'sidebar'),
(12, 'google_search', 'Search', 'Search from google', '', 1, 0, 12, 1, '<!-- Google Custom Search Element -->\r\n<div id="cse" style="width: 100%;">Loading</div>\r\n<script src="http://www.google.com/jsapi" type="text/javascript"></script>\r\n<script type="text/javascript">// <![CDATA[\r\n    google.load(''search'', ''1'');\r\n    google.setOnLoadCallback(function(){var cse = new google.search.CustomSearchControl();cse.draw(''cse'');}, true);\r\n// ]]></script>', 'sidebar'),
(13, 'google_translate', 'Translate !!', '<p>The famous google translate</p>', '', 1, 0, 13, 1, '<!-- Google Translate Element -->\r\n<div id="google_translate_element" style="display:block"></div>\r\n<script>\r\nfunction googleTranslateElementInit() {\r\n  new google.translate.TranslateElement({pageLanguage: "af"}, "google_translate_element");\r\n};\r\n</script>\r\n<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>\r\n', 'sidebar'),
(14, 'calendar', 'Calendar', 'Indonesian Calendar', '', 1, 0, 14, 1, '<!-------Do not change below this line------->\r\n<div align="center" height="200px">\r\n    <iframe align="center" src="http://www.calendarlabs.com/calendars/web-content/calendar.php?cid=1001&uid=162232623&c=22&l=en&cbg=C3D9FF&cfg=000000&hfg=000000&hfg1=000000&ct=1&cb=1&cbc=2275FF&cf=verdana&cp=bottom&sw=0&hp=t&ib=0&ibc=&i=" width="170" height="155" marginwidth=0 marginheight=0 frameborder=no scrolling=no allowtransparency=''true''>\r\n    Loading...\r\n    </iframe>\r\n    <div align="center" style="width:140px;font-size:10px;color:#666;">\r\n        Powered by <a  href="http://www.calendarlabs.com/" target="_blank" style="font-size:10px;text-decoration:none;color:#666;">Calendar</a> Labs\r\n    </div>\r\n</div>\r\n\r\n<!-------Do not change above this line------->', 'sidebar'),
(15, 'google_map', 'Map', 'google map', '', 1, 0, 15, 1, '<!-- Google Maps Element Code -->\r\n<iframe frameborder=0 marginwidth=0 marginheight=0 border=0 style="border:0;margin:0;width:150px;height:250px;" src="http://www.google.com/uds/modules/elements/mapselement/iframe.html?maptype=roadmap&element=true" scrolling="no" allowtransparency="true"></iframe>', 'sidebar'),
(16, 'donate_nocms', 'Donate No-CMS', 'No-CMS Donation', NULL, 1, 1, 16, 1, '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">\r\n<input type="hidden" name="cmd" value="_s-xclick">\r\n<input type="hidden" name="hosted_button_id" value="YDES6RTA9QJQL">\r\n<input type="image" src="{{ base_url }}assets/nocms/images/donation.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="165px" height="auto" style="width:165px!important;" />\r\n<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">\r\n</form>', 'advertisement');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_analisa`
--

CREATE TABLE IF NOT EXISTS `sp_analisa` (
  `id_analisa` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `kd_gejala` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_analisa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `sp_analisa`
--

INSERT INTO `sp_analisa` (`id_analisa`, `username`, `kd_gejala`) VALUES
(4, 'admin', NULL),
(5, 'aaaa', NULL),
(6, 'tes', NULL),
(7, NULL, NULL),
(8, 'admin', NULL),
(9, 'puatkanani', NULL),
(10, 'admin', NULL),
(11, 'heruprambadi', NULL),
(12, 'heruprambadi', NULL),
(13, 'admin', NULL),
(14, 'heru', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_gejala`
--

CREATE TABLE IF NOT EXISTS `sp_gejala` (
  `kd_gejala` varchar(10) DEFAULT NULL,
  `nm_gejala` varchar(100) DEFAULT NULL,
  `id_gejala` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_gejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `sp_gejala`
--

INSERT INTO `sp_gejala` (`kd_gejala`, `nm_gejala`, `id_gejala`) VALUES
('GP001', 'Demam Tinggi', 1),
('GP002', 'Menggigil', 2),
('GP003', 'Dehidrasi', 3),
('GP004', 'Diare Berdarah', 4),
('GP005', 'Demam Ringan', 5),
('GP006', 'Kembung', 6),
('GP007', 'Menggigil ', 7),
('GP008', 'Kram Perut', 8),
('GP009', 'Muntah', 9),
('GP010', 'Anoreksia', 10),
('GP011', 'Nyeri Abdominal', 11),
('GP012', 'Kejang', 12),
('GP013', 'Diare berlendir dan berdarah', 13),
('GP014', 'Mual', 14),
('GP015', 'Disentri', 15),
('GP016', 'Anemia', 16),
('GP017', 'Konstipasi', 17),
('GP018', 'Badan lemah', 18),
('GP019', 'Abdomen kanan bawah', 19),
('GP020', 'Penurunan berat badan', 20),
('GP021', 'Nanah atau lendir dalam tinja', 21),
('GP022', 'Diare berlendir', 22),
('GP023', 'Nyeri Perut Kronik', 23),
('GP024', 'Diare Ringan Bercampur darah', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_penyakit`
--

CREATE TABLE IF NOT EXISTS `sp_penyakit` (
  `id_penyakit` int(10) NOT NULL AUTO_INCREMENT,
  `nama_penyakit` varchar(25) NOT NULL,
  `gejala` varchar(255) DEFAULT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id_penyakit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `sp_penyakit`
--

INSERT INTO `sp_penyakit` (`id_penyakit`, `nama_penyakit`, `gejala`, `solusi`) VALUES
(1, 'Kolitis Shigelosis', NULL, '<p>\r\n	- Dengan memberikan antibiotik seperti ampisilin 4x500 mg perhari,</p>\r\n<p>\r\n	- Kontrimoksazol 2x2 tablet perhari,</p>\r\n<p>\r\n	- Tetrasiklin 4x500 mg perhari selama 5 hari,</p>\r\n<p>\r\n	- Antibiotik lain seperti golongan kuinolon dan sefalosporingenerasi III terutama pada pasien dengan gejala klinik yang berat,</p>\r\n<p>\r\n	- Kompres,</p>\r\n<p>\r\n	- Minum air putih banyak,</p>\r\n<p>\r\n	- Distraksi pengalihan.</p>\r\n'),
(2, 'Kolitis Tuberkulosa', NULL, '<p>\r\n	- INH 5-10 mg/kgBB atau 400 mg sekali sehari,</p>\r\n<p>\r\n	- Entambutol 15-25 mg/kgBB atau 900-1200 mg sekali sehari,</p>\r\n<p>\r\n	- Rifampisin 10 mg/kgBB atau 400-600 mg sekali sehari,</p>\r\n<p>\r\n	- Pirazinaimid 25-3 mg/kgBB atau 1,5-2 g sekali sehari,</p>\r\n<p>\r\n	- Makan makanan yang tinggi serat,</p>\r\n<p>\r\n	- Distraksi pengalihan,</p>\r\n<p>\r\n	- Meletakkan botol pada daerah yang nyeri,</p>\r\n<p>\r\n	- Meletakkan botol yang berisi air panas pada daerha yang nyeri.</p>\r\n'),
(3, 'Kolitis Pseudomembran', NULL, '<p>\r\n	- Meletakkan botol yang berisi air panas pada daerha yang nyeri,</p>\r\n<p>\r\n	- Metronidazol dengan dosis per oral 250-500 mg 4 x sehari selama 7-10 hari,</p>\r\n<p>\r\n	- Vankomisin dengan dosis per oral 125-500 mg 4x sehari selama s7-14 hari,</p>\r\n<p>\r\n	- Kolestiramin dengan dosis per oral 125-500 mg 4x sehari selama 5-10 hari,</p>\r\n<p>\r\n	- Memberikan kuman laktobasilus atau ragi (saccharomyces boulardi) selama beberapa minggu.</p>\r\n'),
(4, 'Kolitis Amebik', NULL, '<p>\r\n	- Diberi obat iodoquinol (diiodohidroxyquin) 650 mg 3 x sehari selama 20 hari atau atau paromomycine 500 mg 3 x sehari selama 10 hari,</p>\r\n<p>\r\n	- Metronidazol 750 mg 3 x sehari selama 5-10 hari,</p>\r\n<p>\r\n	- Meletakkan botol yang berisi air panas pada daerha yang nyeri.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_relasi_gejala`
--

CREATE TABLE IF NOT EXISTS `sp_relasi_gejala` (
  `id_relasi_gejala` int(20) NOT NULL AUTO_INCREMENT,
  `fk_id_analisa` varchar(10) DEFAULT NULL,
  `fk_kd_gejala` varchar(10) DEFAULT NULL,
  `urutan` int(10) NOT NULL,
  PRIMARY KEY (`id_relasi_gejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data untuk tabel `sp_relasi_gejala`
--

INSERT INTO `sp_relasi_gejala` (`id_relasi_gejala`, `fk_id_analisa`, `fk_kd_gejala`, `urutan`) VALUES
(9, '4', '3', 0),
(10, '5', '10', 0),
(11, '5', '3', 1),
(12, '5', '1', 2),
(13, '5', '13', 3),
(14, '5', '12', 4),
(15, '5', '8', 5),
(16, '5', '2', 6),
(17, '5', '9', 7),
(18, '5', '11', 8),
(19, '4', '8', 1),
(20, '4', '14', 2),
(21, '4', '21', 3),
(28, '6', '14', 4),
(30, '6', '16', 0),
(31, '6', '18', 1),
(32, '6', '22', 2),
(33, '6', '6', 3),
(34, '7', '19', 0),
(35, '7', '10', 1),
(36, '7', '5', 2),
(37, '8', '19', 0),
(38, '8', '16', 1),
(39, '8', '10', 2),
(40, '9', '16', 0),
(41, '9', '10', 1),
(42, '9', '18', 2),
(43, '10', '16', 0),
(44, '10', '6', 1),
(45, '10', '14', 2),
(46, '10', '23', 3),
(47, '11', '19', 0),
(48, '11', '16', 1),
(49, '11', '10', 2),
(50, '11', '18', 3),
(51, '12', '16', 0),
(52, '12', '10', 1),
(53, '12', '18', 2),
(54, '12', '3', 3),
(55, '13', '16', 0),
(56, '13', '10', 1),
(57, '13', '18', 2),
(58, '14', '19', 0),
(59, '14', '16', 1),
(60, '14', '10', 2),
(61, '14', '3', 3),
(62, '14', '1', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sp_relasi_gejala_penyakit`
--

CREATE TABLE IF NOT EXISTS `sp_relasi_gejala_penyakit` (
  `id_relasi_gejala` int(20) NOT NULL AUTO_INCREMENT,
  `fk_id_penyakit` int(10) DEFAULT NULL,
  `fk_kd_gejala` varchar(10) DEFAULT NULL,
  `urutan` int(10) NOT NULL,
  PRIMARY KEY (`id_relasi_gejala`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `sp_relasi_gejala_penyakit`
--

INSERT INTO `sp_relasi_gejala_penyakit` (`id_relasi_gejala`, `fk_id_penyakit`, `fk_kd_gejala`, `urutan`) VALUES
(1, 1, '10', 0),
(2, 1, '3', 1),
(3, 1, '1', 2),
(4, 1, '13', 3),
(5, 1, '12', 4),
(6, 1, '8', 5),
(7, 1, '2', 6),
(8, 1, '9', 7),
(9, 1, '11', 8),
(10, 2, '19', 0),
(11, 2, '10', 1),
(12, 2, '5', 2),
(13, 2, '4', 3),
(14, 2, '24', 4),
(15, 2, '15', 5),
(16, 2, '17', 6),
(17, 2, '23', 7),
(18, 2, '20', 8),
(19, 3, '3', 0),
(20, 3, '5', 1),
(21, 3, '24', 2),
(22, 3, '8', 3),
(23, 3, '14', 4),
(24, 3, '21', 5),
(25, 3, '23', 6),
(26, 4, '16', 0),
(27, 4, '18', 1),
(28, 4, '5', 2),
(29, 4, '6', 3),
(30, 4, '14', 4),
(31, 4, '23', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `activation_code` varchar(50) DEFAULT NULL,
  `real_name` varchar(100) DEFAULT NULL,
  `active` int(5) NOT NULL DEFAULT '1',
  `alamat` varchar(30) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(12) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `riwayat_penyakit` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `activation_code`, `real_name`, `active`, `alamat`, `sex`, `pekerjaan`, `no_tlp`, `tanggal`, `riwayat_penyakit`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin', 1, '', '', '', '', '0000-00-00', ''),
(3, 'heru', 'heruprambadi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, 'Heru Prambadi', 1, NULL, '1', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
