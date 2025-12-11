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
 * Strings for component 'aiprovider_azureai', language 'zh_tw', version '5.0'.
 *
 * @package     aiprovider_azureai
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:explain_text:apiversion'] = 'API 版本';
$string['action:explain_text:deployment'] = '部署 ID';
$string['action:explain_text:deployment_help'] = '與提供者用來執行此操作的 API 端點相關的部署 ID。';
$string['action:explain_text:systeminstruction'] = '系統指令';
$string['action:explain_text:systeminstruction_help'] = '這個指令會與使用者的提示一起發送到 AI 模型。除非絕對必要，否則不建議編輯這個指令。';
$string['action:generate_image:apiversion'] = 'API 版本';
$string['action:generate_image:deployment'] = '部署 ID';
$string['action:generate_image:deployment_help'] = '與提供者用來執行此操作的 API 端點相關的部署 ID。';
$string['action:generate_text:apiversion'] = 'API 版本';
$string['action:generate_text:deployment'] = '部署 ID';
$string['action:generate_text:deployment_help'] = '與提供者用來執行此操作的 API 端點相關的部署 ID。';
$string['action:generate_text:systeminstruction'] = '系統指令';
$string['action:generate_text:systeminstruction_help'] = '這個指令會與使用者的提示一起發送到 AI 模型。除非絕對必要，否則不建議編輯這個指令。';
$string['action:summarise_text:apiversion'] = 'API 版本';
$string['action:summarise_text:deployment'] = '部署 ID';
$string['action:summarise_text:deployment_help'] = '與提供者用來執行此操作的 API 端點相關的部署 ID。';
$string['action:summarise_text:systeminstruction'] = '系統指令';
$string['action:summarise_text:systeminstruction_help'] = '這個指令會與使用者的提示一起發送到 AI 模型。除非絕對必要，否則不建議編輯這個指令。';
$string['action_apiversion'] = 'API 版本';
$string['action_deployment'] = '部署 ID';
$string['action_deployment_desc'] = '與提供者用來執行此操作的 API 端點相關的部署 ID。';
$string['action_systeminstruction'] = '系統指令';
$string['action_systeminstruction_desc'] = '這個指令會與使用者的提示一起發送到 AI 模型。除非絕對必要，否則不建議編輯這個指令。';
$string['apikey'] = 'Azure AI API 密鑰';
$string['apikey_desc'] = '輸入您的 Azure AI API密鑰。';
$string['apikey_help'] = '輸入您的 Azure AI API 密鑰。';
$string['deployment'] = 'Azure AI API 部署名稱';
$string['deployment_desc'] = '輸入您的 Azure AI API 部署名稱。';
$string['enableglobalratelimit'] = '設定站點範圍的請求限制';
$string['enableglobalratelimit_desc'] = '限制整個站點每小時可以接收的 Azure AI API 請求數量。';
$string['enableuserratelimit'] = '設定每位使用者的請求限制';
$string['enableuserratelimit_desc'] = '限制每位使用者每小時可以向 Azure AI API 提供者發送的請求數量。';
$string['endpoint'] = 'Azure AI API 端點(endpoint)';
$string['endpoint_desc'] = '輸入您的 Azure AI API 端點 URL，格式如下：https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['endpoint_help'] = '輸入您的 Azure AI API 端點 URL，格式如下：https://YOUR_RESOURCE_NAME.openai.azure.com';
$string['globalratelimit'] = '最大站點範圍請求數量';
$string['globalratelimit_desc'] = '每小時允許的站點範圍請求數量。';
$string['pluginname'] = 'Azure AI API 提供者';
$string['privacy:metadata'] = 'Azure AI API 提供者外掛不會儲存任何個人資料。';
$string['privacy:metadata:aiprovider_azureai:externalpurpose'] = '此資訊會發送至 Azure API 以生成回應。您的 Azure AI 帳戶設定可能會影響 Microsoft 如何儲存和保留這些資料。此外掛不會顯式將用戶資料發送至 Microsoft 或儲存在 Moodle LMS 中。';
$string['privacy:metadata:aiprovider_azureai:model'] = '用於生成回應的模型。';
$string['privacy:metadata:aiprovider_azureai:numberimages'] = '生成圖片時，回應中使用的圖片數量。';
$string['privacy:metadata:aiprovider_azureai:prompttext'] = '用戶輸入的文字提示，用於生成回應。';
$string['privacy:metadata:aiprovider_azureai:responseformat'] = '生成圖片時回應的格式。';
$string['userratelimit'] = '每位用戶的最大請求數量';
$string['userratelimit_desc'] = '每位用戶每小時允許發送的請求數量。';
