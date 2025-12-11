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
 * Strings for component 'tool_usertours', language 'zh_tw', version '5.0'.
 *
 * @package     tool_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['above'] = '上方';
$string['actions'] = '操作';
$string['appliesto'] = '適用於';
$string['backdrop'] = '顯示背景';
$string['backdrop_help'] = '您可以使用背景突顯您要指向的頁面部分。

注意：背景與頁面的某些部分（例如導覽欄）不相容。';
$string['below'] = '下方';
$string['block'] = '區塊';
$string['block_named'] = '區塊名稱 \\\'{$a}\\\'';
$string['cachedef_stepdata'] = '使用者導覽步驟列表';
$string['cachedef_tourdata'] = '在每個頁面上取得之已啟用的使用者導覽資訊列表';
$string['confirmstepremovalquestion'] = '您確定要移除此步驟嗎？';
$string['confirmstepremovaltitle'] = '確認移除步驟';
$string['confirmtourremovalquestion'] = '您確定要移除此導覽？';
$string['confirmtourremovaltitle'] = '確認移除導覽';
$string['content'] = '內容';
$string['content_heading'] = '內容';
$string['content_help'] = '如果需要，描述該步驟的內容能以純文字加入，包含在多語系標籤中（用於多語系內容過濾器）。

或者，可以在格式識別符組件中輸入語言字串ID（逗號後面沒有括號或空格）。';
$string['content_type'] = '教材類型';
$string['cssselector'] = 'CSS 選擇器';
$string['defaultvalue'] = '預設（{$a}）';
$string['delay'] = '在顯示步驟前延遲';
$string['delay_help'] = '您可以選擇在顯示步驟之前加入延遲。

此延遲以毫秒(ms)為單位。';
$string['description'] = '描述';
$string['done'] = '完成';
$string['duplicatetour'] = '重複導覽';
$string['duplicatetour_name'] = '{$a}（複製）';
$string['editstep'] = '編輯「{$a}」';
$string['enabled'] = '啟用';
$string['endonesteptour'] = '明白了';
$string['endtour'] = '結束導覽';
$string['endtourlabel_help'] = '你可以選擇為「結束導覽」按鈕自定一個標籤。 對於單步導覽，默認標籤是「知道了」，對於多步導覽，默認標籤是「結束導覽」。

另外，語言字串ID可以用標識符、組件的格式輸入（逗號後沒有括號或空格）。';
$string['event_step_shown'] = '顯示步驟';
$string['event_tour_ended'] = '導覽已結束';
$string['event_tour_reset'] = '重設導覽';
$string['event_tour_started'] = '導覽開始';
$string['exporttour'] = '匯出導覽';
$string['filter_category'] = '類別';
$string['filter_category_help'] = '在所選類別中的與課程相關聯的頁面上顯示導覽。';
$string['filter_course'] = '課程';
$string['filter_course_help'] = '在與所選課程相關聯的頁面上顯示導覽。';
$string['filter_courseformat'] = '課程格式';
$string['filter_courseformat_help'] = '使用所選的課程格式在與課程相關聯的頁面上顯示導覽。';
$string['filter_header'] = '導覽過濾器';
$string['filter_help'] = '選擇導覽顯示的條件。所有過濾器都須符合才能向使用者顯示導覽。';
$string['filter_role'] = '角色';
$string['filter_role_help'] = '導覽可能僅限在顯示導覽的內容中被選定角色的使用者。例如，如果使用者在課程中具有學生角色（通常是如此），那麼將儀表板導覽限制為「學生角色無法運作」。那儀表板導覽僅限於具有系統角色的使用者。';
$string['filter_theme'] = '佈景主題';
$string['filter_theme_help'] = '當使用者使用其中一個被選定的主題時顯示導覽。';
$string['importtour'] = '匯入導覽';
$string['left'] = '左';
$string['modifyshippedtourwarning'] = '這是Moodle附加的使用者導覽。您在下次網站升級期間可能會覆蓋您所做的任何修改。';
$string['movestepdown'] = '向下移動步驟';
$string['movestepup'] = '向上移動步驟';
$string['movetourdown'] = '向下下移導覽';
$string['movetourup'] = '向下上移導覽';
$string['name'] = '名稱';
$string['newstep'] = '新步聚';
$string['newtour'] = '新增一個新導覽';
$string['next'] = '下一步';
$string['nextstep'] = '往後';
$string['options_heading'] = '選項';
$string['orphan'] = '目標未找到時顯示';
$string['orphan_help'] = '如果未在頁面上找到目標時顯示步驟。';
$string['pathmatch'] = '套用在網址比對';
$string['pathmatch_help'] = '導覽資訊將會顯示在任何對應的網址頁面。

您以使用 % 字元作為萬用字元。
以下是一些範例：

* /my/% - 套用到儀表板
* /course/view.php?id=2 - 套用到特定的課程
* /mod/forum/view.php% - 套用到討論區列表
* /user/profile.php% - 套用到用戶個人頁面

若您希望在「網站首頁」上顯示導覽，則可以使用這個值：「FRONTPAGE」。';
$string['pausetour'] = '暫停';
$string['placement'] = '放置';
$string['placement_help'] = '可以在目標的上、下、左、右放置步驟。建議使用上方或下方，因為它較適合用在行動裝置顯示器上。

如果該步驟不適合指定位置的特定頁面，則它將自動放置在其他位置。';
$string['pluginname'] = '使用者導覽';
$string['privacy:metadata:preference:completed'] = '使用者上次完成導覽的時間。';
$string['privacy:metadata:preference:requested'] = '使用者上次手動請求導覽的時間。';
$string['privacy:request:preference:completed'] = '你上次在{$a->time}將「{$a->name}」使用者導覽標記為完成。';
$string['privacy:request:preference:requested'] = '您上次在{$a->time}請求「{$a->name}」使用者導覽。';
$string['reflex'] = '繼續點擊';
$string['reflex_help'] = '當點擊目標時，繼續下一步。';
$string['resettouronpage'] = '在此頁面上重設使用者導覽';
$string['resumetour'] = '恢復';
$string['right'] = '右';
$string['select_block'] = '選擇一個區塊';
$string['selector_defaulttitle'] = '輸入描述性標題';
$string['selectordisplayname'] = 'CSS 選擇器符合 \\\'{$a}\\\'';
$string['selecttype'] = '選擇步驟類型';
$string['sharedtourslink'] = '導覽儲存庫';
$string['skip'] = '略過';
$string['target'] = '目標';
$string['target_block'] = '區塊';
$string['target_heading'] = '步驟目標';
$string['target_selector'] = '選擇器';
$string['target_selector_targetvalue'] = 'CSS 選擇器';
$string['target_selector_targetvalue_help'] = 'CSS 選擇器幾乎可用來定位頁面上的任何元素。使用網頁瀏覽器的開發人員工具可以輕鬆找到適當的選擇器。';
$string['target_unattached'] = '顯示在頁面中央';
$string['targettype'] = '目標類型';
$string['targettype_help'] = '每個步驟都與頁面的一部分（目標）相關聯。目標類型是：

* 區塊 - 用來顯示指定區塊旁邊的步驟
* CSS 選擇器 - 用來使用CSS準確定義目標區域
* 顯示在頁面中央 - 用於不需要與頁面的特定部分相關聯的步驟';
$string['title'] = '標題';
$string['title_help'] = '如果需要，步驟的標題能以純文字加入，包含在multilang標籤中（用於多語系內容過濾器）。

或者，可以在格式識別符組件中輸入語言字串ID（逗號後面沒有括號或空格）。';
$string['tour1_content_addingblocks'] = '事實上，請仔細考慮包含在您的頁面上任何區塊。Moodle App中不會顯示區塊，為了獲得最佳使用者體驗，請確保您的網站在沒有任何區塊的情況下能正常運行。';
$string['tour1_content_blockregion'] = '這裡還有一個區塊。我們建議完全刪除導覽區和管理區塊，因為所有功能都在Boost主題的其他位置。';
$string['tour1_content_customisation'] = '要自定義網站和首頁的外觀，請使用此標題角落的設定選單。嘗試立即開啟編輯模式。';
$string['tour1_content_end'] = '您的使用者導覽到此結束。除非您使用頁腳中的連結重置它，否則它不會再次顯示。作為管理員，您還可以建立自己的導覽！';
$string['tour1_content_navigation'] = '主導覽區現在透過此導覽面板。內容根據您在網站中的位置進行更新。使用頂端的按鈕隱藏或顯示它。';
$string['tour1_content_welcome'] = '歡迎來到Boost主題。如果您從舊版本升級，您可能會發現這個主題看起來有些不同。';
$string['tour1_title_addingblocks'] = '新增區塊';
$string['tour1_title_blockregion'] = '區塊範圍';
$string['tour1_title_customisation'] = '自定義';
$string['tour1_title_end'] = '結束導覽';
$string['tour1_title_navigation'] = '導覽區';
$string['tour1_title_welcome'] = '歡迎';
$string['tour2_content_addblock'] = '如果您啟用編輯模式，則可以從導覽區中新增區塊。但是，請仔細考慮包含在您的頁面上任何區塊。Moodle App中不會顯示區塊，為了獲得最佳使用者體驗，請確保您的網站在沒有任何區塊的情況下能正常運行。';
$string['tour2_content_addingblocks'] = '您可以使用此按鈕向此頁面添加塊。但是，請仔細考慮包含在您的頁面上任何區塊。Moodle App中不會顯示區塊，為了獲得最佳使用者體驗，請確保您的網站在沒有任何區塊的情況下能正常運行。';
$string['tour2_content_customisation'] = '若要更改任何課程設定，請使用此標題角落的設定單單。您還可以在每個活動的主頁面上找到相似的設定單單。嘗試立即開始編輯。';
$string['tour2_content_end'] = '您的使用者導覽到此結束。除非您使用頁腳中的連結重置它，否則它不會再次顯示。如果需要，網站管理員還可以為此網站建立更多導覽！';
$string['tour2_content_navigation'] = '導覽區現在通過此導覽面板。使用頂端的按鈕隱藏或顯示它。你會看到你的課程部分有連結。';
$string['tour2_content_opendrawer'] = '現在嘗試打開導覽面板。';
$string['tour2_content_participants'] = '在此查看參與者。這也是您新增或刪除學生的地方。';
$string['tour2_content_welcome'] = '歡迎來到Boost主題。如果您從舊版本升級，您可能會發現課程內容頁面看起來有些不同。';
$string['tour2_title_addblock'] = '新增一個區塊';
$string['tour2_title_addingblocks'] = '新增區塊';
$string['tour2_title_customisation'] = '自定義';
$string['tour2_title_end'] = '導覽結束';
$string['tour2_title_navigation'] = '導覽區';
$string['tour2_title_opendrawer'] = '打開導覽面板';
$string['tour2_title_participants'] = '課程參與者';
$string['tour2_title_welcome'] = '歡迎';
$string['tour3_content_dashboard'] = '您的新儀表板具有許多功能，可幫助您輕鬆存取對您最重要的訊息。';
$string['tour3_content_displayoptions'] = '課程可以按課程名稱或最後訪問日期排序。';
$string['tour3_content_overview'] = '課程概觀區塊顯示您參與的所有課程。';
$string['tour3_content_recentcourses'] = '最近訪問的課程區塊顯示您上次訪問的課程，允許您直接返回。';
$string['tour3_content_starring'] = '您可以選擇為課程標記星號，使其更顯眼、或隱藏對您來說不重要的課程。

這些操作只會影響您的界面。

您還可以選擇在列表中顯示課程、使用摘要資訊或預設的「卡片」視圖。';
$string['tour3_content_timeline'] = '時間軸區塊顯示您即將發生的重要事件。

您可以選擇在下週、下個月或未來顯示活動。

您還可以顯示逾期的項目。';
$string['tour3_title_dashboard'] = '您的儀表板';
$string['tour3_title_displayoptions'] = '顯示選項';
$string['tour3_title_overview'] = '課程概觀';
$string['tour3_title_recentcourses'] = '最近訪問的課程';
$string['tour3_title_starring'] = '課程標記星號或隱藏';
$string['tour3_title_timeline'] = '時間軸區塊';
$string['tour4_content_groupconvo'] = '如果您是已啟用群組訊息功能的群組成員，則可以在此處查看群組對話。

透過課程群組對話，您可以在隱私且便利的地方和群組中的其他人進行互動。';
$string['tour4_content_icon'] = '您可以使用此圖示從任何頁面存取您的訊息。

如果您有任何未讀訊息，則此處也會顯示未讀訊息的數量。

點擊圖示以打開通訊面板並繼續導覽。';
$string['tour4_content_messaging'] = '新的訊息系統包括課程中的群組訊息傳遞以及更好地控制誰可以向您發送訊息。';
$string['tour4_content_settings'] = '您可以透過此圖示存取訊息設定。新的隱私設定允許您限制誰可以傳訊息給您。';
$string['tour4_content_starred'] = '您可以選擇為特定對話標記星號，以方便尋找。';
$string['tour4_title_groupconvo'] = '群組訊息';
$string['tour4_title_icon'] = '訊息';
$string['tour4_title_messaging'] = '新的訊息系統';
$string['tour4_title_settings'] = '訊息設定';
$string['tour4_title_starred'] = '星號標記';
$string['tour_activityinfo_activity_student_title'] = '新的：活動資訊';
$string['tour_activityinfo_activity_teacher_title'] = '新的：活動資訊';
$string['tour_activityinfo_course_student_content'] = '活動日期和/或完成活動的方法會顯示在課程頁面上。';
$string['tour_activityinfo_course_student_title'] = '新的：活動資訊';
$string['tour_activityinfo_course_teacher_content'] = '新的課程設定“顯示活動完成情況”和“顯示活動日期”兩項，可以讓您選擇是否顯示活動完成情況和/或日期在學生的課程頁面上。';
$string['tour_activityinfo_course_teacher_title'] = '新的：活動資訊';
$string['tour_final_step_content'] = '您的使用者導覽到此結束。除非您使用頁腳中的連結重置它，否則它不會再次顯示。';
$string['tour_final_step_title'] = '導覽結束';
$string['tour_gradebook_search_content'] = '<div class="text-center">@@PIXICON::tour/tour_grader_report_search::tool_usertours@@</div>使用搜尋欄快速尋找特定的學生。';
$string['tour_gradebook_search_title'] = '簡單地尋找學生';
$string['tour_navigation_course_edit_teacher_title'] = '啟動編輯模式';
$string['tour_navigation_course_index_student_content'] = '@@PIXICON::tour/tour_course_student::tool_usertours@@<br>瀏覽活動並追蹤你的進度';
$string['tour_navigation_course_index_student_title'] = '熟悉網站導覽';
$string['tour_navigation_dashboard_content'] = '@@PIXICON::tour/tour_dashboard::tool_usertours@@<br>這個側面板可以包含更多功能。';
$string['tour_navigation_dashboard_title'] = '展開探索';
$string['tour_navigation_mycourses_content'] = '@@PIXICON::tour/tour_mycourses::tool_usertours@@<br>從這選單可以新增、複製、刪除和隱藏課程。';
$string['tour_navigation_mycourses_endtourlabel'] = '了解';
$string['tour_navigation_mycourses_title'] = '課程和類別';
$string['tour_navigation_mycourses_tour_name'] = '課程管理';
$string['tour_resetforall'] = '導覽狀態已重設。它將再次顯示給所有使用者。';
$string['tourconfig'] = '要匯入的導覽配置文件';
$string['tourisenabled'] = '導覽已啟用';
$string['tourlist_explanation'] = '您可以依需求建立任何數量的導覽，並為Moodle的不同部分分別啟用它們。每頁只能建立一個導覽。';
$string['tours'] = '導覽';
$string['usertours'] = '使用者導覽';
$string['usertours:managetours'] = '建立、編輯和刪除使用者導覽';
$string['viewtour_edit'] = '你可以<a href="{$a->editlink}">編輯導預設值</a>和對所有使用者<a href="{$a->resetlink}">強制顯示導覽</a>';
$string['viewtour_info'] = '這是\\\'{$a->tourname}\\\'導覽。他適用的路徑是\\\'{$a->path}\\\'。';
