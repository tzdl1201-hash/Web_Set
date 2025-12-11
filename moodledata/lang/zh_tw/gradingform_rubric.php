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
 * Strings for component 'gradingform_rubric', language 'zh_tw', version '5.0'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = '新增判斷規準';
$string['alwaysshowdefinition'] = '允許用戶預覽評分規程(rubric)，(否則只能在評分完後才能看見評分規程)';
$string['backtoediting'] = '回頭繼續編輯';
$string['confirmdeletecriterion'] = '你確定要刪除這一判斷規準？';
$string['confirmdeletelevel'] = '你確定要刪除這一層次？';
$string['criterion'] = '判斷規準 {$a}';
$string['criterionaddlevel'] = '新增層次';
$string['criteriondelete'] = '刪除判斷規準';
$string['criterionduplicate'] = '重複的規準';
$string['criterionempty'] = '點選可編輯判斷規準';
$string['criterionmovedown'] = '往下移';
$string['criterionmoveup'] = '往上移';
$string['criterionremark'] = '判斷規準 {$a->description}: {$a->remark}的備註';
$string['definerubric'] = '定義評分規準';
$string['description'] = '使用說明';
$string['enableremarks'] = '允許評分者針對每一判斷規準添加文字註記';
$string['err_mintwolevels'] = '每一判斷規準必須至少要有兩個表現層次';
$string['err_nocriteria'] = '評分規準必須至少包含一個判斷規準';
$string['err_nodefinition'] = '表現層次的定義不可以是空白';
$string['err_nodescription'] = '判斷規準的說明不可以是空白';
$string['err_novariations'] = '效標層次不可以全部是相同的分數';
$string['err_scoreformat'] = '每一層次所賦予的點數必須是一個正整數';
$string['err_totalscore'] = '以評分規準評出來的總分必須大於零';
$string['gradingof'] = '{$a}評分';
$string['level'] = '{$a->definition}, {$a->score}';
$string['leveldefinition'] = '層次{$a}的定義';
$string['leveldelete'] = '刪除層次 {$a}';
$string['levelempty'] = '點選可編輯層次';
$string['levelsgroup'] = '層次分群';
$string['lockzeropoints'] = '依據評分規程的最低分數為0的方式來計算成績';
$string['lockzeropoints_help'] = '只有在每一個規準的最小分數的累加和大於 0 時，這一設定才能使用。如果勾選，這評分規程的可能最低分數將會大於 0。若取消勾選，這評分規程的可能的最低分數將會對應到這一活動的可能最低分數(通常是0，除非有使用量尺)。';
$string['name'] = '名稱';
$string['needregrademessage'] = '在這學生被評分之後，評分規程的定義已經被更改。這學生不能看到這評分規程，除非你核對這評分規程並更新這分數。';
$string['pluginname'] = '評分規準';
$string['previewrubric'] = '預覽評分規準';
$string['regrademessage1'] = '你即將對一個已經用於評分的評分規程做改變，請指名現有的分數是否需要重新審閱。若你設定這個，這評分規準將對學生隱藏，直到他們的作品被重新評分。';
$string['regrademessage5'] = '你對已經用於評分的評分規準做了重大修改，並即將儲存。成績簿的數據還不會改變，但是評分規準的分數將會被隱藏，直到他們的作業被重新評分。';
$string['regradeoption0'] = '不可註記為重新計分';
$string['regradeoption1'] = '可註記為重新計分';
$string['restoredfromdraft'] = '注意：對此人的最後一次評分沒有妥當地儲存，因此草稿分數已經被回存。若你要取消這些更改，請使用"取消"按鈕。';
$string['rubric'] = '評分規準';
$string['rubricmapping'] = '分數到成績的對應規則';
$string['rubricmappingexplained'] = '這一評分規程的最小可能分數是 <b>{$a->minscore}分</b> 且它會被轉換成在這一模組的可用的最小分數(它是0，除非使用了量尺)。
最大分數<b>{$a->maxscore} 分</b> 將會轉換成最高分數。<br />
中間的各分數將會相對地轉換到最近的可用分數。<br />

如果是以量尺來計分，這分數將會四捨五入轉換成量尺單位，就像是連續的整數。

若編輯這一表單並勾選"根據評分規程有最低分數為0來計分"方格，即可改變成績計算方式。';
$string['rubricnotcompleted'] = '請位每一判斷規準選擇一些回饋';
$string['rubricoptions'] = '評分規準選項';
$string['rubricstatus'] = '目前評分規準狀態';
$string['save'] = '儲存';
$string['saverubric'] = '儲存評分規準並開放使用';
$string['saverubricdraft'] = '存為草稿';
$string['scoreinputforlevel'] = '層次{$a}的輸入分數';
$string['scorepostfix'] = '{$a}分';
$string['showdescriptionstudent'] = '向那些被評的學生顯示評分規準使用說明';
$string['showdescriptionteacher'] = '在評分時顯示評分規準使用說明';
$string['showremarksstudent'] = '向那些被評的學生顯示分數';
$string['showscorestudent'] = '向被評的學生顯示每一層次的給分';
$string['showscoreteacher'] = '在評分時顯示每一層次的給分';
$string['sortlevelsasc'] = '層次之間的排序方式：';
$string['sortlevelsasc0'] = '依據給分遞減排列';
$string['sortlevelsasc1'] = '依據給分遞增排列';
$string['zerolevelsabsent'] = '警告：這一評分規程的最小可能分數不是0；這可能導致這活動出現意外的成績。要避免這現象發生，評分規程上的每一個評分規準都要有一個層次是給0分的。

如果您是使用量尺來打成績，且評分規成的最低層次是對應到這量尺的最低層次，那就不必管這一警告。';
