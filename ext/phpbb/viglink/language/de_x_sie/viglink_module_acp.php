<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
 * siehe language/de/AUTHORS.md und https://www.phpbb.de/go/ubersetzerteam
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
//
// Some characters you may want to copy&paste:
// ’ » „ “ …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'VigLink-Einstellungen',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink ist ein externer Affiliate-Dienst, der Provisionen aus Links generiert, die Benutzer in Ihrem Forum erstellen. Dazu werden die Links von VigLink um Tracking-Informationen ergänzt, ohne dass sich für den Benutzer beim Aufruf des Links etwas ändert (VigLink Convert). Wenn Besucher auf der Ziel-Website zum Beispiel Waren oder Dienstleistungen einkaufen, dann zahlen einige Händler VigLink eine Provision. Hiervon wird ein Anteil an das phpBB-Projekt weitergegeben. Indem Sie der Verwendung von VigLink und der Weitergabe der Provision an phpBB Limited zustimmen, unterstützen Sie das Open-Source-Projekt und tragen zu seiner finanziellen Absicherung bei.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Sie können diese Einstellungen jederzeit unter „<a href="%1$s">VigLink-Einstellungen</a>“ ändern.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Sie werden nicht länger auf diese Seite weitergeleitet, sobald Sie unten auf dieser Seite Ihre gewünschten Einstellungen vorgenommen und auf „Absenden“ geklickt haben.',
	'ACP_VIGLINK_ENABLE'			=> 'VigLink aktivieren',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktiviert die Verwendung des VigLink-Dienstes.',
	'ACP_VIGLINK_EARNINGS'			=> 'Beanspruchen Sie Ihre eigenen Provisionen (optional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Sie können die durch Ihr Forum generierten Provisionen selbst beanspruchen, indem Sie einen eigenen VigLink Convert-Account erstellen.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Die VigLink-Dienste wurden von phpBB Limited deaktiviert.',
	'ACP_VIGLINK_CLAIM'				=> 'Beanspruchen Sie Ihre Provisionen',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Sie können die in Ihrem Forum über VigLink generierten Provisionen selbst beanspruchen, anstatt sie phpBB Limited zu überlassen. Um Ihre Accounteinstellungen zu verwalten, erstellen Sie Ihren eigenen „VigLink Convert“ Account, indem Sie auf „VigLink Convert-Account“ klicken.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'VigLink Convert-Account',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Der Account-Link von VigLink Convert konnte nicht abgerufen werden.'
));
