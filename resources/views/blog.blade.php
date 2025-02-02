<x-layout>
    <h1>Blog</h1>
    @foreach ($posts as $key => $post)
        <h4>{{ $post['title'] }}</h4>
    @endforeach
</x-layout>