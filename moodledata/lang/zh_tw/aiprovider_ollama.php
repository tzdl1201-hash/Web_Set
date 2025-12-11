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
 * Strings for component 'aiprovider_ollama', language 'zh_tw', version '5.0'.
 *
 * @package     aiprovider_ollama
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:model'] = '文字解釋模型';
$string['action:explain_text:model_help'] = '用於解釋所提供文本的模型。';
$string['action:explain_text:systeminstruction'] = '系統指令';
$string['action:explain_text:systeminstruction_help'] = '此指令會與用戶的提示一起發送給AI模型。除非必要，否則不建議編輯此指令。';
$string['action:generate_text:model'] = '文字生成模型';
$string['action:generate_text:model_help'] = '用於生成文本回應的模型。';
$string['action:generate_text:systeminstruction'] = '系統指令';
$string['action:generate_text:systeminstruction_help'] = '此指令會與用戶的提示一起發送給AI模型。除非必要，否則不建議編輯此指令。';
$string['action:summarise_text:model'] = '文本摘要模型';
$string['action:summarise_text:model_help'] = '用於摘要總結提供的文本的模型。';
$string['action:summarise_text:systeminstruction'] = '系統指令';
$string['action:summarise_text:systeminstruction_help'] = '此指令會與用戶的提示一起發送給AI模型。除非必要，否則不建議編輯此指令。';
$string['custom_model_name'] = '自訂模型名稱';
$string['enablebasicauth'] = '啟用基本認證';
$string['enablebasicauth_help'] = '為 Ollama API 提供者啟用基本認證';
$string['endpoint'] = 'API 端點(endpoint)';
$string['endpoint_help'] = 'Ollama API 伺服器的 API 端點。';
$string['extraparams'] = '額外參數';
$string['extraparams_help'] = '此處可以設定額外的參數。我們支援 JSON 格式。例如：
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['invalidjson'] = '無效的 JSON 字串';
$string['password'] = '密碼';
$string['password_help'] = '用於基本認證的密碼';
$string['pluginname'] = 'Ollama API 提供者';
$string['privacy:metadata'] = 'Ollama API 提供者外掛不儲存任何個人資料';
$string['privacy:metadata:aiprovider_ollama:externalpurpose'] = '這些資訊會傳送至 Ollama API 以生成回應。您的 Ollama 帳戶設定可能會影響 Ollama 如何儲存和保留這些資料。此外掛不會將任何使用者資料明確傳送至 Ollama 或儲存在 Moodle LMS 中。';
$string['privacy:metadata:aiprovider_ollama:model'] = '用來生成回應的模型。';
$string['privacy:metadata:aiprovider_ollama:prompttext'] = '用來生成回應的使用者輸入文本提示。';
$string['settings'] = '設定';
$string['settings_help'] = '調整以下設定，自訂傳送請求給 Ollama 的方式。';
$string['settings_mirostat'] = 'Mirostat';
$string['settings_mirostat_help'] = 'Mirostat 是一種用於控制困惑度的神經文本解碼算法。0 = 關閉，1 = Mirostat，2 = Mirostat 2.0。（預設值：0）';
$string['settings_seed'] = 'seed';
$string['settings_seed_help'] = '設定用於生成的隨機數seed。將其設定為特定數字，會使模型對相同的提示生成相同的文本。（預設值：0）';
$string['settings_temperature'] = 'temperature';
$string['settings_temperature_help'] = 'Temperature 影響輸出是更隨機、更有創意，還是更可預測。提高 temperature 會使模型的回答更具創意。（預設值：0.8）';
$string['settings_top_k'] = 'top_k';
$string['settings_top_k_help'] = '降低生成胡言亂語的概率。較高的值（例如 100）會產生更多樣化的回答，而較低的值（例如 10）則會較為保守。（預設值：40）';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = '與 top-k 一起運作。較高的值（例如 0.95）會產生更多樣化的文本，而較低的值（例如 0.5）則會生成更集中的、保守的文本。（預設值：0.9）';
$string['username'] = '用戶名';
$string['username_help'] = '用於基本認證的用戶名。';
