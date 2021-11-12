{{-- @extends('index') --}}
{{-- @section('content') --}}
<table>
    {{-- <tr>
        <th>Items</th>
    </tr> --}}
    @foreach ($posts as $post)
    <tr>
        <th>{{ $posts->name }}</th>
    </tr>
    @endforeach
</table>
{{-- <p>{{ $posts->email }}</p> --}}
<p>お問い合わせありがとうございます。</p>
<a href="{{ route('home') }}">トップへ戻る</a>
{{-- <a href="/">トップへ戻る</a> --}}
{{-- @endsection --}}
