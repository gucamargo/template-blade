<div class="flex flex-col">

    @if(!empty($label))
        <label for="{{ $name }}" class="text-sm font-bold text-gray-700"></label>
            {{ $label }}
        </label>
    @endif

    <div class="relative w-full flex items-center">
        
        @if (!empty($icon) && $iconPosition === 'left')
            <x-icon :name="$icon" class="absolute left-4"></x-icon>
        @endif

        <input
        type="{{ $type }}"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}" 

        @class([
                "w-full bg-gray-200 border border-solid border-gray-400 px-3 active:border-blue-500 disable:border-gray-500 disable:bg-gray-500 rounded",
                "py-3" => $size === 'large',
                "py-2" => $size === 'medium',
                "py-0.5" => $size === 'smal',
                "pl-12" => !empty($icon) && $iconPosition === 'left',
                "pr-12" => !empty($icon) && $iconPosition === 'right',
            ])
        >
        </input>

        @if (!empty($icon) && $iconPosition === 'right')
            <x-icon :name="$icon" class="absolute right-4"></x-icon>
        @endif
    </div>
</div>