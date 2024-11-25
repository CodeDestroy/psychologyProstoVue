@extends('layouts.app')

@section('content')
{{-- <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div>Мои курсы</div>
    {{$courses}}
    
</div> --}}

<div class="bg-white py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:max-w-4xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ваши курсы</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Тут представленны все оплаченные вами курсы.</p>
            <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                @foreach ($courses as $course)
                    <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                        <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3603&amp;q=80" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div>
                            <div class="flex items-center gap-x-4 text-xs">
                                <img src="{{$course['image']}}">
                                @php
                                    $date = $course['start_date']; // Ваша дата
                                    $formattedDate = ucfirst(\Carbon\Carbon::parse($date)->translatedFormat('d F Y'));
                                @endphp
                                <time datetime="2020-03-16" class="text-gray-500">{{$formattedDate}}</time>
                                {{-- <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Психология</a> --}}
                            </div>
                            <div class="group relative max-w-xl">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="{{route('education.course', ['course_id' => $course->id])}}">
                                        <span class="absolute inset-0"></span>
                                        {{$course['name']}}
                                    </a>
                                </h3>
                                <p class="mt-5 text-sm leading-6 text-gray-600">{{$course['description']}}</p>
                            </div>
                            {{-- <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                <div class="relative flex items-center gap-x-4">
                                    <img src="{{$course['image']}}">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                Michael Foster
                                            </a>
                                        </p>
                                        <p class="text-gray-600">Co-Founder / CTO</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </article>
                @endforeach
                
                {{-- <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                        <img src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3270&amp;q=80" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    </div>
                    <div>
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-10" class="text-gray-500">Mar 10, 2020</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Sales</a>
                        </div>
                        <div class="group relative max-w-xl">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    How to use search engine optimization to drive sales
                                </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6 text-gray-600">Optio sit exercitation et ex ullamco aliquid explicabo. Dolore do ut officia anim non ad eu. Magna laboris incididunt commodo elit ipsum.</p>
                        </div>
                        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                            <div class="relative flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Lindsay Walton
                                        </a>
                                    </p>
                                    <p class="text-gray-600">Front-end Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                    <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">
                        <img src="https://images.unsplash.com/photo-1492724441997-5dc865305da7?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=3270&amp;q=80" alt="" class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                        <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                    </div>
                    <div>
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-02-12" class="text-gray-500">Feb 12, 2020</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Business</a>
                        </div>
                        <div class="group relative max-w-xl">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Improve your customer experience
                                </a>
                            </h3>
                        <p class="mt-5 text-sm leading-6 text-gray-600">Dolore commodo in nulla do nulla esse consectetur. Adipisicing voluptate velit sint adipisicing ex duis elit deserunt sint ipsum. Culpa in exercitation magna adipisicing id reprehenderit consectetur culpa eu cillum.</p>
                        </div>
                        <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                            <div class="relative flex items-center gap-x-4">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Tom Cook
                                        </a>
                                    </p>
                                    <p class="text-gray-600">Director of Product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article> --}}
            </div>
        </div>
    </div>
</div>
@endsection