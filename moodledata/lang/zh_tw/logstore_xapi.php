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
 * Strings for component 'logstore_xapi', language 'zh_tw', version '5.0'.
 *
 * @package     logstore_xapi
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['backgroundmode'] = '按任務計劃發送Statement？';
$string['backgroundmode_desc'] = '這將迫使Moodle在後台將Statement發送給LRS，過cron任務來避免阻止頁面響應。這將使該處理程序較不即時，但有助於防止與LRS性能相關之不可測的Moodle表現。';
$string['endpoint'] = 'Endpoint';
$string['filters'] = '過濾日誌';
$string['filters_help'] = '啟用含有要被記錄的某些Action的過濾器。';
$string['logguests'] = '記錄訪客的Action';
$string['maxbatchsize'] = '批量最大值';
$string['maxbatchsize_desc'] = 'Statement分批發送給LRS。此設定能控制在一次的操作中會被發送的最大Statement數量。將此值設定為0的話，會導致所有可用的Statement立即發送，但不建議這樣做。';
$string['mbox'] = '以email辨識使用者';
$string['mbox_desc'] = '選取後，Statement會辨識使用者的email (mbox)。';
$string['password'] = 'secret/password';
$string['pluginadministration'] = 'Logstore xAPI 管理';
$string['pluginname'] = 'Logstore xAPI';
$string['routes'] = '包含這些路徑的操作';
$string['send_response_choices'] = '發送回覆選擇';
$string['send_response_choices_desc'] = '選擇題和排序題答案的Statement會以正確答案和潛在選擇發送給LRS';
$string['send_username'] = '以ID辨識使用者';
$string['send_username_desc'] = '選取後，Statement會辨識使用者的使用者名稱，但只有在「以email辨識使用者」被禁用時才會啟用。';
$string['sendidnumber'] = '發送課程和活動ID';
$string['sendidnumber_desc'] = 'Statement將在object擴展裡包含課程和活動ID（管理員定義）';
$string['settings'] = '一般設定';
$string['shortcourseid'] = '發送課程簡稱';
$string['shortcourseid_desc'] = 'Statement會包含課程的簡稱作為課程簡稱ID擴展';
$string['submit'] = '送出';
$string['taskemit'] = '向LRS發送記錄';
$string['username'] = 'key/username';
$string['xapi'] = 'xAPI';
$string['xapifieldset'] = '自定義範例欄位';
$string['xapisettingstitle'] = 'Logstore xAPI 設定';
