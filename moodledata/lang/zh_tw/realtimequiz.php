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
 * Strings for component 'realtimequiz', language 'zh_tw', version '5.0'.
 *
 * @package     realtimequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addanswers'] = '新增 3 個作答欄位';
$string['addingquestion'] = '加入試題';
$string['addquestion'] = '新增試題';
$string['allquestions'] = '返回完整結果';
$string['allsessions'] = '所有測驗場次';
$string['alreadyanswered'] = '您已作答此試題';
$string['answer'] = '答案';
$string['answers'] = '答案';
$string['answersent'] = '答案已送出 - 等待試題結束:';
$string['answertext'] = '答案文字:';
$string['atleastoneanswer'] = '至少需要一個答案';
$string['awaittime'] = 'AJAX 等待時間';
$string['awaittimedesc'] = '此設定定義學生瀏覽器檢查試題與結果資料的頻率(秒)。若同時參與人數過多導致伺服器延遲，應增加此數值以降低同時資料請求的數量。最小值為 1 秒。';
$string['awaittimeerror'] = '此數值不得小於 1';
$string['backquiz'] = '返回即時測驗';
$string['backresponses'] = '返回完整結果';
$string['badcurrentquestion'] = '當前試題錯誤:';
$string['badquizid'] = '測驗 ID 錯誤:';
$string['badresponse'] = '伺服器回傳非預期的回應 -';
$string['badsesskey'] = '測驗金鑰錯誤';
$string['checkdelete'] = '您確定要刪除此試題嗎?';
$string['choosecorrect'] = '設為正確答案';
$string['choosesession'] = '選擇要顯示的測驗場次:';
$string['classresult'] = '測驗結果:';
$string['classresultcorrect'] = '正確';
$string['clicknext'] = '當所有人準備好後請點選「下一題」';
$string['correct'] = '正確答案?';
$string['correctnotblank'] = '正確答案不可為空白';
$string['cross'] = '錯誤答案';
$string['deletequestion'] = '刪除試題';
$string['displaynext'] = '即將顯示下一題:';
$string['edit'] = '編輯測驗';
$string['editquestions'] = '編輯試題';
$string['editquestiontime'] = '試題時間（0 為預設值）';
$string['edittingquestion'] = '編輯試題中';
$string['errorquestiontext'] = '錯誤: 您尚未填寫試題內容';
$string['eventeditpageviewed'] = '已檢視即時測驗編輯頁面';
$string['eventresponsesviewed'] = '已檢視即時測驗作答結果';
$string['finalresults'] = '最後結果';
$string['hideusers'] = '隱藏用戶';
$string['httperror'] = '請求時發生錯誤 - 狀態:';
$string['httprequestfail'] = '放棄 :( 無法建立 XMLHTTP 實例';
$string['incorrectstatus'] = '測驗狀態錯誤: \'';
$string['invalidanswer'] = '無效的答案編號';
$string['joininstruct'] = '請等老師指示後再點擊此處';
$string['joinquiz'] = '參加測驗';
$string['joinquizasstudent'] = '以學生身分參加測驗';
$string['modulename'] = '即時測驗';
$string['modulenameplural'] = '即時測驗';
$string['next'] = '下一題 >>';
$string['nextquestion'] = '下一題';
$string['noanswers'] = '未提供任何答案';
$string['nocorrect'] = '沒有「正確」答案';
$string['noquestion'] = '回應錯誤 - 缺少試題資料:';
$string['nosessions'] = '此即時測驗尚未開始作答';
$string['notallowedattempt'] = '您沒有權限參加此測驗';
$string['notauthorised'] = '您沒有權限控制此測驗';
$string['onecorrect'] = '錯誤:  正確答案必須只有一個';
$string['pluginadministration'] = '即時測驗管理';
$string['pluginname'] = '即時測驗';
$string['prevquestion'] = '上一題';
$string['privacy:metadata:realtimequiz_submitted'] = '即時測驗試題的作答詳情';
$string['privacy:metadata:realtimequiz_submitted:answerid'] = '所選答案的 ID';
$string['privacy:metadata:realtimequiz_submitted:questionid'] = '已作答試題的 ID';
$string['privacy:metadata:realtimequiz_submitted:sessionid'] = '作答所屬的測驗場次 ID';
$string['privacy:metadata:realtimequiz_submitted:userid'] = '提交答案的使用者 ID';
$string['question'] = '試題';
$string['questiondelete'] = '刪除試題{$a}';
$string['questionfinished'] = '測驗結束，正在等待結果';
$string['questionimage'] = '(選填) 圖片:';
$string['questionmovedown'] = '移動試題 {$a} 向下';
$string['questionmoveup'] = '移動試題 {$a} 向上';
$string['questions'] = '試題';
$string['questionslist'] = '此即時測驗的試題:';
$string['questiontext'] = '試題內容:';
$string['questiontime'] = '預設試題時間';
$string['questiontime_help'] = '每題顯示的預設時間(秒)。<br />個別問題可單獨覆蓋此設定。';
$string['quizfinished'] = '沒有更多試題';
$string['quiznotrunning'] = '測驗尚未開始 - 請等待老師啟動';
$string['realtimequiz:addinstance'] = '新增即時測驗';
$string['realtimequiz:attempt'] = '參加測驗';
$string['realtimequiz:control'] = '開始/控制一個測驗';
$string['realtimequiz:editquestions'] = '編輯測驗的試題';
$string['realtimequiz:seeresponses'] = '查看測驗作答結果';
$string['realtimequizintro'] = '介紹';
$string['realtimequizsettings'] = '即時測驗設定';
$string['reconnectinstruct'] = '測驗已在進行中 - 您可以連接到此場次並接手控制。';
$string['reconnectquiz'] = '重新連線到測驗';
$string['removeimage'] = '移除圖片';
$string['responses'] = '作答紀錄';
$string['resultcorrect'] = '正確。';
$string['resultoverall'] = '正確。整體結果:';
$string['resultthisquestion'] = '此試題:';
$string['saveadd'] = '儲存試題並新增下一題';
$string['scorestable'] = '成績表';
$string['seeresponses'] = '查看作答結果';
$string['sendinganswer'] = '正在送出答案';
$string['servererror'] = '伺服器回傳錯誤:';
$string['sessions'] = '測驗場次';
$string['showsession'] = '顯示';
$string['showusers'] = '顯示用戶';
$string['startnewquiz'] = '開始新的測驗場次';
$string['startnewquizconfirm'] = '您確定要放棄目前正在進行的測驗場次並開始新的場次嗎？';
$string['startquiz'] = '開始測驗';
$string['studentconnected'] = '學生已連線';
$string['studentsconnected'] = '學生已連線';
$string['submissions'] = '提交';
$string['teacherjoinquizinstruct'] = '若您想自己試用此測驗功能請使用此選項<br />（您也需要在另一個視窗中啟動或重新連線到測驗）。';
$string['teacherstartinstruct'] = '使用此功能啟動測驗，讓學生進行測驗<br />請使用文字方塊為此場次命名（以方便日後查看測驗結果）';
$string['teacherstartnewinstruct'] = '開始新的測驗場次並放棄目前正在進行的場次。<br />請務必確認目前的場次未被使用再執行此操作！<br />若不確定，建議先使用第一個按鈕重新連線至目前的場次。';
$string['tick'] = '正確答案';
$string['timeleft'] = '剩餘作答時間:';
$string['totals'] = '累計結果';
$string['tryagain'] = '您想再試一次嗎?';
$string['unknownrequest'] = '不明的請求: \'';
$string['updatequestion'] = '儲存試題';
$string['view'] = '檢視測驗';
$string['waitfirst'] = '等待發送第一個問題';
$string['waitstudent'] = '等待學生連線';
$string['yourresult'] = '您的結果：';
