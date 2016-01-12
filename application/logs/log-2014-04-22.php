<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2014-04-22 00:25:00 --> The session cookie data did not match what was expected.
ERROR - 2014-04-22 00:26:06 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:26:06 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:26:06 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:26:23 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:26:23 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:26:23 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:28:52 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'table' OR
			template_id NOT IN (SELECT template_id FROM nordrassil_project WHERE project_id=undefined)
ERROR - 2014-04-22 00:30:23 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:30:24 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:30:24 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:31:37 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:31:37 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:31:37 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:38:53 --> The session cookie data did not match what was expected.
ERROR - 2014-04-22 00:39:51 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:39:51 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:39:51 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:39:56 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:39:56 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:39:56 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:40:11 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:40:11 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:40:11 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:42:03 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:42:03 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:42:04 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:42:57 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:42:57 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:42:58 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:43:58 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:43:59 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:43:59 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:44:28 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:44:28 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:44:28 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:45:08 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:45:08 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:45:08 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 00:45:13 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT option_id
			FROM nordrassil_template_option
			WHERE option_type <>'column' OR
			template_id NOT IN (
				SELECT template_id
				FROM nordrassil_project, nordrassil_table
				WHERE nordrassil_project.project_id =
				    nordrassil_table.project_id AND nordrassil_table.table_id=undefined)
ERROR - 2014-04-22 00:45:13 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT table_id
			FROM nordrassil_table
			WHERE project_id NOT IN (
				SELECT project_id
				FROM nordrassil_table
				WHERE table_id=undefined)
ERROR - 2014-04-22 00:45:13 --> Query error: Unknown column 'undefined' in 'where clause' - Invalid query: SELECT column_id
			FROM nordrassil_column
			WHERE
				(table_id<>undefined) OR
				(role='detail many to many') OR
				(role='detail one to many')
ERROR - 2014-04-22 13:38:38 --> The session cookie data did not match what was expected.
ERROR - 2014-04-22 13:38:38 --> The session cookie data did not match what was expected.
ERROR - 2014-04-22 13:53:43 --> The session cookie data did not match what was expected.
ERROR - 2014-04-22 19:24:25 --> The session cookie data did not match what was expected.
ERROR - 2014-04-22 19:25:08 --> Severity: Notice  --> Array to string conversion C:\xampp\htdocs\sispakar\application\libraries\Grocery_CRUD.php 2346
ERROR - 2014-04-22 21:43:11 --> The session cookie data did not match what was expected.
