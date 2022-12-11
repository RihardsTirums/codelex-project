<?php

namespace App\Services\UserDashboard;

use App\Repositories\UserDashboard\MySQLUserDashboardRepository;
use App\Repositories\UserDashboard\UserDashboardRepository;

class SellCryptoService
{
    private UserDashboardRepository $userDashboardRepository;

    public function __construct()
    {
        $this->userDashboardRepository = new MySQLUserDashboardRepository();
    }


    public function execute(BuySellCryptoServiceRequest $request): void
    {
        $this->userDashboardRepository->sellCrypto($request);
    }
}