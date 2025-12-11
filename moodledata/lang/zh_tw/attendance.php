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
 * Strings for component 'attendance', language 'zh_tw', version '5.0'.
 *
 * @package     attendance
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['Aacronym'] = '缺';
$string['Afull'] = '缺席';
$string['Eacronym'] = '假';
$string['Efull'] = '請假';
$string['Lacronym'] = '遲';
$string['Lfull'] = '遲到';
$string['Pacronym'] = '參';
$string['Pfull'] = '出席';
$string['absenteereport'] = '缺席報告';
$string['acronym'] = '縮寫';
$string['add'] = '新增';
$string['addedrecip'] = '已新增 {$a} 位新收件者';
$string['addedrecips'] = '已新增 {$a} 位新收件者';
$string['addmultiplesessions'] = '多段上課時間';
$string['addsession'] = '新增上課時段';
$string['adduser'] = '新增用戶';
$string['addwarning'] = '新增警告';
$string['all'] = '全部';
$string['allcourses'] = '所有課程';
$string['allowupdatestatus'] = '允許學生更新自己的出缺席紀錄';
$string['allowupdatestatus_desc'] = '若勾選，學生在自行回報出缺席後，仍可更新該上課時段的出缺席紀錄。';
$string['allowupdatestatus_help'] = '若勾選，學生在自行回報出缺席後，仍可更新該上課時段的出缺席紀錄。';
$string['allpast'] = '過去全部';
$string['allsessions'] = '所有時段';
$string['allsessionstotals'] = '已選取上課時段的總計';
$string['attendance:addinstance'] = '新增一項出席活動';
$string['attendance:canbelisted'] = '出現於點名單';
$string['attendance:changeattendances'] = '更改出缺席';
$string['attendance:changepreferences'] = '更改偏好設定';
$string['attendance:export'] = '匯出報表';
$string['attendance:import'] = '從檔案 (CSV) 匯入上課時段';
$string['attendance:manageattendances'] = '管理出席狀況';
$string['attendance:managetemporaryusers'] = '管理臨時學生';
$string['attendance:manualautomark'] = '允許手動自動標記程序';
$string['attendance:takeattendances'] = '記錄出缺席狀況';
$string['attendance:view'] = '檢視出席情況';
$string['attendance:viewreports'] = '檢視報告';
$string['attendance:viewsummaryreports'] = '檢視課程摘要報告';
$string['attendance:warningemails'] = '可以訂閱缺席使用者的電子郵件通知';
$string['attendance_already_submitted'] = '您的出缺席已經設置好了。';
$string['attendance_no_status'] = '沒有可用的有效狀態 — 您可能太晚記錄出缺席了。';
$string['attendancedata'] = '出缺席資料';
$string['attendancefile'] = '出缺席檔案 (csv 格式)';
$string['attendancefile_help'] = '檔案必須是包含標題列的 CSV 檔，並須有用來辨識使用者與記錄出缺席時間的欄位，例如 (email,scantime) 或 (username,time)';
$string['attendancegrade'] = '出缺席成績';
$string['attendancenotset'] = '您必須設定出席情況';
$string['attendancenotstarted'] = '此一課程還未開始記錄出缺席狀況';
$string['attendancepercent'] = '出缺席比率';
$string['attendancereport'] = '出缺席';
$string['attendanceslogged'] = '出席紀錄';
$string['attendancestaken'] = '出席了';
$string['attendancesuccess'] = '已成功紀綠出缺席狀況';
$string['attendanceupdated'] = '出席狀況已更新';
$string['attendanceuserreport'] = '出缺席報告';
$string['attforblockdirstillexists'] = '舊的mod/attforblock目錄 － 仍然出現 －您必須在伺服器中刪除此目錄再可以進行更新運作。';
$string['attrecords'] = '出席記錄';
$string['autoassignstatus'] = '自動選擇可用的最高狀態';
$string['autoassignstatus_help'] = '如果選擇此項，學生將被自動分配到可用的最高等級。';
$string['automark'] = '自動標記';
$string['automark_help'] = '允許自動完成標記。
如果“是”，學生在他們第一次進入課程時將自動被標記。
如果“在課程結束時設為未標記”，任何未標記出勤的學生將被設定為所選的未標記狀態。';
$string['automarkall'] = '是';
$string['automarkclose'] = '上課時段結束時設為未標記';
$string['automarkingcomplete'] = '自動標記完成';
$string['automarkingnotavailableyet'] = '本上課時段設定於結束時自動標記，目前尚未結束。';
$string['automarkingnotenabled'] = '本上課時段未啟用自動標記功能';
$string['automarktask'] = '檢查需要自動標記的上課時段';
$string['automarkuseempty'] = '自動標記的狀態可用性處理';
$string['automarkuseempty_desc'] = '若勾選，於自動標記時將允許「可用時間」為空或未設定的狀態項目';
$string['autorecorded'] = '系統自動記錄';
$string['availability'] = '自行標記的可用性';
$string['availability_help'] = '限制此狀態的可用性。<br>若選擇「限時」，請設定從上課時段開始後，狀態可用的分鐘數。此設定適用於學生自行回報出缺席時。';
$string['availabilityalways'] = '總是';
$string['availabilitylimitedtime'] = '有限時間';
$string['availabilityno'] = '否';
$string['availablebeforesession'] = '上課時段開始前可用';
$string['availablebeforesession_help'] = '當學生自行標記出缺席時，允許在上課時段開始前選擇此狀態。';
$string['averageattendance'] = '平均出席率';
$string['averageattendancegraded'] = '平均出席率';
$string['backtoparticipants'] = '返回參與者列表';
$string['below'] = '低於 {$a}%';
$string['calclose'] = '結束';
$string['calendarevent'] = '為上課時段建立行事曆事件';
$string['calendarevent_help'] = '如果啟用，將為此上課時段建立行事曆事件。
如果禁用，此上課時段的任何現有行事曆事件都將被刪除。';
$string['caleventcreated'] = '已成功建立上課時段的行事曆事件';
$string['caleventdeleted'] = '已順利刪除連線的行事曆事件';
$string['calmonths'] = '一月,二月,三月,四月,五月,六月,七月,八月,九月,十月,十一月,十二月';
$string['calshow'] = '選擇日期';
$string['calweekdays'] = '日, 一, 二, 三, 四, 五, 六';
$string['cannottakeforgroup'] = '你不能參加{$a}群組課程';
$string['cannottakethisgroup'] = '您不是此出缺席上課時段所屬課程群組的成員，因此您的出缺席紀錄未被保存。';
$string['cantaddstatus'] = '新增狀態時，必須設定縮寫與說明。';
$string['canthidestatus'] = '此狀態已在此出缺席活動中被使用，因此無法隱藏。';
$string['categoryreport'] = '課程類別報告';
$string['changeattendance'] = '更改出席狀況';
$string['changeduration'] = '變更時長';
$string['changesession'] = '變更上課時段';
$string['checkweekdays'] = '選擇會落在你選擇的上課日期範圍內的平日。';
$string['closed'] = '本上課時段目前不開放自行標記。';
$string['column'] = '欄';
$string['columnmap'] = '欄位對應';
$string['columnmap_help'] = '請為每個顯示的欄位選擇對應的 CSV 檔案欄位。';
$string['columns'] = '欄';
$string['commonsession'] = '所有學生';
$string['commonsessions'] = '所有學生';
$string['confirm'] = '確認';
$string['confirmcolumnmappings'] = '確認欄位對應';
$string['confirmdeletehiddensessions'] = '你確定要刪除安排在此課程開始日期({$a->date})之前的 {$a->count}個上課時間嗎？';
$string['confirmdeleteuser'] = '您確定要刪除用戶 \'{$a->fullname}\' ({$a->email}) 嗎?<br/>他的全部出缺席紀錄將被永久刪除掉。';
$string['copyfrom'] = '複製出缺席資料';
$string['countofselected'] = '選出個數';
$string['course'] = '課程';
$string['coursemessage'] = '訊息通知課程用戶';
$string['courseshortname'] = '課程簡稱';
$string['coursesummary'] = '課程摘要報告';
$string['createmultiplesessions'] = '建立多段上課時間';
$string['createmultiplesessions_help'] = '此功能允許您一步驟建立多個上課時段。
這些上課時段從基礎時段的日期開始，並持續到「重複直到」的日期。

 * <strong>重複於</strong>：選擇課程開課的星期幾（例如，星期一／星期三／星期五）。
 * <strong>每隔</strong>：這是設定重複頻率。如果您的課程每週開課，選擇 1；若是每隔一週開課，選擇 2；每隔三週開課，選擇 3，依此類推。
 * <strong>重複直到</strong>：選擇課程的最後一天（即您希望記錄出席的最後一天）。';
$string['createonesession'] = '新建此課程的一個上課時段';
$string['csvdelimiter'] = 'CSV 分隔符號';
$string['currentlyselectedusers'] = '當前選擇的使用者';
$string['customexportfields'] = '匯出自訂使用者資料欄位';
$string['customexportfields_help'] = '在匯出報告中顯示的額外自訂使用者資料欄位。';
$string['customfields'] = '自訂上課時段欄位';
$string['date'] = '日期';
$string['days'] = '日';
$string['defaultdisplaymode'] = '預設顯示模式';
$string['defaults'] = '預設';
$string['defaultsessionsettings'] = '預設上課時段設定';
$string['defaultsessionsettings_help'] = '這些設定定義了所有新上課時段的預設值。';
$string['defaultsettings'] = '預設出缺席設定';
$string['defaultsettings_help'] = '這些設定定義了所有新出缺席的預設值。';
$string['defaultstatus'] = '預設狀態集';
$string['defaultsubnet'] = '預設網路位址';
$string['defaultsubnet_help'] = '出缺席記錄可透過指定逗號分隔的部分或完整 IP 位址來限制在特定子網路中進行。這是建立新上課時段時使用的預設值。';
$string['defaultview'] = '登入後的預設檢視';
$string['defaultview_desc'] = '這是教師第一次登入時顯示的預設檢視。';
$string['defaultwarnings'] = '預設警告設定';
$string['defaultwarningsettings'] = '預設警告設定';
$string['defaultwarningsettings_help'] = '這些設定定義了所有新警告的預設值。';
$string['delete'] = '刪除';
$string['deletecheckfull'] = '您確定要完全刪除 {$a}，並包含所有使用者資料嗎？';
$string['deletedgroup'] = '有關此時段的群組經已被刪除';
$string['deletehiddensessions'] = '刪除所有隱藏的上課時段';
$string['deletelogs'] = '刪除出缺席資料';
$string['deleteselected'] = '刪除所選';
$string['deletesession'] = '刪除上課時段';
$string['deletesessions'] = '刪除所有上課時段';
$string['deleteuser'] = '刪除用戶';
$string['deletewarningconfirm'] = '您確定要刪除這個警告嗎？';
$string['deletingsession'] = '刪除此課程的上課時段';
$string['deletingstatus'] = '刪除課程之狀態';
$string['description'] = '描述';
$string['display'] = '顯示';
$string['displaymode'] = '顯示模式';
$string['donotusepaging'] = '不使用分頁';
$string['downloadexcel'] = '以Excel格式下載';
$string['downloadooo'] = '以OpenOfficel格式下載';
$string['downloadtext'] = '以文字格式下載';
$string['duration'] = '持續時間';
$string['editsession'] = '編輯上課時段';
$string['edituser'] = '編輯用戶';
$string['emailcontent'] = '電子郵件內容';
$string['emailcontent_default'] = '嗨 %userfirstname%，
您在 %coursename% %attendancename% 的出席率已低於 %warningpercent%，目前為 %percent%，我們希望您一切安好！

為了讓本課程發揮最大功效，您應該提高出席率，如果您需要任何進一步的支援，請與我們聯繫。';
$string['emailcontent_help'] = '發送警告給學生時，會從此欄位取得電子郵件內容。 可以使用以下的萬用字元：
<ul>
    <li>%coursename%</li>
    <li>%userfirstname%</li>
    <li>%userlastname%</li>
    <li>%userid%</li>
    <li>%warningpercent%</li>
    <li>%attendancename%</li>
    <li>%cmid%</li>
    <li>%numtakensessions%</li>
    <li>%points%</li>
    <li>%maxpoints%</li>
    <li>%percent%</li>
</ul>';
$string['emailsubject'] = '電子郵件主旨';
$string['emailsubject_default'] = '出缺席警告';
$string['emailsubject_help'] = '當警告發送給學生時，會從此字段中取出電子郵件主題。';
$string['emailuser'] = '發送電子郵件給用戶';
$string['emailuser_help'] = '如果勾選此選項，警告將發送給學生。';
$string['emptyacronym'] = '縮寫不允許是空白。狀態紀錄未被更新。';
$string['emptydescription'] = '描述不允許是空白。狀態紀錄未被更新。';
$string['enablecalendar'] = '建立行事曆事件';
$string['enablecalendar_desc'] = '如果啟用，將為每個上課時段建立一個行事曆事件。 更改此設置後，您應該執行重設行事曆報告。';
$string['enablewarnings'] = '啟用警告';
$string['enablewarnings_desc'] = '這允許為出席紀錄定義警告設置，並在出席率低於設定的閾值時通過電子郵件通知用戶。<br/><strong>警告：這是新功能，尚未進行廣泛測試。請自行承擔風險使用，並如果您認為功能運作良好，請在 Moodle 論壇中提供反饋。</strong>';
$string['encoding'] = '編碼';
$string['encoding_help'] = '這是指學生 ID 卡上使用的條碼編碼類型。典型的條碼編碼方案包括 Code-39、Code-128 和 UPC-A。';
$string['endofperiod'] = '期程結束';
$string['endtime'] = '連線結束時間';
$string['enrolmentend'] = '用戶註冊結束{$a}';
$string['enrolmentstart'] = '用戶註冊開始{$a}';
$string['enrolmentsuspended'] = '選課已暫停';
$string['enterpassword'] = '輸入密碼';
$string['error:coursehasnoattendance'] = '課程簡稱為 {$a} 的課程中沒有出缺席活動。';
$string['error:coursenotfound'] = '找不到簡稱為 {$a} 的課程。';
$string['error:qrcode'] = '必須啟用「允許學生自行記錄出席」才能使用 QR Code！已略過。';
$string['error:sessioncourseinvalid'] = '上課時段的課程無效！已略過。';
$string['error:sessiondateinvalid'] = '上課時段的日期無效！已略過。';
$string['error:sessionendinvalid'] = '上課時段的結束時間無效！已略過。';
$string['error:sessionstartinvalid'] = '上課時段的開始時間無效！已略過。';
$string['error:statusnotfound'] = '使用者：{$a->extuser} 的狀態值無法找到：{$a->status}';
$string['error:timenotreadable'] = '使用者：{$a->extuser} 的掃描時間 {$a->scantime} 無法由 strtotime 轉換。';
$string['error:userduplicate'] = '匯入資料中發現使用者 {$a} 重複，請每位使用者僅保留一筆紀錄。';
$string['error:usernotfound'] = '在此課程中找不到 {$a->userfield} 為 {$a->extuser} 的使用者。';
$string['errorgroupsnotselected'] = '選出一個或多個群組';
$string['errorinaddingsession'] = '增加上課期間有誤';
$string['erroringeneratingsessions'] = '產生上課期間誤';
$string['eventdurationupdated'] = '上課期間已更新';
$string['eventreportviewed'] = '出缺席報告已檢視';
$string['eventscreated'] = '行事曆事件已建立';
$string['eventsdeleted'] = '行事曆事件已刪除';
$string['eventsessionadded'] = '上課時段已添加';
$string['eventsessiondeleted'] = '上課時段已刪除';
$string['eventsessionipshared'] = '出缺席自我記錄 IP 衝突';
$string['eventsessionsimported'] = '上課時段已匯入';
$string['eventsessionupdated'] = '上課時段已更新';
$string['eventstatusadded'] = '已新增狀態';
$string['eventstatusupdated'] = '狀態已更新';
$string['eventstudentattendancesessionsupdated'] = '上課時段報告已更新';
$string['eventstudentattendancesessionsviewed'] = '上課時段報告已檢視';
$string['eventtaken'] = '出缺席已記錄';
$string['eventtakenbystudent'] = '出缺席由學生自行記錄';
$string['export'] = '匯出';
$string['extrarestrictions'] = '額外限制';
$string['formattexttype'] = '格式設定';
$string['from'] = '從：';
$string['gradebookexplanation'] = '成績單上的分數';
$string['gradebookexplanation_help'] = '出缺席模組表示您至今日的出席成績，依您所獲得的點數及您理當獲得的點數而定。此成績不含未來上課時間。成績單上您的出席成績則是依您出席(包含未來上課)及整個課程您可能獲得的點數的百分比計算。准此，出現在出缺席模組及成績單上的出席成績可能點數不同，但百分比是相同的。例如您已由10點中獲得8點(80%出席率)而整個課程的出席率值50點，則出缺席模組會出示8/10而成績單則顯示40/50。您雖未取得40點但是40等於您目前出席率的80%。您於出席模組取得的點數絕不會變少，因為它只算到目前的出席日數。但是您績單上的點數基於您未來的出席可能有增減，因為它是計算整個課程的。';
$string['graded'] = '已評分的上課時段';
$string['gridcolumns'] = '網格欄位';
$string['group'] = '群組';
$string['groups'] = '群組';
$string['groupsession'] = '學生群組';
$string['groupsessionsby'] = '依群組分上課時段';
$string['hiddensessions'] = '隱藏的上課時段';
$string['hiddensessions_help'] = '如果上課日早於課程開始日，上課日即會看不見。

您可以利用此項功能來隱藏早先的上課日，而不需要去刪除它們。
請記得只有看得到的上課日才會出現在成績簿中。';
$string['hiddensessionsdeleted'] = '所有隱藏的上課時段已被刪除';
$string['hideextrauserdetails'] = '隱藏額外的使用者資訊';
$string['hidensessiondetails'] = '隱藏上課時段詳情';
$string['identifyby'] = '依據以下資訊識別學生';
$string['import'] = '匯入';
$string['importfile'] = '匯入檔案';
$string['importfile_help'] = 'CSV 檔案必須包含標題列，以及用來識別群組、時間與上課日期的欄位。<br/>上傳檔案後的下一頁將會顯示所有可對應欄位的範例。<br/>範例：<br/>groups;sessiondate;from;to<br/>groupA;05-10-2022;13:00;14:00<br/>groupB;05-10-2022;14:00;15:00';
$string['importsessions'] = '匯入上課時段';
$string['importstatus'] = '出缺席狀態欄位';
$string['importstatus_help'] = '這允許在匯入時包含出缺席狀態值，例如 P（出席）、L（遲到）或 A（缺席）';
$string['includeabsentee'] = '計算缺席報告時包含此上課時段';
$string['includeabsentee_help'] = '如果勾選，將在計算缺席報告時包含此上課時段。';
$string['includeall'] = '選擇全部上課時段';
$string['includedescription'] = '包含上課時段描述';
$string['includenottaken'] = '包含未點名的上課時段';
$string['includeqrcode'] = '包含 QR code';
$string['includeremarks'] = '含備註';
$string['incorrectpassword'] = '您輸入的密碼不正確，您的出缺席未被記錄，請輸入正確的密碼。';
$string['incorrectpasswordshort'] = '密碼錯誤，出缺席未記錄。';
$string['indetail'] = '詳細...';
$string['indicator:cognitivedepth'] = '出缺席認知';
$string['indicator:cognitivedepth_help'] = '此指標基於學生在出缺席活動中達到的認知深度。';
$string['indicator:cognitivedepthdef'] = '出缺席認知';
$string['indicator:cognitivedepthdef_help'] = '參與者在此分析區間內已達到出缺席活動所提供的認知參與百分比（等級 = 未查看、查看）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = '出缺席社交';
$string['indicator:socialbreadth_help'] = '此指標基於學生在出缺席活動中達到的社交廣度。';
$string['indicator:socialbreadthdef'] = '出缺席社交';
$string['indicator:socialbreadthdef_help'] = '參與者在此分析區間內已達到出缺席活動所提供的社交參與百分比（等級 = 無參與、僅參與者）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['invalidaction'] = '你必須選擇一動作';
$string['invalidemails'] = '您必須指定現有使用者帳號的地址，無法找到：{$a}';
$string['invalidimportfile'] = '檔案格式無效。';
$string['invalidsessionenddate'] = '此日期不能早於上課時段日期。';
$string['invalidsessionendtime'] = '結束時間必須大於開始時間。';
$string['invalidstatus'] = '您選擇了無效的狀態，請再試一次。';
$string['iptimemissing'] = '釋放分鐘數無效';
$string['jumpto'] = '跳至';
$string['keepsearching'] = '繼續搜尋';
$string['lasttaken'] = '上次出缺席紀錄';
$string['manualtriggerauto'] = '手動觸發自動標記';
$string['marksessionimportcsvhelp'] = '此表單允許您上傳包含使用者識別碼和狀態的 CSV 檔案—狀態欄位可以是狀態縮寫或該使用者的出缺席紀錄時間。如果傳遞時間值，則系統將根據該時間嘗試指派具有最高分數的狀態值。';
$string['maxpossible'] = '可得最大值';
$string['maxpossible_help'] = '顯示每位使用者在尚未出席的所有上課時段（包含過去和未來）中，若每次皆獲得最高分數時，所能達到的成績：
<ul>
    <li><strong>分數</strong>: 每位使用者在所有上課時段中可達到的最高總分。</li>
    <li><strong>百分比</strong>: 每位使用者在所有上課時段中可達到的最高出席百分比。</li>
</ul>';
$string['maxpossiblepercentage'] = '可得最大百分比';
$string['maxpossiblepoints'] = '可得最大分數';
$string['maxwarn'] = '最多電子郵件警告次數';
$string['maxwarn_help'] = '警告最多可發送的次數（每個上課時段僅發送一次警告）';
$string['mergeuser'] = '合併用戶';
$string['messagedselecteduserfailed'] = '無法成功傳送訊息給一位或多位使用者。請開啟除錯模式以獲取更多資訊。';
$string['mobilesessionfrom'] = '顯示最近之前的上課時段';
$string['mobilesessionfrom_help'] = '在行動裝置 App 上標記出缺席時，可以限制僅顯示從此設定值以後開始的上課時段。';
$string['mobilesessionto'] = '顯示未來的上課時段';
$string['mobilesessionto_help'] = '可以限制只顯示少量未來的上課時段。';
$string['mobilesettings'] = '行動 App 設定';
$string['mobilesettings_help'] = '這些設定用來控制 Moodle 行動 App 的行為。';
$string['modulename'] = '出缺席';
$string['modulename_help'] = '出席活動可使老師點名，並讓學生觀看自己之出席記錄。
教師可建立多段上課時間，並註記"出席"，"缺席"，"遲到"，"請假"，或修改之以符合自己的需求。
可以匯出個別學生之報告表或全班的。';
$string['modulenameplural'] = '出缺席';
$string['months'] = '月';
$string['moreattendance'] = '此頁點名已完成';
$string['moveleft'] = '向左移動';
$string['moveright'] = '向右移動';
$string['multisessionexpanded'] = '展開多個上課時段';
$string['multisessionexpanded_desc'] = '建立新上課時段時，預設展開「多個時段」設定';
$string['mustselectusers'] = '必須選出要匯出的用戶';
$string['name'] = '名稱';
$string['newdate'] = '新日期';
$string['newduration'] = '新上課期間';
$string['newstatusset'] = '狀態的新設定';
$string['noabsentstatusset'] = '目前使用的出缺席狀態組中，沒有設定「未登記」時要使用的狀態。';
$string['noattendanceusers'] = '無法匯出任何資料，因為尚未有學生就讀此課程。';
$string['noattforuser'] = '此用戶沒有出缺席記錄';
$string['noautomark'] = '已停用';
$string['nocapabilitytotakethisattendance'] = '您嘗試變更 cmid 為 {$a} 的上課時段出缺席資料，但您沒有修改的權限。';
$string['nodescription'] = '一般上課時段';
$string['noeventstoreset'] = '沒有需要更新的行事曆事件。';
$string['nogroups'] = '此活動已設定為使用群組，但課程中尚未建立任何群組。';
$string['noguest'] = '訪客無法看出席狀況';
$string['noofdaysabsent'] = '缺席天數';
$string['noofdaysexcused'] = '請假天數';
$string['noofdayslate'] = '遲到天數';
$string['noofdayspresent'] = '出席天數';
$string['nosessiondayselected'] = '未選擇上課日期';
$string['nosessionexists'] = '此課程沒有上課時段';
$string['nosessionsselected'] = '尚未選取上課時段';
$string['notfound'] = '在此課程中找不到出缺席活動！';
$string['notifytask'] = '傳送警示通知給使用者';
$string['notmember'] = '非成員';
$string['notset'] = '未設定';
$string['nounmarkedstatusset'] = '此上課時段（ID：{$a->sessionid}）未設定「未標記」的狀態，請更新<a href="{$a->url}">狀態組合</a>以修正。';
$string['noupgradefromthisversion'] = '出缺席模組無法從你目前安裝的 attforblock 版本升級。請刪除 attforblock 或將其升級到最新版後，再安裝新的出缺席模組。';
$string['nousers'] = '找不到已修課的使用者來記錄出缺席。';
$string['numsessions'] = '上課時段數量';
$string['numsessionstaken'] = '已記錄的上課時段數量';
$string['olddate'] = '舊日期';
$string['onactivitycompletion'] = '活動完成時';
$string['onlyselectedusers'] = '匯出特定用戶';
$string['overallsessions'] = '涵蓋所有上課時段';
$string['overallsessions_help'] = '顯示所有上課時段（包含尚未記錄的過去與未來時段）的統計資料：
<ul>
    <li><strong>上課時段</strong>: 上課時段總數。</li>
    <li><strong>得分</strong>: 根據已記錄的時段所授予的分數。</li>
    <li><strong>百分比</strong>: 已授予分數與所有時段最高可得分數的百分比。</li>
</ul>';
$string['oversessionstaken'] = '已記錄的上課時段';
$string['oversessionstaken_help'] = '顯示已記錄出缺席的時段統計資料：
<ul>
    <li><strong>上課時段</strong>: 已記錄的時段數量。</li>
    <li><strong>得分</strong>: 根據已記錄的時段所授予的分數。</li>
    <li><strong>百分比</strong>: 已記錄時段的得分占其最高可得分數的百分比。</li>
</ul>';
$string['pageof'] = '第 {$a->page} 頁，共 {$a->numpages} 頁';
$string['participant'] = '參與者';
$string['password'] = '密碼';
$string['passwordgrp'] = '學生密碼';
$string['passwordgrp_help'] = '如果設定了此密碼，學生必須在設定自己的出缺席狀態之前輸入此密碼。如果留空，則不需要密碼。';
$string['passwordheader'] = '使用下面列出的密碼來記錄您的出缺席';
$string['passwordrequired'] = '在提交您的出缺席之前，必須輸入上課時段的密碼';
$string['percentage'] = '百分比';
$string['percentageallsessions'] = '總上課次數百分比';
$string['percentagesessionscompleted'] = '出席次數百分比';
$string['pluginadministration'] = '出缺席管理';
$string['pluginname'] = '出缺席紀錄';
$string['points'] = '分數';
$string['pointsallsessions'] = '所有上課次數的分數';
$string['pointssessionscompleted'] = '出席次數的分數';
$string['preferences_desc'] = '更改狀態集將影響現有的出缺席時段，並可能影響成績。';
$string['preventsharederror'] = '自我標記已被禁用，因為此裝置似乎曾被用來為另一位學生記錄出缺席。';
$string['preventsharedip'] = '防止學生共享IP位址';
$string['preventsharedip_help'] = '防止學生使用相同的裝置（透過 IP 地址識別）為其他學生記錄出缺席。';
$string['preventsharediptime'] = '允許重複使用 IP 地址的時間（分鐘）';
$string['preventsharediptime_help'] = '在此時間過後，允許再次使用同一 IP 地址來記錄此上課時段的出缺席。';
$string['preview'] = '檔案預覽';
$string['previewhtml'] = 'HTML 格式預覽';
$string['priorto'] = '由於時段早於課程開始日期({$a}) ，所以在此日期前的新時段將會隱藏（不能存取）。您可以隨時更改課程的開始日期（查看課程設定）以存取較早的時段。<br><br>請變更時段日期或點擊「新增時段」接鍵確認';
$string['privacy:metadata:attendancelog'] = '用戶出缺席記錄日誌。';
$string['privacy:metadata:attendancesessions'] = '將記錄出缺席的上課時段。';
$string['privacy:metadata:attendancewarningdone'] = '已發送給用戶的出缺席警告記錄。';
$string['privacy:metadata:duration'] = '上課時段持續時間（秒）';
$string['privacy:metadata:groupid'] = '與上課時段關聯的群組 ID。';
$string['privacy:metadata:ipaddress'] = '記錄出缺席的 IP 地址。';
$string['privacy:metadata:lasttaken'] = '上課時段出缺席最後記錄的時間戳。';
$string['privacy:metadata:lasttakenby'] = '最後記錄出缺席的用戶 ID。';
$string['privacy:metadata:notifyid'] = '與警告關聯的出缺席時段 ID。';
$string['privacy:metadata:remarks'] = '有關用戶出缺席的評論。';
$string['privacy:metadata:sessdate'] = '上課時段開始的時間戳。';
$string['privacy:metadata:sessionid'] = '出缺席時段 ID。';
$string['privacy:metadata:statusid'] = '學生的出缺席狀態 ID。';
$string['privacy:metadata:statusset'] = '狀態集對應的狀態 ID。';
$string['privacy:metadata:studentid'] = '記錄出缺席的學生 ID。';
$string['privacy:metadata:takenby'] = '為學生記錄出缺席的用戶 ID。';
$string['privacy:metadata:timemodified'] = '上課時段最後修改的時間戳。';
$string['privacy:metadata:timesent'] = '警告發送時間戳。';
$string['privacy:metadata:timetaken'] = '學生出缺席記錄的時間戳。';
$string['privacy:metadata:userid'] = '要發送警告的用戶 ID。';
$string['processingfile'] = '處理檔案';
$string['qr_cookie_error'] = 'QR code已過期。';
$string['qr_pass_wrong'] = 'QR code已過期，請重新掃描 QR code。';
$string['qrcode'] = 'QR code';
$string['qrcodeandpasswordheader'] = '掃描下方的 QR code或使用下方列出的密碼來記錄出缺席';
$string['qrcodeheader'] = '掃描下方的 QR code來記錄出缺席';
$string['qrcodevalidafter'] = '秒數';
$string['qrcodevalidbefore'] = 'QR code有效時間：';
$string['randompassword'] = '隨機密碼';
$string['remark'] = '對 {$a} 的備註';
$string['remarks'] = '備註';
$string['repeatasfollows'] = '如下方一樣重複時段';
$string['repeatevery'] = '重複在每個';
$string['repeaton'] = '重複在';
$string['repeatuntil'] = '重複直至';
$string['report'] = '報告';
$string['reportsessiondate'] = '上課時段日期';
$string['reportsessionduration'] = '上課時段持續時間';
$string['reportsessionlasttaken'] = '上課時段最後記錄時間（教師）';
$string['required'] = '必需*';
$string['requiredentries'] = '臨時記錄會覆蓋參與者的出缺席記錄';
$string['requiredentry'] = '臨時用戶合併協助指南';
$string['requiredentry_help'] = '<p align="center"><b>出缺席紀錄</b></p>
<p align="left"><strong>合併帳戶</strong></p>
<p align="left">
<table border="2" cellpadding="4">
<tr>
<th>Moodle 用戶</th>
<th>臨時用戶</th>
<th>動作</th>
</tr>
<tr>
<td>出缺席資料</td>
<td>出缺席資料</td>
<td>臨時用戶將覆蓋Moodle用戶</td>
</tr>
<tr>
<td>沒有出缺席資料</td>
<td>出缺席資料</td>
<td>臨時用戶的出缺席紀錄將傳送到Moodle用戶</td>
</tr>
<tr>
<td>出缺席資料</td>
<td>沒有出缺席資料</td>
<td>臨時用戶將會被刪除</td>
</tr>
<tr>
<td>沒有出缺席資料</td>
<td>沒有出缺席資料</td>
<td>臨時用戶將會被刪除</td>
</tr>
</table>

</p>
<p align="left"><strong>合併動作完成後，暫時使用者在任何情況下都會被刪除。</strong></p>';
$string['requiresubnet'] = '需要網路地址';
$string['requiresubnet_help'] = '出席紀錄可以透過指定以逗號分隔的部分或完整 IP 地址來限制於特定的子網路。';
$string['resetcaledarcreate'] = '行事曆事件已啟用，但一些現有的會議沒有事件。您是否希望為所有現有會議創建日曆事件？';
$string['resetcaledardelete'] = '行事曆事件已禁用，但一些現有的會議有應該被刪除的事件。您是否希望刪除所有現有的事件？';
$string['resetcalendar'] = '重設行事曆';
$string['resetdescription'] = '請記得，刪除出缺席資料將會從資料庫中清掉所有訊息。你可以利用更改這一課程的開始日期來隱藏先前的上課時段的資料。';
$string['resetstatuses'] = '狀態還原為預設';
$string['restoredefaults'] = '還原為預設狀態';
$string['resultsperpage'] = '每頁人數';
$string['resultsperpage_desc'] = '單一頁面可以顯示的學生數';
$string['rotateqrcode'] = '輪換 QR code';
$string['rotateqrcode_cleartemppass_task'] = '清除由輪換 QR code功能產生的臨時密碼的任務。';
$string['rotateqrcodeexpirymargin'] = '輪換 QR code／密碼過期容許時間（秒）';
$string['rotateqrcodeexpirymargin_desc'] = '允許過期 QR code／密碼的時間間隔（秒）';
$string['rotateqrcodeinterval'] = 'QR code／密碼自動更新的時間間隔（秒）';
$string['rotateqrcodeinterval_desc'] = '設定每隔多少秒自動更新一次 QR code／密碼。';
$string['save'] = '儲存出缺席狀況';
$string['saveandshownext'] = '儲存並顯示下一頁';
$string['scantime'] = '掃描時間';
$string['scantime_help'] = '這允許在匯入檔案中包含時間戳記—將嘗試使用 PHP 的 strtotime 函數轉換提供的時間戳，然後依據出缺席狀態設定，決定為使用者設置哪個狀態。';
$string['search:activity'] = '出缺席－活動資訊';
$string['selectactivity'] = '選擇活動';
$string['session'] = '上課時段';
$string['session_help'] = '上課時段';
$string['sessionadded'] = '成功新增上課時段';
$string['sessionalreadyexists'] = '此日期已有課';
$string['sessiondate'] = '上課日期';
$string['sessiondays'] = '上課日子';
$string['sessiondeleted'] = '成功刪除上課時段';
$string['sessiondescription'] = '上課時段說明';
$string['sessionduplicate'] = '已存在相同上課時段，課程：{$a->course}，出缺席活動：{$a->activity}，日期：{$a->date}';
$string['sessionexist'] = '未新增上課時段（已存在）！';
$string['sessiongenerated'] = '已成功產生一個上課時段';
$string['sessions'] = '上課時段';
$string['sessionsallcourses'] = '所有課程';
$string['sessionsbyactivity'] = '出缺席實例';
$string['sessionsbycourse'] = '課程';
$string['sessionsbydate'] = '週';
$string['sessionscompleted'] = '已記錄的上課時段';
$string['sessionscurrentcourses'] = '目前課程';
$string['sessionsgenerated'] = '已成功產生{$a}個上課時段';
$string['sessionsids'] = '上課時段的編號';
$string['sessionsnotfound'] = '在此選定期間內沒有上課時段';
$string['sessionstartdate'] = '上課開始日期';
$string['sessionstotal'] = '總上課節數';
$string['sessionsupdated'] = '上課時段已更新';
$string['sessiontype'] = '類型';
$string['sessiontype_help'] = '有二種添加上課節數的方式：全部、群組。是否能添加不同形式端賴活動群組之模式如何。

* 群組模式裡的"不分群組"，您只能為全部學生增加上課節數。
* 在群組模式的"可視群組"，你可以為全部及群組增加節數。
* 在群組模式的"分離群組"，你只可以為群組增加上課節數。';
$string['sessiontypeshort'] = '類型';
$string['sessionunknowngroup'] = '上課時段指定了未知群組：{$a}';
$string['sessionupdated'] = '成功更新上課時段';
$string['set_by_student'] = '自行紀錄的';
$string['setallstatuses'] = '設定狀態為';
$string['setallstatusesto'] = '設定狀態為 «{$a}»';
$string['setperiod'] = '訂定幾分鐘的時間後釋放 IP';
$string['settings'] = '設定';
$string['setunmarked'] = '未標記時自動設定';
$string['setunmarked_help'] = '若在上課時段中啟用，當學生未自行標記出缺席時，自動套用此狀態。';
$string['showdefaults'] = '顯示預設值';
$string['showduration'] = '顯示期間';
$string['showextrauserdetails'] = '顯示額外使用者資訊';
$string['showqrcode'] = '顯示 QR code';
$string['showsessiondescriptiononreport'] = '在報表中顯示上課時段說明';
$string['showsessiondescriptiononreport_desc'] = '在出缺席報表清單中顯示上課時段說明。';
$string['showsessiondetails'] = '顯示上課時段詳情';
$string['somedisabledstatus'] = '（部分選項已移除，因為上課時段已開始。）';
$string['sortedgrid'] = '排序後的網格';
$string['sortedlist'] = '排序後的清單';
$string['startofperiod'] = '開始期間';
$string['starttime'] = '開始時間';
$string['status'] = '狀態';
$string['statusall'] = '全部';
$string['statusdeleted'] = '狀態已刪除';
$string['statuses'] = '狀態';
$string['statusset'] = '狀態集 {$a}';
$string['statussetsettings'] = '狀態集';
$string['statustotalcount'] = '狀態 {$a}－總計次數';
$string['statustotalcountcurrentweek'] = '狀態 {$a}－本週總計次數';
$string['statustotalcountpreviousweek'] = '狀態 {$a}－上週總計次數';
$string['statusunselected'] = '未選取';
$string['strftimedm'] = '%m月%d日';
$string['strftimedmw'] = '<nobr>%m月%d日 (%A)</nobr>';
$string['strftimedmy'] = '%Y年%m月%d日';
$string['strftimedmyhm'] = '%Y年%m月%d日 %p%I點%M分';
$string['strftimedmyw'] = '<nobr>%Y年%m月%d日 (%a)</nobr>';
$string['strftimeh'] = '%I點%p';
$string['strftimehm'] = '%I:%M%p';
$string['strftimeshortdate'] = '%Y.%m.%d';
$string['studentid'] = '學生編號';
$string['studentmarked'] = '您在此上課時段的出席已被記錄。';
$string['studentmarking'] = '學生紀錄';
$string['studentpassword'] = '學生密碼';
$string['studentrecordingexpanded'] = '展開學生紀錄';
$string['studentrecordingexpanded_desc'] = '建立新的出缺席時，預設將“學生紀錄”的設定顯示為展開。';
$string['studentscanmark'] = '允許學生登錄自己出缺席情況';
$string['studentscanmark_desc'] = '若勾選，教師將可允許學生登錄自己的出缺席';
$string['studentscanmark_help'] = '若勾選，學生將可以更改他們自己在這一上課時段的出缺席狀態。';
$string['studentscanmarksessiontime'] = '學生在上課時段內記錄出席';
$string['studentscanmarksessiontime_desc'] = '若勾選，學生只能在上課時段內記錄出席。';
$string['studentscanmarksessiontimeend'] = '上課時段結束時間（分鐘）';
$string['studentscanmarksessiontimeend_desc'] = '若上課時段沒有結束時間，應該設置多少分鐘後，學生才能記錄出席。';
$string['studentsearlyopentime'] = '提前開放上課時段以便記錄出席';
$string['studentsearlyopentime_help'] = '這允許教師提前開放上課時段，讓出席可以在實際開始前記錄。';
$string['submit'] = '提交';
$string['submitattendance'] = '登記出缺席';
$string['submitattendancefuture'] = '報告未來缺席';
$string['submitpassword'] = '提交密碼';
$string['subnet'] = '子網路';
$string['subnetactivitylevel'] = '允許在活動層級設定子網路';
$string['subnetactivitylevel_desc'] = '如果啟用，教師可以在建立出缺席活動時時，在活動層級覆寫預設子網路。 否則，建立上課時段時將使用網站預設值。';
$string['subnetwrong'] = '學生只可以從某些特定的位置上紀錄出缺席，而這電腦不在允許使用的清單上。';
$string['summary'] = '摘要';
$string['tablerenamefailed'] = '無法將出缺席活動的attforblock 資料表重新命名。';
$string['tactions'] = '動作';
$string['takeattendance'] = '點名';
$string['takensessions'] = '出席時段';
$string['tcreated'] = '已建立';
$string['tempaddform'] = '新增臨時學生';
$string['tempexists'] = '這兒已經有一個臨時用戶登記這一email地址';
$string['temptable'] = '臨時學生清單';
$string['tempuser'] = '臨時學生';
$string['tempusermerge'] = '合併臨時學生';
$string['tempusers'] = '臨時學生';
$string['tempusersedit'] = '編輯臨時學生';
$string['tempuserslist'] = '臨時學生';
$string['thirdpartyemails'] = '通知其他使用者';
$string['thirdpartyemails_help'] = '將會收到通知的其他使用者清單。（需要擁有 mod/attendance:viewreports 權限）';
$string['thirdpartyemailsubject'] = '出缺席警告';
$string['thirdpartyemailtext'] = '{$a->firstname} {$a->lastname} 在 {$a->coursename} 課程中的 {$a->aname} 出缺席比例低於 {$a->warningpercent}（目前為 {$a->percent}）';
$string['thirdpartyemailtextfooter'] = '您會收到這封郵件，是因為本課程的教師已將您的電子郵件加入通知接收者名單中';
$string['thiscourse'] = '此課程';
$string['time'] = '時間';
$string['timeahead'] = '不能建立超過一年的多重時段，請調整開始及結束日期。';
$string['timemodified'] = '修改時間';
$string['timetaken'] = '出缺席記錄時間';
$string['to'] = '至：';
$string['todate'] = '截至目前';
$string['totalnumsessions'] = '上課時段總數';
$string['triggered'] = '首次通知';
$string['tuseremail'] = '電子郵件';
$string['tusername'] = '全名';
$string['ungraded'] = '未評分的上課時段';
$string['unknowngroup'] = '不明的群組';
$string['unknownstatus'] = '找不到狀態 ID：{$a}';
$string['update'] = '更新';
$string['updateattendance'] = '更新出缺席';
$string['uploadattendance'] = '以 CSV 上傳出缺席';
$string['usedefaultsubnet'] = '使用預設值';
$string['usemessageform'] = '或使用下方表單向選取的學生發送訊息';
$string['userexistingstatus'] = '您的出缺席已標記為：<strong>{$a}</strong>，若需要變更，請使用下方表單。';
$string['userexists'] = '此電子郵件地址已有一位真實使用者';
$string['userid'] = '使用者 ID';
$string['userimportfield'] = '外部使用者欄位';
$string['userimportfield_help'] = '上傳的 CSV 檔案中包含使用者識別資訊的欄位';
$string['userimportto'] = 'Moodle 使用者欄位';
$string['userimportto_help'] = '與 CSV 匯出資料對應的 Moodle 欄位';
$string['users'] = '要匯出的用戶';
$string['usersessiongrade'] = '使用者上課時段成績';
$string['usersessionremarks'] = '使用者上課時段備註';
$string['usersessiontaken'] = '使用者上課時段記錄';
$string['userstatus'] = '使用者上課時段狀態';
$string['usestatusset'] = '狀態集';
$string['variable'] = '變數';
$string['variablesupdated'] = '成功更新變數';
$string['versionforprinting'] = '列印版本';
$string['viewmode'] = '檢視模式';
$string['warnafter'] = '在警告觸發前需記錄的上課時段數';
$string['warnafter_help'] = '僅當使用者出缺席已記錄達到此上課時段數時，才會觸發警告。';
$string['warningdeleted'] = '警告已刪除';
$string['warningdesc'] = '這些警告會自動套用到任何新的出缺席活動中。如果同時觸發多個警告，僅會發送警告門檻較低的那一個。';
$string['warningdesc_course'] = '此處設定的警告門檻將影響缺席報告，並允許通知學生與第三方。如果同時觸發多個警告，僅會發送警告門檻較低的那一個。';
$string['warningfailed'] = '您不能建立百分比與上課時段數相同的警告。';
$string['warningpercent'] = '當百分比低於以下數值時發出警告';
$string['warningpercent_help'] = '當整體出缺席比例低於此數值時，將觸發警告。';
$string['warnings'] = '警告已設定';
$string['warningthreshold'] = '警告門檻';
$string['warningupdated'] = '已更新警告';
$string['week'] = '週';
$string['weekcommencing'] = '本週開始日';
$string['weeks'] = '週';
$string['youcantdo'] = '您無法進行任何操作';
