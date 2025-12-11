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
 * Strings for component 'aiprovider_openai', language 'zh_tw', version '5.0'.
 *
 * @package     aiprovider_openai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:endpoint'] = 'API 端點(endpoint)';
$string['action:explain_text:model'] = 'AI 模型';
$string['action:explain_text:model_help'] = '用來解釋提供文字的模型。';
$string['action:explain_text:systeminstruction'] = '系統指令';
$string['action:explain_text:systeminstruction_help'] = '此指令會與使用者的提示一同發送至 AI 模型。除非絕對必要，否則不建議編輯此指令。';
$string['action:generate_image:endpoint'] = 'API 端點(endpoint)';
$string['action:generate_image:model'] = 'AI 模型';
$string['action:generate_image:model_desc'] = '用來根據使用者提示生成圖像的模型。';
$string['action:generate_image:model_help'] = '用來根據使用者提示生成圖像的模型。';
$string['action:generate_text:endpoint'] = 'API 端點(endpoint)';
$string['action:generate_text:model'] = 'AI 模型';
$string['action:generate_text:model_desc'] = '用來生成文字回應的模型。';
$string['action:generate_text:model_help'] = '用來生成文字回應的模型。';
$string['action:generate_text:systeminstruction'] = '系統指令';
$string['action:generate_text:systeminstruction_desc'] = '此指令會與使用者的提示一同發送至 AI 模型。除非絕對必要，否則不建議編輯此指令。';
$string['action:generate_text:systeminstruction_help'] = '此指令會與使用者的提示一同發送至 AI 模型。除非絕對必要，否則不建議編輯此指令。';
$string['action:summarise_text:endpoint'] = 'API 端點(endpoint)';
$string['action:summarise_text:model'] = 'AI 模型';
$string['action:summarise_text:model_desc'] = '用來摘要提供文字的模型。';
$string['action:summarise_text:model_help'] = '用來摘要提供文字的模型。';
$string['action:summarise_text:systeminstruction'] = '系統指令';
$string['action:summarise_text:systeminstruction_desc'] = '此指令會與使用者的提示一同發送至 AI 模型。除非絕對必要，否則不建議編輯此指令。';
$string['action:summarise_text:systeminstruction_help'] = '此指令會與使用者的提示一同發送至 AI 模型。除非絕對必要，否則不建議編輯此指令。';
$string['apikey'] = 'OpenAI API 金鑰';
$string['apikey_desc'] = '從 <a href="https://platform.openai.com/account/api-keys">OpenAI Platform API keys</a> 獲取金鑰。';
$string['apikey_help'] = '從您的 <a href="https://platform.openai.com/account/api-keys" target="_blank">OpenAI API keys</a> 獲取金鑰。';
$string['custom_model_name'] = '自訂模型名稱';
$string['enableglobalratelimit'] = '設置全站請求次數限制';
$string['enableglobalratelimit_desc'] = '限制 OpenAI API 提供者每小時能接收的請求數量。';
$string['enableuserratelimit'] = '設置用戶請求次數限制';
$string['enableuserratelimit_desc'] = '限制每位用戶每小時能發送的請求數量。';
$string['extraparams'] = '額外參數';
$string['extraparams_help'] = '額外參數可以在這裡進行設定。我們支援 JSON 格式。例如:
<pre>
{
    "temperature": 0.5,
    "max_tokens": 100
}
</pre>';
$string['globalratelimit'] = '全站請求次數上限';
$string['globalratelimit_desc'] = '每小時允許的全站請求數量。';
$string['invalidjson'] = '無效的 JSON 字串';
$string['orgid'] = 'OpenAI 組織 ID';
$string['orgid_desc'] = '從您的 <a href="https://platform.openai.com/account/org-settings">OpenAI 平台帳戶</a> 獲取 OpenAI 組織 ID。';
$string['orgid_help'] = '從您的 <a href="https://platform.openai.com/account/org-settings" target="_blank">OpenAI 帳戶</a> 獲取 OpenAI 組織 ID。';
$string['pluginname'] = 'OpenAI API 提供者';
$string['privacy:metadata'] = 'OpenAI API 提供者外掛不會儲存任何個人資料。';
$string['privacy:metadata:aiprovider_openai:externalpurpose'] = '此資訊會發送至 OpenAI API 以便生成回應。您的 OpenAI 帳戶設定可能會改變 OpenAI 儲存和保留這些資料的方式。此外掛不會顯式地將使用者資料發送至 OpenAI，也不會在 Moodle LMS 中儲存。';
$string['privacy:metadata:aiprovider_openai:model'] = '用來生成回應的模型。';
$string['privacy:metadata:aiprovider_openai:numberimages'] = '生成圖片時，回應中使用的圖片數量。';
$string['privacy:metadata:aiprovider_openai:prompttext'] = '用來生成回應的使用者輸入的文字提示。';
$string['privacy:metadata:aiprovider_openai:responseformat'] = '回應的格式。生成圖片時。';
$string['settings'] = '設定';
$string['settings_frequency_penalty'] = 'frequency_penalty';
$string['settings_frequency_penalty_help'] = '頻率懲罰可調整單字重複出現的頻率。 懲罰值越高，生成的文本中重複的詞語越少。';
$string['settings_help'] = '調整下面的設定，自訂傳送請求給 OpenAI 的方式。';
$string['settings_max_completion_tokens_help'] = '回應中生成的最大 tokens 數量';
$string['settings_max_tokens'] = 'max_tokens';
$string['settings_max_tokens_help'] = '回應中生成的最大 tokens 數量';
$string['settings_presence_penalty'] = 'presence_penalty';
$string['settings_presence_penalty_help'] = '存在懲罰會增加模型選擇以前未曾使用過的字詞的可能性，鼓勵模型使用新字詞。較高的值會使生成的文字更具多樣性，而較低的值則允許更多的重複。';
$string['settings_top_p'] = 'top_p';
$string['settings_top_p_help'] = 'top_p（核取樣）決定了要考慮多少個可能的單字。較高的數值（例如 0.9）表示模型會考慮更多的字詞，使生成的文本更加多樣化。';
$string['userratelimit'] = '每位使用者的最大請求數量';
$string['userratelimit_desc'] = '每位使用者每小時允許的請求次數。';
