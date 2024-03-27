<div class="page-wrapper">
    <div class="flex justify-between">
        <input type="search" @class([
            'input input-bordered',
            'input-error' => $errors->first('cari'),
        ]) placeholder="Pencarian" />
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Title</th>
                <th class="text-center">Published</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>
                            <div class="flex gap-3 items-center">
                                <div class="avatar placeholder">
                                    <div class="w-16 bg-base-300 rounded">
                                        <x-tabler-user class="size-4" />
                                    </div>
                                </div>
                                <div class="flex gap-1 flex-col">
                                    <div class="font-semibold line-clamp-1">{{ $data->title }}</div>
                                    <div class="text-xs line-clamp-1">{{ implode(', ', $data->tags) }}</div>
                                    <div class="text-xs line-clamp-1">{{ $data->label }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="flex gap-1 items-center justify-center">
                                <input type="checkbox" class="toggle toggle-sm toggle-primary"
                                    @checked($data->show) />
                            </div>
                        </td>
                        <td>
                            <div class="flex gap-1 items-center justify-center">
                                <a href="{{ route('post.show', $data) }}" class="btn btn-xs btn-info btn-square"
                                    wire:navigate>
                                    <x-tabler-folder class="size-4" />
                                </a>
                                <button class="btn btn-xs btn-success btn-square">
                                    <x-tabler-edit class="size-4" />
                                </button>
                                <button class="btn btn-xs btn-error btn-square">
                                    <x-tabler-trash class="size-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
