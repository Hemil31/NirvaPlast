<div class="sidebar-title-block">
    <h4 class="sidebar-heading">Filter by Category</h4>
</div>
<div class="filter-options">
    <label class="filter-option">
        <input type="radio" name="categoryFilter" value="all" class="filter-radio" {{ !request('category') ? 'checked' : '' }}>
        <span class="filter-label">
            <span class="filter-name">All Categories</span>
            <span class="filter-count">{{ $products->count() }}</span>
        </span>
    </label>
    @foreach ($categories as $cat)
        <label class="filter-option">
            <input type="radio" name="categoryFilter" value="{{ $cat->id }}" class="filter-radio" {{ request('category') == $cat->id ? 'checked' : '' }}>
            <span class="filter-label">
                <span class="filter-name">{{ $cat->name }}</span>
                <span class="filter-count">{{ $cat->products->count() }}</span>
            </span>
        </label>
    @endforeach
</div>
