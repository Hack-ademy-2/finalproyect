<div class="row align-content-center">
    @forelse ($announcements as $announcement)

    @include('announcement._announcement')

    @empty

    <div class="col-12 mt-5 text-center py-0">
        <h2 class="letrado">{{ __('ui.sinanuncios') }}</h2>
    </div>
    @endforelse
</div>
