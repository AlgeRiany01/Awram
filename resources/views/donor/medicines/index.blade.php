@extends('layouts.master')
@section('css')
@section('title')
    <?php echo $title = 'التبرع بالدواء'; ?>
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

<br><br>
<div class="row">
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                @if ($errors->any())
                    <?php Alert::error($errors->all(), 'هناك خطأ في الحقول')->showConfirmButton('تم', '#c0392b'); ?>
                @endif
                <form action="{{ route('donor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Name" class="mr-sm-2"> الاسم
                                :</label>
                            <input class="form-control" type="text" name="name" />
                        </div>
                        <div class="col-md-6">
                            <label for="Name" class="mr-sm-2"> الوصف
                                :</label>
                            <textarea name="desc" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Name" class="mr-sm-2">بلد الصنع
                                :</label>
                            <input class="form-control" type="text" name="COO" />
                        </div>
                        <div class="col-md-6">
                            <label for="Name" class="mr-sm-2"> الكمية
                                :</label>
                            <input class="form-control" type="number" name="qint" />
                        </div>
                    </div>

                    <label for="Name" class="mr-sm-2"> انتهاء الصلاحية
                        :</label>
                    <input class="form-control" type="date" name="expired" />
                    <br><br>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<!-- row closed -->

@endsection
@section('js')

@endsection
