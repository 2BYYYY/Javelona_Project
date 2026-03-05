<div class="row">
    @foreach ($skillTable as $category => $items)
        <div class="col-lg-2 col-12">
            <h4 class="text-start medium-text-lg medium-text">{{ ucfirst($category) }}</h4>
            @foreach ($items as $skill)
                <p class="text-lg-start text-center small-text-lg small-text">{{ $skill->skill }}</p>
            @endforeach
        </div>
    @endforeach
</div>
