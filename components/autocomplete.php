<div class="position-relative">
    <form action="<?php echo esc_url(site_url('/')) ?>" method="get">
        <div class="input-group">
            <input
                autocomplete="off"
                name="s"
                type="search"
                class="form-control border-0 border-bottom bg-transparent rounded-0 text-white"
                placeholder="Search"
                aria-label="Search"
                id="autocomplete-search">
        </div>
    </form>
    
    <ul id="autocomplete-results" class="z-20 position-absolute top-100 bg-white list-unstyled h-auto w-100 mt-2 rounded overflow-hidden"></ul>
</div>