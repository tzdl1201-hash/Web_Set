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
 * Strings for component 'lesson', language 'zh_tw', version '5.0'.
 *
 * @package     lesson
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesscontrol'] = '存取控制';
$string['actionaftercorrectanswer'] = '回答正確後的動作';
$string['actionaftercorrectanswer_help'] = '在正確回答問題之後，有三個選項決定下一頁跳轉到哪裡：
<p>正常：一般情況下是跳到試題所指定的頁面，大多數情況下會顯示下一頁。系統會引領學生以符合邏輯的路徑進行編序學習，從入口開始，在出口結束。</p>
　　
<p>隨機：此模組還可以以一種<i>卡片</i>的形式來使用，系統會以隨機的方式顯示資訊和試題。在這種情形下，沒有固定的入口和出口，只有一系列以不固定順序顯示的卡片一張一張地出現。</p>
　　
<p>這隨機方式有兩種變化，其中一個是“顯示未讀過的頁面”，它決不會將一個頁面顯示兩遍(無論學生是否正確回答了頁面上的問題)；另一個是“顯示未回答的頁面”，這種情況下，系統會將學生尚未讀過的，以及已經讀過但回答錯誤的頁面都隨機顯示出來。</p>
　　
<p>在上述的各種卡片類型的編序學習中，教師可以決定顯示所有的卡片/頁面或者是只(隨機)顯示其中一部分。這可由“顯示多少頁(卡片)”選項來決定。</p>';
$string['actions'] = '動作';
$string['activitylink'] = '連結到下一個活動';
$string['activitylink_help'] = '若想在編序學習結束時，提供一個到這課程的其他活動的連結，請在下拉選單中選擇該活動。';
$string['activitylinkname'] = '到{$a}';
$string['activityoverview'] = '你有一些單元即將逾期';
$string['addabranchtable'] = '新增內容頁面';
$string['addanendofbranch'] = '新增一個分支的結束頁';
$string['addanewpage'] = '新增一個新頁面';
$string['addaquestionpage'] = '新增一個試題頁面';
$string['addaquestionpagehere'] = '在此新增一個試題頁';
$string['addbranchtable'] = '新增一內容頁面';
$string['addcluster'] = '新增一個群集';
$string['addedabranchtable'] = '已新增一個內容頁面';
$string['addedanendofbranch'] = '增加了一個分支的結束頁';
$string['addedaquestionpage'] = '增加了一個問題頁';
$string['addedcluster'] = '增加了一個集群';
$string['addedendofcluster'] = '增加了群集的結束頁';
$string['addendofcluster'] = '新增一個群集的結束頁';
$string['addnewgroupoverride'] = '新增群組覆寫';
$string['addnewuseroverride'] = '新增用戶覆寫';
$string['addpage'] = '新增一頁';
$string['allowofflineattempts'] = '允許編序學習模組使用這行動裝置應用程式進行離線作答';
$string['allowofflineattempts_help'] = '若啟用，行動裝置應用程式的用戶可以下載這些編序學習單元，並以離線方式作答。
所有可能答案和正確答案都會被同時下載。
注意：若編序學習的單元若有作答時間限制，就無法離線作答。';
$string['anchortitle'] = '主要內容的起始';
$string['and'] = '和';
$string['answer'] = '答案';
$string['answeredcorrectly'] = '已經正確回答';
$string['answersfornumerical'] = '答案為數值的問題，應該配上一對最大值和最小值';
$string['arrangebuttonshorizontally'] = '將內容分支按鈕採水平放置？';
$string['attempt'] = '作答：{$a}';
$string['attemptheader'] = '作答';
$string['attempts'] = '作答';
$string['attemptsdeleted'] = '已刪除作答';
$string['attemptsremaining'] = '您還有{$a}次作答機會';
$string['available'] = '開始時間';
$string['averagescore'] = '平均分數';
$string['averagetime'] = '平均時間';
$string['branch'] = '目錄(分支表)';
$string['branchtable'] = '目錄(分支表)';
$string['cancel'] = '取消';
$string['cannotfindanswer'] = '錯誤：找不到答案';
$string['cannotfindattempt'] = '錯誤：找不到作答記錄';
$string['cannotfindessay'] = '錯誤：找不到問答題';
$string['cannotfindfirstgrade'] = '錯誤：找不到分數';
$string['cannotfindfirstpage'] = '錯誤：找不到首頁';
$string['cannotfindgrade'] = '錯誤：找不到分數';
$string['cannotfindnewestgrade'] = '錯誤：找不到最新分數';
$string['cannotfindnextpage'] = '錯誤：找不到下一頁(在單元學習備份)';
$string['cannotfindpagerecord'] = '錯誤：找不到頁面紀錄(在添加分支結尾)';
$string['cannotfindpages'] = '錯誤：找不到編序學習頁面';
$string['cannotfindpagetitle'] = '錯誤：找不到頁面標題(在確認刪除)';
$string['cannotfindpreattempt'] = '錯誤：找不到前一次作答紀錄';
$string['cannotfindrecords'] = '錯誤：找不到編序學習的紀錄';
$string['cannotfindtimer'] = '錯誤：找不到編序學習_計時器的紀錄';
$string['cannotfinduser'] = '錯誤：找不到用戶';
$string['canretake'] = '{$a}可以重新學習';
$string['casesensitive'] = '區分大小寫';
$string['casesensitive_help'] = '若勾選，則表示要採用正規表達方式(要區分大小寫)來分析學生的答案。';
$string['checkbranchtable'] = '檢查內容分支表';
$string['checkedthisone'] = '檢查這一個';
$string['checknavigation'] = '檢查導覽流程';
$string['checkquestion'] = '檢查題目';
$string['classstats'] = '班級統計';
$string['clicktodownload'] = '點按下面連結下載這個檔案。';
$string['closebeforeopen'] = '無法更新這一單元，你指定的關閉日期是在開啟日期之前。';
$string['cluster'] = '群集';
$string['clusterjump'] = '在群集中隱藏的試題';
$string['clustertitle'] = '群集';
$string['collapsed'] = '摺疊的';
$string['comments'] = '您的評語';
$string['completed'] = '已完成';
$string['completederror'] = '完成這編序學習';
$string['completethefollowingconditions'] = '您必須在<b>{$a}</b>編序學習中完成下列要求，才能繼續。';
$string['completionendreached'] = '需要達到結束';
$string['completionendreached_desc'] = '學生需要達到單元頁面的結束，才算完成這一活動。';
$string['completiontimespentdesc'] = '學生必須做這一活動至少{$a}';
$string['completiontimespentgroup'] = '需要花費時間';
$string['conditionsfordependency'] = '所要求的條件';
$string['configintro'] = '這裡所設定的數值將會成為建立新學習單元活動時，使用的設定表單上的預設值。進階的設定只有在點選"顯示更詳細..."時，才會顯示。';
$string['configmaxanswers'] = '每頁預設最多放幾個答案';
$string['configmediaclose'] = '在彈出視窗上顯示一個關閉按鈕，用以顯示鏈結的媒體檔案';
$string['configmediaheight'] = '設定彈出視窗的高度，用以顯示鏈結的媒體檔案';
$string['configmediawidth'] = '設定彈出視窗的寬度，用以顯示鏈結的媒體檔案';
$string['configpassword_desc'] = '是否需要密碼才能存取這一學習單元';
$string['configslideshowbgcolor'] = '若啟用，設定這幻燈秀的背景顏色';
$string['configslideshowheight'] = '若啟用，設定這幻燈秀的高度';
$string['configslideshowwidth'] = '若啟用，設定這幻燈秀的寬度';
$string['configtimelimit_desc'] = '若有設定時間限制，那在學習單元開始會顯示警告訊息，而且還會有一個倒數的計時器。若設為零，即表示沒有時間限制。';
$string['confirmdelete'] = '刪除頁面';
$string['confirmdeletionofthispage'] = '確認要刪除這一頁';
$string['congratulations'] = '恭喜！編序學習已經完成。';
$string['continue'] = '繼續';
$string['continuetoanswer'] = '繼續更改答案';
$string['continuetonextpage'] = '繼續到下一頁';
$string['correctanswerjump'] = '回答正確則跳轉';
$string['correctanswerscore'] = '回答正確的得分';
$string['correctresponse'] = '正確的回應';
$string['createaquestionpage'] = '建立一問題頁';
$string['credit'] = '學分';
$string['customscoring'] = '自訂評分規則';
$string['customscoring_help'] = '若啟用，可以給每一種答案一個分數值(正數或負數)
匯入的試題，若回答正確得 1分，若錯誤則得 0分，當然在匯入後可以修改此值。';
$string['deadline'] = '截止時間';
$string['defaultessayresponse'] = '您的申論題將會由你的教師評分';
$string['deleteallattempts'] = '刪除此編序學習的所有作答記錄';
$string['deletedefaults'] = '刪除{$a}編序學習的預設';
$string['deletedpage'] = '刪除頁面';
$string['deletepagenamed'] = '刪除頁面：{$a}';
$string['deleting'] = '刪除中';
$string['deletingpage'] = '刪除頁面： {$a}';
$string['dependencyon'] = '要檢查的條件';
$string['dependencyon_help'] = '設定學生能否取用此一編序學習，看該學生在同一課程中的其他編序學習的表現而定。
您可以使用"花費時間"、"是否完成"、或"分數高於"等條件的各種組合。';
$string['description'] = '描述';
$string['detailedstats'] = '詳細統計';
$string['didnotanswerquestion'] = '沒有回答這一試題';
$string['didnotreceivecredit'] = '未收到及格證明';
$string['disabled'] = '已關閉';
$string['displaydefaultfeedback'] = '使用預設回饋';
$string['displaydefaultfeedback_help'] = '如果啟用，當某個特定的問題沒有設定回應內容時，將顯示預設回應："此答案正確"和"此答案錯誤"。';
$string['displayinleftmenu'] = '顯示在選單中？';
$string['displayleftif'] = '顯示左側選單，若分數高於';
$string['displayleftif_help'] = '此設定決定在看到左測選單之前是否必須先取得一定的分數。這將強制學生在第一次瀏覽時必須瀏覽完整個課程。在達到分數門檻後，它們就可以使用左側選單進行複習了。';
$string['displayleftmenu'] = '顯示選單';
$string['displayleftmenu_help'] = '若啟用，會顯示頁面(分支表)的列表。試題頁和群集頁在預設情況下不在其中(可以修改試題頁屬性來顯示它)。';
$string['displayofgrade'] = '(只向學生)顯示成績';
$string['displayreview'] = '提供選項以重做試題';
$string['displayreview_help'] = '若啟用，當學生未能正確回答問題時，即顯示一個按鈕並允許學生重做一次(但無分數)。
這個功能與論文型題目並不相容，因此如果您使用論文型題目，請設定此選項為<b>否</b>。';
$string['displayscorewithessays'] = '<p>您在自動評計分的試題中，獲得{$a->score}分(此部分配分是{$a->tempmaxgrade})。</p>
<p>您的{$a->essayquestions}個問答題將會晚一些被評分，並加入到您的最後成績中。</p>
<p>若不包含問答題，您目前的分數是{$a->score}，總配分是{$a->grade}</p>';
$string['displayscorewithoutessays'] = '您的分數是{$a->score}(滿分{$a->grade})';
$string['duplicatepagenamed'] = '重複的頁面：{$a}';
$string['edit'] = '編輯';
$string['editingquestionpage'] = '編輯{$a}試題頁面';
$string['editlesson'] = '編輯 {$a}';
$string['editlessonsettings'] = '編輯編序教學的設定';
$string['editoverride'] = '編輯覆寫';
$string['editpage'] = '編輯頁面內容';
$string['editpagecontent'] = '編輯此網頁內容';
$string['email'] = '電子郵件';
$string['emailallgradedessays'] = '寄出所有已評分過的問答題';
$string['emailgradedessays'] = '寄出已評分過的問答題';
$string['emailsuccess'] = 'Email已經成功寄出';
$string['emptypassword'] = '密碼不可以是空白';
$string['enabled'] = '已啟用';
$string['endofbranch'] = '分支結束';
$string['endofcluster'] = '群集結束';
$string['endofclustertitle'] = '群集結尾';
$string['endoflesson'] = '編序學習結束';
$string['enteredthis'] = '進入';
$string['enterpassword'] = '請輸入密碼';
$string['eolstudentoutoftime'] = '注意：您已經用完此編序學習的時限。如果您回答的時間是在結束時間之後，也許沒有計算到您最後的回答。';
$string['eolstudentoutoftimenoanswers'] = '您沒有回答任何試題。此編序學習您將得到0分。';
$string['essay'] = '問答題';
$string['essayemailmessage2'] = '<p>問答題提示：{$a->question}</p>
<p>您的回答：<em>{$a->response}</em></p>
<p>評分者的評論：<em>{$a->comment}</em></p>
<p>您在這個問答題上得到{$a->earned }分(滿分是{$a->outof}分)。</p>
<p>您在這學習單元的分數已經被更改為{$a->newgrade}%。</p>';
$string['essayemailsubject'] = '您在學習單元問題上的分數';
$string['essayresponses'] = '申論題';
$string['essays'] = '問答題';
$string['essayscore'] = '問答題分數';
$string['eventcontentpageviewed'] = '已經檢視內容頁面';
$string['eventessayassessed'] = '評量申論題';
$string['eventessayattemptviewed'] = '檢視申論題作答';
$string['eventhighscoreadded'] = '添加最高分數';
$string['eventhighscoresviewed'] = '檢視最高分數';
$string['eventlessonended'] = '學習單元開始';
$string['eventlessonrestarted'] = '單元已重新開始';
$string['eventlessonresumed'] = '單元已恢復';
$string['eventlessonstarted'] = '學習單元結束';
$string['eventoverridecreated'] = '已更新單元覆寫';
$string['eventoverridedeleted'] = '已更新單元覆寫';
$string['eventoverrideupdated'] = '已更新單元覆寫';
$string['eventpagecreated'] = '建立頁面';
$string['eventpagedeleted'] = '刪除頁面';
$string['eventpagemoved'] = '頁面已移動';
$string['eventpageupdated'] = '更新頁面';
$string['eventquestionanswered'] = '已經回答問題';
$string['eventquestionviewed'] = '已經檢視問題';
$string['false'] = '錯誤';
$string['fileformat'] = '檔案格式';
$string['finish'] = '完成';
$string['firstanswershould'] = '第一個答案應跳至"正確的" 頁面';
$string['firstwrong'] = '你答錯了，你想要再答一次嗎？(若你回答正確，也不會算入最後正式分數)？';
$string['flowcontrol'] = '流程控管';
$string['fractionsaddwrong'] = '您選的分數總和不等於100%<br/>而是等於{$a}%<br/>您想回去修正這個問題嗎？';
$string['fractionsnomax'] = '至少一個答案應該得分是 100%, 才有可能拿到本題的滿分.
<BR>想回去修正此題的錯誤分配嗎 ?';
$string['full'] = '展開的';
$string['general'] = '一般的';
$string['gotoendoflesson'] = '跳到這編序學習的結束';
$string['gradebetterthan'] = '分數高於(%)';
$string['gradebetterthanerror'] = '得分高於 {$a} %';
$string['graded'] = '已評分';
$string['gradeessay'] = '評閱問答題 (有{$a->notgradedcount} 還沒打分數，有{$a->notsentcount} 份還沒送出)';
$string['gradeis'] = '分數是{$a}';
$string['gradeoptions'] = '分數選項';
$string['groupoverrides'] = '群體覆蓋';
$string['groupoverridesdeleted'] = '已刪除群體覆蓋';
$string['groupsnone'] = '這一課程中沒有分群組';
$string['handlingofretakes'] = '如何處理重新學習的分數？';
$string['handlingofretakes_help'] = '當允許學生重學此編序學習時，這設定決定成績要採用所有作答次的<b>平均分數</b>或是<b>最高分數</b>。';
$string['havenotgradedyet'] = '尚未評分';
$string['here'] = '這裡';
$string['highscore'] = '最高分';
$string['hightime'] = '最長時間';
$string['importcount'] = '匯入{$a}個試題';
$string['importquestions'] = '匯入試題';
$string['importquestions_help'] = '<p>這個功能於允許您通過表單上傳外部文字檔案，並匯入其中的試題。</p>
<p>它可以支援很多檔格式：</p>
<p><b>GIFT格式</b></p>
<ul>
<p>GIFT是Moodle可以用來從文字檔案導入問題的最複雜的格式。它支援單選題、是非題、簡答題、配合題、
數學題及填空題。在一個單獨的文字檔案中可以混合多種類型的題目，並且這種格式還支援整行注釋、問題名稱、
迴饋和百分比權重的計分方法。下面是一個例子:</p>
<pre>
　　Who\'s buried in Grant\'s tomb?~Grant ~Jefferson =no one}
　　
　　Grant is {~buried =entombed ~living} in Grant\'s tomb.
　　
　　Grant is buried in Grant\'s tomb.{FALSE}
　　
　　Who\'s buried in Grant\'s tomb?{=no one =nobody}
　　
　　When was Ulysses S. Grant born?{#1822}
</pre>
　　
<p align="right"><a href="help.php?file=formatgift.html&module=quiz">"GIFT"格式的更多資訊</a></p>
</ul>

<p><b>Aiken格式</b></p>
<ul>
<p>Aiken格式通常用來編寫單選題，它很簡單也易於讀懂。下面就是這個格式的例子:</p>
<pre>
　What is the purpose of first aid?
　A. To save life, prevent further injury, preserve good health
　B. To provide medical treatment to any injured or wounded person
　C. To prevent further injury
　D. To aid victims who may be seeking help
　ANSWER: A
</pre>
　　
<p align="right"><a href="help.php?file=formataiken.html&module=quiz">"Aiken"格式的更多資訊</a></p>
</ul>
　　
<p><b>Missing Word</b></p>
<ul>
<p>這個格式只支援單選題，答案之間以波浪號(~)分隔，正確答案則以等號為首碼(=)。例子如下:</p>
　　
<blockquote>
    As soon as we begin to explore our body parts as infants
　　we become students of {=anatomy and physiology ~reflexology
　　~science ~experiment}, and in a sense we remain students for life.
</blockquote>
　　
<p align="right"><a href="help.php?file=formatmissingword.html&module=quiz">"Missing Word"格式的更多資訊</a></p>
</ul>
　　
<p><b>AON</b></p>
<ul>
<p>這個格式在多數情況下和Missing Word格式相同，但在導入後，所有簡單題都會被轉為匹配題。</p>
<p>此外，多個答案在導入的過程中其順序會被打亂。</p>
<p>它以一個開發了多種測驗功能的組織命名。</p>
</ul>
　　
<p><b>Blackboard</b></p>
<ul>
<p>這個模組可以匯入以Blackboard的匯出格式保存的試題。要使用它，PHP必須具備XML處理函數。</p>
　　
<p align="right"><a href="help.php?file=formatblackboard.html&module=quiz">"Blackboard"格式的更多資訊</a></p>
</ul>
　　
<p><b>Course Test Manager</b></p>
<ul>
<p>這個模組可以引入Course Test Manager題庫中的試題。由於題庫保存於Micorsoft Access資料庫中，
它對於訪問題庫的方式，特別是Moodle運行在Windows還是Linux伺服器上有比較強的依賴性。</p>
<p>在Windows上，它允許您像上傳其他檔一樣上傳Access資料庫。</p>
<p>在Linux上，在您的網路上必須有一台安裝了Course Test Manager資料庫的Windows電腦，並通過ODBC Socket Server
以XML格式將數據傳到Linux伺服器上。</p>
<p>在使用此匯入功能前，請仔細閱讀完整的文件檔。</p>
　　
<p align="right"><a href="help.php?file=formatctm.html&module=quiz">"CTM"格式的更多資訊</a></p>
</ul>
　　
<p><b>自行定義</b></p>
<ul>
<p>如果您希望以您自己的格式導入問題，請在“mod/quiz/format/custom.php”檔中實現它。</p>

<p>需要編寫的新代碼並不多——只需從給定的文字中分析出試題就可以了。</p>
　　
<p align="right"><a href="help.php?file=formatcustom.html&module=quiz">"自定義"格式的更多資訊</a></p>
</ul>
　　
<p>將來還會有更多的格式，包括WebCT、IMS QTI和任何其他Moodle用戶可以貢獻的格式!</p>
　　';
$string['inactiveoverridehelp'] = '*學生沒有正確的群組或角色來檢視或作答這一學習單元';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['insertedpage'] = '插入的頁面';
$string['invalidfile'] = '無效的檔案';
$string['invalidid'] = '沒有課程模組區塊編號或課程編號匯入';
$string['invalidlessonid'] = '課程編號不正確';
$string['invalidoverrideid'] = '無效的覆蓋編號';
$string['invalidpageid'] = '錯誤的頁面編號';
$string['jump'] = '跳轉';
$string['jumps'] = '跳轉';
$string['jumps_help'] = '<p>每一個(問題的)答案或(分支頁)的描述都有一個“跳轉到”鏈結。當選擇了一個答案，系統會顯示它的回應資訊，之後則顯示“跳轉到”鏈結所指定的內容。這個鏈結可以是相對的也可以是絕對的。相對鏈結包括<b>本頁</b>和<b>下一頁</b>，<b>本頁</b>表示學生會再次看到當前頁，而<b>下一頁</b>則顯示邏輯順序上的下一頁。絕對鏈結是通過選擇頁面的<b>標題</b>來確定的。</p>
　　<p>用戶應當注意在使用(相對的)<b>下一頁</b>鏈結時，頁面的移動將會導致顯示不同的頁面。而在“跳轉到”鏈結中使用頁面<b>名稱</b>則無論是否移動頁面，都會顯示同一頁。</p>
　　<p>特殊跳轉</p>
　　<p>分支中未讀問題</p>
　　<p>這將跳轉到當前分支表和課程結束頁或分支結束頁之間的任意一個未(被學生)讀的頁面上。</p>
　　
　　<p>分支內的隨機問題</p>
　　<p>跳轉到當前分支表和課程結束頁或分支結束頁之間隨機選定的一個問題上。如果學生已經閱讀了該頁且課程允許的嘗試次數大於1，則學生獲得再次回答該問題的機會。如果課程允許的嘗試次數設定為1，則該問題會被忽略並重新選擇一個問題。</p>
　　
　　<p>隨機的分支表</p>
　　<p>這將跳轉到當前分支表和課程結束頁或分支結束頁之間隨機選定的分支表上。</p>';
$string['jumpsto'] = '跳轉到<em>{$a}</em>';
$string['leftduringtimed'] = '您在一個有計時的編序教學中離開了。<br>請按"繼續"以重新開始這編序教學';
$string['leftduringtimednoretake'] = '您在一個有計時的編序教學中離開了，而您不被允許重新或繼續這一編序教學';
$string['leftduringtimedsession'] = '您在一個有計時的編序教學過程中離開了';
$string['lesson:addinstance'] = '新增一個編序學習';
$string['lesson:edit'] = '編輯一編序學習活動';
$string['lesson:grade'] = '評閱單元的申論題';
$string['lesson:manage'] = '管理一個編序學習活動';
$string['lesson:manageoverrides'] = '管理學習單元覆蓋';
$string['lesson:view'] = '檢視學習單元活動';
$string['lesson:viewreports'] = '檢視單元報告';
$string['lessonclosed'] = '此編序學習已於{$a}關閉';
$string['lessoncloses'] = '編序學習關閉';
$string['lessonformating'] = '編序學習格式';
$string['lessonmenu'] = '編序學習選單';
$string['lessonnotready'] = '這個編序學習還沒開始，請與{$a}聯繫。';
$string['lessonnotready2'] = '這一編序學習還不能使用。';
$string['lessonopen'] = '此編序學習將會於{$a}開放';
$string['lessonopens'] = '編序學習開放';
$string['lessonpagelinkingbroken'] = '找不到第一頁，編序學習頁面連結應該是出問題了，請聯絡管理員。';
$string['lessonstats'] = '編序學習統計';
$string['linkedmedia'] = '已連結的媒體';
$string['loginfail'] = '登入錯誤，請重試';
$string['lowscore'] = '最低分數';
$string['lowtime'] = '最短時間';
$string['manualgrading'] = '問答題評分';
$string['matchesanswer'] = '比對答案';
$string['matching'] = '比對';
$string['matchingpair'] = '比對的筆數{$a}';
$string['maxgrade'] = '最高分數';
$string['maxgrade_help'] = '這個值確定了此單元的最高分數，範圍是0到100%。這個數值可以在任何時候修改，且修改會立即生效，它會顯示在分數頁面和其他任何各種顯示成績的列表中。如果設定這個成績為0，則此單元不會出現在任何成績頁面上。';
$string['maximumnumberofanswersbranches'] = '最多幾個答案/分支';
$string['maximumnumberofanswersbranches_help'] = '這個值指定了每個試題的最大答案數，預設值是4。如果此單元只使用是非題，則可以將這個值設定為2。

這個值同時指定了分支表中可以使用的最大分支數。

對於已經有內容的單元，修改這個值並不會有問題。事實上，如果您想添加一個有很多選項的問題，或者是很長的分支表就必須要修改這個值。當增加了這個(特殊的)問題或者分支表之後，可以將這個值減為原先的“標準”值。';
$string['maximumnumberofattempts'] = '最多可作答幾次';
$string['maximumnumberofattempts_help'] = '這個選項定義了在回答此學習單元中的<b>任何</b>問題時，學生可以嘗試作答的最大次數。對於那些沒有標準答案或很難提供標準答案的問題，如簡答和數學題，系統會直接進入下一頁。
此選項的預設值為5，太大會導致學生不仔細思考問題，太小會帶來比較多的挫折感。　　
若設定此選項的值為1，則只給學生一次回答的機會，這和測驗模組比較像，不同之處在於每個頁面只有一個問題。　　
注意這個選項是整體性的，在學習單元中無論哪種類型的題目都會受其影響。';
$string['maximumnumberofattemptsreached'] = '已達到作答次數的上限 - 將進入下一頁';
$string['mediaclose'] = '顯示關閉按鈕';
$string['mediafile'] = '連結的媒體檔';
$string['mediafile_help'] = '你可以上傳一個媒體檔案，並使用在這一單元上。這一單元的每一頁面會顯示一個區塊叫做"連結的媒體檔"，上面會有一個"點選這裡來觀看"的連結。';
$string['mediafilepopup'] = '點選這裡來觀看';
$string['mediaheight'] = '彈出視窗的高度';
$string['mediawidth'] = '彈出視窗的寬度';
$string['messageprovider:graded_essay'] = '學習單元的問答題已經計分的通知';
$string['minimumnumberofquestions'] = '最少試題數';
$string['minimumnumberofquestions_help'] = '<p>當編序學習包含了一個或多個分支表時，教師應該設置這個參數。它限定了在計算分數之前，學生應當至少回答了幾個試題，但它並<b>不</b>限制學生在一編序學習中回答更多的試題。</p>

<p>例如將這個參數設定為20，則表示學生應當已經閱讀了<b>至少</b>20個試題。假設一個學生只閱讀了編序學習中一個分支的5個頁面，並回答了相應的試題，接著他就選擇了結束該學習活動。此時若未設定此參數，則該生若答對了全部5個試題，他將獲得100%的分數。然而，如果這個參數設定為20，他只能獲得25%的分數。</p>

<p>假設另一個學生閱讀了全部25頁內容並答對了25題中的23題，那麼它可以獲得92%的分數。</p>

<p>如果使用了此參數，則在開啟編序學習頁面時將會有如下資訊：</p>
<p><blockquote>在此編序學習中，您需要回答至少n個試題，當然如果您願意，可以回答更多。然而如果您回答的試題少於n個，則在計算分數時，會假定您回答了n個試題。</blockquote></p>

<p>當然，"n"將會被此處為此參數設定的數值所代替。</p>
<p>若設定了此參數，系統將會告知學生他們實際完成的試題數，以及至少應該完成多少試題。</p>';
$string['missingname'] = '請輸入暱稱';
$string['modattempts'] = '允許學生回頭檢查';
$string['modattempts_help'] = '若啟用，即允許學生在此編序學習中從頭檢視並修改答案。';
$string['modattemptsnoteacher'] = '學生回顧功能只開放給學生們。';
$string['modulename'] = '編序學習';
$string['modulename_help'] = '編序學習模組讓教師可以用一種靈活且有趣的方式來傳遞內容和練習活動。
它包含一系列的頁面，通常每個頁面的結尾都有一個試題和一系列可選答案，學生讀完後要作答才能進到下一頁面。Moodle系統會根據學生的回答，將他帶入下一頁，或者回到上一頁，或者導向完全不同的學習路徑。
為了確保學生的真正理解，每一頁的試題可以用選擇題、配合題、或簡答題。
根據學生選擇的答案，以及教師的設計，學生可能會進到下一頁，回到先前頁面，或導向完全不同的路徑。

編序學習可以用來：

* 對新主題進行自我指導的學習。
* 作為真實評量的場景　　
* 提供模擬/決策練習';
$string['modulename_link'] = 'mod/lesson/view';
$string['modulenameplural'] = '編序學習';
$string['move'] = '移動頁面';
$string['movedpage'] = '已經移動的頁面';
$string['movepagehere'] = '移動頁面到此';
$string['movepagenamed'] = '移動頁面：{$a}';
$string['moving'] = '移動頁面： {$a}';
$string['multianswer'] = '複選題';
$string['multianswer_help'] = '若勾選，表示其中有一個以上的答案是正確答案。';
$string['multichoice'] = '選擇題';
$string['multipleanswer'] = '多個答案';
$string['nameapproved'] = '名字已被核准';
$string['namereject'] = '對不起，您的名字已被過濾器拒絕。
<br>請試用另一個名字。';
$string['new'] = '新';
$string['nextpage'] = '下一頁';
$string['noanswer'] = '有一個或以上的問題沒有回答。請回頭並提交一個答案。';
$string['noattemptrecordsfound'] = '沒有找到作答記錄：不給分數';
$string['nobranchtablefound'] = '沒有發現內容分支表頁面';
$string['noclose'] = '沒有關閉日期';
$string['nocommentyet'] = '還沒有評論';
$string['nocoursemods'] = '找不到活動';
$string['nocredit'] = '沒有學分';
$string['nodeadline'] = '沒有最後期限';
$string['noessayquestionsfound'] = '這一編序學習沒有問答題';
$string['nohighscores'] = '沒有最高分數';
$string['nolessonattempts'] = '這個編序學習還沒有人嘗試作答。';
$string['nolessonattemptsgroup'] = '{$a}群組成員在這單元上還沒有人作答';
$string['none'] = '無';
$string['nooneansweredcorrectly'] = '沒有人回答正確';
$string['nooneansweredthisquestion'] = '沒有人回答此問題';
$string['noonecheckedthis'] = '沒有人勾選這個';
$string['nooneenteredthis'] = '沒有人進入這裡';
$string['noonehasanswered'] = '還沒有人回答過問答題';
$string['noonehasansweredgroup'] = '在{$a}還沒有人回答申論題。';
$string['noopen'] = '沒有開啟日期';
$string['nooverridedata'] = '你必須至少覆寫一個學習單元的設定';
$string['noretake'] = '您不可以重新做此單元';
$string['normal'] = '正常 - 遵循編序學習的路徑';
$string['notcompleted'] = '未完成';
$string['notdefined'] = '未定義';
$string['notenoughsubquestions'] = '沒有定義足夠的小題!<br>您要退回去修改嗎？';
$string['notenoughtimespent'] = '你在{$a->timespent}完成這一學習單元，它比要求的時間 {$a->timerequired}還要少。你可能需要再回頭檢查一次。';
$string['notgraded'] = '尚未評分';
$string['notitle'] = '無標題';
$string['notyetcompleted'] = '學習單元已經開始，但尚未完成';
$string['numberofcorrectanswers'] = '答對題數：{$a}';
$string['numberofcorrectanswersheader'] = '正確答案數';
$string['numberofcorrectmatches'] = '配對正確的題數：{$a}';
$string['numberofpagestoshow'] = '要顯示多少頁';
$string['numberofpagestoshow_help'] = '<p>這個選項可以指定這一編序學習最多顯示幾個頁面。</p>
<p>它只適用於頁面以隨機方式顯示的編序學習(當把"回答正確和的動作"設定為"顯示一個沒見過的頁面"或"顯示一個未回答的頁面")。</p>
<p>如果這設定值比編序學習的實際頁面多，或設定為0時，則會顯示全部頁面。</p>';
$string['numberofpagesviewed'] = '已回答試題數，或已瀏覽頁面數：{$a}';
$string['numberofpagesviewedheader'] = '已經回答多少試題';
$string['numberofpagesviewednotice'] = '已經回答題數：{$a->nquestions}(您至少要回答{$a->minquestions}題)';
$string['numerical'] = '計算題';
$string['offlinedatamessage'] = '你現在是使用行動裝置來作答。資料最後一次儲存到這網站是在{$a}以前。請檢查你是否還有尚未儲存的資料。';
$string['ongoing'] = '是否顯示累計的分數';
$string['ongoing_help'] = '若啟用，每一頁會顯示到目前為止，這位學生在可能的總分之中，他已得到幾分。(目前得分/總配分)';
$string['ongoingcustom'] = '目前的{$a->currenthigh}分中，您已獲得{$a->score}分。';
$string['ongoingnormal'] = '到目前為止的{$a->viewed}次作答中，您答對了{$a->correct}題。';
$string['onpostperpage'] = '每個成績只能發佈一次';
$string['options'] = '選項';
$string['or'] = '或';
$string['ordered'] = '已排序的';
$string['other'] = '其他';
$string['outof'] = '配分{$a}';
$string['override'] = '覆寫';
$string['overridedeletegroupsure'] = '你確定要為群組{$a}刪除這覆寫？';
$string['overridedeleteusersure'] = '你確定要為用戶{$a}刪除這覆寫？';
$string['overridegroup'] = '覆寫群組';
$string['overridegroupeventname'] = '{$a->lesson} - {$a->group}';
$string['overrides'] = '覆寫';
$string['overrideuser'] = '覆寫用戶';
$string['overrideusereventname'] = '{$a->lesson} -覆寫';
$string['overview'] = '綜覽';
$string['overview_help'] = '　　';
$string['page'] = '頁面：{$a}';
$string['page-mod-lesson-edit'] = '編輯編序學習頁面';
$string['page-mod-lesson-view'] = '檢視或預覽編序學習頁面';
$string['page-mod-lesson-x'] = '任何編序學習頁面';
$string['pageanswers'] = '頁面答案';
$string['pagecontents'] = '頁面內容';
$string['pageresponses'] = '頁面反應';
$string['pages'] = '頁面';
$string['pagetitle'] = '頁面標題';
$string['password'] = '密碼';
$string['passwordprotectedlesson'] = '{$a}是一個需要密碼的編序學習活動';
$string['pleasecheckoneanswer'] = '請勾選一個答案';
$string['pleasecheckoneormoreanswers'] = '請勾選一或以上的答案';
$string['pleaseenteryouranswerinthebox'] = '請在方格中輸入您的答案';
$string['pleasematchtheabovepairs'] = '請將上面的兩兩配對';
$string['pluginadministration'] = '編序學習管理';
$string['pluginname'] = '編序學習';
$string['pointsearned'] = '得分';
$string['postprocesserror'] = '在後處理過程發生錯誤!';
$string['postsuccess'] = '張貼成功';
$string['practice'] = '練習用編序學習';
$string['practice_help'] = '練習用的單元不會顯示在成績簿中';
$string['preprocesserror'] = '在預先處理過程發生錯誤!';
$string['prerequisiteisobsolete'] = '這個學習單元先決條件的選項已經被移除。請使用存取限制來代替。';
$string['prerequisitelesson'] = '要先修的學習單元';
$string['preview'] = '預覽';
$string['previewlesson'] = '預覽{$a}';
$string['previewpagenamed'] = '預覽頁面：{$a}';
$string['previouspage'] = '上一頁';
$string['processerror'] = '在處理過程發生錯誤!';
$string['progressbar'] = '進度列';
$string['progressbar_help'] = '若啟用，在編序教學頁面底部會顯示一個進度列，說明已完成的百分比。';
$string['progressbarteacherwarning'] = '不顯示進度列給{$a}看';
$string['progressbarteacherwarning2'] = '你不能看到這進度列，因為你可以編輯這一編序學習。';
$string['progresscompleted'] = '在這一編序學習，你已經完成{$a}%';
$string['qtype'] = '頁面類型';
$string['question'] = '試題';
$string['questionoption'] = '試題選項';
$string['questiontype'] = '試題類型';
$string['randombranch'] = '隨機選取內容頁面';
$string['randompageinbranch'] = '在內容頁面中隨機選取試題';
$string['rank'] = '排名';
$string['rawgrade'] = '原始分數';
$string['receivedcredit'] = '及格';
$string['redisplaypage'] = '重新顯示頁面';
$string['removeallgroupoverrides'] = '刪除所有的群組覆寫';
$string['removealluseroverrides'] = '刪除所有的用戶覆寫';
$string['report'] = '報表';
$string['reports'] = '報表';
$string['response'] = '反應';
$string['retakesallowed'] = '允許重新學習';
$string['retakesallowed_help'] = '<p>這個選項設定了學生是否可以多次學習此一編序學習。如果教師認為此活動中有學生需要完全學會的資料，則應當允許多次學習。如果其中的資料是用於考試等情形，則應當禁止重新學習。</p>

<p>當允許學生重學此編序學習時，其<b>分數</b>可以採用<b>平均分數</b>或者<b>最高分數</b>，下面的參數就決定了應當使用哪種計分方式。</p>

<p>注意<b>試題分析</b>總是使用第一次回答的答案，重新學習得會被忽略掉。</p>

<p>這選項的預設為<b>是</b>，表示學生可以重新學習此編序學習。實際上只有一些特殊情況才設為<b>否</b>。</p>';
$string['returnto'] = '回到 {$a}';
$string['returntocourse'] = '回到課程';
$string['reverttodefaults'] = '回復到學習單元的預設';
$string['review'] = '復習';
$string['reviewlesson'] = '復習編序學習';
$string['reviewquestionback'] = '是的，我想要再試';
$string['reviewquestioncontinue'] = '不，我只想要繼續下一個問題';
$string['sanitycheckfailed'] = '檢查錯誤：這個嘗試被刪除了。';
$string['save'] = '儲存';
$string['savechanges'] = '儲存更新';
$string['savechangesandeol'] = '儲存所有更新，並到這編序學習的終點';
$string['saveoverrideandstay'] = '儲存並輸入其他的覆寫';
$string['savepage'] = '儲存頁面';
$string['score'] = '分數';
$string['score_help'] = '只有啟用自訂計分時才會有分數。教師可以對每個答案賦予一個數值(正的或負的)。';
$string['scores'] = '分數';
$string['search:activity'] = '學習單元活動';
$string['secondpluswrong'] = '不離開嗎?您想要再試試?';
$string['selectaqtype'] = '選擇一個題型';
$string['shortanswer'] = '簡答題';
$string['showanunansweredpage'] = '顯示未回答的頁面';
$string['showanunseenpage'] = '顯示未瀏覽的頁面';
$string['singleanswer'] = '單一答案';
$string['skip'] = '略過導覽';
$string['slideshow'] = '以幻燈片展示';
$string['slideshow_help'] = '若啟用，編序學習將以幻燈片的形式來顯示，有固定的寬度、高度和可定制的背景顏色。

如果頁面的內容超過了指定的寬度和高度，則會顯示基於CSS的捲軸。

試題將會“打斷”幻燈片的顯示，預設情況下只會顯示頁面(分支表)。

如果選定了相應的選項，則在頁面的最左或最右將會將會以相應的語言顯示“向前”或“向後”按鈕，而其他的按鈕在幻燈片的中下部顯示。';
$string['slideshowbgcolor'] = '幻燈片背景顏色';
$string['slideshowheight'] = '幻燈片高度';
$string['slideshowwidth'] = '幻燈片寬度';
$string['startlesson'] = '開始編序學習';
$string['studentattemptlesson'] = '{$a->lastname}, {$a->firstname}的作答次數為{$a->attempt}';
$string['studentname'] = '{$a} 姓名';
$string['studentoneminwarning'] = '警告:您剩下一分鐘或更少的時間來完成此編序學習。';
$string['studentoutoftimeforreview'] = '注意：你能檢視這一單元的時間已經用完';
$string['studentresponse'] = '{$a}的回應';
$string['submit'] = '提交';
$string['submitname'] = '提交名稱';
$string['teacherjumpwarning'] = '此編序學習正使用群集{$a->cluster}跳躍，或{$a->unseen}隱藏跳躍。將使用下一頁的跳躍方式來取代。以學生身份登入來測試這些跳躍。';
$string['teacherongoingwarning'] = '正進行中的分數只會顯示給學生看。請以學生身份登入來測試這個進行中的分數。';
$string['teachertimerwarning'] = '計時器只提供給學生。請以學生身份登入來測試這個計時器。';
$string['thatsthecorrectanswer'] = '這是正確的答案';
$string['thatsthewronganswer'] = '這是錯誤的答案';
$string['thefollowingpagesjumptothispage'] = '以下的頁面都會跳到這一頁';
$string['thispage'] = '這一頁';
$string['timeisup'] = '時間到了';
$string['timelimit'] = '時間限制';
$string['timelimit_help'] = '若啟用，會在這一單元的開頭顯示有關時間限制的警告，並會顯示一倒數的計時器。超過時間之後所給的回答，將不會被計分。';
$string['timelimitwarning'] = '你還有{$a}來完成這一單元';
$string['timeremaining'] = '剩餘時間';
$string['timespenterror'] = '至少花費 {$a} 分鐘在這編序學習';
$string['timespentminutes'] = '花費時間(分)';
$string['timetaken'] = '使用時間';
$string['totalpagesviewedheader'] = '已經檢視過的頁數';
$string['true'] = '對';
$string['truefalse'] = '是非題';
$string['unabledtosavefile'] = '你上傳的檔案無法儲存';
$string['unknownqtypesnotimported'] = '{$a}個試題因為題型不被支援，所以沒匯入';
$string['unseenpageinbranch'] = '在內容頁面中未瀏覽的試題';
$string['unsupportedqtype'] = '不支援的題型({$a})！';
$string['updatedpage'] = '已更新的頁面';
$string['updatefailed'] = '更新失敗';
$string['updatepagenamed'] = '更新頁面：{$a}';
$string['usemaximum'] = '使用最高分數';
$string['usemean'] = '使用平均分數';
$string['usepassword'] = '密碼保護的編序學習';
$string['usepassword_help'] = '若啟用，將需要有密碼才可以存取這一單元。';
$string['useroverrides'] = '用戶覆寫';
$string['useroverridesdeleted'] = '用戶覆寫已被刪除';
$string['usersnone'] = '沒有學生使用到這一學習單元';
$string['viewgrades'] = '檢視分數';
$string['viewreports'] = '檢視{$a->student}完成的{$a->attempts}個作答次數';
$string['viewreports2'] = '檢視{$a}個已完成的作答次';
$string['warning'] = '警告';
$string['welldone'] = '做的好！';
$string['whatdofirst'] = '您要先做什麼?';
$string['wronganswerjump'] = '跳到錯誤回答';
$string['wronganswerscore'] = '錯誤答案成績';
$string['wrongresponse'] = '錯誤反應';
$string['youhaveseen'] = '您已經瀏覽了該課程的多個頁面。<br />想從最後瀏覽的頁面開始嗎?';
$string['youranswer'] = '您的答案';
$string['yourcurrentgradeis'] = '您目前的成績為{$a}';
$string['yourcurrentgradeisoutof'] = '您目前的分數是{$a->grade}（總分{$a->total}）';
$string['youshouldview'] = '您至少應該回答：{$a}題';
