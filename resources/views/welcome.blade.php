<x-site-layout title="Welcome">

    <h2 class="text-2xl font-bold">Welcome to the new blog</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam quaerat, repudiandae soluta asperiores nulla corporis, molestiae doloribus molestias corrupti aliquam quod consectetur velit impedit, fugiat voluptatibus quidem tenetur. Amet, nemo!
    </p>

    <div class="grid grid-cols-2 gap-8">
        @foreach($articles as $article)
        <div class="p-2 bg-white rounded">
            <h3 class="font-bold">{{$article->title}}</h3>
            <div class="text-purple-500">Author: {{$article->author->name}}</div>
            <p>{{$article->content}}</p>
        </div>
        @endforeach
    </div>

</x-site-layout>