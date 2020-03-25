<?php

namespace App\Http\Controllers;

use App\Services\TestService;

class TestController extends Controller
{
    private $testService;

    /**
     * コンストラクタ
     * Servicesクラスのインスタンスを生成する。
     */
    public function __construct(
        TestService $testService
    ) {
        $this->testService = $testService;
    }

    public function index()
    {
        $this->testService->test();
    }
}
