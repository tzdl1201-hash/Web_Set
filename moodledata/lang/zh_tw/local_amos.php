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
 * Strings for component 'local_amos', language 'zh_tw', version '5.0'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS是Automated Manipulation Of Strings（自動翻譯處理器）的縮寫。它是Moodle翻譯及其異動記錄的資料庫。它跟蹤Moodle程式中的英文字串變化，收集翻譯，處理日常翻譯任務和生成由Moodle服務器分發的語言包。</p>
<p>參考<a href="http://docs.moodle.org/en/AMOS">AMOS說明</a>瞭解更多。</p>';
$string['amos'] = 'AMOS — Moodle翻譯工具';
$string['amos:commit'] = '將暫存的翻譯上傳到版本系統';
$string['amos:execute'] = '執行指定的 AMOScript';
$string['amos:importfile'] = '從上傳的檔案匯入翻譯並暫存它們';
$string['amos:importstrings'] = '匯入字串(包括英語)直接進到主倉儲';
$string['amos:manage'] = 'AMOS管理首頁';
$string['amos:stage'] = '使用AMOS翻譯工具並暫存這些翻譯';
$string['amos:stash'] = '將目前暫存的翻譯儲存到資料庫';
$string['amos:usegoogle'] = '使用Google翻譯服務';
$string['commitbutton'] = '提交並取消暫存';
$string['commitmessage'] = '提交的訊息';
$string['commitstage'] = '上傳暫存的字串';
$string['commitstage_help'] = '永久保存AMOS資料庫所有暫存的翻譯。暫存區在上傳前會被自動清理和與最新翻譯同步。只有可上傳的翻譯會被保留。也就是說，只有背景是綠色的翻譯會被保存。上傳後，暫存區會被清空。';
$string['committableall'] = '所有語言';
$string['committablenone'] = '沒有允許的語言，請聯繫 AMOS 管理員';
$string['componentsall'] = '全部';
$string['componentsnone'] = '無';
$string['componentsstandard'] = '標準';
$string['confirmaction'] = '這個操作不能取消，確定？';
$string['contribaccept'] = '接受';
$string['contribactions'] = '操作貢獻的翻譯';
$string['contribactions_help'] = '取決於您的權限和貢獻翻譯工作流程，您可以使用下面的部分動作：

* 應用 - 將貢獻的翻譯拷貝到您的暫存區，不修改貢獻記錄
* 分配給我 - 將您自己設爲此貢獻的責任人，由您負責評估和集成
* 重新分配 - 刪除此貢獻的責任人
* 開始評估 - 分配此新貢獻給您自己，把它的狀態設爲”評估中“，並拷貝提交的翻譯到您的暫存區
* 接受 - 標記此貢獻爲已接受
* 拒收 - 標記此貢獻爲已拒收。請在評論中說明原因。

貢獻人會收到所有狀態變化的通知郵件。';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = '套用';
$string['contribassignee'] = '責任人';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = '分配給我';
$string['contribauthor'] = '作者';
$string['contribclosedno'] = '隱藏已處理的貢獻';
$string['contribclosedyes'] = '顯示已處理的貢獻';
$string['contribcomponents'] = '元件';
$string['contribid'] = '帳號';
$string['contribincomingnone'] = '沒有未處理貢獻';
$string['contribincomingsome'] = '收到貢獻（{$a}）';
$string['contriblanguage'] = '語言';
$string['contribreject'] = '拒收';
$string['contribresign'] = '重新分配';
$string['contribstaged'] = '已暫存的貢獻<a href="contrib.php?id={$a->id}">#{$a->id}</a>，來自 {$a->author}';
$string['contribstagedinfo'] = '已暫存的貢獻';
$string['contribstagedinfo_help'] = '這暫存區包含的字串是由一位社群成員所貢獻。這語言包的維護人應該會審核它們，並決定要接受(若已經提交)或拒收(若它們因為某些理由不能包括在官方語言包中)。';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = '開始審核';
$string['contribstatus'] = '狀態';
$string['contribstatus0'] = '新的';
$string['contribstatus10'] = '審核中';
$string['contribstatus20'] = '已拒收';
$string['contribstatus30'] = '已接受';
$string['contribstatus_help'] = '貢獻翻譯工作流程包含下面的狀態：

* 新的 - 此貢獻已經提交，但還沒被評估
* 評估中 - 此貢獻已經分配給一名語言包維護人，並放入它的暫存區供評估
* 拒收 - 語言包維護人已拒收此貢獻，並可能在評論中做了解釋
* 接受 - 語言包維護人已經接受此貢獻';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = '翻譯';
$string['contribstringseq'] = '{$a->orig}個新的';
$string['contribstringsnone'] = '{$a->orig}（它們全部在語言包中都已經翻譯過了）';
$string['contribstringssome'] = '{$a->orig}（語言包中已經翻譯了{$a->same}個）';
$string['contribsubject'] = '標題';
$string['contribsubmittednone'] = '沒有已提交的貢獻';
$string['contribsubmittedsome'] = '您的貢獻（{$a}）';
$string['contribtimemodified'] = '已被修改';
$string['contributions'] = '貢獻';
$string['creditstitleshort'] = '信譽';
$string['diff'] = '比較';
$string['err_exception'] = '錯誤：{$a}';
$string['err_invalidlangcode'] = '無效的語言代碼';
$string['err_parser'] = '解析錯誤： {$a}';
$string['filtercmp'] = '元件';
$string['filtercmp_desc'] = '顯示這些元件的翻譯';
$string['filtercmpnothingselected'] = '請選擇一些元件';
$string['filterlng'] = '語言';
$string['filterlng_desc'] = '顯示這些語言的翻譯';
$string['filtermis'] = '雜項';
$string['filtermis_desc'] = '字串顯示的其他條件';
$string['filtermisfhlp'] = '只含幫助字串';
$string['filtermisfmis'] = '只含未翻譯或未更新的字串';
$string['filtermisfstg'] = '只含暫存的字串';
$string['filtersid'] = '字串識別碼';
$string['filtersid_desc'] = '在一系列字串中的關鍵字';
$string['filtersidpartial'] = '部份比對';
$string['filtertxt'] = '子字串';
$string['filtertxt_desc'] = '字串中必須包含所給的文字';
$string['filtertxtcasesensitive'] = '區分大小寫';
$string['filtertxtregex'] = '正則表達式';
$string['filterver'] = '版本';
$string['filterver_desc'] = '顯示來自這些Moodle版本的字串';
$string['importfile'] = '從檔案匯入已翻譯的字串';
$string['importfile_help'] = '如果您是以離線方式翻譯字串，你可以經由這一表單把它們放入暫存區。

* 檔案必須是合法的Moodle PHP字串定義文件。Moodle的”/lang/en“目錄下的文件都是例子。
* 檔案名稱必須是字串所屬的元件的英文名稱（例如”moodle.php“、”assignment.php“或”enrol_manual.php“）。

檔案中所有字串都會按照所選的版本和語言放入暫存區。

如果你把多個PHP檔案壓縮，上傳後可以同時處裡。';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = '語言';
$string['languages'] = '語言';
$string['languagesall'] = '全部';
$string['languagesnone'] = '無';
$string['log'] = '日誌';
$string['logfilterbranch'] = '版本';
$string['logfiltercommithash'] = 'git hash（版本號）';
$string['logfiltercommitmsg'] = '提交信息包含';
$string['logfiltercommits'] = '提交過濾器';
$string['logfiltercommittedafter'] = '提交晚於';
$string['logfiltercommittedbefore'] = '提交早於';
$string['logfiltercomponent'] = '元件';
$string['logfilterlang'] = '語言';
$string['logfiltershow'] = '顯示過濾後的提交和字串';
$string['logfiltersource'] = '源';
$string['logfiltersourceamos'] = 'amos（基於web的翻譯器）';
$string['logfiltersourcebot'] = '機器人(用腳本執行的批次操作)';
$string['logfiltersourcecommitscript'] = 'commitscript（提交信息中有AMOScript）';
$string['logfiltersourcefixdrift'] = '修正漂移（已修正的AMOS-git漂移）';
$string['logfiltersourcegit'] = 'git（Moodle源代碼和1.x包的git鏡像）';
$string['logfiltersourcerevclean'] = 'revclean（反向清理過程）';
$string['logfilterstringid'] = '字串識別碼';
$string['logfilterstrings'] = '字串過濾器';
$string['logfilterusergrp'] = '提交人';
$string['logfilterusergrpor'] = '或';
$string['maintainers'] = '維護人';
$string['markuptodate'] = '標示此翻譯是最新的';
$string['morefilteringoptions'] = '更多選項';
$string['newlanguage'] = '新語言';
$string['nodiffs'] = '沒有發先差異';
$string['nofiletoimport'] = '請提供一個供導入的文件。';
$string['nologsfound'] = '沒有符合條件的字串，請修改過濾條件';
$string['nostringsfound'] = '沒有符合條件的字串';
$string['nostringtoimport'] = '文件裏沒有合法的字串。請確認文件名和文件格式正確。';
$string['nothingtostage'] = '此操作未返回任何可以暫存的字串。';
$string['novalidzip'] = '無法解壓縮這個ZIP檔';
$string['numofcommitsabovelimit'] = '經提交篩檢程式過濾，找到{$a->found}次提交，使用{$a->limit}個最新近的';
$string['numofcommitsunderlimit'] = '經提交篩檢程式過濾，找到{$a->found}次提交';
$string['numofmatchingstrings'] = '其中，{$a->commits}次提交的{$a->strings}次修改符合字串篩檢程式';
$string['outdatednotcommitted'] = '過時的字串';
$string['outdatednotcommitted_help'] = 'AMOS檢測到此字串可能有些舊了，因爲在上次翻譯後，它的英文版有過修改。請重新評估此翻譯。';
$string['outdatednotcommittedwarning'] = '舊的';
$string['ownstashactions'] = '儲藏室動作';
$string['ownstashactions_help'] = '* 應用 - 把已翻譯的字串從儲藏室拷貝到暫存區，但不修改儲藏室。如果暫存區裏已經有該字符串，會被儲藏室裏的覆蓋。
* 彈出 - 把已翻譯的字串從儲藏室移動到暫存區，並從儲藏室刪除（相當於應用+刪除）
* 刪除 - 刪除放到儲藏室的字符串。
* 提交 - 打開一個提交儲藏室給官方語言維護人的表單，這樣他們就可以將您的貢獻放入官方語言包。';
$string['ownstashes'] = '您的儲藏室';
$string['ownstashes_help'] = '這是您所有儲藏室的列表。';
$string['ownstashesnone'] = '沒建任何自己的儲藏室';
$string['permalink'] = '固定網址';
$string['placeholder'] = '佔位符';
$string['placeholder_help'] = '佔位符是字串中一些特殊語句，類似”{$a}“或”{$a->something}“。在字串最終被顯示時，它們會被替換爲另一個值。

一定要將它們原封不動地從原始字串裏拷貝。不要翻譯它們！';
$string['placeholderwarning'] = '有佔位符的字串';
$string['pluginclasscore'] = '核心子系統';
$string['pluginclassnonstandard'] = '非標準外掛';
$string['pluginclassstandard'] = '標準外掛';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = '由 {$a->author} 貢獻翻譯 #{$a->id}';
$string['presetcommitmessage2'] = '合併缺少的字串，從{$a->source} 到 {$a->target} 版本';
$string['presetcommitmessage3'] = '修正{$a->versiona} 和 {$a->versionb}之間的差異';
$string['privileges'] = '您的特權';
$string['privilegesnone'] = '對公共信息，你有只讀權限。';
$string['requestactions'] = '動作';
$string['requestactions_help'] = '* 申請 - 從推送請求中複製已翻譯的字串到自己的暫存區。如果這個字符串已經在暫存區中了，就覆蓋重寫它。
* 隱藏 - 屏蔽這個推送請求使得您不會再看到它了。';
$string['savefilter'] = '抓取過濾後的結果';
$string['script'] = 'AMOS腳本';
$string['script_help'] = 'AMOS腳本是一組指令，用來管理字串倉儲';
$string['scriptexecute'] = '執行並暫存結果';
$string['sourceversion'] = '源版本';
$string['stage'] = '暫存區';
$string['stageactions'] = '暫存區動作';
$string['stageactions_help'] = '* 編輯已暫存字串 - 修改翻譯器過濾器的設置，只顯示已暫存的翻譯。
* 清理不可提交的字串 - 從暫存區刪除所有不允許提交的翻譯。在提交前，暫存區會被自動清理。
* 重新對齊 - 從暫存區刪除所有沒修改的翻譯，或者比容器中的當前翻譯舊的翻譯。在提交前，暫存區會被自動對齊。
* 清空暫存區 - 清空暫存區後，其內的所有翻譯都再也找不回來了。';
$string['stageedit'] = '編輯已暫存的字串';
$string['stageprune'] = '清理不可提交的';
$string['stagerebase'] = '重新對齊';
$string['stagestringsnocommit'] = '暫存區有{$a->staged}個字串';
$string['stagestringsnone'] = '暫存區沒有字串';
$string['stagestringssome'] = '暫存區共有{$a->staged}個字串，其中{$a->committable}個可以提交';
$string['stagesubmit'] = '提交給維護人';
$string['stagetranslation'] = '翻譯';
$string['stagetranslation_help'] = '顯示要提交的已暫存的翻譯。單元格背景色的含義：

* 綠色 - 您修改過或新翻譯了該字串。您可以提交這條翻譯。
* 藍色 - 您修改過或新翻譯了該字串，但您不能將它提交到對應的語言包。
* 無色 - 暫存的翻譯和當前翻譯是完全一樣的，所以不會提交。';
$string['stageunstageall'] = '清空暫存區';
$string['stashactions'] = '儲藏室動作';
$string['stashactions_help'] = '儲藏室是當前暫存區的一個快照。可以將儲藏室提交給官方語言包維護人，由它將其放入語言包。';
$string['stashapply'] = '應用';
$string['stashautosave'] = '自動保存的備份儲藏室';
$string['stashautosave_help'] = '這個儲藏室包含您的暫存區最新的快照。在某些情況下，比如不小心清空了暫存區，可以用它做備份。點擊”應用“可以拷貝儲藏室中的所有字符串到暫存區中（如果字串已在暫存區中，會被覆蓋）。';
$string['stashcomponents'] = '<span>元件：</span> {$a}';
$string['stashdrop'] = '丟棄';
$string['stashes'] = '儲藏室';
$string['stashlanguages'] = '<span>語言：</span> {$a}';
$string['stashpop'] = '彈出';
$string['stashpush'] = '把暫存區中所有字串放入一個新的儲藏室';
$string['stashstrings'] = '<span>字串個數：</span> {$a}';
$string['stashsubmit'] = '提交給維護人';
$string['stashsubmitdetails'] = '提交細節';
$string['stashsubmitmessage'] = '消息';
$string['stashsubmitsubject'] = '主題';
$string['stashtitle'] = '儲藏室標題';
$string['stashtitledefault'] = '在製品 - {$a->time}';
$string['stringhistory'] = '歷史';
$string['strings'] = '字串數';
$string['submitting'] = '提交一個貢獻';
$string['submitting_help'] = '這會將翻譯的字串發送給官方語言維護人。他們會將您的貢獻放入暫存區，評估，並最後提交。請留下一些信息，描述一下您的翻譯和您爲什麼希望您的貢獻被接受。';
$string['targetversion'] = '目標版本';
$string['translatortool'] = '翻譯器';
$string['translatortranslation'] = '翻譯';
$string['translatortranslation_help'] = '點擊單元格，立即變爲輸入框。輸入翻譯並點擊單元格以外的地方，就將翻譯放入了暫存區。單元格的背景色含義：

* 綠色 - 此字串已經被翻譯過了。您可以修改和提交它。
* 黃色 - 此字串可以提交，但可能有些舊了。在上次翻譯後，英文版可能做了修改。
* 紅色 - 此字串未被翻譯，您可以翻譯和提交它。
* 藍色 - 您已經修改了翻譯，它現在被暫存了。別忘了在登出之前將它們提交！
* 灰色 - AMOS不能用來翻譯這一字串。比如說用於1.9的字串必須經由繼承的CVS存取來編輯它。';
$string['typecontrib'] = '非標準外掛';
$string['typecore'] = '核心子系統';
$string['typestandard'] = '標準外掛';
$string['unstage'] = '取消暫存';
$string['unstageconfirm'] = '確定？';
$string['unstaging'] = '取消暫存中';
$string['version'] = '版本';
