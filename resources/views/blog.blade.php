<x-layout>
    <header>
        <div class="w-full h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('images/event/seminar1.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 pt-32 lg:pt-48 xl:pt-56">
                <div class="text-center lg:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 drop-shadow-lg">
                        Plan Smart, Celebrate Big!
                    </h2>
                    <h1 class="text-5xl md:text-7xl font-bold text-white mb-8 drop-shadow-xl">
                        About Us
                    </h1>

                    <nav class="text-white/90 text-xl font-semibold">
                        <ol class="flex items-center justify-center lg:justify-start space-x-3">
                            <li>PLANPRO</li>
                            <li class="text-pink-300">></li>
                            <li class="text-pink-300">BLOGS</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- <section>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($blogs as $blog)
            <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                @if($blog->image)
                    <img 
                        src="{{ asset('storage/blogs/' . $blog->image) }}"
    alt="{{ $blog->title }}"
    class="w-full h-48 object-cover"
    >
    @endif

    <div class="p-6">
        <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $blog->title }}</h2>

        <div class="text-gray-600 mb-4 line-clamp-3">
            {!! Str::limit(strip_tags($blog->content), 150) !!}
        </div>

        <div class="flex items-center justify-between">
            <span class="text-sm text-gray-500">
                By {{ $blog->user->name }}
            </span>
            <a
                href="{{ route('blog.show', $blog) }}"
                class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors duration-300">
                Read More
            </a>
        </div>
    </div>
    </div>
    @endforeach
    </div>

    <div class="mt-8">
        {{ $blogs->links() }}
    </div>
    </section>
    --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-6">
        @foreach($blogs as $blog)
        <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
            @if($blog->image)
            <img
                src="{{ Storage::url(  $blog->image) }}"
                alt="{{ $blog->title }}"
                class="w-full h-48 object-cover">
            @endif

            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $blog->title }}</h2>

                <div class="text-gray-600 mb-4 line-clamp-3">
                    {!! Str::limit(strip_tags($blog->content), 150) !!}
                </div>

                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">
                        By {{ $blog->user->name }}
                    </span>
                    <a
                        href="{{ route('blog.show', $blog) }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors duration-300">
                        Read More
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8 px-6">
        {{ $blogs->links() }}
    </div>

    @include('components.sponsor');
    @include('components.testimonial');
</x-layout>