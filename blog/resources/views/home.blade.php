@extends('index')
@section('content')
<h1>Welcome</h1>
<div class="panel-body">
    <form  class="form-horizontal" >
      <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="task" class="col-sm-3 control-label">Task</label>
        <div class="col-sm-6">
            <input type="text" name="task" id="task-task" class="form-control">
        </div>
      </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary add">
                  <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
    @if (count($tasks) > 0)
    <div class="panel panel-default">
        <div class="panel-heading">
          Tasks
        </div>
        <div class="panel-body">
            <table class="table table-striped task-table">
            <thead>
                <th>Name</th>
                <th>Task</th>
                <th>Created At</th>
                <th>Delate</th>
            </thead>
            <tbody>
              @foreach ($tasks as $task)
                <tr>
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>

                    <td>
                        <div>{{ $task->task }}</div>
                    </td>
                    <td>
                        <div>{{ $task->created_at }}</div>
                    </td>
                    <td>
                        <form>
                            <button type="submit" class="btn btn-danger" name="{{ $task->id }}" data="">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endif
</div>

@stop