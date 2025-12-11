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
 * Strings for component 'report_coursesize', language 'zh_tw', version '5.0'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = '所有課程';
$string['backupsize'] = '備份大小';
$string['cachedef_topuserdata'] = '資料總量最大的使用者的快取資訊';
$string['calcmethod'] = '更新主要報告';
$string['calcmethodcron'] = '排程任務';
$string['calcmethodhelp'] = '若由排程工作執行計算，報表將在排定時間更新並快取結果以供日後檢視。建議使用此方式而非即時計算，因為即時查詢可能會造成大量負載或執行緩慢。';
$string['calcmethodlive'] = '頁面載入時';
$string['catsystembackupuse'] = '系統與類別備份使用量為 {$a}。';
$string['catsystemuse'] = '非屬使用者與課程的系統與類別使用量為 {$a}。';
$string['coursebackupbytes'] = '課程 {$a->shortname} 的備份使用了 {$a->backupbytes} 位元組';
$string['coursebytes'] = '課程 {$a->shortname} 使用了 {$a->bytes} 位元組';
$string['coursereport'] = '外掛類型摘要 - 注意：這可能與主要課程列表不同，但通常更為準確。';
$string['coursesize'] = '課程大小';
$string['coursesize:view'] = '檢視課程大小報表';
$string['coursesize_desc'] = '<p>本報表僅提供大略的數值。如果某個檔案在一門或多門課程中多次使用，即使 Moodle 僅在磁碟上儲存一份實體檔案，報表也會將每次使用都列入統計。</p>';
$string['coursesummary'] = '(檢視統計)';
$string['diskusage'] = '磁碟用量';
$string['emptycourseshidden'] = '本報表已排除未使用任何檔案儲存空間的課程。';
$string['error_unsupported_branch'] = '無法升級此舊版課程報表外掛 - 在升級至本版本前，請檢查或刪除舊資料表。';
$string['exportcsv'] = '匯出CSV';
$string['filearea'] = '檔案區域';
$string['lastupdate'] = '(最後更新 {$a})';
$string['lastupdatenever'] = '等待排程工作產生統計資料。';
$string['nouserfiles'] = '未列出使用者檔案。';
$string['numberofusers'] = '前幾名使用者';
$string['numberofusershelp'] = '報表將顯示使用空間最多的使用者人數。';
$string['pluginname'] = '課程大小';
$string['privacy:metadata'] = '課程大小外掛不會儲存任何個人資料。';
$string['sharedusage'] = '共享的用量';
$string['sharedusagecourse'] = '約有 {$a} 被其他課程共用。';
$string['sitefilesusage'] = '檔案用量報表';
$string['sizepermitted'] = '(允許使用上限: {$a}MB)';
$string['totalsitedata'] = '網站資料總使用量: {$a}';
$string['userstopnum'] = '用戶(前{$a}名)';
