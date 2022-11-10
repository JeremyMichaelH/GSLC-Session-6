@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto">
            <h2 class="text-4xl sm:text-8xl">Best Instrumental <span class="text-pink-500">Shop</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">In Town</h3>
        </div>

        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to see more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Music</h3>
            <h4 class="text-xl mb-3 text-gray-200">Description</h4>
            <p class="mb-6">
                Music is the art form that combines rhythm and sound to form a functional melodic line. Music itself transcends time, space, and cultures. Music can carry a mood without speaking any specific words. It can also be captured and recorded in a written universal language unique unto any other art form.

The history of music is a lengthy topic which requires much depth and time. Music is an ancient art form that began during prehistoric times. It carries with it a history for each human culture throughout time. Although there are many varied definitions of music, it is a cultural universal because every culture throughout time and history has made music a primary component of life. For ages, music was passed down through oral tradition on a fundamental level; but for formal purposes, recorded music began with the written tradition by medieval monks during 500 AD to 1400.
            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">See more</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What do you want to know</h3>
            <div class="flex flex-wrap -mx-2">
            <div class="w-full sm:w-1/2 mb-3 px-2">
            <div class="p-4 bg-gray-500 h-full rounded-lg">
            <h3 class="text-xl font-bold mb-3">Piano</h3>
            <p class="textgray-200 mb-3">
                A piano can be defined as a musical instrument with strings that get hammered via a manual keyboard; sounds can be altered through the use of pedals or how lightly or forcefully one taps the keys. The word "piano" is short for "pianoforte,". The piano is regarded as the most popular instrument around the world because it is incredibly versatile and can be used in multitudes of musical genres.
                <p>
                    <a href="{{url('https://www.youtube.com/watch?v=OF7Hw-3pbCY')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Watch now</a>
        </div>
    </div>
    <div class="w-full sm:w-1/2 mb-3 px-2">
        <div class="p-4 bg-gray-500 h-full rounded-lg">
        <h3 class="text-xl font-bold mb-3">Drum</h3>
        <p class="textgray-200 mb-3">
            A drum is a musical instrument. It is played with the hands, sometimes using a drum stick (a stick for hitting a drum). A collection of drums and cymbals is called a drum kit, or drum set.
An Armenian Dhol drum
Drums are used to keep a steady beat in a song. They give music of many kinds a sense of feeling. For example, to make a song to be slow or fast, the drums play slower or faster.
            <p>
                <a href="{{url('https://www.youtube.com/watch?v=7Sl-Arnq2JM')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Watch now</a>
    </div>
</div>
</div>
</div>
    </section>
@endsection
