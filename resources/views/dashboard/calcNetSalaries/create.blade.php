@extends('dashboard.layouts.master')
@section('admin_title', 'حساب صافى المرتب')
@section('css')
@endsection
@section('active-calcNetSalary', 'active')
@section('page-header', 'أضافة عملة جديده')
@section('page-header_desc', 'أضافة عملة جديده')
@section('page-header_link')
    <li class="breadcrumb-item"><a href="{{ route('dashboard.calcNetSalary.index') }}">جدول المرتبات</a></li>
@endsection
@section('content')

    {{-- ./row --}}
    <div class="row">
        <div class="col-md-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">أضف مرتب جديد</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('dashboard.calcNetSalary.store') }}" method="POST" role="form">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="Label-number_of_month">عدد الشهور</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="number_of_month" id="Label-number_of_month" type="text" placeholder="1 الى 12">
                            @error('number_of_month')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="">نوع العملة</label>
                            <select class="form-control" name="currency_id">
                                <option value="" selected>-- أختر نوع العملة --</option>
                                @foreach ($other['currencies'] as $info)
                                    <option value="{{ $info['id'] }}">{{ $info['description'] }} ( {{ $info->amount }}
                                        جنية)
                                    </option>
                                @endforeach
                            </select>
                            @error('currency_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Label-salary_month">المرتب الشهرى بالمصرى</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="salary_month" id="Label-salary_month" type="text" placeholder="0.00">
                            @error('salary_month')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Label-total_salary_year">المرتب السنوى بالمصرى</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="total_salary_year" id="Label-total_salary_year" type="text" placeholder="0.00">
                            @error('total_salary_year')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Label-monthly_expenses">قيمة المصاريف الشهرية</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="monthly_expenses" id="Label-monthly_expenses" type="text" placeholder="0.00">
                            @error('monthly_expenses')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Label-annual_requirements">المتطلبات السنوية</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="annual_requirements" id="Label-annual_requirements" type="text" placeholder="0.00">
                            @error('annual_requirements')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Label-insurance_amount">مبلغ التأمينات</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="insurance_amount" id="Label-insurance_amount" type="text" placeholder="0.00">
                            @error('insurance_amount')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="Label-net_salary">صافى المرتب</label>
                            <input class="form-control" oninput="this.value=this.value.replace(/[^0-9.]/g,'');"
                                name="net_salary" id="Label-net_salary" type="text" placeholder="0.00">
                            @error('net_salary')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary">تأكيد البيانات</button>
                    </div>
                </form>
            </div>

        </div>



    </div>
    <!-- /.row -->



@endsection
@section('scripts')
@endsection
