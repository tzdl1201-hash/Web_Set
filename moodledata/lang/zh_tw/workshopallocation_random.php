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
 * Strings for component 'workshopallocation_random', language 'zh_tw', version '5.0'.
 *
 * @package     workshopallocation_random
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addselfassessment'] = '增加自評';
$string['allocationaddeddetail'] = '要完成的新評價：<strong>{$a->reviewername}</strong>要評價 <strong>{$a->authorname}</strong>的作業';
$string['allocationdeallocategraded'] = '無法解除已評分的評量：評量者 <strong>{$a->reviewername}</strong>，作品作者：<strong>{$a->authorname}</strong>';
$string['allocationreuseddetail'] = '再用評價：<strong>{$a->reviewername}</strong>繼續做 <strong>{$a->authorname}</strong>的評閱人';
$string['allocationsettings'] = '分配的設定';
$string['assessmentdeleteddetail'] = '解除評量：<strong>{$a->reviewername}</strong> 不再評量 <strong>{$a->authorname} 的作業';
$string['assesswosubmission'] = '沒有交作業也可以評價';
$string['confignumofreviews'] = '預設每人隨機分配幾份作業';
$string['excludesamegroup'] = '防止同群組的同學互評';
$string['noallocationtoadd'] = '不需增加分配';
$string['nogroupusers'] = '<p>警告：如果工作坊處在“可視群組”模式或者“分隔群組”模式，那麼用戶必須至少屬於一個組，才能用此工具向他們分配評價任務。不屬於任何組的用戶仍然可以做自我評價或者刪除已有的評價。</p> <p>這些用戶目前還未被加入任何組：{$a}</p>';
$string['numofdeallocatedassessment'] = '解除分配 {$a} 個評價';
$string['numofrandomlyallocatedsubmissions'] = '隨機分派{$a}個作品';
$string['numofreviews'] = '評閱數量';
$string['numofselfallocatedsubmissions'] = '自我分配 {$a} 個作業';
$string['numperauthor'] = '每個作業';
$string['numperreviewer'] = '每個評閱人';
$string['pluginname'] = '隨機分配';
$string['randomallocationdone'] = '隨機分配完成';
$string['removecurrentallocations'] = '刪除目前的分配';
$string['resultnomorepeers'] = '沒有更多可用的同儕';
$string['resultnomorepeersingroup'] = '在此分隔群組中沒有足夠的人員可用';
$string['resultnotenoughpeers'] = '沒有足夠的同儕可用';
$string['resultnumperauthor'] = '嘗試為每個作者分配 {$a} 個審閱人';
$string['resultnumperreviewer'] = '嘗試為每個評閱人分配 {$a} 個評價任務';
$string['stats'] = '目前分配的統計';
