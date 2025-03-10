<x-layout>
    <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden m-6">
        @if($blog->image)
        <img
            src="{{ Storage::url( $blog->image) }}"
            alt="{{ $blog->title }}"
            class="w-full h-48 object-cover">
        @endif

        <div class="p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                {{ $blog->title }}
            </h1>

            <div class="flex items-center mb-6">
                <div class="text-sm text-gray-600">
                    By {{ $blog->user->name }}
                </div>
                <span class="mx-2 text-gray-500">•</span>
                <div class="text-sm text-gray-600">
                    {{ $blog->created_at->format('F j, Y') }}
                </div>
            </div>

            <div class="prose max-w-none">
                {!! $blog->content !!}
            </div>
        </div>

        <div class="p-8 bg-gray-50 border-t">
            <a
                href="{{ route('blog.index') }}"
                class="inline-flex items-center text-blue-600 hover:text-blue-800">
                ← Back to Blog
            </a>
        </div>
    </article>
</x-layout>