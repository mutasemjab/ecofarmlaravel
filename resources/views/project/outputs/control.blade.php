
@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> التحكم </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">تحكم بالمزرعة اما يدويا او عن طريق التايمر   </h4>
                                    <br>
                                    <div class="btn-group" role="group"
                                         aria-label="Basic example">
                                        <a href="{{route('admin.timers')}}"
                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تايمر</a>



                                    </div>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('dashboard.alerts.success')
                                @include('dashboard.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>الاسم </th>
                                                <th>الحالة</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($outputs)
                                                @foreach($outputs as $output)
                                                    <tr>
                                                        <td>{{$output -> name}}</td>
                                                        <td>
                                                            <div class="form-group mt-1">
                                                                <input type="checkbox" value="1"
                                                                       name="state"
                                                                       id="switcheryColor4"
                                                                       class="switchery" data-color="success"
                                                                       checked />
                                                                <label for="switcheryColor4"
                                                                       class="card-title ml-1">فعال  </label>

                                                                @error("state")
                                                                <span class="text-danger">{{$message }}</span>
                                                                @enderror
                                                            </div>

                                                        </td>

                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@stop
