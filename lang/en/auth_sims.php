<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_none', language 'en'.
 *
 * @package   auth_sims
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


$string['auth_simsdescription'] = 'Users can sign in and create valid accounts immediately, with no authentication against an external server and no confirmation via email.  Be careful using this option - think of the security and administration problems this could cause.';
$string['pluginname'] = 'SIMS DB authentication v1';
$string['auth_simscantconnect'] = 'Could not connect to the specified authentication database...';
$string['auth_simsdebugauthdb'] = 'Debug ADOdb';
$string['auth_simsdebugauthdbhelp'] = 'Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites.';
$string['auth_simsdeleteuser'] = 'Deleted user {$a->name} id {$a->id}';
$string['auth_simsdeleteusererror'] = 'Error deleting user {$a}';
// $string['auth_simsdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_simsextencoding'] = 'External db encoding';
$string['auth_simsextencodinghelp'] = 'Encoding used in external database';
$string['auth_simsextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <b>external database fields</b> that you specify here. <p>If you leave these blank, then defaults will be used.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>';
$string['auth_simsfieldpass'] = 'Name of the field containing passwords';
$string['auth_simsfieldpass_key'] = 'Password field';
$string['auth_simsfielduser'] = 'Name of the field containing usernames';
$string['auth_simsfielduser_key'] = 'Username field';
$string['auth_simshost'] = 'The computer hosting the database server. Use a system DSN entry if using ODBC.';
$string['auth_simshost_key'] = 'Host';
$string['auth_simschangepasswordurl_key'] = 'Password-change URL';
$string['auth_simsinsertuser'] = 'Inserted user {$a->name} id {$a->id}';
$string['auth_simsinsertuserduplicate'] = 'Error inserting user {$a->username} - user with this username was already created through \'{$a->auth}\' plugin.';
$string['auth_simsinsertusererror'] = 'Error inserting user {$a}';
$string['auth_simsname'] = 'Name of the database itself. Leave empty if using an ODBC DSN.';
$string['auth_simsname_key'] = 'DB name';
$string['auth_simspass'] = 'Password matching the above username';
$string['auth_simspass_key'] = 'Password';
$string['auth_simspasstype'] = '<p>Specify the format that the password field is using. MD5 hashing is useful for connecting to other common web applications like PostNuke.</p> <p>Use \'internal\' if you want the external database to manage usernames and email addresses, but Moodle to manage passwords. If you use \'internal\', you <i>must</i> provide a populated email address field in the external database, and you must execute both admin/cron.php and auth/db/cli/sync_users.php regularly. Moodle will send an email to new users with a temporary password.</p>';
$string['auth_simspasstype_key'] = 'Password format';
$string['auth_simsreviveduser'] = 'Revived user {$a->name} id {$a->id}';
$string['auth_simsrevivedusererror'] = 'Error reviving user {$a}';
$string['auth_simssaltedcrypt'] = 'Crypt one-way string hashing';
$string['auth_simssetupsql'] = 'SQL setup command';
$string['auth_simssetupsqlhelp'] = 'SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_simssuspenduser'] = 'Suspended user {$a->name} id {$a->id}';
$string['auth_simssuspendusererror'] = 'Error suspending user {$a}';
$string['auth_simssybasequoting'] = 'Use sybase quotes';
$string['auth_simssybasequotinghelp'] = 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!';
$string['auth_simstable'] = 'Name of the table in the database';
$string['auth_simstable_key'] = 'Table';
$string['auth_simstype'] = 'The database type (See the <a href="http://phplens.com/adodb/supported.databases.html" target="_blank">ADOdb documentation</a> for details)';
$string['auth_simstype_key'] = 'Database';
$string['auth_simsupdatinguser'] = 'Updating user {$a->name} id {$a->id}';
$string['auth_simsuser'] = 'Username with read access to the database';
$string['auth_simsuser_key'] = 'DB user';
$string['auth_simsusernotexist'] = 'Cannot update non-existent user: {$a}';
$string['auth_simsuserstoadd'] = 'User entries to add: {$a}';
$string['auth_simsuserstoremove'] = 'User entries to remove: {$a}';
// $string['pluginname'] = 'External database';
