<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_config' - Invalid query: DROP TABLE `main_config`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_module_dependency' - Invalid query: DROP TABLE `main_module_dependency`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_module' - Invalid query: DROP TABLE `main_module`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_group_privilege' - Invalid query: DROP TABLE `main_group_privilege`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_group_navigation' - Invalid query: DROP TABLE `main_group_navigation`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_group_widget' - Invalid query: DROP TABLE `main_group_widget`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_group_user' - Invalid query: DROP TABLE `main_group_user`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_group' - Invalid query: DROP TABLE `main_group`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_quicklink' - Invalid query: DROP TABLE `main_quicklink`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_navigation' - Invalid query: DROP TABLE `main_navigation`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_widget' - Invalid query: DROP TABLE `main_widget`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_privilege' - Invalid query: DROP TABLE `main_privilege`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_user' - Invalid query: DROP TABLE `main_user`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'main_authorization' - Invalid query: DROP TABLE `main_authorization`
ERROR - 2014-04-21 22:26:33 --> Query error: Unknown table 'ci_sessions' - Invalid query: DROP TABLE `ci_sessions`
ERROR - 2014-04-21 23:03:33 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'table' OR
			template_id NOT IN (SELECT template_id FROM nordrassil_project WHERE project_id=undefined)
ERROR - 2014-04-21 23:03:59 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'table' OR
			template_id NOT IN (SELECT template_id FROM nordrassil_project WHERE project_id=undefined)
ERROR - 2014-04-21 23:06:57 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-21 23:06:57 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-21 23:06:57 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-21 23:14:38 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-21 23:14:39 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-21 23:14:39 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-21 23:14:54 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-21 23:14:55 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-21 23:14:55 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
