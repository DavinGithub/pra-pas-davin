<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
            //composer create-project laravel/laravel nama
            //php artisan make:model NamaModel -mc
            //php artisan migrate:rollback
            //php artisan migrate
//             INSERT INTO student (nis, nama, tanggal_lahir, kelas, alamat)
// VALUES ('0123', 'Solomon', '02-04-07', '11 PPLG 2', 'Bogor');

// INSERT INTO student (nis, nama, tanggal_lahir, kelas, alamat)
// VALUES ('0223', 'Davin', '11-05-07', '11 PPLG 2', 'Semarang');

// INSERT INTO student (nis, nama, tanggal_lahir, kelas, alamat)
// VALUES ('0323', 'Adit', '20-07-07', '11 PPLG 2', 'Solo');

// INSERT INTO student (nis, nama, tanggal_lahir, kelas, alamat)
// VALUES ('0423', 'Dude', '14-06-07', '11 PPLG 2', 'Kudus');

// INSERT INTO student (nis, nama, tanggal_lahir, kelas, alamat)
// VALUES ('0523', 'Nares', '23-04-07', '11 PPLG 2', 'Kudus');
        });
    }
}
