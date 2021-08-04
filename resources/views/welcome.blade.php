@extends('layout/base')

@section('content')

<div class="container hello-text">
    <h2> Hi,</h2>
    This is a simple exemple of laravel todolist app
</div>
<div class="container content">
    <form action="{{ route('store_item_path') }}" method="post">
        <div class="input-group mb-3">
            @csrf
            <input type="text" name="item" class="form-control" placeholder="Todo name" aria-label="Todo name" aria-describedby="basic-addon2">
            <span class="input-group-text p-0" id="basic-addon2">
                <button class="btn btn-success">Add item</button>
            </span>
          </div>
    </form>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Item</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->item }}</td>
                    <td>
                        @if ($item->status === 1)
                            <span class="text-success">Done</span>
                        @else
                            <span class="text-dark">Doing</span>
                        @endif
                    </td>
                    <td width="100">
                        @if ($item->status === 0)
                            <form action="" method="post">
                                <button class="btn btn-success">Done</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


@stop