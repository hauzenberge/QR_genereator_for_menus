@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel-body">
        <div class="col-sm-10">
            <!-- New Task Form -->
            <form action="{{ url('menu/add') }}" method="POST" class="form-inline">
                {{ csrf_field() }}
                <div class="form-group">
                    <input name="name" placeholder="Назва меню" value="" required/>
                </div>
                <!-- Add Task Button -->
                <div class="form-group">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Додати меню
                    </button>
                </div>
            </form>
        </div>
        @if (count($menus) > 0)
        @foreach ($menus as $menu)
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-header">

                    <tr>
                        <td>
                            <h2>
                                <strong>{{ $menu->name }}</strong>

                                <a href="{{ url('menu/delete/'.$menu->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </h2>
                        </td>
                        <td>
                            <a href="{{ $menu->QRUrl }}" download>
                                <img src="{{ $menu->QRUrl }}">
                            </a>
                        </td>
                    </tr>
                </div>
                <div class="panel-body">
                    @if (count($menu->items) > 0)
                    @foreach ($menu->items as $menuItem)
                    <form action="{{url('menuItem/update/' . $menuItem->id)}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <tr>
                            <td>
                                <input name="name" placeholder="{{$menuItem->name}}" value="{{$menuItem->name}}" />
                            </td>
                            <td>

                                <input name="price" placeholder="{{$menuItem->price}}" value="{{$menuItem->price}}" />
                            </td>
                        </tr>
                        <button type="submit" id="update-task-{{ $menu->id }}" class="btn btn-info">
                            Зберегти
                        </button>
                        <a href="{{ url('menuItem/delete/' . $menu->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </form>
                    </p>
                    @endforeach
                    @endif

                    <a href="{{ url('menuItem/add/' . $menu->id) }}"><i class="fa fa-btn fa-plus"></i> Додати меню</a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection