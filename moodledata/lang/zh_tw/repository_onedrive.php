<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_onedrive', language 'zh_tw', version '5.0'.
 *
 * @package     repository_onedrive
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = '內部和外部';
$string['cachedef_folder'] = '在這系統帳號的資料夾的 OneDrive 檔案編號';
$string['configplugin'] = '配置 OneDrive 外掛程式';
$string['confirmimportskydrive'] = '你確定要將在微軟的 SkyDrive倉儲的所有檔案匯入到微軟的 OneDrive 倉儲？一旦微軟OneDrive倉儲被配置好並開始運作，所有匯入的檔案會像以前一盎繼續運作。這些改變是無法取消並復原的';
$string['defaultreturntype'] = '預設的回傳類型';
$string['external'] = '外部的(只有連結儲存在Moodle中)';
$string['fileoptions'] = '要回傳的檔案類型和預設值是在此配置。注意，所有連結到外部的檔案將會被更新，因此擁有者是Moodle系統帳號。';
$string['importskydrivefiles'] = '從微軟的 SkyDrive 倉儲匯入檔案';
$string['internal'] = '內部的(檔案儲存在Moodle中)';
$string['issuer'] = 'OAuth 2 服務';
$string['issuer_help'] = '選擇 OAuth 2服務，他是配置來與 OneDrive API 對話。如果這服務不存在，你可能需要建立一個。';
$string['mysitenotfound'] = '你以前從未登入到 OneDrive 。你必須至少登入到 OneDrive 一次，它才可以用在Moodle上。';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Link to OAuth Services configuration">OAuth 2 服務配置</a';
$string['onedrive:view'] = '檢視 OneDrive 倉儲';
$string['owner'] = '擁有者：{$a}';
$string['pluginname'] = '微軟OneDrive';
$string['removetempaccesstask'] = '從控制的連結移除暫時的寫入';
$string['searchfor'] = '搜尋對象：{$a}';
$string['servicenotenabled'] = '還沒配置存取方式';
$string['skydrivefilesexist'] = '在微軟 SkyDrive 倉儲中找到的文件。此倉儲已被微軟放棄 - 文件可以自動匯入到微軟 OneDrive倉儲中。';
$string['skydrivefilesimported'] = '所有的檔案都是從微軟的 SkyDrive 倉儲匯入';
$string['skydrivefilesnotimported'] = '有一些檔案無法從微軟的 SkyDrive 倉儲匯入';
$string['supportedreturntypes'] = '支援的檔案';
