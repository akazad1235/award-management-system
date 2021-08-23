@extends('admin.components.app')
@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Award Registration List</h2>
                    <h5>Welcome Jhon Deo , Love to see you back. </h5>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Advanced Tables
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                        <tr>
                                            <th>Business Name</th>
                                            <th>Owner Name</th>
                                            <th>Established</th>
                                            <th>country</th>
                                            <th>district</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr class="odd gradeX">
                                                <td>{{$item->business_name}}</td>
                                                <td>{{$item->business_owner_name}}</td>
                                                <td>{{$item->establishment}}</td>
                                                <td class="center">{{$item->country}}</td>
                                                <td class="text-center">{{$item->district != NULL? $item->district:'NO'}}</td>
                                                <td class="text-center"><a href="{{route('award.view', base64_encode($item->id))}}">Details</a> </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection
