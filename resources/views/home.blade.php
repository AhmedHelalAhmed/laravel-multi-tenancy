@extends('layouts.dashboard.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Tasks</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>Task #</th>
                            <th>Description</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tasks as $task)
                            <tr>
                                <td> {{$task->user->name}}</td>
                                <td> {{$loop->iteration}}</td>
                                <td> {{$task->description}}</td>
                                <td> {{$task->status}}</td>
                            </tr>
                        @empty
                            <tr><td>No data</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
@endsection

