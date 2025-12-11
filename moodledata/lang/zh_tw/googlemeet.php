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
 * Strings for component 'googlemeet', language 'zh_tw', version '5.0'.
 *
 * @package     googlemeet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkweekdays'] = '選擇在日期範圍內的一週中那幾天。';
$string['date'] = '日期';
$string['duration'] = '長短';
$string['earlierto'] = '活動日期不能早於課程開始日期 ({$a})。';
$string['emailcontent'] = '電子郵件內容';
$string['emailcontent_default'] = '<p>%userfirstname%，您好</p>
<p>此封通知信件是提醒您【%coursename%】課程中，即將有 Google Meet 視訊會議活動。</p>
<p>會議名稱：<b>%googlemeetname%</b></p>
<p>時間： %eventdate% %duration% %timezone%</p>
<p>參加會議的網址： %url%</p>';
$string['emailcontent_help'] = '當發送通知給學生時，電子郵件內容可以使用以下這些欄位：
<ul>
<li>%userfirstname%</li>
<li>%userlastname%</li>
<li>%coursename%</li>
<li>%googlemeetname%</li>
<li>%eventdate%</li>
<li>%duration%</li>
<li>%timezone%</li>
<li>%url%</li>
<li>%cmid%</li>
</ul>';
$string['entertheroom'] = '進入會議室';
$string['eventdate'] = '會議日期';
$string['from'] = '從';
$string['googlemeet:addinstance'] = '新增Google Meet™視訊會議';
$string['googlemeet:editrecording'] = '編輯錄影紀錄';
$string['googlemeet:removerecording'] = '移除錄影紀錄';
$string['googlemeet:syncgoogledrive'] = '與Google雲端硬碟同步';
$string['googlemeet:view'] = '檢視 Google Meet™ 視訊會議內容';
$string['hide'] = '隱藏';
$string['invalideventenddate'] = '此日期不能早於“活動日期”';
$string['invalideventendtime'] = '結束時間必須大於開始時間';
$string['invalidstoredurl'] = '無法顯示此資源，Google Meet 網址無效。';
$string['jstableinfo'] = '顯示從{start} 到{end}的{rows}筆錄影紀錄';
$string['jstableinfofiltered'] = '顯示從{start} 到{end}的{rows}筆錄影紀錄(從{rowsTotal}筆錄影紀錄過濾)';
$string['jstableloading'] = '載入中...';
$string['jstablenorows'] = '找不到錄影紀錄';
$string['jstableperpage'] = '每頁{select}筆錄影紀錄';
$string['jstablesearch'] = '搜尋...';
$string['lastsync'] = '最後同步：';
$string['loading'] = '載入中';
$string['messageprovider:notification'] = 'Google Meet 視訊開會提醒';
$string['minutesbefore'] = '幾分鐘之前';
$string['minutesbefore_help'] = '在會議開始前幾分鐘前發送通知。';
$string['modulename'] = 'Google Meet™';
$string['modulename_help'] = 'Google Meet™視訊會議允許教師建立 Google Meet 會議室作為課程教學活動，並在視訊會議結束後提供給學生保存在Google雲端硬碟中的錄影資料。
<p>©2018 Google LLC 保留所有權利。<br/>
Google Meet 和 Google Meet Logo是 Google LLC 的註冊商標。</p>';
$string['modulenameplural'] = '用於 Moodle 的 Google Meet™';
$string['multieventdateexpanded'] = '展開重複會議時間的設定';
$string['name'] = '名稱';
$string['never'] = '從不';
$string['notification'] = '通知';
$string['notificationexpanded'] = '展開通知的設定';
$string['notify'] = '向學生發送通知';
$string['notify_help'] = '如果勾選，則會向學生發送會議活動開始日期的通知。';
$string['notifycationexpanded_desc'] = '建立新會議室時，預設將“通知”設定顯示為展開。';
$string['notifytask'] = 'Google Meet™ 的通知傳送任務';
$string['or'] = '或';
$string['play'] = '播放';
$string['pluginadministration'] = 'Google Meet™的管理';
$string['pluginname'] = 'Google Meet™視訊會議';
$string['privacy:metadata:googlemeet_notify_done:userid'] = '用戶ID';
$string['recording'] = '錄影';
$string['recordings'] = '錄影紀錄';
$string['recordingswiththename'] = '這個名稱的錄影：';
$string['recurrenceeventdate'] = '重複視訊會議日期';
$string['recurrenceeventdate_help'] = '此功能可以建立多個重複的視訊會議時間。

*<strong>重複那天</strong>：選擇您的班級每週開視訊會議的日子（例如，星期一/星期三/星期五）。

*<strong>間隔幾週</strong>：這允許設置頻率。 如果您的班級每週都會開會，請選擇 1；每兩週開會，選擇2個； 每 3 週，選擇 3，以此類推。

*<strong>結束週期</strong>: Select the last day of the meeting (the last day you want to take the recurring date of the event).';
$string['repeatasfollows'] = '重複會議活動的日期如下';
$string['repeatevery'] = '間隔幾週';
$string['repeaton'] = '重複那天';
$string['repeatuntil'] = '結束週期';
$string['roomcreator'] = '會議室建立者：';
$string['roomname'] = '會議室名稱';
$string['roomurl'] = '會議室網址';
$string['roomurlexpanded'] = '展開會議室網址設定';
$string['show'] = '顯示';
$string['strftimedm'] = '%a. %d %b.';
$string['strftimedmy'] = '%a. %d %b. %Y';
$string['strftimedmyhm'] = '%a. %d %b. %Y %H:%M';
$string['strftimehm'] = '%H:%M';
$string['syncwithgoogledrive'] = '與Google雲端硬碟同步';
$string['thereisnorecordingtoshow'] = '目前沒有錄影紀錄。';
$string['timeahead'] = '無法建立超過一年的多次重複時間，請調整開始和結束日期。';
$string['timedate'] = '%Y/%m/%d %H:%M';
$string['to'] = '到';
$string['today'] = '今天';
$string['upcomingevents'] = '即將來臨的事件';
$string['url_failed'] = '需要一個有效Google Meet的網址';
$string['visible'] = '顯示/隱藏';
$string['week'] = '週';
