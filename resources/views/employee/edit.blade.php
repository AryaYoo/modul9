@extends('layouts.app_old')
@section('content')

    <?php
        $employee = $employees->id
    ?>

    <div class="container-sm mt-5">
        <form action="{{ route('employees.update', $employees->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">

                    {{-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                               {{ $error }}
                               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif --}}

                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control @error('firstName') is-invalid @enderror" type="text" name="firstName" id="firstName" value="{{ $employees->firstname }}" placeholder="Enter First Name">
                            @error('firstName')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control @error('lastName') is-invalid @enderror" type="text" name="lastName" id="lastName" value="{{ $employees->lastname }}" placeholder="Enter Last Name">
                            @error('lastName')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ $employees->email }}" placeholder="Enter Email">
                            @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input class="form-control @error('age') is-invalid @enderror" type="text" name="age" id="age" value="{{ $employees->age }}" placeholder="Enter Age">
                            @error('age')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="position" class="form-label">Position</label>
                        <select name="position" id="position" class="form-select">
                            @foreach($positions as $position)
                                    <option value="{{ $employees->position_id }}" {{ $employees->position_id == $position->id ? 'selected' : '' }}>{{ $position->code.' = '.$position->name }}</option>
                            @endforeach

                        </select>
                        @error('position')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    {{-- Current CV --}}
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Curriculum Vitae (CV)</label>
                        @if ($employees->original_filename)
                            <h5>{{ $employees->original_filename }}</h5>
                            <a href="{{ route('employees.downloadFile', ['employeeId' => $employees->id]) }}" class="btn btn-primary btn-sm mt-2">
                                <i class="bi bi-download me-1"></i> Download CV
                            </a>
                            {{-- Upload file --}}
                            <div class="col-md-12 mb-3">
                                <label for="cv" class="form-label">Curriculum Vitae (CV)</label>
                                <input type="file" class="form-control" name="cv" id="cv">
                            </div>
                        @else
                            <h5>Tidak ada</h5>
                        @endif
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @vite('resources/js/app.js')
@endsection
