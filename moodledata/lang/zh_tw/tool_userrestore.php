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
 * Strings for component 'tool_userrestore', language 'zh_tw', version '5.0'.
 *
 * @package     tool_userrestore
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['button:backtocourse'] = '回到課程';
$string['button:backtoform'] = '回到用戶復原表單';
$string['button:userrestore:continue'] = '復原用戶';
$string['config:tool:disabled'] = '用戶復原功能已經在全站工具配置中關閉。';
$string['email:user:restore:subject'] = '你的帳號已經被復原。';
$string['form:label:email'] = '電子郵件主體';
$string['form:label:sendmail'] = '送出電子郵件';
$string['form:label:subject'] = '電子郵件主旨';
$string['hasloginfo'] = '有日誌檔資料?';
$string['label:users:potential'] = '潛在用戶';
$string['link:currentstatus:overview'] = '檢視目前狀態的變更';
$string['link:log'] = '復原用戶日誌檔';
$string['link:log:overview'] = '檢視狀態變更日誌檔';
$string['link:restore'] = '復原用戶';
$string['link:viewstatus'] = '檢視狀態清單';
$string['pluginname'] = '用戶復原';
$string['promo'] = 'moodle 的用戶復原外掛程式';
$string['promodesc'] = '此一外掛程式是由 Sebsoft 網站託管和軟體發展公司所撰寫
    (<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
    {$a}<br /><br />';
$string['restore:deleted-user-not-found'] = '無法復原用戶: 沒有找到被刪除的用戶';
$string['restore:email-exists'] = '無法復原用戶: 電子郵件地址 \'{$a->email}\'與另一活躍用互相同';
$string['restore:user-mnet-not-local'] = '無法復原用戶';
$string['restore:user-restored'] = '用戶 <i>\'{$a->username}\'</i> (\'{$a->email}\')已經復原成功';
$string['restore:username-exists'] = '無法復原用戶:  用戶名稱\'{$a->username}\'與另一活躍用互相同';
$string['restoresettings'] = '用戶復原的設定';
$string['setting:cleanlogsafter'] = '清理日誌檔的頻率';
$string['setting:desc:cleanlogsafter'] = '設定清理日誌檔的間隔時間。凡超過這一間隔時間的日誌檔都會被移除掉。';
$string['setting:desc:enablecleanlogs'] = '啟用或關閉這歷程日誌檔的自動清理';
$string['setting:enablecleanlogs'] = '啟用日誌檔清理';
$string['table:log:all'] = '歷次的復原日誌檔';
$string['table:log:latest'] = '最近一次的復原日誌檔';
$string['table:logs'] = '日誌檔';
$string['task:logclean'] = '清理用戶復原的日誌檔';
$string['th:action'] = '動作';
$string['th:mailedto'] = '電子郵件寄給';
$string['th:mailsent'] = '電子郵件已送出';
$string['th:name'] = '名稱';
$string['th:restored'] = '已復原';
$string['th:timecreated'] = '建立的時間';
$string['th:userid'] = '用戶編號';
$string['timedeleted'] = '刪除的時間';
