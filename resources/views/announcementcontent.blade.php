<div class="row w-100 h-100 align-content-center">
    @forelse ($announcements as $announcement)

    @include('announcement._announcement')

    @empty

    <div class="col-12 mt-5 text-center py-0">
        <h2>{{ __('ui.sinanuncios') }}</h2>
    </div>
    @endforelse
</div>
