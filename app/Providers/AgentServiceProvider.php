<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class AgentServiceProvider extends ServiceProvider
{
    /**
     * プロバイダのローディングを遅延させるかどうか
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * 全アプリケーションサービスの初期起動処理
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * コンテナへの結合登録
     *
     * @return  void
     */
    public function register()
    {
        $this->app->singleton('agent', function ($app) {
            return new Agent($app['request']->server->all());
        });
    }
}
