### Source

### This git

### Laravel Blades

# Layout

> @yield('content')

# Blade using layout

```
@extends('layouts.master')

@section('content')
    <h1>Dashboard</h1>
@endsection
```

### Database

> php artisan make:controller HomeController

> php artisan make:migration create_departments_table

> php artisan make:model Department

### Save a Department

> DepartmentController.php -> store(Request $request){ Department::create([...])}

> /models/Department.php -> protected $fillable

# csrf

> /layout/MainLayout -> <meta name="csrf-token" content="{{ csrf_token()}}"

# csrf form

> create.blade.php -> @csrf
