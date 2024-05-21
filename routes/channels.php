<?php

use Illuminate\Support\Facades\Broadcast;

// Broadcast チャンネルの定義
Broadcast::channel('App.Models.User.*', function ($user, $userId) {
    // 認証ユーザーとチャネルユーザーのIDが一致する場合にのみアクセスを許可
    return (int) $user->id === (int) $userId;
});
