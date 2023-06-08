<div>
    <section class="flex flex-col items-center space-y-4 py-12">
        <h1 class="text-3xl font-bold">
            {{ $welcome }}
        </h1>

        @if (session()->has('message'))
            <h3 style="background-color: rgb(28, 222, 122); color: white; text-align: center; padding: 10px;">
                {{ session('message') }}
            </h3>
        @endif

        <livewire:task />
    </section>
</div>
