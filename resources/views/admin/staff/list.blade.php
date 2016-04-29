@extends('admin.admin',['nav' => 'staff'])

@section('meta')
    <meta name="_token" content="{!! csrf_token() !!}"/>
@endsection

@section('content')
    <h1> Liste du staff</h1>
    <hr/>
    <a href="{{action('AdminStaffController@create')}}"><button class="btn btn-primary">Ajouter un membre du staff</button></a>
    <hr/>
    <h2> Principaux Membres</h2>
    @if (count($staffs_main) == 0)
        Aucun staff à afficher pour le moment
    @else
        <button id="save" type="button" class="btn btn-primary" name="button">Sauvergarder l'ordre</button>
        <br/>
        <br/>
        <div id="result"></div>
        <div id="ctn-staffs-main">
            @foreach ($staffs_main as $staff)
                <h3 rel="{{$staff->id}}"><a href="{{action('AdminStaffController@edit',[$staff->id])}}">{{ $staff->name }}</a></h3>
            @endforeach
        </div>
    @endif
    <h2> Membres secondaires </h2>
    @if (count($staffs) == 0)
        Aucun staff à afficher pour le moment
    @else
        @foreach ($staffs as $staff)
            <h3><a href="{{action('AdminStaffController@edit',[$staff->id])}}">{{ $staff->name }}</a></h3>
        @endforeach
    @endif
@endsection

@section('script')
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="{{URL::asset('js/admin_staff.js')}}" charset="utf-8"></script>
@endsection
