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
 * Strings for component 'question', language 'zh_tw', version '5.0'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '動作';
$string['addanotherhint'] = '新增另一提示';
$string['addcategory'] = '新增類別';
$string['addmorechoiceblanks'] = '增加 {no} 個空白選項';
$string['adminreport'] = '報告你的題庫中可能產生的問題。';
$string['advancedsearchoptions'] = '進階搜尋選項';
$string['alltries'] = '所有的作答記錄';
$string['alwayslatest'] = '總是最新的';
$string['answer'] = '答案';
$string['answers'] = '答案';
$string['answersaved'] = '答案已儲存';
$string['answerx'] = '答案 {$a}';
$string['attemptfinished'] = '作答已完成';
$string['attemptfinishedsubmitting'] = '作答已完成提交: {$a}';
$string['attemptoptions'] = '作答記錄選項';
$string['availableq'] = '可用的？';
$string['badbase'] = '在** 之前的壞基礎: {$a}**';
$string['banksincourse'] = '本課程中的題庫';
$string['behaviour'] = '作答與計分方式';
$string['behaviourbeingused'] = '被使用的作答與計分方式：{$a}';
$string['broken'] = '這是"失效的連結"，它指向一個不存在的檔案。';
$string['byandon'] = '由 <em>{$a->user}</em> 在 <em>{$a->time}</em>';
$string['cannotcopybackup'] = '無法複製備份檔案';
$string['cannotcreate'] = '在試題作答資料表(question_attempts)上無法建立新條目';
$string['cannotcreatepath'] = '無法建立路徑：{$a}';
$string['cannotdeletebehaviourinuse'] = '你無法刪除作答與計分方式"{$a}"，它被試題作答所使用';
$string['cannotdeletecate'] = '你不能刪除這一類別，它是這一處境的預設類別';
$string['cannotdeleteneededbehaviour'] = '不能刪除這一試題作答與計分方式"{$a}"。因為有其他已安裝的作答與計分方式需要倚靠它。';
$string['cannotdeleteqtypeinuse'] = '你不能刪除試題類型"{$a}"。在題庫中已經有這一類型的試題。';
$string['cannotdeleteqtypeneeded'] = '你不能刪除試題類型"{$a}"。這裡有其他試題類型需要倚賴它。';
$string['cannotdeletetopcat'] = '無法刪除最上層類別。';
$string['cannotedittopcat'] = '無法編輯最上層類別。';
$string['cannotenable'] = '試題類型{$a}無法直接建立。';
$string['cannotenablebehaviour'] = '試題作答與計分方式無法直接使用。它只能做內部使用。';
$string['cannotfindcate'] = '無法找到類別紀錄。';
$string['cannotfindquestionfile'] = '在壓縮檔裡，無法找到試題資料檔。';
$string['cannotgetdsfordependent'] = '無法為依賴資料集合的試題取得指定的資料集合!
(試題: {$a->id}, 資料集和項目: {$a->item})';
$string['cannotgetdsforquestion'] = '無法為一計算題取得指定的資料集合！(試題：{$a})';
$string['cannothidequestion'] = '無法隱藏試題';
$string['cannotimportformat'] = '抱歉，這一匯入格式還無法使用。';
$string['cannotinsertquestion'] = '無法插入新試題!';
$string['cannotinsertquestioncatecontext'] = '無法插入新試題類別 {$a->cat}，因為不合法的處境編號 {$a->ctx}';
$string['cannotloadquestion'] = '無法讀取試題';
$string['cannotmovequestion'] = '你無法使用這腳本來移動試題，因為有來自其他區域的檔案與它們相連繫。';
$string['cannotopenforwriting'] = '無法開啟來寫入：{$a}';
$string['cannotpreview'] = '你不能預覽這些試題!';
$string['cannotread'] = '無法讀取匯入的檔案(或許檔案是空的)';
$string['cannotregradedifferentqtype'] = '無法使用不同類型的題目重新評分。';
$string['cannotretrieveqcat'] = '無法擷取試題類別';
$string['cannotunhidequestion'] = '這試題無法取消隱藏';
$string['cannotunzip'] = '無法解壓縮檔案。';
$string['cannotwriteto'] = '無法將匯出的試題寫到{$a}';
$string['categories'] = '試題分類';
$string['category'] = '類別';
$string['categorycurrent'] = '目前類別';
$string['categorycurrentuse'] = '使用此類別';
$string['categorydoesnotexist'] = '這個類別不存在';
$string['categoryinfo'] = '類別資訊';
$string['categorymove'] = '類別\'{$a->name}\'中包含有{$a->count}個題目(其中有些題目可能比較舊、被隱藏，正被現有的測驗使用中)。請選擇另一個類別來轉移它們。';
$string['categorymoveto'] = '儲存在類別中';
$string['categorynamecantbeblank'] = '類別名稱不能是空白';
$string['categorynamewithcount'] = '{$a->name} ({$a->questioncount})';
$string['categorynamewithidnumber'] = '{$a->name} [{$a->idnumber}]';
$string['categorynamewithidnumberandcount'] = '{$a->name} [{$a->idnumber}] ({$a->questioncount})';
$string['changeoptions'] = '更改選項';
$string['changepublishstatuscat'] = '課程 {$a->coursename} 中的<a href="{$a->caturl}">題庫類別: {$a->name}</a>其共用狀態將從 {$a->changefrom} 變更為 {$a->changeto}。';
$string['check'] = '檢查';
$string['chooseqtypetoadd'] = '選擇一試題類型來新增';
$string['clearwrongparts'] = '清除答錯的答案';
$string['clickflag'] = '標示試題';
$string['clicktoflag'] = '標示這一試題供未來參考';
$string['clicktounflag'] = '移除標示';
$string['clickunflag'] = '移除標示';
$string['closepreview'] = '關閉預覽';
$string['combinedfeedback'] = '合併的回饋';
$string['comment'] = '評論';
$string['commented'] = '已評論：{$a}';
$string['commentormark'] = '寫評語或重新給分';
$string['comments'] = '評語';
$string['commentx'] = '評語：{$a}';
$string['complete'] = '完成';
$string['contexterror'] = '若你沒有移動一個類別到另一個處境，你應該不會跑到這兒。';
$string['copy'] = '從{$a}複製，並更改鏈結。';
$string['correct'] = '答對';
$string['correctfeedback'] = '給任何答對的答案';
$string['correctfeedbackdefault'] = '你答對了!';
$string['courserestore'] = '課程還原';
$string['created'] = '已建立';
$string['createdby'] = '建立者：';
$string['createdefault'] = '建立預設題庫';
$string['createdmodifiedheader'] = '已建立/最後儲存';
$string['createnewquestion'] = '建立一新試題....';
$string['cwrqpfs'] = '從下層類別中隨機選取隨機試題';
$string['cwrqpfsinfo'] = '如果你的系統是從Moodle1.9以前升級上來的，而且使用過"隨機試題"，那請閱讀英文說明，否則不必管它。';
$string['cwrqpfsnoprob'] = '你的網站的試題類別，沒有因為"由下層類別選擇隨機試題"的問題，而受到影響。';
$string['decimalplacesingrades'] = '成績的小數位數';
$string['defaultbank'] = '{$a->coursename} 課程題庫';
$string['defaultcreated'] = '已建立預設題庫。';
$string['defaultfor'] = '{$a}的預設';
$string['defaultinfofor'] = '在"{$a}"情境共用試題的預設類別。';
$string['defaultmark'] = '預設配分';
$string['defaultmarkmustbepositive'] = '預設配分必須是正的';
$string['deletecoursecategorywithquestions'] = '這題庫裡有一些試題與這課程類別有關連，若你繼續進行，它們將被刪除。你可能希望使用題庫介面先移走它們。';
$string['deletequestioncheck'] = '這將刪除以下試題及其所有版本：<br /><br />{$a}';
$string['deletequestionscheck'] = '這將刪除以下試題及其所有版本：<br/><br/>{$a}';
$string['deletequestiontitle'] = '刪除試題？';
$string['deletequestiontitle_plural'] = '刪除試題？';
$string['deleteselectedquestioncheck'] = '這將刪除以下試題的選取版本：<br /><br />{$a}';
$string['deleteversiontitle'] = '刪除選取的版本？';
$string['deleteversiontitle_plural'] = '刪除選取的版本？';
$string['deletingbehaviour'] = '刪除試題作答與計分方式"{$a}"';
$string['deletingqtype'] = '刪除試題類型"{$a}"';
$string['didnotmatchanyanswer'] = '[不符合任何答案]';
$string['disabled'] = '關閉';
$string['disabledbanks'] = '所有題庫模組類型皆已停用。';
$string['displayoptions'] = '顯示選項';
$string['disterror'] = '這分布{$a}造成問題。';
$string['donothing'] = '不要複製或移動檔案或改變連結';
$string['editcategories'] = '編輯類別';
$string['editcategories_help'] = '與其將所有試題都放在一個大清單中，不如將試題分門別類。

試題類別也用於隨機問題，因為試題可以從特定類別中選取。';
$string['editcategories_link'] = 'question/category';
$string['editcategory'] = '編輯類別';
$string['editingcategory'] = '編輯一類別';
$string['editingquestion'] = '編輯一道題目';
$string['editquestion'] = '編輯試題';
$string['editquestions'] = '編輯試題';
$string['editthiscategory'] = '編輯這一類別';
$string['emptyxml'] = '發生未知錯誤 -- imsmanifest.xml 為空';
$string['enabled'] = '已經啟用';
$string['erroraccessingcontext'] = '無法使用情境';
$string['errordeletingquestionsfromcategory'] = '從類別{$a}中刪除試題時發生錯誤。';
$string['errorduringpost'] = '錯誤！在後處理時生錯誤!';
$string['errorduringpre'] = '錯誤！在預先處理時生錯誤!';
$string['errorduringproc'] = '錯誤！在處理過程中發生錯誤!';
$string['errorduringregrade'] = '錯誤！無法重新計分試題{$a->qid}，
進到狀況 {$a->stateid}。';
$string['errorfilecannotbecopied'] = '錯誤：無法複製檔案 {$a}。';
$string['errorfilecannotbemoved'] = '錯誤：無法移動檔案 {$a}。';
$string['errorfileschanged'] = '錯誤！自從表單被顯示之後，連結到試題的檔案已經被更動了。';
$string['erroritemappearsmorethanoncewithdifferentweight'] = '試題 ({$a}) 在測驗中以不同配分出現多次，目前統計報告不支援此情況，統計結果可能不準確。';
$string['errormanualgradeoutofrange'] = '錯誤!  試題{$a->name}的分數{$a->grade}不是介於 0 和 {$a->maxgrade} 。這一分數和評語沒有被儲存。';
$string['errormovingquestions'] = '錯誤! 當移動試題{$a}時發生錯誤。';
$string['errorpostprocess'] = '錯誤！在後處理時生錯誤!';
$string['errorpreprocess'] = '錯誤！在預先處理時生錯誤!';
$string['errorprocess'] = '錯誤！在處理過程中發生錯誤!';
$string['errorprocessingresponses'] = '錯誤！在處理你的反應({$a})時發生錯誤。點選"繼續"回到你所在的那一頁，並再試一次。';
$string['errorsavingcomment'] = '錯誤！在資料庫儲存對試題 {$a->name}的評語時發生錯誤。';
$string['errorsavingflags'] = '錯誤！儲存標記狀態時發生錯誤。';
$string['errorupdatingattempt'] = '錯誤！在資料庫更新作答次 {$a->id} 時發生錯誤。';
$string['eventqbankdisabled'] = '題庫外掛已停用';
$string['eventqbankenabled'] = '題庫外掛已啟用';
$string['eventquestioncategorycreated'] = '試題類別已建立';
$string['eventquestioncategorydeleted'] = '試題類別已刪除';
$string['eventquestioncategorymoved'] = '試題類別已移動';
$string['eventquestioncategoryupdated'] = '試題類別已更新';
$string['eventquestioncategoryviewed'] = '試題類別已檢視';
$string['eventquestioncreated'] = '試題已建立';
$string['eventquestiondeleted'] = '試題已刪除';
$string['eventquestionmoved'] = '試題已移動';
$string['eventquestionsexported'] = '試題已匯出';
$string['eventquestionsimported'] = '試題已匯入';
$string['eventquestionupdated'] = '試題已更新';
$string['eventquestionviewed'] = '試題已檢視';
$string['export'] = '匯出';
$string['exportasxml'] = '匯出Moodle XML';
$string['exportcategory'] = '匯出類別';
$string['exportcategory_help'] = '這一設定決定要匯出的試題應從哪一個類別中取出來。

某些匯出格式，比如，GIFT和Moodle XML，允許把類別和脈絡資料包含在匯出檔案中，讓它們可以(選擇性的)在匯入時重新建立它們。若需要，請勾選適當的勾選方格。';
$string['exporterror'] = '在匯出過程中發生錯誤!';
$string['exportfilename'] = 'quiz';
$string['exportnameformat'] = '%Y%m%d-%H%M';
$string['exportonequestion'] = '用Moodle XML格式下載試題';
$string['exportquestions'] = '匯出試題到檔案';
$string['exportquestions_help'] = '<p>這個功能讓您能從一個類別(及下層子類別)中將試題全部匯出到一個文字檔案中。</p>
<p>注意，很多檔案格式都會導致試題的某些資訊丟失，這是因為大多數格式都無法支援Moodle中試題的全部功能。因此當匯出並重新匯入試題後，可能它們並不會完全相同。而且有些題型是不能匯出的。</p>
<p>我們建議您在一個實際的環境中使用匯出的資料時要對其進行檢查。</p>';
$string['exportquestions_link'] = 'question/export';
$string['feedback'] = '回饋';
$string['fieldinquestion'] = '{$a->fieldname} {$a->questionindentifier}';
$string['fieldinquestionpre'] = '{$a->questionindentifier} {$a->fieldname}';
$string['filecantmovefrom'] = '這試題檔案不能被移動，因為你沒有權限從原檔案所在地移除檔案。';
$string['filecantmoveto'] = '這試題檔案不能被移動或複製，因為你沒有權限添加檔案到新檔案目的地。';
$string['fileformat'] = '檔案格式';
$string['filesareacourse'] = '課程檔案區';
$string['filesareasite'] = '網站檔案區';
$string['filestomove'] = '移動/複製檔案至 {$a}？';
$string['fillincorrect'] = '填入正確答案';
$string['filterbytags'] = '用標籤過濾...';
$string['firsttry'] = '第一次作答';
$string['flagged'] = '已經標示';
$string['flagthisquestion'] = '標示這一試題';
$string['formquestionnotinids'] = '表單所包含的試題沒有試題編號';
$string['fractionsnomax'] = '答案之一的得分比例應該要設為100%，這樣才有可能得到此試題的滿分。';
$string['generalfeedback'] = '試題回饋';
$string['generalfeedback_help'] = '在學生完成這試題後，就會顯示"試題回饋"給他們看。

它不像"選項回饋"會依據題型和學生給的反應而有所不同，這相同的"試題回饋"是顯示給所有的完成該試題的學生看的。

你可以用"試題回饋"來讓學生看到個一完整、周延的正確答案，和一個可以找到更多訊息的鏈結，以便答錯者可以進行補救學習。';
$string['getcategoryfromfile'] = '從檔案中取得類別名稱';
$string['getcontextfromfile'] = '從檔案中取得處境';
$string['hintn'] = '提示{no}';
$string['hintnoptions'] = '提示{no}的選項';
$string['hinttext'] = '提示的文字';
$string['howquestionsbehave'] = '試題如何作答與計分';
$string['howquestionsbehave_help'] = '學生在測驗卷中可以用多種不同方式和試題互動。舉例來說，你傳統上希望學生在每一試題輸入答案，然後提交整份測驗卷，而在這之前沒有東西會被計分或得到任何回饋，這就是"延後回饋"模式。

另一種方式是，你讓學生每做一題就提交出去，並得到立即回饋，若沒有答對，他可以再試答一次，並得到較少的分數。這就是可多次嘗試"直到答對"模式。

這可能是兩種最常被使用的作答與計分方式。';
$string['howquestionsbehave_link'] = 'question/behaviour';
$string['idnumber'] = '編號';
$string['idnumber_help'] = '若設定識別碼(ID number)，則在每個試題類別中必須是唯一的。它提供了另一種識別試題的方式，有時很有用，但通常可以留空。';
$string['ignorebroken'] = '忽略無效的連結';
$string['import'] = '匯入';
$string['importcategory'] = '匯入類別';
$string['importcategory_help'] = '這設定將決定匯入的試題要放在哪一個類別裡。

某些匯入格式，比如，GIFT和Moodle XML，可能在匯入的檔案中就包含了類別和脈絡資料。要使用這些資料而不是你自己選出的類別，你應該勾選適當的勾選方格。

若匯入檔案所指定的類別找不到，系統就會自動建立它們。';
$string['importerror'] = '在匯入過程發生錯誤';
$string['importerrorquestion'] = '匯入試題時發生錯誤';
$string['importfromcoursefiles'] = '...或選擇一課程檔案來匯入。';
$string['importfromupload'] = '選出一檔案來上傳...';
$string['importingquestions'] = '從檔案匯入{$a}個試題';
$string['importparseerror'] = '解析匯入的檔案時發現錯誤。沒有試題被匯入。

要匯入任何好的試題，把設定"錯誤則停止"改為"否"，再匯入一次。';
$string['importquestions'] = '從檔案匯入試題';
$string['importquestions_help'] = '這一功能讓多種不同格式的試題能經由文字檔匯入。注意，這檔案必須是以UTF-8編碼。(請使用純文字編輯器)';
$string['importquestions_link'] = 'question/import';
$string['importwrongfileencoding'] = '您選取的檔案不是 UTF-8 編碼格式。{$a} 檔案必須使用 UTF-8 編碼。';
$string['importwrongfiletype'] = '你選出的檔案的類型 ({$a->actualtype}) ，並不符合這一匯入格式({$a->expectedtype})所期待的類型。';
$string['impossiblechar'] = '偵測到不可能的字元{$a}被當作圓括弧字元。';
$string['includesubcategories'] = '也顯示下層類別的試題';
$string['incorrect'] = '答錯';
$string['incorrectfeedback'] = '給任何答錯的答案';
$string['incorrectfeedbackdefault'] = '你答錯了!';
$string['information'] = '資訊';
$string['invalidanswer'] = '不完整的答案';
$string['invalidarg'] = '提供的參數無效，不正確的伺服器設定。';
$string['invalidcategoryidforparent'] = '上層的類別標號無效!';
$string['invalidcategoryidtomove'] = '要移往的類別編號無效!';
$string['invalidconfirm'] = '確認字串是錯的';
$string['invalidcontextinhasanyquestions'] = '傳給 question_context_has_any_questions 的情境無效';
$string['invalidgrade'] = '得分比例({$a})不符合可用的得分百分比列表 ---此試題不匯入。';
$string['invalidgradequestion'] = '分數 ({$a->grades}) 與試題 \'{$a->question}\' 的評分設定不符，已跳過此題。';
$string['invalidpenalty'] = '無效的扣分';
$string['invalidquestiontype'] = '無效的題型：{$a}';
$string['invalidwizardpage'] = '指定的精靈頁不正確或沒有';
$string['lastmodifiedby'] = '最後修改者';
$string['lasttry'] = '最後嘗試';
$string['linkedfiledoesntexist'] = '連結的檔案 {$a} 不存在';
$string['makechildof'] = '建立"{$a}"的下層';
$string['makecopy'] = '進行複製';
$string['maketoplevelitem'] = '移至頂層';
$string['manualgradeinvalidformat'] = '這不是一個有效的數字';
$string['manualgradeoutofrange'] = '這一分數超過有效的範圍';
$string['manuallygraded'] = '人工評分 {$a->mark}加上評語： {$a->comment}';
$string['mark'] = '得分';
$string['markedoutof'] = '配分';
$string['markedoutofmax'] = '配分{$a}';
$string['markoutofmax'] = '得分 {$a->mark}/配分{$a->max}';
$string['marks'] = '所有得分';
$string['matchgrades'] = '比對得分百分比';
$string['matchgrades_help'] = '匯入的各種反應的得分百分比，必須與有效得分百分比的固定清單相比對---100, 90, 80, 75, 70, 66.666, 60, 50, 40, 33.333, 30, 25, 20, 16.666, 14.2857, 12.5, 11.111, 10, 5, 0 (同樣還有負值)，若不符合就有兩個選擇：

* 若得分百分比沒列在上面，則顯示錯誤---只顯示錯誤，該試題不會被匯入。
* 若得分百分比沒列在上面，則使用最接近的分百分比----該得分百分比會被更改為清單上最接近的數值。';
$string['matchgradeserror'] = '若得分百分比沒列在上面，則顯示錯誤';
$string['matchgradesnearest'] = '若得分百分比沒列在上面，則使用最接近的分百分比';
$string['missingcourseorcmid'] = '需要提供課程編號和試題編號來顯示試題。';
$string['missingcourseorcmidtolink'] = '需要提供課程編號和試題編號來取得試題編輯鏈結。';
$string['missingimportantcode'] = '這題型缺少重要的符號：{$a}。';
$string['missingoption'] = '這克漏字試題{$a}少了它的選項';
$string['modified'] = '最後儲存';
$string['move'] = '從{$a}移動，並改變鏈結';
$string['movecategory'] = '搬移類別';
$string['movedquestionsandcategories'] = '搬移試題和試題類別，從{$a->oldplace} 到 {$a->newplace}。';
$string['movelinksonly'] = '只變更連結所指，而不要移動或複製檔案。';
$string['moveq'] = '搬移試題';
$string['moveqtoanothercontext'] = '搬移試題至其他情境';
$string['moveto'] = '搬移到>>';
$string['movingcategory'] = '移動類別中';
$string['movingcategoryandfiles'] = '你確定你要移動類別"{$a}"和所有下層類別到情境{$a->contextto}"？<br/>
我們已經偵測到有{$a->urlcount} 個檔案被在 {$a->fromareaname}的試題所鏈結，你要複製或移動這些檔案到 {$a->toareaname}嗎？';
$string['movingcategorynofiles'] = '你確定你要移動類別"{$a}"和所有下層類別到{$a->contextto}情境嗎"？';
$string['movingquestions'] = '移動試題和所有檔案中';
$string['movingquestionsandfiles'] = '你確定你要搬移試題 {$a->questions} 到脈絡<strong>"{$a->tocontext}"</strong>？<br />
我們已經偵測到有{$a->urlcount} 個檔案被在 {$a->fromareaname}裡的試題所鏈結，你要複製或移動這些檔案到 {$a->toareaname}嗎？';
$string['movingquestionsnofiles'] = '你確定你要搬移試題 {$a->questions} 到<strong>"{$a->tocontext}"</strong>情境嗎？<br />
這裡<strong>沒有檔案</strong>被鏈結到這些在{$a->fromareaname}的試題。';
$string['needtochoosecat'] = '你需要選擇一個類別搬移這試題進去，或是按"取消"。';
$string['nobanks'] = '本課程尚未建立任何題庫。';
$string['nocate'] = '沒有這一類別{$a}!';
$string['noconditionspecified'] = '請指定條件。';
$string['nopermissionadd'] = '您無權限在此新增試題。';
$string['nopermissionedit'] = '您沒有權限從此處編輯題目。';
$string['noprobs'] = '在試題庫中沒發現問題。';
$string['noquestionbanks'] = '找不到題庫外掛模組。';
$string['noquestions'] = '沒有找到可以被匯出的試題。要確定你有選出一個有包含試題的類別來匯出。';
$string['noquestionsinfile'] = '這匯入的檔案中沒有題目';
$string['noresponse'] = '[沒有答案]';
$string['notagfiltersapplied'] = '沒有使用標籤過濾器';
$string['notanswered'] = '沒被回答';
$string['notchanged'] = '從最近一次作答起，沒有變更';
$string['notenoughanswers'] = '這一類型的試題需要至少{$a}個選項。';
$string['notenoughdatatoeditaquestion'] = '沒有指定題目編號，也沒有類別編號或題型。';
$string['notenoughdatatomovequestions'] = '你要移動試題，就要提供該題目的試題編號。';
$string['notgraded'] = '沒被計分的';
$string['notshown'] = '不要顯示';
$string['notyetanswered'] = '尚未回答';
$string['notyourpreview'] = '這一預覽不屬於你';
$string['novirtualquestiontype'] = '題型{$a}沒有虛擬題型';
$string['numqas'] = '試題作答編號';
$string['numquestions'] = '試題編號';
$string['numquestionsandhidden'] = '{$a->numquestions} 題 (+{$a->numhidden} 隱藏 +{$a->numdraft} 草稿)';
$string['options'] = '選項';
$string['otherbanks'] = '其他包含試題的活動';
$string['otherbanksdesc'] = '這些活動中也有試題，但無法共用。';
$string['otherquestionbank'] = '其他題庫';
$string['otherquestionbankstoomany'] = '> 共 {$a} 筆結果，請縮小搜尋範圍。';
$string['page-question-category'] = '試題類別頁';
$string['page-question-edit'] = '試題編輯頁';
$string['page-question-export'] = '試題匯出頁';
$string['page-question-import'] = '試題匯入頁';
$string['page-question-x'] = '任何試題頁';
$string['parent'] = '上層';
$string['parentcategory'] = '上層類別';
$string['parentcategory_help'] = '上層類別是指新類別要放置的地方。"頂層"是指是指這一類別沒有包含在任何類別之下。

類別情境是以粗體字顯示。在每一個情境中至少要有一個類別。';
$string['parentcategory_link'] = 'question/category';
$string['parenthesisinproperclose'] = '在 {$a}之前的圓括弧，**沒有適當的關閉**';
$string['parenthesisinproperstart'] = '在 {$a}之前的圓括弧，**沒有適當的開啟**';
$string['parsingquestions'] = '從匯入的檔案中解析試題';
$string['partiallycorrect'] = '部分答對';
$string['partiallycorrectfeedback'] = '給任何部份答對的答案';
$string['partiallycorrectfeedbackdefault'] = '你的答案是部分答對';
$string['penaltyfactor'] = '扣分比例';
$string['penaltyfactor_help'] = '這一設定決定有多少百分比的分數會從該題的最後得分中扣除。它只能應用在試題是以"直到答對法"作答時。
　　
扣分比例應該是0到1之間的數字。扣分比例設若為1，意味著學生必須在第一次就解答正確，才能得到分數(第一次答錯，就會扣光該題全部分數)。扣分比例設若為0，表示絕不扣分，學生可以嘗試任意次，仍能得到該題的滿分。';
$string['penaltyforeachincorrecttry'] = '每一次答錯時的扣分比例';
$string['penaltyforeachincorrecttry_help'] = '當試題使用「直到答對模式（Interactive with multiple tries）」或「適應模式（Adaptive mode）」進行時，學生可以有多次嘗試作答，直到答對為止。此選項用來設定每次答錯後的扣分比例。

扣分會依試題總分的比例計算。例如，若某題滿分為 3 分，扣分比例為 0.3333333，那麼學生若第一次就答對，可得 3 分；第二次才答對，得 2 分；第三次才答對，得 1 分。

對於某些多部分組成的試題，這種計分邏輯會分別套用到各個子題。具體方式依題型而異，可能會比較複雜，但其原則是盡可能公平地根據學生展現的知識給予分數。';
$string['permissionedit'] = '編輯試題';
$string['permissionmove'] = '搬移試題';
$string['permissionsaveasnew'] = '儲存為新試題';
$string['permissionto'] = '您有權限做：';
$string['previewbank'] = '預覽共用題庫';
$string['previewquestion'] = '預覽試題：{$a}';
$string['privacy:metadata:database:question'] = '特定試題的詳細資料';
$string['privacy:metadata:database:question:createdby'] = '建立此試題的人員。';
$string['privacy:metadata:database:question:generalfeedback'] = '此試題的一般回饋。';
$string['privacy:metadata:database:question:modifiedby'] = '最後更新此試題的人員。';
$string['privacy:metadata:database:question:name'] = '試題名稱。';
$string['privacy:metadata:database:question:questiontext'] = '試題內容。';
$string['privacy:metadata:database:question:timecreated'] = '此試題建立的日期與時間。';
$string['privacy:metadata:database:question:timemodified'] = '此試題更新的日期與時間。';
$string['privacy:metadata:database:question_attempt_step_data'] = '試題作答步驟可能包含特定步驟的額外資料，這些資料儲存在 step_data 資料表中。';
$string['privacy:metadata:database:question_attempt_step_data:name'] = '資料項目名稱。';
$string['privacy:metadata:database:question_attempt_step_data:value'] = '資料項目數值。';
$string['privacy:metadata:database:question_attempt_steps'] = '每次試題作答皆包含多個步驟，以表示從開始、完成到評分的不同階段。此資料表儲存各步驟的相關資訊。';
$string['privacy:metadata:database:question_attempt_steps:fraction'] = '此次試題作答所獲得的分數，已換算為 1 分滿分的比例。';
$string['privacy:metadata:database:question_attempt_steps:state'] = '此試題作答步驟在轉換完成後的狀態。';
$string['privacy:metadata:database:question_attempt_steps:timecreated'] = '此步驟轉換開始的日期與時間。';
$string['privacy:metadata:database:question_attempt_steps:userid'] = '執行此步驟轉換的用戶。';
$string['privacy:metadata:database:question_attempts'] = '某特定試題作答的相關資訊。';
$string['privacy:metadata:database:question_attempts:flagged'] = '表示用戶於作答中已標記此試題。';
$string['privacy:metadata:database:question_attempts:responsesummary'] = '試題作答摘要。';
$string['privacy:metadata:database:question_attempts:timemodified'] = '試題作答的最後更新時間。';
$string['privacy:metadata:database:question_bank_entries'] = '特定題庫項目的詳細資訊。';
$string['privacy:metadata:database:question_bank_entries:ownerid'] = '擁有此題庫項目的人員。';
$string['privacy:metadata:link:qbehaviour'] = '試題子系統使用「試題行為」外掛類型。';
$string['privacy:metadata:link:qformat'] = '試題子系統使用「試題格式」外掛類型，以便匯入與匯出各種格式的試題。';
$string['privacy:metadata:link:qtype'] = '試題子系統與「試題類型」外掛類型互動，此類型包含各種試題類型。';
$string['published'] = '共享的';
$string['qbanknotfound'] = '名為 \'{$a}\' 的題庫外掛不存在或無法辨識。';
$string['qtypeveryshort'] = '題型';
$string['question_version'] = '試題版本';
$string['question_versionshort'] = 'v{$a}';
$string['questionaffected'] = '<a href="{$a->qurl}">試題 "{$a->name}" ({$a->qtype})</a>是在這一類別中，但也被用於另一課程 "{$a->coursename}"的 <a href="{$a->qurl}">測驗 "{$a->quizname}"</a>。';
$string['questionbank'] = '題庫';
$string['questionbank_plural'] = '題庫';
$string['questionbanknavigation'] = '題庫三級導覽';
$string['questionbehaviouradminsetting'] = '試題作答與計分方式的設定';
$string['questionbehavioursdisabled'] = '關閉試題作答與計分方式';
$string['questionbehavioursdisabledexplained'] = '請輸入你"不要顯現"在下拉選單上的各種試題作答與計分方式，請以逗點隔開。';
$string['questionbehavioursorder'] = '試題與作答方式選單的排列順序';
$string['questionbehavioursorderexplained'] = '請依順序輸入你要顯現在下拉選單上的各種試題作答與計分方式，請以逗點隔開。';
$string['questioncategories'] = '試題類別';
$string['questioncategory'] = '試題類別';
$string['questioncatsfor'] = '"{$a}"的試題類別';
$string['questiondefaultssave'] = '將試題選項儲存為使用者偏好預設值';
$string['questiondefaultssave_desc'] = '在送出編輯試題表單時，是否要將「預設分數」、「單選或多選？」等試題選項儲存為使用者偏好，以便下次開啟表單時作為預設值使用。';
$string['questiondoesnotexist'] = '這題目不存在';
$string['questionediting'] = '試題編輯';
$string['questionediting_desc'] = '這些設定適用於編輯試題的表單。';
$string['questionformtagheader'] = '{$a} 標籤';
$string['questionidmismatch'] = '試題編號不符合';
$string['questionloaderror'] = '無法載入試題選項。';
$string['questionname'] = '概念/能力指標';
$string['questionnameandquestionversion'] = '{$a->name} v{$a->version}';
$string['questionnamecopy'] = '{$a} (複製)';
$string['questionno'] = '試題{$a}';
$string['questionpreviewdefaults'] = '試題預覽的預設';
$string['questionpreviewdefaults_desc'] = '這些預設是用於讓用戶第一次預覽題庫的試題。一旦用戶預覽過一試題，那他的個人偏好會被儲存成用戶偏好。';
$string['questions'] = '試題';
$string['questionsaveerror'] = '在儲存試題時發生錯誤--({$a})';
$string['questionsinuse'] = '* 星號表示這些試題因正在使用中而無法刪除。除非您將「顯示隱藏的試題」設為「是」，否則這些試題將會在題庫中被隱藏。';
$string['questionsmovedto'] = '仍在使用的試題被搬到上層課程類別的"{$a}"。';
$string['questionsrescuedfrom'] = '情境{$a}的試題已儲存';
$string['questionsrescuedfrominfo'] = '當情境{$a}被刪除時，這些試題(某些可能被隱藏)被儲存，因為它們仍然被某些測驗或其他活動所使用。';
$string['questiontags'] = '試題標籤';
$string['questiontext'] = '試題文字';
$string['questiontype'] = '試題類型';
$string['questionuse'] = '在這活動使用試題';
$string['questionvariant'] = '同一試題的變形';
$string['questionx'] = '試題{$a}';
$string['quizquestionbank'] = '此測驗的題庫';
$string['recentlyviewedquestionbanks'] = '最近檢視的題庫';
$string['requiresgrading'] = '需要評分';
$string['responsehistory'] = '答題歷史';
$string['restart'] = '重新開始';
$string['restartwiththeseoptions'] = '儲存預覽選項並重新開始';
$string['restoremultipletopcats'] = '備份檔案中包含多個針對情境 {$a} 的最上層試題類別。';
$string['reviewresponse'] = '檢視答案';
$string['rightanswer'] = '正確答案';
$string['rightanswer_help'] = '系統自動產生正確作答的摘要。由於此摘要可能有限，您可考慮在該試題的一般回饋中說明正確解法，並關閉此選項。';
$string['save'] = '儲存';
$string['savechangesandcontinueediting'] = '儲存更改並繼續編輯';
$string['saved'] = '已經儲存：{$a}';
$string['saveflags'] = '儲存標示的狀態';
$string['selectacategory'] = '選擇一類別';
$string['selectaqtypefordescription'] = '選擇一種試題類型來看它的說明';
$string['selectcategoryabove'] = '從上方選擇一個類別';
$string['selectquestionsforbulk'] = '選擇試題做批次動作';
$string['settingsformultipletries'] = '可以多次作答';
$string['shareincontext'] = '在{$a}的情境中共享';
$string['shortversioninfo'] = 'v{$a->version} (共 {$a->latestversion} 版)';
$string['shortversioninfolatest'] = 'v{$a->version} (最新)';
$string['showhidden'] = '顯示隱藏的試題';
$string['showmarkandmax'] = '顯示得分與最高分';
$string['showmaxmarkonly'] = '顯示最高分';
$string['shown'] = '要顯示';
$string['shownumpartscorrect'] = '顯示答對的題數';
$string['shownumpartscorrectwhenfinished'] = '一旦試題完成，則顯示答對題數';
$string['showquestiontext'] = '在試題列表中顯示試題文字？';
$string['showquestiontext_full'] = '是，包含圖片、媒體等';
$string['showquestiontext_off'] = '不顯示';
$string['showquestiontext_plain'] = '是，僅顯示文字';
$string['specificfeedback'] = '選項的回饋';
$string['specificfeedback_help'] = '若學生選了這一選項，即給予這個回饋';
$string['started'] = '已經開始';
$string['state'] = '狀態';
$string['step'] = '步驟';
$string['steps'] = '步驟';
$string['stoponerror'] = '錯誤則停止';
$string['stoponerror_help'] = '當偵測到錯誤時，這匯入過程是否要停止。其結果是，沒有試題被匯入，或者是，包含錯誤的試題被忽略，而任何有效的試題都被匯入。';
$string['submissionoutofsequence'] = '存取超出序列範圍。在做測驗卷的試題時，請不要點選後退按鈕。';
$string['submissionoutofsequencefriendlymessage'] = '你輸入的資料超出正常的系列。

若你使用你的瀏覽器的前進與後退按鈕就可能會發生這種情形。

當你在一頁面載入中，點選某些東西也可能發生這種情形。

請點選<strong>繼續</strong>來復原。';
$string['submit'] = '送出';
$string['submitandfinish'] = '送出並完成';
$string['submitted'] = '送出：{$a}';
$string['switchbank'] = '切換題庫';
$string['systembank'] = '系統共用題庫';
$string['systembankdescription'] = '此題庫為網站升級時自動建立。';
$string['tagarea_question'] = '試題';
$string['technicalinfo'] = '技術訊息';
$string['technicalinfo_help'] = '這一技術訊息可能只對撰寫新題型的開發人員有用。它可能也對於診斷試題的問題有幫助。';
$string['technicalinfomaxfraction'] = '最高的分數:{$a}';
$string['technicalinfominfraction'] = '最小比例：{$a}';
$string['technicalinfoquestionsummary'] = '試題摘要：{$a}';
$string['technicalinforesponsesummary'] = '回應摘要：{$a}';
$string['technicalinforightsummary'] = '正確答案摘要：{$a}';
$string['technicalinfostate'] = '試題狀態：{$a}';
$string['technicalinfovariant'] = '試題變形：{$a}';
$string['tofilecategory'] = '將類別寫入檔案';
$string['tofilecontext'] = '將情境寫入檔案';
$string['topfor'] = '{$a} 的最上層分類';
$string['uninstallbehaviour'] = '卸載這一試題作答與計分方式';
$string['uninstallqtype'] = '卸載這一試題類型';
$string['unknown'] = '未知的';
$string['unknownbehaviour'] = '不明的試題作答與計分方式：{$a}';
$string['unknownorunhandledtype'] = '未知或未處理的試題類型：{$a}';
$string['unknownquestion'] = '未知的試題：{$a}。';
$string['unknownquestioncatregory'] = '不明的試題類別：{$a}。';
$string['unknownquestiontype'] = '不明的試題類型：{$a}';
$string['unknowntolerance'] = '不明的容忍度類型：{$a}';
$string['unpublished'] = '不共享';
$string['unusedcategorydeleted'] = '此一類別已經被刪除。由於刪除此課程後，不會再使用到這些試題。';
$string['updatedisplayoptions'] = '更新顯示選項';
$string['upgradeproblemcategoryloop'] = '當升級試題類別時偵測到錯誤。在這類別樹之內有一個迴圈。被影響的類別編號是{$a}。';
$string['upgradeproblemcouldnotupdatecategory'] = '無法更新試題類別 {$a->name} ({$a->id})。';
$string['upgradeproblemunknowncategory'] = '當升級試題類別時偵測到錯誤。類別{$a->id}指向上層{$a->parant}，但它並不存在。上層被更改以修復問題。';
$string['version_selection'] = '版本 {$a->version}';
$string['versioninfo'] = '版本 {$a->version} (共 {$a->latestversion} 版)';
$string['versioninfolatest'] = '版本 {$a->version} (最新)';
$string['versioninfolatestshort'] = 'v{$a} (最新)';
$string['whethercorrect'] = '是否答對';
$string['whethercorrect_help'] = '這包含文字說明，如："答對"，"部分答對"或"答錯"，以及傳達相同的訊息的顏色的強調。';
$string['whichtries'] = '哪一次作答';
$string['withselected'] = '將被選出的';
$string['wrongprefix'] = '錯誤格式的名稱字首{$a}';
$string['xoutofmax'] = '得分{$a->mark}/配分 {$a->max}';
$string['yougotnright'] = '你答對了 {$a->num}題。';
$string['youmustselectaqtype'] = '你必須選擇一試題類型。';
$string['yourfileshoulddownload'] = '您的匯出檔案應該很快就開始下載，如果沒有動靜，請 <a href="<b>{$a}</b>">點按這裡</a> 手動下載。';
