@extends('layouts.content')

@section('title', 'Home')

@section('layouts.content')

<h1>Welcome</h1>

<div class="container mt-4">
    <h2>My Skills</h2>
    <table class="table table-bordered">
        <thread>
            <tr>
                <th>Skill</th>
                <th>level</th>
            </tr>
        </thread>
        <tbody>
            @foreach ($skills as $skill)
                <tr>
                    <td>{{ $skill->skill }}</td>
                    <td>{{ $skill->level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<!-- mirations, seeders, pages, models, controllers -->