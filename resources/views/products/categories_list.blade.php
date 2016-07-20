@extends('app')


@section('content')

    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-8 col-md-offset-2'>
                <div class='panel panel-default'>
                    <div class='panel-heading'>Types</div>
                    <div class='panel-body'>

                        <table class='table table-hover'>
                            <tr><th>Name</th><th>Actions</th></tr>

                            @if(isset($types))

                                @foreach ($types as $type)
                                    <tr>
                                        <td>
                                            {!! $type->name !!}
                                       </td>


                                        <td>
                                            {!! link_to("products/list/$type->id", '', array('class'=>'fa fa-pencil-square-o')) !!}

                                        </td>
                                    </tr>
                                @endforeach

                            @endif

                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>




@stop


    