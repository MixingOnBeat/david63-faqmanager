<?php
/**
*
* @package FAQ&nbsp;Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'FAQ_MANAGER'				=> 'FAQ Manager',
	'FAQ_MANAGE'				=> 'Manage FAQs',

	'BACKUP_LOCATION_NO_WRITE'	=> 'Unable to create a backup file.  Please check the directory permissions for store/faq_backup/ and every directory and file in it.',
	'BAD_FAQ_FILE'				=> 'The file you are attempting to edit is not a FAQ file.',

	'CAT_ALREADY_EXISTS'		=> 'A category with the given name already exists.',
	'CATEGORY_NOT_EXIST'		=> 'The requested category does not exist.',
	'CREATE_CATEGORY'			=> 'Create Category',
	'CREATE_FIELD'				=> 'Create Field',

	'DELETE_CAT'				=> 'Delete Category',
	'DELETE_CAT_CONFIRM'		=> 'Are you sure you want to delete this category?  All fields within the category will be removed if you do this!',
	'DELETE_VAR'				=> 'Delete Field',
	'DELETE_VAR_CONFIRM'		=> 'Are you sure you want to delete this field?',

	'FAQ_CAT_LIST'				=> 'Here you can see and edit existing Categories.<br /><br /><strong>Note that a category named -- is the section break for the FAQ display page on phpBB</strong>',
	'FAQ_EDIT_SUCCESS'			=> 'The FAQ was updated successfully.',
	'FAQ_FILE_NOT_EXIST'		=> 'The file you are attempting to edit does not exist.',
	'FAQ_FILE_NO_WRITE'			=> 'Unable to update the file.  Please check the file permissions for the file you are attempting to edit.',
	'FAQ_FILE_SELECT'			=> 'Select the file you would like to edit.',

	'LANGUAGE'					=> 'Language',
	'LOAD_BACKUP'				=> 'Load Backup',

	'NAME'						=> 'Name',
	'NOT_ALLOWED_OUT_OF_DIR'	=> 'You are not allowed to edit files out of the language directory.',
	'NO_FAQ_FILES'				=> 'No Available FAQ Files.',
	'NO_FAQ_VARS'				=> 'There are no FAQ variables in the file.',

	'VAR_ALREADY_EXISTS'		=> 'A field with the given name already exists.',
	'VAR_NOT_EXIST'				=> 'The requested variable does not exist.',
));