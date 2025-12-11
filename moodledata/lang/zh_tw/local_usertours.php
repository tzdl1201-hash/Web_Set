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
 * Strings for component 'local_usertours', language 'zh_tw', version '5.0'.
 *
 * @package     local_usertours
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = '動作';
$string['appliesto'] = '適用於';
$string['backdrop'] = '顯示背景';
$string['backdrop_help'] = '您可以使用背景突出顯示您要指向的頁面部分.

注意: 背景與頁面的某些部分(例如導覽欄)不相容.';
$string['block'] = '區塊';
$string['block_named'] = '區塊名稱 \'{$a}';
$string['bottom'] = '底部';
$string['confirmstepremovalquestion'] = '您確定要移除此步驟嗎?';
$string['confirmstepremovaltitle'] = '確認步驟刪除';
$string['confirmtourremovalquestion'] = '您確定要移除這個導覽嗎？';
$string['confirmtourremovaltitle'] = '確認移除遊覽';
$string['content'] = '內容';
$string['content_help'] = '這是步驟的內容.
您可以輸入以下格式的內容:
<dl>
    <dt>純文字</dt>
    <dd>純文字的描述</dd>
    <dt>Moodle多國語系</dt>
    <dd>使用Moodle多國語系的字串格式</dd>
    <dt>Moodle翻譯的字串</dt>
    <dd>在標準Moodle語言文件中找到的值</dd>
</dl>';
$string['cssselector'] = 'CSS選擇器';
$string['defaultvalue'] = '預設 ({$a})';
$string['delay'] = '顯示步驟前延遲';
$string['delay_help'] = '您可以選擇在顯示步驟之前添加延遲.

此延遲以毫秒為單位.';
$string['description'] = '描述';
$string['done'] = '完成';
$string['editstep'] = '編輯 "{$a}"';
$string['enabled'] = '啟用';
$string['endtour'] = '結束導覽';
$string['exporttour'] = '匯出導覽';
$string['importtour'] = '匯入導覽';
$string['left'] = '左';
$string['movestepdown'] = '向下移動';
$string['movestepup'] = '向上移動';
$string['movetourdown'] = '向下移動遊覽';
$string['movetourup'] = '向上移動遊覽';
$string['name'] = '名稱';
$string['newstep'] = '新步驟';
$string['newtour'] = '建立一個新的導覽';
$string['next'] = '下一步';
$string['orphan'] = '如果找不到目標就顯示';
$string['orphan_help'] = '如果在頁面上找不到目標,則顯示步驟.';
$string['pathmatch'] = '應用於網址比對';
$string['pathmatch_help'] = '導覽資訊將會被顯示在任何匹配到的網址頁面.

您可以使用 % 字元當成是萬用字元.
一些範例包含:
* /my/% - 套用到儀表板
* /course/view.php?id=2 - 套用到特定的課程
* /mod/forum/view.php% - 套用到討論區列表
* /user/profile.php% - 套用到用戶個人頁面';
$string['pausetour'] = '暫停';
$string['placement'] = '放置';
$string['placement_help'] = '您可以在目標的上方,下方,左側或右側放置一個步驟.

最好的選擇是頂部或底部,因為這些調整更適合移動顯示.';
$string['pluginname'] = '用戶導覽';
$string['reflex'] = '點擊移動';
$string['reflex_help'] = '當點擊目標時,繼續進行下一步.';
$string['resettouronpage'] = '在此頁面上重置用戶導覽';
$string['resumetour'] = '恢復';
$string['right'] = '右';
$string['select_block'] = '選擇一個區塊';
$string['select_targettype'] = '每一步都與您必須選擇的頁面的一部分相關聯。 為了使這更容易，對於不同類型的頁面內容有幾種類型的目標。
<dl>
    <dt>區塊</dt>
    <dd>顯示頁面上第一個匹配類型區塊的步驟</dd>
    <dt>選擇器</dt>
    <dd>CSS選擇器是一種強大的方法, 允許您根據頁面中內的後設資料選擇頁面的不同部分.</dd>
    <dt>在頁面中間顯示</dt>
    <dd>不是將步驟與網頁的特定部分相關聯，而是可以將其顯示在網頁的中間.</dd>
</dl>';
$string['selector_defaulttitle'] = '輸入描述性標題';
$string['selectordisplayname'] = '一個CSS選擇器匹配 {$a}';
$string['selecttype'] = '選擇步驟類型';
$string['sharedtourslink'] = '導覽倉儲';
$string['skip'] = '跳過';
$string['target'] = '目標';
$string['target_block'] = '區塊';
$string['target_selector'] = '選擇器';
$string['target_selector_targetvalue'] = 'CSS選擇器';
$string['target_selector_targetvalue_help'] = '您可以使用“CSS選擇器”來定位頁面上的幾乎任何元素.

CSS選擇器非常強大,您可以通過逐漸構建選擇器輕鬆找到頁面的各個部分.

Mozilla提供了一些[非常好的文件](https://developer.mozilla.org/en/docs/Web/Guide/CSS/Getting_started/Selectors)
對於您構建選擇器可能會有所幫助.

您還將發現您的瀏覽器的開發工具在創建這些選擇器時非常有用：

* [Google Chrome](https://developer.chrome.com/devtools#dom-and-styles)
* [Mozilla Firefox](https://developer.mozilla.org/en-US/docs/Tools/DOM_Property_Viewer)
* [Microsoft Edge](https://developer.microsoft.com/en-us/microsoft-edge/platform/documentation/f12-devtools-guide/)
* [Apple Safari](https://developer.apple.com/library/iad/documentation/AppleApplications/Conceptual/Safari_Developer_Guide/ResourcesandtheDOM/ResourcesandtheDOM.html#//apple_ref/doc/uid/TP40007874-CH3-SW1)';
$string['target_unattached'] = '顯示在頁面中間';
$string['targettype'] = '目標類型';
$string['title'] = '標題';
$string['title_help'] = '步驟的標題顯示在最上方.
您可以使用以下格式輸入標題:
<dl>
    <dt>文字</dt>
    <dd>描述的文字</dd>
    <dt>Moodle多國語系</dt>
    <dd>一個使用Moodle多國語文格式的識別字串</dd>
    <dt>Moodle翻譯的文字</dt>
    <dd>在標準Moodle語言文件中的語系識別字串</dd>
</dl>';
$string['top'] = '頂端';
$string['tourconfig'] = '匯入導覽設定檔';
$string['tourlist_explanation'] = '若你想為Moodle不同的部份啟用導覽,你可以建立許多的導覽資料,但每一頁只能有一個導覽.';
$string['tours'] = '導覽';
$string['usertours'] = '用戶導覽';
$string['viewtour_info'] = '這是 \'{$a->tourname}\' 導覽. 它適用於這個路徑 \'{$a->path}\'.';
