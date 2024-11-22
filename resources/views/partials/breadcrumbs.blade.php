@unless ($breadcrumbs->isEmpty())
    
    <div class="bg-white p-8">
        <div class="mx-auto max-w-7xl">
            <div>
                <div>
                    <nav class="sm:hidden" aria-label="Back">
                        <a href="{{ url('/')}}" class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                            <svg class="-ml-1 mr-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd"></path>
                            </svg>
                            Назад
                        </a>
                    </nav>
                    <nav class="hidden sm:flex" aria-label="Breadcrumb">
                        <ol role="list" class="flex item-center space-x-4 breadcrumb">
                            @foreach ($breadcrumbs as $breadcrumb)
                    
                                @if (!is_null($breadcrumb->url) && !$loop->last)
                                    {{-- <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li> --}}
                                   
                                    <div class="flex item-center">
                                        @if (!$loop->first)
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                                            </svg>
                                        @endif
                                        <a href="{{ $breadcrumb->url }}" class="text-sm font-medium text-gray-500 hover:text-gray-700">{{ $breadcrumb->title }}</a>
                                    </div>
                                @else
                                    {{-- <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li> --}}
                                    <div class="flex item-center">
                                        @if (!$loop->first)
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                                            </svg>
                                        @endif
                                        <a class="text-sm font-medium text-gray-500 hover:text-gray-700">{{ $breadcrumb->title }}</a>
                                    </div>
                                @endif
                    
                            @endforeach
                        </ol>
                        {{-- <ol role="list" class="flex items-center space-x-4">
                            @foreach ($breadcrumbs as $breadcrumb)
                    
                                @if (!is_null($breadcrumb->url) && !$loop->last)
                                    <li>
                                        <div class="flex item-center">
                                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                                            </svg>
                                            <a href="{{ $breadcrumb->url }}" class="text-sm font-medium text-gray-500 hover:text-gray-700">{{ $breadcrumb->title }}</a>
                                        </div>
                                    </li>
                                @else
                                    <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
                                    <li>
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="flex">
                                            <a class="text-sm font-medium text-gray-500 hover:text-gray-700">{{ $breadcrumb->title }}</a>
                                        </div>
                                    </li>
                                @endif
                    
                            @endforeach
                            <li>
                                <div class="flex">
                                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-gray-700">Jobs</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Engineering</a>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
                                    </svg>
                                    <a href="#" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Back End Developer</a>
                                </div>
                            </li>
                        </ol> --}}
                    </nav>
                </div>
                <div class="mt-2 md:flex md:items-center md:justify-between">
                    <div class="min-w-0 flex-1">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Back End Developer</h2>
                    </div>
                    {{-- <div class="mt-4 flex flex-shrink-0 md:ml-4 md:mt-0">
                        <button type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Edit</button>
                        <button type="button" class="ml-3 inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Publish</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endunless
