<?php
return [
   'exception_message' => '例外メッセージ: :message',
   'exception_trace' => '例外トレース: :trace',
   'exception_message_title' => '例外メッセージ',
   'exception_trace_title' => '例外トレース',

   'backup_failed_subject' => 'バックアップに失敗しました :application_name',
   'backup_failed_body' => '重要:バックアップ中にエラーが発生しました :application_name',

   'backup_successful_subject' => ':application_name のバックアップに成功しました。',
   'backup_successful_subject_title' => 'バックアップに成功しました',
   'backup_successful_body' => ':disk_name に :application_name の新しいバックアップが正常に作成されました。',

   'cleanup_failed_subject' => 'バックアップのクリーンアップに失敗しました。アプリケーション名: :application_name',
   'cleanup_failed_body' => 'バックアップのクリーンアップ中にエラーが発生しました。アプリケーション名: :application_name',

   'cleanup_successful_subject' => ':application_name のバックアップのクリーンアップに成功しました。',
   'cleanup_successful_subject_title' => 'バックアップのクリーンアップに成功しました。',
   'cleanup_successful_body' => ':disk_name 上にある :application_name のバックアップのクリーンアップに成功しました。',

   'healthy_backup_found_subject' => ':disk_name 上にある :application_name のバックアップは正常です。',
   'healthy_backup_found_subject_title' => ':application_name のバックアップは正常です。',
   'healthy_backup_found_body' => ':application_name のバックアップは正常なようです。',

   'unhealthy_backup_found_subject' => '重要: :application_name のバックアップは正常ではありません。',
   'unhealthy_backup_found_subject_title' => '重要: :application_name のバックアップは :problem により正常ではありません。',
   'unhealthy_backup_found_body' => ':disk_name 上にある :application_name のバックアップは正常ではありません。',
   'unhealthy_backup_found_not_reachable' => ':error により、バックアップ先に到達できません。',
   'unhealthy_backup_found_empty' => 'このアプリケーションのバックアップはまだありません。',
   'unhealthy_backup_found_old' => ':date に作成されたバックアップは古すぎます。',
   'unhealthy_backup_found_unknown' => '申し訳ありません。正確な原因を特定できませんでした。',
   'unhealthy_backup_found_full' => 'バックアップが使用できるストレージ容量( :disk_limit )を超えています。現在の使用量: :disk_usage',
    ];

