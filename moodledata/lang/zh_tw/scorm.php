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
 * Strings for component 'scorm', language 'zh_tw', version '5.0'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = '啟動';
$string['activityloading'] = '你將會被自動重新導向到這活動，在';
$string['activityoverview'] = '您有需要注意的SCORM教材包';
$string['activitypleasewait'] = '活動載入中，請等待.....';
$string['adminsettings'] = '管理員設定';
$string['advanced'] = '進階';
$string['aicchacpkeepsessiondata'] = 'AICC HACP對話連線資料';
$string['aicchacpkeepsessiondata_desc'] = '要保存AICC HACP對話資料的天數(設定較高天數將使資料表塞滿舊資料，但對除錯很有幫助)';
$string['aicchacptimeout'] = 'AICC HACP的時間限制';
$string['aicchacptimeout_desc'] = '外部AICC HACP對話連線可以保持開啟的時間有幾分鐘';
$string['aiccuserid'] = '傳送數字的用戶ID編號給AICC';
$string['aiccuserid_desc'] = 'AICC對於用戶姓名的要求比起Moodle來說是非常嚴格的。它只允許字母數字字元、短線符號( - )、底線符號( _ )。而不允許使用句點、空白和@符號。若啟用，用戶的ID編號將會代替用戶姓名傳送給AICC包裹。';
$string['aliasonly'] = '當您從一個倉儲選擇一個 imsmanifest.xml 檔案時，你必須使用這一檔案的別名/簡稱。';
$string['allowapidebug'] = '啟用API除錯和追蹤(設定抓取遮版要伴隨API除錯遮版)';
$string['allowtypeaicchacp'] = '開啟外部AICC HACP';
$string['allowtypeaicchacp_desc'] = '若啟用，將會允許AICC HACP外部溝通，而不需要用戶登入之後向外部的AICC包裹提出請求。';
$string['allowtypeexternal'] = '啟用外部包裹類型';
$string['allowtypeexternalaicc'] = '啟用直接AICC網址';
$string['allowtypeexternalaicc_desc'] = '若啟用，將允許使用一直接網址到一簡單AICC教材包';
$string['allowtypelocalsync'] = '啟用可以下載的教材包裹類型';
$string['apidebugmask'] = 'API除錯抓取遮罩 --使用簡單正規表達式
<username>:<activityname>
例如 admin:.* 將只用於管理員的除錯';
$string['areacontent'] = '內容檔案';
$string['areapackage'] = '教材包檔案';
$string['asset'] = '資源';
$string['assetlaunched'] = '已閱讀的資源';
$string['attempt'] = '作答次';
$string['attempt1'] = '1次作答';
$string['attempts'] = '作答次';
$string['attemptsmanagement'] = '作答次管理';
$string['attemptstatusall'] = '儀表板和條目頁面';
$string['attemptstatusentry'] = '只有條目頁面';
$string['attemptstatusmy'] = '只有儀表板';
$string['attemptsx'] = '{$a}次作答';
$string['attr_error'] = '在{$a->tag}標籤中，({$a->attr})的屬性值錯誤';
$string['autocommit'] = '自動提交';
$string['autocommit_help'] = '若啟用，SCORM資料會自動儲存到資料庫。這對於沒有定期儲存他們的資料的SCORM物件非常有用。';
$string['autocommitdesc'] = '若這SCORM包裹沒有儲存，它會自動儲存SCORM資料';
$string['autocontinue'] = '自動繼續';
$string['autocontinue_help'] = '若啟用，後續的學習物件會自動地推出，否則用戶就需要使用"繼續"按鈕才能繼續下去。';
$string['autocontinuedesc'] = '設定在預設情況下活動是否會自動繼續';
$string['averageattempt'] = '平均使用次數';
$string['badarchive'] = '你必須提供一有效的zip壓縮檔案';
$string['badimsmanifestlocation'] = '有發現一個imsmanifest.xml 檔案，但是它不在你的zip壓縮檔的根目錄，請再重新包裹你的SCORM。';
$string['badmanifest'] = '某些裝載清單錯誤：請看錯誤日誌';
$string['browse'] = '預覽';
$string['browsed'] = '已瀏覽';
$string['browsemode'] = '預覽模式';
$string['browserepository'] = '瀏覽倉儲';
$string['calculatedweight'] = '計算的權重';
$string['calendarend'] = '這 SCORM 活動在\'{$a}\'關閉';
$string['calendarstart'] = '這 SCORM 活動在\'{$a}\'啟用';
$string['cannotaccess'] = '你不能以這種方式呼叫這一腳本';
$string['cannotfindsco'] = '無法找到SCO';
$string['chooseapacket'] = '選取或更新教材包';
$string['closebeforeopen'] = '你所指定的關閉日期是在開啟日期之前';
$string['collapsetocwinsize'] = '當視窗大小低於多少時，折疊內容目錄(TOC)。';
$string['collapsetocwinsizedesc'] = '指定當視窗長寬於多少以下時，內容目錄應該自動摺疊起來';
$string['compatibilitysettings'] = '兼容性設定';
$string['completed'] = '已完成';
$string['completionscorerequired'] = '需要最低分數';
$string['completionscorerequireddesc'] = '需要達到{$a}的最低分數，才能算完成這活動';
$string['completionstatus_completed'] = '已完成';
$string['completionstatus_passed'] = '已及格';
$string['completionstatusallscos'] = '要求所有的課程包回到完成狀態';
$string['completionstatusallscos_help'] = '某些課程包裹中包含多個成分或"課程包"---當這被啟用時，所有在課程包裹裡面的課程包必須回到相關的單元狀態，才可
江浙活動標示為完成。';
$string['completionstatusrequired'] = '要求狀態';
$string['completionstatusrequired_help'] = '若你勾選一或多個狀態，將會要求用戶至少完成一個被勾選的狀態，才能被標示為完成這一SCORM活動，就如同其他活動完成的要求。';
$string['completionstatusrequireddesc'] = '學生至少要完成下列狀態之一：{$a}';
$string['confirmloosetracks'] = '警告：此教材包可能發生了改變或者被修改過了。如果改變了教材包的結構，那麼在更新過程中一些使用追蹤紀錄可能會遺失。';
$string['contents'] = '內容';
$string['coursepacket'] = '課程包裹';
$string['coursestruct'] = '課程結構';
$string['crontask'] = 'SCORM的後台處理';
$string['currentwindow'] = '目前視窗';
$string['datadir'] = '檔案系統錯誤：無法建立課程資料目錄';
$string['defaultdisplaysettings'] = '預設的顯示設定';
$string['defaultgradesettings'] = '預設的計分設定';
$string['defaultothersettings'] = '其他的預設設定';
$string['deleteallattempts'] = '刪除所有SCORM作答紀錄';
$string['deleteattemptcheck'] = '您確定您要完全刪除這些作答紀錄嗎？';
$string['deleteselected'] = '刪除選取的作答紀錄';
$string['deleteuserattemptcheck'] = '您確定您要完全刪除您的作答紀錄嗎？';
$string['details'] = 'SCO 追蹤細節';
$string['directories'] = '顯示目錄連結';
$string['disabled'] = '關閉';
$string['display'] = '顯示';
$string['displayattemptstatus'] = '顯示作答狀態';
$string['displayattemptstatus_help'] = '這一偏好允許你將用戶作答次的摘要顯示在儀表板和/或SCORM條目頁面的課程綜覽區塊。';
$string['displayattemptstatusdesc'] = '預設是否要將用戶作答次的摘要顯示在儀表板和/或SCORM條目頁面的課程綜覽區塊上';
$string['displaycoursestructure'] = '在條目頁顯示課程結構';
$string['displaycoursestructure_help'] = '若啟用，內容目錄會顯示在SCORM大綱頁面';
$string['displaycoursestructuredesc'] = '預設是否要在條目頁面顯示課程結構';
$string['displaydesc'] = '是否要在新視窗顯示這SCORM教材包。';
$string['displaysettings'] = '顯示設定';
$string['dnduploadscorm'] = '增加一個SCORM教材包';
$string['domxml'] = 'DOMXML外部程式庫';
$string['element'] = '元素';
$string['enter'] = '進入';
$string['entercourse'] = '進入課程';
$string['errorlogs'] = '錯誤記錄';
$string['eventattemptdeleted'] = '已刪除作答次';
$string['eventinteractionsviewed'] = '已檢視互動';
$string['eventreportviewed'] = '已檢視報告';
$string['eventscolaunched'] = '已執行SCORM';
$string['eventscorerawsubmitted'] = '已提交SCORM原始分數';
$string['eventstatussubmitted'] = '已提交SCORM狀態';
$string['eventtracksviewed'] = '已檢視追蹤';
$string['eventuserreportviewed'] = '已檢視用戶報告';
$string['everyday'] = '每一天';
$string['everytime'] = '每次使用時';
$string['exceededmaxattempts'] = '你已經達到最大的作答次數';
$string['exit'] = '離開課程';
$string['exitactivity'] = '離開活動';
$string['expired'] = '抱歉，這活動已經在{$a}關閉，已經無法使用';
$string['external'] = '更新外部教材包的時間';
$string['failed'] = '失敗';
$string['finishscorm'] = '如果你已經看完這一資源，{$a}';
$string['finishscormlinkname'] = '點選這裡回到課程頁面';
$string['firstaccess'] = '第一次存取';
$string['firstattempt'] = '第一次作答';
$string['floating'] = '浮動的';
$string['forceattemptalways'] = '總是';
$string['forceattemptoncomplete'] = '當先前的嘗試完成，通過或失敗時';
$string['forcecompleted'] = '強制完成';
$string['forcecompleted_help'] = '若啟用，當前訪問的狀態會變為“強制完成”。該項設定僅適用於SCORM1.2 教材包。如果SCORM教材包在複習或瀏覽模式中，不能正確地處理再次訪問一作答次，或者不能正確處理完成狀態時，這功能非常有用。';
$string['forcecompleteddesc'] = '預設強制完成的設定';
$string['forcejavascript'] = '強迫用戶去啟動JavaScript';
$string['forcejavascript_desc'] = '若啟用(推薦)，在用戶瀏覽器不支援或者未啟用 JavaScript 時，禁止存取SCORM物件。如果設定為關閉，則用戶仍可以查看SCORM的內容，但是API的通訊會失敗，且沒有成績資訊被保存到系統中。';
$string['forcejavascriptmessage'] = '要看到這一物件，需要有JavaScript。請在您的瀏覽器上啟用JavaScrip，並再試一次。';
$string['forcenewattempts'] = '強迫新的作答';
$string['forcenewattempts_help'] = '有3個選項：

*否 - 如果先前的嘗試已完成，通過或失敗，則將為學生提供進入複習模式或開始新嘗試的選項。
*當先前的嘗試完成，通過或失敗時 - 這取決於將SCORM包裹設置為“完成”，“通過”或“失敗”的狀態。
*總是 - 每次重新進入SCORM活動都將產生一個新嘗試，並且該學生將不會返回到他們上一次嘗試所達到的同一點';
$string['found'] = '找到裝載清單檔';
$string['frameheight'] = '這階段架框或視窗的高度';
$string['framewidth'] = '這階段架框或視窗的寬度';
$string['fromleft'] = '從左邊';
$string['fromtop'] = '從上面';
$string['fullscreen'] = '填滿整個畫面';
$string['general'] = '一般資料';
$string['gradeaverage'] = '平均成績';
$string['gradeforattempt'] = '作答次的分數';
$string['gradehighest'] = '最高成績';
$string['grademethod'] = '成績採計方式';
$string['grademethod_help'] = '成績採計方式是定義這一活動的作答要如何計分。

此活動有四種最後成績採計方式：

* 學習目標 -- 已經完成/及格的學習目標
* 最高分數 -- 在所有及格的學習目標中獲得的最高分數
* 平均分數 -- 所有分數的平均數
* 累加分數 -- 所有分數的累加和';
$string['grademethoddesc'] = '此活動預設的最後成績採計方式';
$string['gradereported'] = '成績報告';
$string['gradescoes'] = '學習目標';
$string['gradesettings'] = '評分設定';
$string['gradesum'] = '加總';
$string['height'] = '高度';
$string['hidden'] = '隱藏';
$string['hidebrowse'] = '停用預覽模式';
$string['hidebrowse_help'] = '預覽模式允許學生在正式使用活動之前瀏覽它們。若預覽模式被關閉，預覽按鈕會被隱藏。';
$string['hidebrowsedesc'] = '預設是否啟用或關閉預覽模式';
$string['hideexit'] = '隱藏退出的超連結';
$string['hidereview'] = '隱藏回顧的按鈕';
$string['hidetoc'] = '在播放器中顯示課程結構';
$string['hidetoc_help'] = '此設定指明內容目錄如何顯示在SCORM播放器上';
$string['hidetocdesc'] = '預設是否在SCORM播放器中顯示或隱藏課程結構(TOC)';
$string['highestattempt'] = '以最高分採計';
$string['identifier'] = '題目識別碼';
$string['incomplete'] = '不完整';
$string['indicator:cognitivedepth'] = 'SCORM 認知';
$string['indicator:cognitivedepth_help'] = '這個指標是基於學生在SCORM活動中達到的認知深度。';
$string['indicator:cognitivedepthdef'] = 'SCORM 認知';
$string['indicator:cognitivedepthdef_help'] = '在此分析區間內，參與者已經達到了SCORM活動所提供的這個認知參與比例（級別=無查看、查看、提交、查看反饋）';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'SCORM 社交';
$string['indicator:socialbreadth_help'] = '這個指標是基於學生在SCORM活動中達到的社交廣度。';
$string['indicator:socialbreadthdef'] = 'SCORM 社交';
$string['indicator:socialbreadthdef_help'] = '在此分析區間內，參與者已達到SCORM活動提供的社會參與的百分比（級別=無參與，僅參與者）';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['interactions'] = '互動';
$string['invalidactivity'] = 'SCORM活動不正確';
$string['invalidhacpsession'] = '無效的HACP對話';
$string['invalidmanifestname'] = '只可以選出imsmanifest.xml 或 .zip 檔案';
$string['invalidmanifestresource'] = '警告：在您的裝載清單檔案上有參照到下列資源，但是找不到它們：';
$string['invalidstatus'] = '無效狀態';
$string['invalidurl'] = '所指定的網址無效';
$string['invalidurlhttpcheck'] = '指定的網址無效。除錯訊息<pre>{$a->cmsg}</pre>';
$string['last'] = '最後瀏覽於';
$string['lastaccess'] = '最後瀏覽';
$string['lastattempt'] = '最後完成的作答次';
$string['lastattemptlock'] = '最後一次作答之後加以鎖定';
$string['lastattemptlock_help'] = '若啟用，學生在用完他所分配的作答次之後，將無法起動SCORM撥放器。';
$string['lastattemptlockdesc'] = '如果啟用，學生將無法在用完所有分配的測驗次數後啟動 SCORM 播放器。';
$string['location'] = '顯示位址列';
$string['masteryoverride'] = '精熟分數覆寫狀態';
$string['masteryoverride_help'] = '若啟用並提供一精熟分數，當 LMSFinish 被呼叫且有一原始分數被設定，狀態將會使用原始分數和精熟分數重新計算，且任何SCORM提供的狀態(包括未完成)將會被記錄。';
$string['masteryoverridedesc'] = '這會作為精熟分數覆寫設定的預設值';
$string['max'] = '最高分';
$string['maximumattempts'] = '作答次數';
$string['maximumattempts_help'] = '此設定啟用了作答次數的限制。它只限用於 SCORM1.2 和 AICC 課程包';
$string['maximumattemptsdesc'] = '設定一個活動預設的最高作答次數';
$string['maximumgradedesc'] = '設定一個活動的預設最高分數(配分)';
$string['menubar'] = '顯示選單列';
$string['min'] = '最低分';
$string['missing_attribute'] = '在{$a->tag}標籤中遺漏了{$a->attr}屬性';
$string['missing_tag'] = '遺漏{$a->tag}標籤';
$string['missingparam'] = '遺漏或錯誤的必要參數';
$string['mode'] = '模式';
$string['modulename'] = 'SCORM教材包';
$string['modulename_help'] = '一個SCORM課程包是將一堆檔案依照學習物件的共同訂定的標準加以打包。這一SCORM模組讓SCORM或AICC包裹以壓縮檔形式上傳，並加入到一課程中。

內容通常已超過好幾頁方式顯示，並再頁面之間有導覽的鏈結。在彈出式視窗中有好幾種不同的方式來顯示內容，例如，以目錄，以導覽按鈕等等。SCORM活動通常包含試題，其分數會被記錄到成績簿上。


SCORM活動可以用來

* 用來多媒體內容和動畫
* 作為評量工具';
$string['modulename_link'] = 'mod/scorm/view';
$string['modulenameplural'] = 'SCORM課程包';
$string['myaiccsessions'] = '我的AICC課程';
$string['myattempts'] = '我的作答次';
$string['nav'] = '顯示導覽按鈕';
$string['nav_help'] = '這一設定可決定是否要顯示或隱藏導覽按鈕和它們的位置。

它有三種選擇：

* 無 - 不要顯示導覽按鈕。
* 在內容之下 - 在 SCORM 包裹內容之下顯示導覽按鈕。
* 浮動的 - 導覽按鈕的位置是浮動的，由SCORM包裹指定在左邊或在上面。';
$string['navdesc'] = '這設定決定是否要顯示/隱藏導覽按鈕和它們的位置。';
$string['navigation'] = '導覽';
$string['navpositionleft'] = '從左邊算起，導覽按鈕的位置(以像素為單位)';
$string['navpositiontop'] = '從頂端算起，導覽按鈕的位置(以像素為單位)';
$string['networkdropped'] = '這SCORM撥放器認為你的網際網路連結是不穩定或被干擾。若你繼續這SCOM活動，你的進度可能無法儲存。<br />
你應該現在退出這活動，等你有可靠的網際網路連線時再回來。';
$string['newattempt'] = '開始一個新的作答次';
$string['next'] = '繼續';
$string['no_attributes'] = '標籤{$a->tag} 必須有屬性';
$string['no_children'] = '標籤{$a->tag} 必須有子類';
$string['noactivity'] = '沒有東西可報告';
$string['noattemptsallowed'] = '允許作答的次數';
$string['noattemptsmade'] = '你已經作答的次數';
$string['nolimit'] = '無限制的作答次';
$string['nomanifest'] = '不正確的檔案包裹--無法找到imsmanifest.xml或AICC結構。';
$string['noprerequisites'] = '抱歉，您還沒有達到存取這個活動的條件';
$string['noreports'] = '沒有報告可呈現';
$string['normal'] = '正常';
$string['noscriptnoscorm'] = '您的瀏覽器不支援 javascript 或是被停用。這一SCORM包裹可能無法正確地播放或儲存資料。';
$string['not_corr_type'] = '標籤{$a->tag} 型態不正確';
$string['notattempted'] = '尚未作答';
$string['notopenyet'] = '抱歉，這一活動要到{$a}才可以使用';
$string['objectives'] = '目標';
$string['openafterclose'] = '您在結束日期之後指定了開放日期';
$string['optallstudents'] = '全部用戶';
$string['optattemptsonly'] = '只限有作答的用戶';
$string['options'] = '選項(某些瀏覽器可能無法使用)';
$string['optionsadv'] = '選項(進階)';
$string['optionsadv_desc'] = '若勾選，在這表單中，視窗的選項將會變為進階選項';
$string['optnoattemptsonly'] = '只限於沒有作答過的用戶';
$string['organization'] = '組織';
$string['organizations'] = '組織';
$string['othersettings'] = '額外的設定';
$string['package'] = '課程包裹的檔案';
$string['package_help'] = '<p>The package is a particular file with <b>zip</b> (or pif) extension that contains
   valid AICC or SCORM course definition files.</p>

<p>A <b>SCORM</b> package must contains in the root of zip a file named <b>imsmanifest.xml</b>
   that define SCORM course structure, resource location and many other things.</p>

<p>An <b>AICC</b> package is defined by several files (from 4 to 7) with defined extensions.
   Here you find the extensions meaning:</p>
   <ul>
	<li>CRS - Course Description file (mandatory)</li>
	<li>AU  - Assignable Unit file (mandatory)</li>
	<li>DES - Descriptor file (mandatory)</li>
	<li>CST - Course Structure file (mandatory)</li>
	<li>ORE - Objective Relationship file (optional)</li>
	<li>PRE - Prerequisites file (optional)</li>
	<li>CMP - Completition Requirements file (optional)</li>
   </ul>';
$string['packagedir'] = '檔案系統錯誤：無法建立課程包裹目錄';
$string['packagefile'] = '沒有指定課程包裹檔案';
$string['packagehdr'] = '包裹';
$string['packageurl'] = '網址';
$string['packageurl_help'] = '這一設定可以指定SCORM教材包的網址，
而不是經由檔案挑選器選擇一個檔案。';
$string['page-mod-scorm-x'] = '任何SCORM模組頁面';
$string['pagesize'] = '頁面大小';
$string['passed'] = '通過';
$string['php5'] = 'PHP 5 (DOMXML原始函式庫)';
$string['pluginadministration'] = 'SCORM教材包管理';
$string['pluginname'] = 'SCORM教材包';
$string['popup'] = '在新視窗中';
$string['popuplaunched'] = '這一SCORM包裹已經展現在一彈出式視窗中，若你已經看完這一資源，擊點這裡可回到課程頁面。';
$string['popupmenu'] = '在下拉式選單中';
$string['popupopen'] = '在新視窗開啟包裹';
$string['popupsblocked'] = '似乎是彈出式視窗被封鎖了，停止了SCORM模組的播放。在重新開始之前，請檢查你的瀏覽器。';
$string['position_error'] = '標籤{$a->tag} 不是{$a->parent}標籤的子標籤';
$string['preferencespage'] = '只適用於這一頁面的偏好';
$string['preferencesuser'] = '適用於這一報告的偏好';
$string['prev'] = '前一頁';
$string['privacy:metadata:aicc:data'] = '從 AICC/SCORM 子系統傳遞的個人資料。';
$string['privacy:metadata:aicc:externalpurpose'] = '此外掛使用AICC HACP對外發送資料。';
$string['privacy:metadata:aicc_session:lessonstatus'] = '要跟蹤的課程狀態';
$string['privacy:metadata:aicc_session:scormmode'] = '要跟蹤的元素模式';
$string['privacy:metadata:aicc_session:scormstatus'] = '要跟蹤的元素狀態';
$string['privacy:metadata:aicc_session:sessiontime'] = '要跟蹤的會話時間';
$string['privacy:metadata:aicc_session:timecreated'] = '被追蹤元素的建立時間';
$string['privacy:metadata:attempt'] = '嘗試次數';
$string['privacy:metadata:scoes_track:element'] = '要跟蹤的元素名稱';
$string['privacy:metadata:scoes_track:value'] = '給定元素的值';
$string['privacy:metadata:scorm_aicc_session'] = 'AICC HACP的會話資訊';
$string['privacy:metadata:timemodified'] = '跟蹤元素的最後修改時間';
$string['privacy:metadata:userid'] = '訪問SCORM活動的用戶ID';
$string['protectpackagedownloads'] = '限制包裹的下載';
$string['protectpackagedownloads_desc'] = '若啟用，SCORM包裹只有在用戶具有 course:manageactivities權限時，才可以下載。若關閉，SCORM包裹永遠可以被下載（由行動裝置或其他工具）。';
$string['raw'] = '原始分數';
$string['regular'] = '常規的裝載清單';
$string['report'] = '報告';
$string['reportcountallattempts'] = '{$a->nbusers} 位用户的 {$a->nbattempts} 次作答，共有 {$a->nbresults} 個作答結果';
$string['reportcountattempts'] = '{$a->nbresults} 個作答結果（{$a->nbusers} 位用户）';
$string['reports'] = '報告';
$string['repositorynotsupported'] = '這一倉儲並不支援鏈結到一個imsmanifest.xml 檔案';
$string['response'] = '回答';
$string['result'] = '作答結果';
$string['results'] = '作答結果';
$string['review'] = '複習';
$string['reviewmode'] = '審查模式';
$string['rightanswer'] = '正確答案';
$string['scoes'] = '學習目標';
$string['score'] = '分數';
$string['scorm:addinstance'] = '新增一個SCORM教材包';
$string['scorm:deleteownresponses'] = '刪除自己的作答';
$string['scorm:deleteresponses'] = '刪除SCORM的作答';
$string['scorm:savetrack'] = '保存路徑';
$string['scorm:skipview'] = '跳過綜覽';
$string['scorm:viewreport'] = '檢視報告';
$string['scorm:viewscores'] = '檢視分數';
$string['scormclose'] = '可用於';
$string['scormcourse'] = '學習課程';
$string['scormloggingoff'] = 'API日誌紀錄是關閉的';
$string['scormloggingon'] = 'API日誌紀錄是開啟的';
$string['scormopen'] = '開放使用時間';
$string['scormresponsedeleted'] = '刪除用戶作答';
$string['scormstandard'] = 'SCORM標準模式';
$string['scormstandarddesc'] = '當禁用時，Moodle允許SCORM 1.2包裹存儲比規範允許的更多的內容，並在將用戶名稱傳遞給SCORM包裹時使用Moodle全名格式設定。';
$string['scormtype'] = '類型';
$string['scormtype_help'] = '此設定決定課程包裹如何包含在課程內。這兒有四種選擇：

* 上傳的課程包裹 - 通過檔案選取器來選擇 SCORM 課程包。
* 外部的 SCORM 載貨清單 - 可以指定一個 imsmanifest.xml 網址。注意：如果此網址與您的網站的域名不同，那麼最好用“下載的課程包裹”，否則不能保存成績。
* 下載的課程包裹 - 可以指定一個課程包裹的網址。課程包會被解壓縮且保存在本地端電腦上，並隨著外部 SCORM 課程包裹的更新而更新。
* 外部 AICC 網址 - 這網址是單一 AICC 活動的啟動網址。會根據它建立一個虛擬的課程包裹。';
$string['scrollbars'] = '允許捲動視窗';
$string['search:activity'] = 'SCORM包裹 -活動訊息';
$string['selectall'] = '選擇全部';
$string['selectnone'] = '刪除全部';
$string['show'] = '顯示';
$string['sided'] = '在左邊';
$string['skipview'] = '學生可以跳過內容結構頁面';
$string['skipview_help'] = '此設定決定是否內容結構(目錄)頁面應該被跳過（不顯示）。如果教材包裹只包含一個學習物件，內容結構頁面就總是被跳過。';
$string['skipviewdesc'] = '預設何時要跳過內容結構頁面';
$string['slashargs'] = '警告：這一網站已經關閉了斜線參數物件可能無法如預期的運作。';
$string['stagesize'] = '頁框/視窗大小';
$string['stagesize_help'] = '這兩個設定用來指定這學習物件的框架/視窗的寬度或高度。';
$string['started'] = '開始於';
$string['status'] = '狀態';
$string['statusbar'] = '顯示狀態列';
$string['student_response'] = '回答';
$string['subplugintype_scormreport'] = '報告';
$string['subplugintype_scormreport_plural'] = '報告';
$string['suspended'] = '已休學';
$string['syntax'] = '語法錯誤';
$string['tag_error'] = '不知名的標籤({$a->tag})，其內容為：{$a->value}';
$string['time'] = '時間';
$string['title'] = '標題';
$string['toc'] = '內容目錄';
$string['too_many_attributes'] = '標籤{$a->tag}有太多屬性';
$string['too_many_children'] = '標籤{$a->tag}有太多子標籤';
$string['toolbar'] = '顯示工具列';
$string['totaltime'] = '時間';
$string['trackcorrectcount'] = '答對數';
$string['trackcorrectcount_help'] = '這一試題的答對次數';
$string['trackid'] = '編號';
$string['trackid_help'] = '這是你的SCORM包裹為這試題所設的編號，這SCORM的規格明細表不允許提供完整的試題文字。';
$string['trackingloose'] = '注意：這個教材包的學習追蹤資料將會遺失。';
$string['tracklatency'] = '所用時間';
$string['tracklatency_help'] = '允許多次作答時，第一次作答和第二次作答的間隔時間';
$string['trackpattern'] = '標準答案';
$string['trackpattern_help'] = '這是這一問題應該有的正確答案，它沒有顯示學習者的回答';
$string['trackresponse'] = '回答';
$string['trackresponse_help'] = '這是這一學習者對這一問題所做的回答';
$string['trackresult'] = '結果';
$string['trackresult_help'] = '若學生輸入正確的答案，就顯示出來';
$string['trackscoremax'] = '最高分';
$string['trackscoremax_help'] = '在原始分數中可指派給的最大值';
$string['trackscoremin'] = '最低分';
$string['trackscoremin_help'] = '在原始分數中可指派給的最小值';
$string['trackscoreraw'] = '原始分數';
$string['trackscoreraw_help'] = '百分位置分數=((學生得分-min)/(max-min))*100%';
$string['tracksuspenddata'] = '暫停的數據';
$string['tracksuspenddata_help'] = '在學生工作階段之間提供空間來儲存和擷取資料';
$string['tracktime'] = '時間';
$string['tracktime_help'] = '作答次開始的時間';
$string['tracktype'] = '類型';
$string['tracktype_help'] = '試題的類型，比如"選擇題"或"簡答題"';
$string['trackweight'] = '權重';
$string['trackweight_help'] = '計分時指派到這試題的權重';
$string['type'] = '類型';
$string['typeaiccurl'] = '外部AICC網址';
$string['typeexternal'] = '外部SCORM裝載清單';
$string['typelocal'] = '已上傳的教材包';
$string['typelocalsync'] = '已下載的教材包';
$string['undercontent'] = '在內容之下';
$string['unziperror'] = '教材包解壓縮時發現一個錯誤';
$string['updatefreq'] = '自動更新頻率';
$string['updatefreq_error'] = '只有當包裹檔案是寄存在外部伺服器時，才可以設定自動更新的頻率。';
$string['updatefreq_help'] = '這設定允許外部教材包可以自動下載並更新';
$string['updatefreqdesc'] = '預設一個活動的自動更新的頻率';
$string['validateascorm'] = '檢驗一個SCORM包裹的可用性';
$string['validation'] = '驗證結果';
$string['validationtype'] = '此偏好在設定正式版的SCORM所使用的DOMXML函式庫。如果您不清楚，就保留原來的選項。';
$string['value'] = '值';
$string['versionwarning'] = '在{$a->tag}標籤出現警告，此manifest版本比1.3 還舊';
$string['viewallreports'] = '檢視{$a}作答次的報告';
$string['viewalluserreports'] = '檢視{$a}位用戶的報告';
$string['whatgrade'] = '作答次的計分';
$string['whatgrade_help'] = '如果允許多次答題，那麼此設定決定是要將最高分、平均分、第一次得分、還是最後一次的得分，記入成績簿中。

對多次答題的處理

* 開始新作答的選項是一個核取方塊，它在內容結構(目錄)頁面的進入按鈕上面。因此，如果您想允許多次答題的話，一定要允許用戶訪問此頁。

* 有些SCORM教材包能智慧處理新的作答，有些則不能。這意味著如果學習者重新進入一個已有的作答，當該SCORM沒有避免舊作答被覆蓋的邏輯時，它們就可能被覆蓋，哪怕這些作答是已經“完成”或者“通過”。

* “強制完成”、“強制新的作答”和“最後做答後鎖定”三個設定，也提供了多次作答的進一步管理功能。';
$string['whatgradedesc'] = '若允許多次作答，那預設是要以最高分數、平均分數，第一次分數。或最後一次分數記錄在成績簿上';
$string['width'] = '寬度';
$string['window'] = '視窗';
$string['youmustselectastatus'] = '你必須選擇一個狀態來要求';
