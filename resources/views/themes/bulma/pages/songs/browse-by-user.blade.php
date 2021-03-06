@extends('themes.bulma.layout')
@section('title', '- Songs by '.$username)

@section('feeds')
    @parent
    <link href="{{ route('feeds.user', ['id' => $userId]) }}" rel="alternate" title="Beat Saver @yield('title')" type="application/atom+xml">
@endsection

@section('content')
    @each('themes.bulma.pages.songs.partial-preview',$songs,'song')
    @include('themes.bulma.pages.songs.partial-paging-user')
@endsection
