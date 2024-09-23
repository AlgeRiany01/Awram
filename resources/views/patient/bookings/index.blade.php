@extends('layouts.master')
@section('css')
@section('title')
    <?php echo $title = 'مواعيد محجوزة'; ?>
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ $title }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">الرئيسية</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
    أضافة
</button>
<br><br>
<div class="row">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                @if ($errors->any())
                    <?php Alert::error($errors->all(), 'هناك خطأ في الحقول')->showConfirmButton('تم', '#c0392b'); ?>
                @endif
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered p-0 table-hover">
                        <thead>
                            <tr>
                                <th>الرقم</th>
                                <th>اسم المستشفى</th>
                                <th>موعد الحجز</th>
                                <th>الحالة </th>
                                <th>تعديلات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $booking->hospitalRel->name }}</td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->status->description() }}</td>
                                    <td>
                                        @if ($booking->date < now())
                                            تمت الزيارة
                                        @else
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $booking->id }}" title="حذف الحجز"><i
                                                    class="fa fa-trash"></i></button>
                                        @endif

                                    </td>
                                </tr>
                </div>
                @if ($booking->date > now())
                    <div class="modal fade" id="delete{{ $booking->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        حذف الحجز
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('patientBookings.destroy', $booking->id) }}" method="post">
                                        {{ method_field('Delete') }}
                                        @csrf
                                        <h3 class="text-center">هل انت متأكد من عملية الحذف ؟</h3>
                                        <p class="text-center"> اذا تم الحذف سوف يتم حذف كل ماهو متعلق بهذا الحجز</p>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">رجوع</button>
                                            <button type="submit" class="btn btn-danger">حفظ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<!-- add_modal_Section -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    اضافة حجز جديد
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('patientBookings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="date" class="mr-sm-2"> المستشفى
                        :</label>
                    <select name="hospital" class="form-control p-2">
                        @foreach ($hospitals as $hospital)
                            <option value="{{ Crypt::encrypt($hospital->id) }}">{{ $hospital->name }}</option>
                        @endforeach

                    </select>
                    <label for="date" class="mr-sm-2"> التاريخ
                        :</label>
                    <input class="form-control" type="date" name="date" required />

                    <br><br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الرجوع</button>
                        <button type="submit" class="btn btn-success">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- row closed -->

@endsection
@section('js')

@endsection