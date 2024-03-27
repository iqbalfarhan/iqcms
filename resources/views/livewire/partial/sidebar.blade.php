<ul class="menu p-4 w-80 min-h-full bg-base-100 text-base-content space-y-4 border-2 border-base-300">
    <li>
        <h3 class="menu-title">Dashboard</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-home class="size-5" />
                    <span>Dashboard</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Data artickel</h3>
        <ul>
            <li>
                <a href="{{ route('post.index') }}" @class(['active' => Route::is(['post.index', 'post.show'])]) wire:navigate>
                    <x-tabler-file class="size-5" />
                    <span>Post list</span>
                </a>
            </li>
            <li>
                <a href="{{ route('post.create') }}" @class(['active' => Route::is('post.create')]) wire:navigate>
                    <x-tabler-circle-plus class="size-5" />
                    <span>Create Post</span>
                </a>
            </li>
            <li>
                <a href="{{ route('post.index') }}">
                    <x-tabler-tags class="size-5" />
                    <span>Kategori</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Pengaturan akun</h3>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-users class="size-5" />
                    <span>pengaturan User</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user-circle class="size-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="size-5" />
                    <span>Logout</span>
                </button>
            </li>
        </ul>
    </li>
</ul>
