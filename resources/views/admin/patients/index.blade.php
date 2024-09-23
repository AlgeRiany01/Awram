@extends('layouts.master')
@section('css')
@section('title')
    <?php echo $title = 'المرضى'; ?>
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
                                <th>الصورة</th>
                                <th>اسم المريض</th>
                                <th>رقم الهاتف</th>
                                <th>الرقم الوطني</th>
                                <th>الصفة</th>
                                <th>البريد الإلكتروني</th>

                                <th>تعديلات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <th><img class="img-small avatar-small"
                                            src="{{ URL::asset('images/patients/' . $patient->img) }}" alt="">

                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->phone }}</td>
                                    <td>{{ $patient->nat }}</td>
                                    <td>{{ $patient->char }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>
                                        <button type="button" data-toggle="modal"
                                            data-target="#edit{{ $patient->id }}" title="تعديل"
                                            class="btn btn-info btn-sm" title="تعديل"><i
                                                class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{ $patient->id }}" title="حذف"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                </div>
                <!-- edit_modal_Section -->
                <div class="modal fade" id="edit{{ $patient->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    تعديل بيانات المريض
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('patients.update', $patient->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    {{ method_field('put') }}
                                    @csrf
                                    <label for="name" class="mr-sm-2">الاسم:</label>
                                    <input class="form-control" type="text" id="name" name="name"
                                        value="{{ $patient->name }}" required>
                                    <label for="phone" class="mr-sm-2">رقم الهاتف:</label>
                                    <input class="form-control" type="tel" pattern="[0-9]{10}" id="phone"
                                        name="phone" value="{{ $patient->phone }}" required>
                                    <label for="national_id" class="mr-sm-2">الرقم الوطني:</label>
                                    <input class="form-control" type="number" id="national_id" name="nat"
                                        value="{{ $patient->nat }}" required>
                                    <label for="specialization" class="mr-sm-2">الصفة:</label>
                                    <input class="form-control" type="text" id="specialization" name="char"
                                        value="{{ $patient->char }}" required>
                                    <label for="email" class="mr-sm-2">البريد الإلكتروني:</label>
                                    <input class="form-control" type="email" id="email" name="email"
                                        value="{{ $patient->email }}" required>
                                    <label for="Name" class="mr-sm-2"> الرمز السري
                                        :</label>
                                    <input class="form-control" type="password" name="password" />
                                    <label for="Name" class="mr-sm-2"> الصورة الشخصية
                                        :</label>
                                    <input class="form-control" type="file" name="img" />
                                    <br><br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">رجوع</button>
                                <button type="submit" class="btn btn-success">حفظ</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- delete_modal_Section -->
                <div class="modal fade" id="delete{{ $patient->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    حذف المريض
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                                    {{ method_field('Delete') }}
                                    @csrf
                                    <h3 class="text-center">هل انت متأكد من عملية الحذف ؟</h3>
                                    <p class="text-center"> اذا تم الحذف سوف يتم حذف كل ماهو متعلق بهذا المريض</p>
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
                    اضافة مريض جديد
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="name" class="mr-sm-2">الاسم:</label>
                    <input class="form-control" type="text" id="name" name="name" required>

                    <label for="phone" class="mr-sm-2">رقم الهاتف:</label>
                    <input class="form-control" type="tel" pattern="[0-9]{10}" id="phone" name="phone"
                        required>

                    <label for="national_id" class="mr-sm-2">الرقم الوطني:</label>
                    <input class="form-control" type="number" id="national_id" name="nat" required>

                    <label for="char" class="mr-sm-2">الصفة:</label>
                    <input class="form-control" type="text" id="char" name="char" required>

                    <label for="email" class="mr-sm-2">البريد الإلكتروني:</label>
                    <input class="form-control" type="email" id="email" name="email" required>

                    <label for="Name" class="mr-sm-2"> الرمز السري:</label>
                    <input class="form-control" type="password" name="password" required>
                    <label for="Name" class="mr-sm-2"> الصورة الشخصية
                        :</label>
                    <input class="form-control" type="file" name="img" />
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
