<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * ブートストラップに必要なアプリケーションサービスを実行
     *
     * @return void
     */
    public function boot()
    {
        // Laravel Echo によるリアルタイムイベントのルートを定義
        Broadcast::routes();

        // routes/channels.php ファイルが存在する場合にのみ読み込み
        if (file_exists(base_path('routes/channels.php'))) {
            require base_path('routes/channels.php');
        }
    }
}
