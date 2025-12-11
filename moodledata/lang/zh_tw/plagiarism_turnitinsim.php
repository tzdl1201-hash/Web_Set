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
 * Strings for component 'plagiarism_turnitinsim', language 'zh_tw', version '5.0'.
 *
 * @package     plagiarism_turnitinsim
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessoptions'] = '學生存取權';
$string['accessoptions_help'] = '學生在產生相似度報告之後都將能夠存取相似度報告來進行提交。';
$string['accessstudents'] = '允許學生檢視相似度報告';
$string['addtoindex'] = '檢索所有提交文件';
$string['code'] = '代碼';
$string['connecttest'] = '測試 Turnitin 連線';
$string['connecttestfailed'] = '連線測試失敗。';
$string['connecttestsuccess'] = '連線測試成功';
$string['dbexport'] = '資料庫匯出';
$string['dbexporttable'] = '匯出 {$a} 資料';
$string['defaultsettings'] = '預設設定';
$string['errorenabledfeatures'] = '無法取得已啟用功能清單。';
$string['errorgettingsubmissioninfo'] = '嘗試取得提交文件資訊時發生錯誤。';
$string['errorprocessingdeletedsubmission'] = '此提交文件屬於已刪除的工作指派且無法處理。';
$string['errortoolarge'] = '不會將此檔案提交至 Turnitin，因為該檔案超出了允許的大小上限 {$a}';
$string['eulaaccept'] = '我接受 Turnitin EULA';
$string['eulaaccepted'] = '感謝您接受新的 Turnitin EULA。所有未來的提交文件現在都將傳送至 Turnitin 進行處理。';
$string['eulaalreadyaccepted'] = '您已接受最新的 Turnitin EULA。';
$string['euladecline'] = '我拒絕 Turnitin EULA';
$string['euladeclined'] = '不會將您的提交文件傳送至 Turnitin，因為您尚未接受 Turnitin 一般使用者授權合約。';
$string['eulaheader'] = 'Turnitin 一般使用者授權合約';
$string['eulalink'] = '若要將此提交文件傳送至 Turnitin，您必須接受 <a href="{$a}" target="_blank">Turnitin 一般使用者授權合約</a>。';
$string['eulalinkgeneric'] = '如果您想要將任何未來的提交文件傳送至 Turnitin，您必須接受 <a href="{$a}" target="_blank">Turnitin 一般使用者授權合約</a>。';
$string['eulalinkmodal'] = '若要將此提交文件傳送至 Turnitin，您必須接受 <a href="#" class="eula_link">Turnitin 一般使用者授權合約</a>。';
$string['eulanotrequired'] = '您不一定要接受 Turnitin EULA。';
$string['excludebiblio'] = '參考書目';
$string['excludeoptions'] = '從相似度報告中排除';
$string['excludeoptions_help'] = '所選選項將不會在相似度報告中顯示為相符項目。';
$string['excludequotes'] = '引用';
$string['faultcode'] = '錯誤代碼';
$string['getwebhookfailure:message'] = '您針對抄襲外掛程式向 Turnitin 註冊的 webhook 可能發生問題。排定檢查的工作無法連線至 Turnitin。請檢查您的記錄檔。';
$string['getwebhookfailure:subject'] = 'Turnitin webhook 檢查失敗';
$string['indexoptions'] = '提交檢索';
$string['indexoptions_help'] = '已編製索引的提交文件將可在「相似度報告」中用來進行比較。';
$string['invalidtablename'] = '無法匯出表格 {$a}';
$string['line'] = '行';
$string['message'] = '訊息';
$string['messageprovider:digital_receipt_instructor'] = 'Turnitin 講師數位收據';
$string['messageprovider:digital_receipt_student'] = 'Turnitin 學生數位收據';
$string['messageprovider:get_webhook_failure'] = 'Turnitin webhook 檢查失敗';
$string['messageprovider:new_eula'] = 'Turnitin 新 EULA 版本';
$string['neweula:message'] = 'Turnitin 已發佈新的 EULA，如需進一步資訊，請按一下<a href="{$a}">這裡</a>。';
$string['neweula:subject'] = '已發佈 Turnitin 新 EULA';
$string['pluginname'] = 'Turnitin Integrity 外掛程式';
$string['pluginsetup'] = '設定';
$string['privacy:metadata:plagiarism_turnitinsim_client'] = '若要成功提交至 Turnitin，需要在 Moodle 與 Turnitin 之間交換特定使用者資料。如需有關 Moodle 外掛程式與 GDPR 的詳細資訊，請造訪：https://help.turnitin.com/feedback-studio/moodle/moodle-plugins-and-gdpr.htm';
$string['privacy:metadata:plagiarism_turnitinsim_client:firstname'] = '已在啟動 Turnitin Viewer (Turnitin 雲端檢視器) 時將使用者的名字傳送至 Turnitin 以便識別使用者。';
$string['privacy:metadata:plagiarism_turnitinsim_client:lastname'] = '已在啟動 Turnitin Viewer (Turnitin 雲端檢視器) 時將使用者的姓氏傳送至 Turnitin 以便識別使用者。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_content'] = '請注意，已將檔案/提交文件的內容傳送至 Turnitin 進行處理。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_filename'] = '已提交檔案的名稱已傳送至 Turntin 以供識別。';
$string['privacy:metadata:plagiarism_turnitinsim_client:submission_title'] = '提交文件的標題已傳送至 Turntin 以供識別。';
$string['privacy:metadata:plagiarism_turnitinsim_sub'] = '將 Moodle 提交文件連結至 Turnitin 提交文件的資訊。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:identifier'] = '由 Moodle 用來識別提交檔案的雜湊。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:itemid'] = '識別相關模組類型之提交文件的 Id。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:overallscore'] = '提交文件的整體相似度分數。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:submittedtime'] = '指示何時將使用者提交文件傳送給 Turnitin 的時間戳記。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:turnitinid'] = 'Turnitin 用於引用提交文件的 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_sub:userid'] = '已提交之使用者的 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_users'] = '將 Moodle 使用者連結至 Turnitin 使用者的資訊。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaaccepted'] = '使用者接受的最新版本 Turnitin EULA。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedlang'] = '使用者最新接受 Turnitin EULA 的語言。';
$string['privacy:metadata:plagiarism_turnitinsim_users:lasteulaacceptedtime'] = '指示使用者最新接受 Turnitin EULA 的時間戳記。';
$string['privacy:metadata:plagiarism_turnitinsim_users:turnitinid'] = 'Turnitin 用於引用使用者的 ID。';
$string['privacy:metadata:plagiarism_turnitinsim_users:userid'] = '已提交文件的使用者 ID。';
$string['queuedrafts'] = '處理草稿提交文件';
$string['queuedrafts_help'] = '請注意，草稿提交文件不會在 Turnitin 中檢索以用於檢查的目的';
$string['receiptsinstructor:message'] = '在班級 <strong>{$a->course_fullname}</strong> 中建立至模組 <strong>{$a->module_name}</strong> 的名為 <strong>{$a->submission_title}</strong>  的提交文件已傳送至 Turnitin。<br /><br />提交文件 ID：<strong>{$a->submission_id}</strong><br />提交日期：<strong>{$a->submission_date}</strong>';
$string['receiptsinstructor:subject'] = '提交文件已傳送至 Turnitin';
$string['receiptstudent:message'] = '親愛的 {$a->firstname} {$a->lastname}，<br /><br />您的班級 <strong>{$a->course_fullname}</strong> 中模組 <strong>{$a->module_name}</strong> 的檔案 <strong>{$a->submission_title}</strong> 已於 <strong>{$a->submission_date}</strong> 成功提交至 Turnitin。您的提交文件 id 為 <strong>{$a->submission_id}</strong>。<br /><br />感謝您使用 Turnitin，<br /><br />Turnitin 團隊';
$string['receiptstudent:subject'] = '這是您的 Turnitin 數位收據';
$string['reportgen0'] = '立即';
$string['reportgen1'] = '立即於到期日期重新產生';
$string['reportgen2'] = '到期日期';
$string['reportgenoptions'] = '產生相似度報告';
$string['reportgenoptions_help'] = '<strong>立即：</strong>相似度報告將於提交檔案後立即產生。<br/><br/><strong>於到期日期：</strong>相似度報告只於工作指派的到期日期產生。<br/><br/><strong>立即並於到期日期：</strong>相似度報告將於提交檔案後立即產生。相似度報告將於工作指派的到期日期再次產生。此選項可用於檢查某一班級內的互抄情況。';
$string['resubmittoturnitin'] = '重新提交至 Turnitin';
$string['savesuccess'] = '已儲存變更';
$string['settingslearnmore'] = '進一步瞭解 Turnitin 設定';
$string['submissiondisplayerror:cannotextracttext'] = '無法取得報告';
$string['submissiondisplayerror:cannotextracttext_help'] = '無法針對此提交文件產生報告。這可能是因為此類型的檔案無法產生報告或沒有足夠的文字。';
$string['submissiondisplayerror:corruptfile'] = '檔案損毀';
$string['submissiondisplayerror:corruptfile_help'] = '上傳的檔案似乎已損毀。';
$string['submissiondisplayerror:eulanotaccepted'] = '不接受 EULA';
$string['submissiondisplayerror:eulanotaccepted_help'] = '提交者必須接受 Turnitin EULA，才能針對提交文件檢查相似度。';
$string['submissiondisplayerror:filelocked'] = '檔案已遭鎖定';
$string['submissiondisplayerror:filelocked_help'] = '上傳的檔案需要密碼才能開啟。';
$string['submissiondisplayerror:generic'] = '未將檔案傳送至 Turnitin';
$string['submissiondisplayerror:generic_help'] = '未將此檔案提交至 Turnitin，請洽詢系統管理員';
$string['submissiondisplayerror:notsent'] = '未將檔案傳送至 Turnitin';
$string['submissiondisplayerror:notsent_help'] = '未將此檔案提交至 Turnitin，因為未在提交時啟用 Turnitin，如果您想要將其提交給 Turnitin，請修改或重新上傳您的提交文件。';
$string['submissiondisplayerror:processingerror'] = '處理發生錯誤';
$string['submissiondisplayerror:processingerror_help'] = '處理提交文件時發生未指定的錯誤。';
$string['submissiondisplayerror:toolarge'] = '檔案太大';
$string['submissiondisplayerror:toolarge_help'] = '此檔案太大，無法傳送至 Turnitin。若要檢查原創性，請提交大小小於 100MB 的檔案。';
$string['submissiondisplayerror:toolittletext'] = '文字不足';
$string['submissiondisplayerror:toolittletext_help'] = '提交文字字數不足以產生相似度報告 (提交文件必須包含至少 20 個字)';
$string['submissiondisplayerror:toomanypages'] = '太多頁面';
$string['submissiondisplayerror:toomanypages_help'] = '提交文件頁面太多，無法產生相似度報告 (提交文件內容不得超過 400 頁)';
$string['submissiondisplayerror:toomuchtext'] = '文字太多';
$string['submissiondisplayerror:toomuchtext_help'] = '提交文字太多，無法產生相似度報告 (將擷取的文字轉換為 UTF-8 後，提交文件必須包含少於 {$a} 的字數)';
$string['submissiondisplayerror:unknown'] = '您的提交文件發生錯誤';
$string['submissiondisplayerror:unknown_help'] = '您的提交文件發生未知錯誤，此檔案尚未提交至 Turnitin，請洽詢系統管理員';
$string['submissiondisplayerror:unsupportedfiletype'] = '不支援的檔案類型';
$string['submissiondisplayerror:unsupportedfiletype_help'] = '不支援此上傳的檔案類型。';
$string['submissiondisplaystatus:awaitingeula'] = '正在等待 EULA';
$string['submissiondisplaystatus:cannotextracttext'] = '無法取得報告';
$string['submissiondisplaystatus:error'] = '錯誤';
$string['submissiondisplaystatus:notsent'] = '未傳送';
$string['submissiondisplaystatus:pending'] = '待處理';
$string['submissiondisplaystatus:queued'] = '已排入佇列';
$string['submissiondisplaystatus:unknown'] = '未知錯誤';
$string['taskadminupdate'] = '針對 Turnitin Integrity 外掛程式更新本機組態';
$string['taskgetreportscores'] = '擷取 Turnitin Integrity 外掛程式的報告分數';
$string['taskoutputenabledfeaturesnotretrieved'] = '無法擷取 Turnitin 啟用的功能';
$string['taskoutputenabledfeaturesretrievalfailure'] = 'Turnitin 啟用的功能呼叫失敗';
$string['taskoutputenabledfeaturesretrieved'] = '已擷取 Turnitin 啟用的功能';
$string['taskoutputfailedconnection'] = '連線至 Turnitin API 時發生問題';
$string['taskoutputfailedcvlaunchurl'] = '針對提交文件 id: {$a} 從 Turnitin API 要求 Turnitin Viewer (Turnitin 雲端檢視器)  啟動 URL 時發生問題';
$string['taskoutputfailedreportrequest'] = '針對提交文件 id：{$a} 從 Turnitin API 要求原創性報告產生時發生問題';
$string['taskoutputfailedscorerequest'] = '針對提交文件 id：{$a} 從 Turnitin API 要求原創性報告分數時發生問題';
$string['taskoutputfailedupload'] = '針對提交文件 id：{$a} 將檔案上傳至 Turnitin API 時發生問題';
$string['taskoutputfileuploaded'] = '已上傳至 Turnitin 提交文件的檔案：{$a}';
$string['taskoutputlatesteulanotretrieved'] = '無法擷取最新版本的 EULA';
$string['taskoutputlatesteularetrievalfailure'] = '最新 EULA 版本呼叫失敗。';
$string['taskoutputlatesteularetrieved'] = '已擷取 EULA 版本 {$a}。';
$string['taskoutputpluginnotconfigured'] = '無法執行 {$a} 的工作，因為尚未設定 Turnitin Integrity 外掛程式。<br/>請前往網站管理中的外掛程式組態頁面來新增您的 Turnitin API 憑證。';
$string['taskoutputsubmissioncreated'] = '在 Turnitin 中建立的提交文件：{$a}';
$string['taskoutputsubmissionnotcreatedeula'] = '無法在 Turnitin 中建立提交文件，因為提交者尚未接受 EULA。';
$string['taskoutputsubmissionnotcreatedgeneral'] = '無法在 Turnitin 中建立提交文件。請查閱您的記錄檔。';
$string['taskoutputwebhookcreated'] = 'Webhook 已建立。Turnitin 會將回呼傳送至 {$a}';
$string['taskoutputwebhookcreationfailure'] = 'Webhook 建立要求失敗。請查閱您的記錄檔。';
$string['taskoutputwebhookdeleted'] = '已刪除 Webhook {$a}。';
$string['taskoutputwebhookdeletefailure'] = '無法刪除 Webhook。請查閱您的記錄檔。';
$string['taskoutputwebhooknotcreated'] = '無法建立 Webhook。請查閱您的記錄檔。';
$string['taskoutputwebhooknotdeleted'] = '無法刪除 Webhook {$a}。';
$string['taskoutputwebhooknotretrieved'] = '無法擷取 Webhook {$a}。將會建立新 webhook';
$string['taskoutputwebhookretrievalfailure'] = 'Webhook {$a} 擷取呼叫失敗。';
$string['taskoutputwebhookretrieved'] = '已擷取 Webhook {$a}。Webhook 處於使用中狀態。';
$string['tasksendqueuedsubmissions'] = '從 Turnitin Integrity 外掛程式傳送已排入佇列的檔案';
$string['turnitinapikey'] = 'Turnitin API 金鑰';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitinconfig'] = '外掛程式組態';
$string['turnitinenablelogging'] = '啟用診斷模式';
$string['turnitinenableremotelogging'] = '將記錄檔傳送至 Turnitin';
$string['turnitinenableremotelogging_help'] = '記錄檔將會自動傳送至 Turnitin 進行診斷。不會傳輸私人資料。建議保持啟用此設定，這樣我們才能在有需要的情況下快速提供支援。但是，您仍然能夠在 Moodle 環境中找到記錄檔，以便手動傳送給 Turnitin。';
$string['turnitinfeatures'] = 'Turnitin Integrity 功能';
$string['turnitinfeatures::eulanotrequired'] = '使用者並非必須接受 Turnitin EULA';
$string['turnitinfeatures::eularequired'] = '所有使用者都必須接受 Turnitin EULA';
$string['turnitinfeatures::header'] = 'Turnitin Integrity 功能';
$string['turnitinfeatures::moreinfo'] = '如需有關 Turnitin 已啟用功能與套件的詳細資訊，請參閱 <a href="http://www.turnitin.com" target="_blank">http://www.turnitin.com</a>。';
$string['turnitinfeatures::repositories'] = '檢查的知識庫：';
$string['turnitinfeatures::viewoptions'] = 'Turnitin Viewer (Turnitin 雲端檢視器) 選項：';
$string['turnitinhideidentity'] = '隱藏學生的身分識別，不顯示給 Turnitin';
$string['turnitinmodenabled'] = '針對 {$a} 啟用 Turnitin Integrity';
$string['turnitinpluginenabled'] = '啟用 Turnitin';
$string['turnitinpluginsettings'] = 'Turnitin Integrity 外掛程式設定';
$string['turnitinsim'] = 'Turnitin Integrity 外掛程式';
$string['turnitinsim:enable'] = '啟用 Turnitin Integrity';
$string['turnitinsim:viewfullreport'] = '檢視原創性報告';
$string['turnitinsiminternet'] = '檢查網際網路內容';
$string['turnitinsimprivate'] = '檢查私人內容';
$string['turnitinviewermatchsubinfo'] = '允許貴機構內的講師檢視內部相符項目的提交資訊';
$string['turnitinviewersavechanges'] = '儲存檢視者變更';
$string['turnitinviewerviewfullsource'] = '允許貴機構內的講師檢視內部相符項目之提交文件的完整文字';
$string['viewapilog'] = '檢視 {$a} 中的 API 記錄檔';
$string['viewerpermissionferpa'] = '以下權限影響了如何在您的機構中共用資料的方式。此資料的責任由貴機構完全負責，因此當設定這些權限時，請考慮這些權限是否完全符合貴機構有關學生記錄的政策。';
$string['viewerpermissionoptions'] = '檢視者權限';
$string['viewlogs'] = '記錄檔';
$string['webhook_description'] = '{$a} 的 Webhook';
$string['webhookincorrectsignature'] = 'Webhook 回呼因簽章錯誤而失敗';
