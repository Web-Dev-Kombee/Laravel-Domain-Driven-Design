# 📅 BookMyCare – Appointment Management System

A **Laravel 12** demo project to manage appointments between patients and doctors, designed with a **Domain-Driven Design (DDD)** architecture for clear separation of concerns, scalability, and maintainability.

![Laravel](https://img.shields.io/badge/Laravel-12-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.2-blue.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)

---

## 🌟 Features

- ✅ Domain-Driven Design Architecture
- 👨‍⚕️ Doctor & Patient CRUD (Create, Read, Update, Delete)
- 📅 Appointment Booking System
- 🔍 View Appointments by Doctor
- 🧾 Appointment Status & Notes (e.g., medical condition)
- 🎨 Tailwind CSS UI with optional Bootstrap fallback
- 🧪 Eloquent Model Factories & Seeders
- 🔐 Login/Register system (basic auth ready)
- 🏥 Clean and extensible structure

---


## 🧱 Tech Stack

- **Backend**: Laravel 12 (PHP)
- **Frontend**: Tailwind CSS, Bootstrap 5 (for legacy components)
- **Database**: MySQL
- **Authentication**: Custom session-based authentication
- **ORM**: Eloquent
- **Factories & Seeders**: Laravel's factory and seeder system
- **PHP Version**: 8.1 or higher
---

## 🖼️ Screenshots

### 📌 Login Page

![Login Screenshot](public/images/login.png)

---

### 📌 Register Page

![Register Screenshot](public/images/register.png)

---


### 📌 Manage Doctors

![Doctor Screenshot](public/images/doctor-crud.png)

---

### 📌 Manage Patients

![Borrow Screenshot](public/images/patient-crud.png)

---

### 📌 Appointments

![Appointments Screenshot](public/images/appointments.png)

---

### 📌 Book-Appointment

![Book-Appointment Screenshot](public/images/book-appointment.png)

---

### 📌 Individual Doctor Appointment Listing

![Dashboard Screenshot](public/images/doctor-appointment.png)

---

## 🗂️ Project Structure (DDD)
```
.
├── app/
│   ├── Application/
│   ├── Domain/
│   │   ├── Appointment/
│   │   │   ├── Models/
│   │   │   │   └── Appointment.php
│   │   │   └── Repositories/
│   │   │       └── AppointmentRepositoryInterface.php
│   │   ├── Doctor/
│   │   │   ├── Models/
│   │   │   │   └── Doctor.php
│   │   │   └── Repositories/
│   │   │       └── DoctorRepositoryInterface.php
│   │   └── Patient/
│   │       ├── Models/
│   │       │   └── Patient.php
│   │       └── Repositories/
│   │           └── PatientRepositoryInterface.php
│   ├── Infrastructure/
│   │   └── Persistence/
│   │       ├── AppointmentRepository.php
│   │       ├── DoctorRepository.php
│   │       └── PatientRepository.php
│   ├── Interfaces/
│   │   └── Http/
│   │       ├── Controllers/
│   │       │   ├── AppointmentBookingController.php
│   │       │   ├── AuthFormController.php
│   │       │   ├── Controller.php
│   │       │   ├── DoctorController.php
│   │       │   └── PatientController.php
│   │       └── Requests/
│   │           ├── LoginRequest.php
│   │           └── RegisterRequest.php
│   ├── Models/
│   │   └── User.php
│   └── Providers/
│       ├── AppServiceProvider.php
│       └── RepositoryServiceProvider.php
├── database/
│   ├── factories/
│   │   ├── AppointmentFactory.php
│   │   ├── DoctorFactory.php
│   │   ├── PatientFactory.php
│   │   └── UserFactory.php
│   ├── migrations/
│   │   └── ... (migration files)
│   ├── seeders/
│   │   ├── AppointmentSeeder.php
│   │   ├── DatabaseSeeder.php
│   │   ├── DoctorSeeder.php
│   │   └── PatientSeeder.php
│   └── database.sqlite
├── public/
│   ├── css/
│   │   └── ...
│   ├── js/
│   │   └── ...
│   ├── .gitignore
│   └── index.php
├── resources/
│   ├── css/
│   │   └── ...
│   ├── js/
│   │   └── ...
│   └── views/
│       ├── appointments/
│       │   ├── book.blade.php
│       │   ├── by-doctor.blade.php
│       │   ├── create.blade.php
│       │   ├── doctor_appointments.blade.php
│       │   └── index.blade.php
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── doctors/
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   ├── form.blade.php
│       │   └── index.blade.php
│       ├── layouts/
│       │   ├── app.blade.php
│       │   └── auth.blade.php
│       ├── patients/
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   └── index.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── storage/
│   └── ... (app, framework, logs)
├── tests/
│   └── ... (Feature, Unit)
├── vendor/
│   └── ... (Composer dependencies)
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
```



---

## ⚙️ Installation

```bash
git clone https://github.com/yourusername/bookmycare.git
cd bookmycare
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

```


## 🤝 Contributing
Contributions are welcome! Please fork this repository and submit a pull request.
     ```
## 📄 License
This project is licensed under the MIT License. See the LICENSE file for details.
    ```
