<?php
use Illuminate\Support\Facades\Route;
use App\Interfaces\Http\Controllers\DoctorController;
use App\Interfaces\Http\Controllers\PatientController;

Route::resource('patients', PatientController::class);

Route::resource('doctors', DoctorController::class);


use App\Interfaces\Http\Controllers\AppointmentController;

// Standard appointment CRUD
Route::resource('appointments', AppointmentController::class)->except(['edit', 'update', 'destroy']);

// Special routes
Route::get('/appointments/book/{patient}', [AppointmentController::class, 'createForPatient'])->name('appointments.book');
Route::get('/doctor/{doctor}/appointments', [AppointmentController::class, 'doctorAppointments'])->name('doctor.appointments');



use App\Interfaces\Http\Controllers\AppointmentBookingController;

Route::get('/book/appointments/{patient}', [AppointmentBookingController::class, 'showDoctorList'])->name('appointments.chooseDoctor');
Route::post('/book/appointments', [AppointmentBookingController::class, 'book'])->name('appointments.book.store');


Route::get('/doctors/{id}/appointments', [DoctorController::class, 'appointments'])
    ->name('doctors.appointments.index');
