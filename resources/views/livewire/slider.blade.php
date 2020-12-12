@extends('Layouts.app')
@section('content')
<input type="text" wire:model="title">
{{$title}}
@endsection