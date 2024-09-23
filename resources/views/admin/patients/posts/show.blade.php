@extends('layouts.master')
@section('css')
@section('title')
    <?php echo $title = $post->title; ?>
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


<div class="mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">
            <h5 class="card-title"><img class="img-small avatar-small"
                    src="{{ URL::asset('images/patients/' . $post->patientRel->img) }}" alt="">
                {{ $post->patientRel->name }}</h5>
            <!-- action group -->

            <div class="blog-box blog-2">

                <div class="blog-info  pt-10">
                    <h4> <a href="#">{{ $post->desc }}</a></h4>
                    <span><i class="fa fa-calendar-check-o"></i> {{ $post->created_at->diffForHumans() }} </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>





<!-- row closed -->

@endsection
@section('js')

@endsection
