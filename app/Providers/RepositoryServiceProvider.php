<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Patient\Repositories\PatientRepositoryInterface;
use App\Domain\Doctor\Repositories\DoctorRepositoryInterface;
use App\Domain\Appointment\Repositories\AppointmentRepositoryInterface;
use App\Infrastructure\Persistence\PatientRepository;
use App\Infrastructure\Persistence\AppointmentRepository;
use App\Infrastructure\Persistence\DoctorRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(PatientRepositoryInterface::class, PatientRepository::class);
        $this->app->bind(AppointmentRepositoryInterface::class, AppointmentRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
