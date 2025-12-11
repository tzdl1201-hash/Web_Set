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
 * Strings for component 'completion', language 'zh_tw', version '5.0'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = '完成的成績';
$string['achievingpassinggrade'] = '達到及格成績';
$string['activities'] = '活動';
$string['activitiescompleted'] = '活動完成';
$string['activitiescompletednote'] = '備註:活動必須先設定完成條件，才能出現在以上的列表中。';
$string['activitieslabel'] = '活動 / 資源';
$string['activityaggregation'] = '要求的條件';
$string['activityaggregation_all'] = '所有選出要完成的活動';
$string['activityaggregation_any'] = '任何選出要完成的活動';
$string['activitycompletion'] = '活動完成條件';
$string['activitycompletionupdated'] = '變更已儲存';
$string['activitygradetopassnotset'] = '本活動沒有設定有效的及格成績。 可在活動設定的成績部分設定。';
$string['addconditions'] = '新增條件';
$string['affectedactivities'] = '這一變更將會影響下列 <b>{$a}</b> 活動或資源';
$string['aggregationmethod'] = '彙總方法';
$string['all'] = '全部';
$string['allconditions'] = '當學生完成下列所有條件時，活動即為完成：';
$string['any'] = '任意';
$string['approval'] = '核准';
$string['areyousureoverridecompletion'] = '您確定要覆蓋此使用者目前的活動完成狀態並將其標記為「{$a}」嗎？';
$string['badautocompletion'] = '您必須至少選擇一個條件。';
$string['badcompletiongradeitemnumber'] = '因為尚未啟用由 {$a} 評分，所以無法為 <b>{$a}</b> 啟用 需要有成績 的條件。';
$string['bulkactivitycompletion'] = '批次編修活動完成度';
$string['bulkactivitydetail'] = '選擇您想要批次編修的活動';
$string['bulkcompletiontracking'] = '完成度追蹤';
$string['bulkcompletiontracking_help'] = '<strong>無：</strong> 不顯示活動完成狀態

<strong>手動：</strong> 學生可以手動標記活動為已完成

<strong>符合條件：</strong> 當符合條件時顯示活動為已完成';
$string['checkactivity'] = '活動/資源的勾選框：{$a}';
$string['checkall'] = '選取或不選取全部的活動和資源';
$string['checkallsection'] = '請勾選或取消勾選以下區段中的所有活動與資源：{$a}';
$string['completeactivity'] = '完成這活動';
$string['completed'] = '已完成';
$string['completedunlocked'] = '完成選項已經解鎖';
$string['completedunlockedtext'] = '儲存此表單後，完成狀態資料將會被刪除，並在可能的情況下重新計算。若要避免這種情況，您可以在不儲存的情況下離開此頁面。';
$string['completedwarning'] = '完成選項已經鎖定';
$string['completedwarningtext'] = '此活動已被一位或多位學生標記為已完成。若您解除設定鎖定並進行變更後儲存表單，完成狀態資料將會被刪除，並在可能的情況下重新計算。手動完成狀態無法重新計算，因此在這種情況下，學生需要再次自行標記為已完成。';
$string['completion'] = '完成度的追蹤';
$string['completion-alt-auto-enabled'] = '系統根據條件"{$a}"標記此項為完成';
$string['completion-alt-auto-fail'] = '已完成：{$a} (不及格)';
$string['completion-alt-auto-n'] = '尚未完成：{$a}';
$string['completion-alt-auto-n-override'] = '未完成：{$a->modname} (由 {$a->overrideuser}設定)';
$string['completion-alt-auto-pass'] = '已完成：{$a} (及格)';
$string['completion-alt-auto-y'] = '已完成：{$a}';
$string['completion-alt-auto-y-override'] = '已完成：{$a->modname} (由{$a->overrideuser}設定)';
$string['completion-alt-manual-enabled'] = '學生可以自己標記此項目為完成：{$a}';
$string['completion-alt-manual-n'] = '未完成：{$a} 。點選標記為完成。';
$string['completion-alt-manual-n-override'] = '未完成：{$a->modname} (由 {$a->overrideuser}設定)。點選以標記為完成。';
$string['completion-alt-manual-y'] = '已完成：{$a} 。點選標記為未完成。';
$string['completion-alt-manual-y-override'] = '已完成：{$a->modname} (由{$a->overrideuser}設定)。點選以標記為未完成。';
$string['completion-fail'] = '完成(未達及格成績)';
$string['completion-n'] = '未完成';
$string['completion-n-override'] = '尚未完成(由{$a}設定)';
$string['completion-pass'] = '已完成(及格)';
$string['completion-y'] = '已完成';
$string['completion-y-override'] = '已完成(由{$a}確認)';
$string['completion_automatic'] = '新增條件';
$string['completion_help'] = '啟用後，活動完成狀態將根據特定條件進行追蹤，方式可以是手動或自動。如有需要，可以設定多個條件；若如此，僅當所有條件皆符合時，該活動才會被視為已完成。';
$string['completion_link'] = 'activity/completion';
$string['completion_manual'] = '學生必須手動標記此活動為已完成';
$string['completion_none'] = '無';
$string['completion_status'] = '完成狀態';
$string['completionactivitydefault'] = '使用活動的預設';
$string['completionanygrade_desc'] = '任何成績';
$string['completiondisabled'] = '停用，不在活動設定頁面顯示';
$string['completionduration'] = '環境';
$string['completionenabled'] = '啟用，透過進度和活動設定來控制';
$string['completionexpected'] = '在時間軸中設定提醒';
$string['completionexpected_help'] = '此功能可讓您為學生設定提醒，提示他們進行此活動。提醒將以「{$a} 需要進行」的形式出現在他們儀表板的時間軸區塊中。';
$string['completionexpecteddesc'] = '預期完成於{$a}';
$string['completionexpectedfor'] = '{$a->instancename} 應該要完成';
$string['completionicons'] = '完成狀態勾選方格';
$string['completionicons_help'] = '活動名稱後面會有一個打勾，用來表示這活動是否已完成。

如果顯示的是一個虛線的方格，那麼當您依照教師所設的條件完成這一活動時，會自動出現一個打勾。

如果顯示的是一個實線的方格，那麼當您認為您已經完成這活動時，點選它可成打勾狀態(若你改變主意，再次點選可以取消打勾)。

這一打勾方式是可自行選用的，也是追蹤你在這課程的學習進度的簡單方法。';
$string['completionmenuitem'] = '完成';
$string['completionnotenabled'] = '尚未啟用進度追蹤功能';
$string['completionnotenabledforcourse'] = '本課程尚未開啟進度追蹤功能';
$string['completionnotenabledforsite'] = '本站尚未開啟進度追蹤功能';
$string['completionondate'] = '日期';
$string['completionondatevalue'] = '課程將被標記為完成的日期';
$string['completionpassgrade'] = '需要及格成績';
$string['completionpassgrade_desc'] = '及格成績';
$string['completionsettingslocked'] = '完成設定已經鎖定';
$string['completionupdated'] = '活動 <b>{$a}</b> 的完成度已經更新';
$string['completionusegrade'] = '需要有成績';
$string['completionusegrade_desc'] = '需要取得成績';
$string['completionview_desc'] = '瀏覽此活動';
$string['configenablecompletion'] = '如果啟用，則可以設置課程和活動完成條件。 建議設置活動完成條件，以便在儀表板上的課程概述中為用戶顯示有意義的數據。';
$string['confirmselfcompletion'] = '確認後設為完成';
$string['courseaggregation'] = '必要的條件';
$string['courseaggregation_all'] = '要完成所有選出的課程';
$string['courseaggregation_any'] = '要完成任何選出的課程';
$string['coursealreadycompleted'] = '您已經完成了這門課程';
$string['coursecomplete'] = '課程進度';
$string['coursecompleted'] = '課程已經完成';
$string['coursecompletedmessage'] = '<p>恭喜!</p><p>你已經完成這個課程<a href="{$a->courselink}">{$a->coursename}</a>.</p>';
$string['coursecompletion'] = '課程完成度';
$string['coursecompletioncondition'] = '條件:{$a}';
$string['coursecompletionnavigation'] = '課程完成第三級導覽';
$string['coursecompletionsettings'] = '課程完成設定';
$string['coursegrade'] = '課程成績';
$string['coursesavailable'] = '可選的課程';
$string['coursesavailableexplaination'] = '備註：必須先設定課程完成條件，此課程才能出現在以上的列表中。';
$string['criteria'] = '規準';
$string['criteriagroup'] = '各種判斷條件';
$string['criteriarequiredall'] = '必須滿足以下所有條件';
$string['criteriarequiredany'] = '必須滿足以下任一條件';
$string['criteriasummary'] = '{$a->type}: {$a->summary}';
$string['csvdownload'] = '以試算表格式(UTF-8.csv)下載';
$string['datepassed'] = '通過日期';
$string['days'] = '天數';
$string['daysoftotal'] = '{$a->days}天，總共有 {$a->total}天';
$string['daystakingcourse'] = '課程所需時間';
$string['daysuntilcompletion'] = '完成所需時間';
$string['defaultactivitycompletioncourse'] = '這些是本課程中活動的預設完成條件。';
$string['defaultactivitycompletionsite'] = '這些是所有課程中活動的預設完成條件。';
$string['defaultcompletion'] = '預設活動完成條件';
$string['defaultcompletionupdated'] = '變更已經儲存';
$string['deletecompletiondata'] = '課程完成度資料';
$string['dependencies'] = '依賴條件';
$string['dependenciescompleted'] = '其他課程的完成度';
$string['detail_desc:receivegrade'] = '收到成績';
$string['detail_desc:receivepassgrade'] = '獲得及格成績';
$string['detail_desc:view'] = '檢視';
$string['done'] = '完畢';
$string['editconditions'] = '編輯完成條件';
$string['emptyconditionsinfo'] = '此活動尚未設定完成條件。';
$string['emptyconditionswarning'] = '您必須至少新增一個完成條件。';
$string['enablecompletion'] = '啟用完成度追蹤';
$string['enablecompletion_help'] = '如果啟用，您可以設定活動完成或課程完成的條件。';
$string['enrolmentduration'] = '選課期限';
$string['enrolmentdurationlength'] = '用戶必須維持選課';
$string['err_noactivities'] = '沒有任何活動啟用了完成訊息，所以什麼都不能顯示。您可以透過修改活動設定來啟用完成訊息。';
$string['err_nocourses'] = '沒有其他課程啟用課程進度追蹤功能，所以沒有可顯示的。您可以在課程設定中啟用課程進度追蹤功能。';
$string['err_nograde'] = '此課程還尚未設定及格分數線。要想起用這種策略，您必須先為此課程建立及格數線。';
$string['err_noroles'] = '課程中沒有任何角色
有“moodle/course:markcomplete”權限。';
$string['err_nousers'] = '此課程或群組中沒有任何學生可以顯示其完成度訊息。 （僅針對具有“在完成情況報告中顯示”功能的用戶顯示完成訊息。該功能僅適用於預設角色為學生，因此，如果沒有學生，您將看到此訊息。）';
$string['err_settingslocked'] = '已有一位或多位學生完成了某項規準，因此設定已被鎖定。若您解除鎖定設定將會刪除使用者的完成資料，可能會導致混淆。';
$string['err_system'] = '進度追蹤系統內部發生錯誤。(系統管理員可以啟動除錯訊息來瀏覽更多細節。)';
$string['eventcoursecompleted'] = '課程完成追蹤';
$string['eventcoursecompletionupdated'] = '課程完成追蹤已更新';
$string['eventcoursemodulecompletionupdated'] = '課程活動完成度已更新';
$string['eventdefaultcompletionupdated'] = '課程活動進度預設值已經更新';
$string['excelcsvdownload'] = '用Excel相容模式(.csv)下載';
$string['failed'] = '失敗的';
$string['fraction'] = '分數';
$string['graderequired'] = '要求的課程分數';
$string['gradexrequired'] = '至少得{$a}';
$string['hiddenrules'] = '有關 <b>{$a}</b> 的部分設定已被隱藏。若要查看，請取消選取其他活動。';
$string['incompatibleplugin'] = '此活動不支援預設完成條件設定。每次使用都必須手動設定活動完成條件。';
$string['inprogress'] = '處理中';
$string['manual'] = '手動';
$string['manualcompletionby'] = '由他人手動標記完成';
$string['manualcompletionbynote'] = '注意：在課程中標記完成的權限，必須指派給這清單中的一個角色。';
$string['manualselfcompletion'] = '手動自我完成';
$string['manualselfcompletionnote'] = '注意：如果啟用"手動自我完成"，應該把"自我完成"區塊添加到這課程。';
$string['markcomplete'] = '標為完成';
$string['markedcompleteby'] = '由{$a}標記為完成';
$string['markingyourselfcomplete'] = '標記您自己為完成';
$string['modifybulkactions'] = '修改您希望批次編輯的動作';
$string['moredetails'] = '更多細節';
$string['nocriteriaset'] = '本課程尚未設定完成條件';
$string['nogradeitem'] = '因為<b>{$a}</b>活動不用評分，所以無法啟用 需要有成績 的條件。';
$string['notcompleted'] = '未完成';
$string['notenroled'] = '您沒有加入此課程';
$string['nottracked'] = '你在這一課程上，現在沒被追蹤完成進度';
$string['notyetstarted'] = '尚未開始';
$string['overallaggregation'] = '完成課程所需要的條件';
$string['overallaggregation_all'] = '當所有條件都符合時，課程即完成';
$string['overallaggregation_any'] = '當任一條件符合時，課程即完成';
$string['pending'] = '等待中';
$string['periodpostenrolment'] = '選課後多久';
$string['privacy:metadata:completionstate'] = '活動是否已完成';
$string['privacy:metadata:course'] = '課程識別碼';
$string['privacy:metadata:coursecompletedsummary'] = '儲存已完成課程規準的使用者資訊';
$string['privacy:metadata:coursemoduleid'] = '活動 ID';
$string['privacy:metadata:coursemodulesummary'] = '儲存使用者的活動完成資料';
$string['privacy:metadata:coursesummary'] = '儲存使用者的課程完成資料';
$string['privacy:metadata:gradefinal'] = '課程完成所獲得的最終成績';
$string['privacy:metadata:overrideby'] = '覆蓋活動完成狀態者的使用者ID';
$string['privacy:metadata:reaggregate'] = '課程完成狀態是否已重新彙整';
$string['privacy:metadata:timecompleted'] = '課程完成時間。';
$string['privacy:metadata:timecreated'] = '活動完成建立的時間';
$string['privacy:metadata:timeenrolled'] = '使用者註冊課程的時間';
$string['privacy:metadata:timemodified'] = '活動完成被修改時間';
$string['privacy:metadata:timestarted'] = '課程開始時間。';
$string['privacy:metadata:unenroled'] = '使用者是否已退選此課程';
$string['privacy:metadata:userid'] = '擁有課程與活動完成資料的使用者ID';
$string['privacy:metadata:viewed'] = '活動是否被檢視';
$string['progress'] = '學生進度';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = '進度：{$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = '確認先修課程';
$string['remainingenroledfortime'] = '保持選課達到規定時間長度';
$string['remainingenroleduntildate'] = '在指定日期之前維持選課';
$string['reportpage'] = '顯示從{$a->from}到{$a->to}的用戶，共{$a->total}人';
$string['requiredcriteria'] = '必要條件';
$string['resetactivities'] = '清除所有選取的活動和資源';
$string['restoringcompletiondata'] = '寫入進度資料中';
$string['roleaggregation'] = '需要訂定條件';
$string['roleaggregation_all'] = '當滿足這條件時，對所有選出的角色做標記。';
$string['roleaggregation_any'] = '當滿足這條件時，對任何選出的角色做標記。';
$string['roleidnotfound'] = '沒有找到角色編號{$a}';
$string['saved'] = '儲存';
$string['seedetails'] = '瀏覽細節';
$string['select'] = '選擇';
$string['self'] = '自己';
$string['selfcompletion'] = '自我完成';
$string['showcompletionconditions'] = '顯示活動完成的情況';
$string['showcompletionconditions_help'] = '在課程頁面上顯示活動完成條件。';
$string['showinguser'] = '顯示用戶';
$string['studentsmust'] = '學生必須';
$string['timecompleted'] = '完成時間';
$string['todo'] = '待辦事項';
$string['unenrolingfromcourse'] = '從課程中退選';
$string['unenrolment'] = '取消選課';
$string['unit'] = '單元';
$string['unlockcompletion'] = '解開追蹤完成進度';
$string['unlockcompletiondelete'] = '解開追蹤完成進度並刪除使用者完成資料';
$string['updateactivities'] = '更新選取的活動的進度狀態';
$string['usealternateselector'] = '使用替代的課程選擇器';
$string['usernotenroled'] = '用戶沒有選修此一課程';
$string['viewcoursereport'] = '查看課程報告';
$string['viewingactivity'] = '查看{$a}';
$string['withconditions'] = '有條件的';
$string['writingcompletiondata'] = '寫入進度完成資料';
$string['xdays'] = '{$a}天';
$string['youmust'] = '您必須';
